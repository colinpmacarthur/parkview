<?php


/**
 * Base class that represents a query for the 'DIM_COMMENTS' table.
 *
 *
 *
 * @method DimCommentsQuery orderByCommentId($order = Criteria::ASC) Order by the comment_id column
 * @method DimCommentsQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method DimCommentsQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method DimCommentsQuery orderByLink($order = Criteria::ASC) Order by the link column
 * @method DimCommentsQuery orderBySpread($order = Criteria::ASC) Order by the spread column
 *
 * @method DimCommentsQuery groupByCommentId() Group by the comment_id column
 * @method DimCommentsQuery groupByComment() Group by the comment column
 * @method DimCommentsQuery groupByTitle() Group by the title column
 * @method DimCommentsQuery groupByLink() Group by the link column
 * @method DimCommentsQuery groupBySpread() Group by the spread column
 *
 * @method DimCommentsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DimCommentsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DimCommentsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DimCommentsQuery leftJoinFactSnsdata($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactSnsdata relation
 * @method DimCommentsQuery rightJoinFactSnsdata($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactSnsdata relation
 * @method DimCommentsQuery innerJoinFactSnsdata($relationAlias = null) Adds a INNER JOIN clause to the query using the FactSnsdata relation
 *
 * @method DimComments findOne(PropelPDO $con = null) Return the first DimComments matching the query
 * @method DimComments findOneOrCreate(PropelPDO $con = null) Return the first DimComments matching the query, or a new DimComments object populated from the query conditions when no match is found
 *
 * @method DimComments findOneByComment(string $comment) Return the first DimComments filtered by the comment column
 * @method DimComments findOneByTitle(string $title) Return the first DimComments filtered by the title column
 * @method DimComments findOneByLink(string $link) Return the first DimComments filtered by the link column
 * @method DimComments findOneBySpread(int $spread) Return the first DimComments filtered by the spread column
 *
 * @method array findByCommentId(int $comment_id) Return DimComments objects filtered by the comment_id column
 * @method array findByComment(string $comment) Return DimComments objects filtered by the comment column
 * @method array findByTitle(string $title) Return DimComments objects filtered by the title column
 * @method array findByLink(string $link) Return DimComments objects filtered by the link column
 * @method array findBySpread(int $spread) Return DimComments objects filtered by the spread column
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseDimCommentsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDimCommentsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'parkview';
        }
        if (null === $modelName) {
            $modelName = 'DimComments';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DimCommentsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DimCommentsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DimCommentsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DimCommentsQuery) {
            return $criteria;
        }
        $query = new DimCommentsQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   DimComments|DimComments[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DimCommentsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DimCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 DimComments A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByCommentId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 DimComments A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `comment_id`, `comment`, `title`, `link`, `spread` FROM `DIM_COMMENTS` WHERE `comment_id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new DimComments();
            $obj->hydrate($row);
            DimCommentsPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return DimComments|DimComments[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|DimComments[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DimCommentsPeer::COMMENT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DimCommentsPeer::COMMENT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the comment_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentId(1234); // WHERE comment_id = 1234
     * $query->filterByCommentId(array(12, 34)); // WHERE comment_id IN (12, 34)
     * $query->filterByCommentId(array('min' => 12)); // WHERE comment_id >= 12
     * $query->filterByCommentId(array('max' => 12)); // WHERE comment_id <= 12
     * </code>
     *
     * @param     mixed $commentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentId($commentId = null, $comparison = null)
    {
        if (is_array($commentId)) {
            $useMinMax = false;
            if (isset($commentId['min'])) {
                $this->addUsingAlias(DimCommentsPeer::COMMENT_ID, $commentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentId['max'])) {
                $this->addUsingAlias(DimCommentsPeer::COMMENT_ID, $commentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimCommentsPeer::COMMENT_ID, $commentId, $comparison);
    }

    /**
     * Filter the query on the comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimCommentsPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimCommentsPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the link column
     *
     * Example usage:
     * <code>
     * $query->filterByLink('fooValue');   // WHERE link = 'fooValue'
     * $query->filterByLink('%fooValue%'); // WHERE link LIKE '%fooValue%'
     * </code>
     *
     * @param     string $link The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function filterByLink($link = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($link)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $link)) {
                $link = str_replace('*', '%', $link);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimCommentsPeer::LINK, $link, $comparison);
    }

    /**
     * Filter the query on the spread column
     *
     * Example usage:
     * <code>
     * $query->filterBySpread(1234); // WHERE spread = 1234
     * $query->filterBySpread(array(12, 34)); // WHERE spread IN (12, 34)
     * $query->filterBySpread(array('min' => 12)); // WHERE spread >= 12
     * $query->filterBySpread(array('max' => 12)); // WHERE spread <= 12
     * </code>
     *
     * @param     mixed $spread The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function filterBySpread($spread = null, $comparison = null)
    {
        if (is_array($spread)) {
            $useMinMax = false;
            if (isset($spread['min'])) {
                $this->addUsingAlias(DimCommentsPeer::SPREAD, $spread['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spread['max'])) {
                $this->addUsingAlias(DimCommentsPeer::SPREAD, $spread['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimCommentsPeer::SPREAD, $spread, $comparison);
    }

    /**
     * Filter the query by a related FactSnsdata object
     *
     * @param   FactSnsdata|PropelObjectCollection $factSnsdata  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DimCommentsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactSnsdata($factSnsdata, $comparison = null)
    {
        if ($factSnsdata instanceof FactSnsdata) {
            return $this
                ->addUsingAlias(DimCommentsPeer::COMMENT_ID, $factSnsdata->getCommentId(), $comparison);
        } elseif ($factSnsdata instanceof PropelObjectCollection) {
            return $this
                ->useFactSnsdataQuery()
                ->filterByPrimaryKeys($factSnsdata->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFactSnsdata() only accepts arguments of type FactSnsdata or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FactSnsdata relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function joinFactSnsdata($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FactSnsdata');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'FactSnsdata');
        }

        return $this;
    }

    /**
     * Use the FactSnsdata relation FactSnsdata object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FactSnsdataQuery A secondary query class using the current class as primary query
     */
    public function useFactSnsdataQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinFactSnsdata($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FactSnsdata', 'FactSnsdataQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   DimComments $dimComments Object to remove from the list of results
     *
     * @return DimCommentsQuery The current query, for fluid interface
     */
    public function prune($dimComments = null)
    {
        if ($dimComments) {
            $this->addUsingAlias(DimCommentsPeer::COMMENT_ID, $dimComments->getCommentId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
