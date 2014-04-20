<?php


/**
 * Base class that represents a query for the 'FACT_SNSDATA' table.
 *
 *
 *
 * @method FactSnsdataQuery orderById($order = Criteria::ASC) Order by the id column
 * @method FactSnsdataQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method FactSnsdataQuery orderByCommentId($order = Criteria::ASC) Order by the comment_id column
 * @method FactSnsdataQuery orderByDateId($order = Criteria::ASC) Order by the date_id column
 * @method FactSnsdataQuery orderBySiteId($order = Criteria::ASC) Order by the site_id column
 * @method FactSnsdataQuery orderBySentiment($order = Criteria::ASC) Order by the sentiment column
 * @method FactSnsdataQuery orderByRating($order = Criteria::ASC) Order by the rating column
 *
 * @method FactSnsdataQuery groupById() Group by the id column
 * @method FactSnsdataQuery groupByUserId() Group by the user_id column
 * @method FactSnsdataQuery groupByCommentId() Group by the comment_id column
 * @method FactSnsdataQuery groupByDateId() Group by the date_id column
 * @method FactSnsdataQuery groupBySiteId() Group by the site_id column
 * @method FactSnsdataQuery groupBySentiment() Group by the sentiment column
 * @method FactSnsdataQuery groupByRating() Group by the rating column
 *
 * @method FactSnsdataQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FactSnsdataQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FactSnsdataQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FactSnsdataQuery leftJoinDimComments($relationAlias = null) Adds a LEFT JOIN clause to the query using the DimComments relation
 * @method FactSnsdataQuery rightJoinDimComments($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DimComments relation
 * @method FactSnsdataQuery innerJoinDimComments($relationAlias = null) Adds a INNER JOIN clause to the query using the DimComments relation
 *
 * @method FactSnsdataQuery leftJoinDimPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the DimPeriod relation
 * @method FactSnsdataQuery rightJoinDimPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DimPeriod relation
 * @method FactSnsdataQuery innerJoinDimPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the DimPeriod relation
 *
 * @method FactSnsdataQuery leftJoinDimUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the DimUser relation
 * @method FactSnsdataQuery rightJoinDimUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DimUser relation
 * @method FactSnsdataQuery innerJoinDimUser($relationAlias = null) Adds a INNER JOIN clause to the query using the DimUser relation
 *
 * @method FactSnsdataQuery leftJoinTrackSites($relationAlias = null) Adds a LEFT JOIN clause to the query using the TrackSites relation
 * @method FactSnsdataQuery rightJoinTrackSites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TrackSites relation
 * @method FactSnsdataQuery innerJoinTrackSites($relationAlias = null) Adds a INNER JOIN clause to the query using the TrackSites relation
 *
 * @method FactSnsdata findOne(PropelPDO $con = null) Return the first FactSnsdata matching the query
 * @method FactSnsdata findOneOrCreate(PropelPDO $con = null) Return the first FactSnsdata matching the query, or a new FactSnsdata object populated from the query conditions when no match is found
 *
 * @method FactSnsdata findOneByUserId(int $user_id) Return the first FactSnsdata filtered by the user_id column
 * @method FactSnsdata findOneByCommentId(int $comment_id) Return the first FactSnsdata filtered by the comment_id column
 * @method FactSnsdata findOneByDateId(int $date_id) Return the first FactSnsdata filtered by the date_id column
 * @method FactSnsdata findOneBySiteId(int $site_id) Return the first FactSnsdata filtered by the site_id column
 * @method FactSnsdata findOneBySentiment(double $sentiment) Return the first FactSnsdata filtered by the sentiment column
 * @method FactSnsdata findOneByRating(int $rating) Return the first FactSnsdata filtered by the rating column
 *
 * @method array findById(int $id) Return FactSnsdata objects filtered by the id column
 * @method array findByUserId(int $user_id) Return FactSnsdata objects filtered by the user_id column
 * @method array findByCommentId(int $comment_id) Return FactSnsdata objects filtered by the comment_id column
 * @method array findByDateId(int $date_id) Return FactSnsdata objects filtered by the date_id column
 * @method array findBySiteId(int $site_id) Return FactSnsdata objects filtered by the site_id column
 * @method array findBySentiment(double $sentiment) Return FactSnsdata objects filtered by the sentiment column
 * @method array findByRating(int $rating) Return FactSnsdata objects filtered by the rating column
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseFactSnsdataQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFactSnsdataQuery object.
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
            $modelName = 'FactSnsdata';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FactSnsdataQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FactSnsdataQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FactSnsdataQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FactSnsdataQuery) {
            return $criteria;
        }
        $query = new FactSnsdataQuery(null, null, $modelAlias);

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
     * @return   FactSnsdata|FactSnsdata[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FactSnsdataPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FactSnsdata A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 FactSnsdata A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `user_id`, `comment_id`, `date_id`, `site_id`, `sentiment`, `rating` FROM `FACT_SNSDATA` WHERE `id` = :p0';
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
            $obj = new FactSnsdata();
            $obj->hydrate($row);
            FactSnsdataPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FactSnsdata|FactSnsdata[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FactSnsdata[]|mixed the list of results, formatted by the current formatter
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
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FactSnsdataPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FactSnsdataPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(FactSnsdataPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(FactSnsdataPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactSnsdataPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @see       filterByDimUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(FactSnsdataPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(FactSnsdataPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactSnsdataPeer::USER_ID, $userId, $comparison);
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
     * @see       filterByDimComments()
     *
     * @param     mixed $commentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterByCommentId($commentId = null, $comparison = null)
    {
        if (is_array($commentId)) {
            $useMinMax = false;
            if (isset($commentId['min'])) {
                $this->addUsingAlias(FactSnsdataPeer::COMMENT_ID, $commentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentId['max'])) {
                $this->addUsingAlias(FactSnsdataPeer::COMMENT_ID, $commentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactSnsdataPeer::COMMENT_ID, $commentId, $comparison);
    }

    /**
     * Filter the query on the date_id column
     *
     * Example usage:
     * <code>
     * $query->filterByDateId(1234); // WHERE date_id = 1234
     * $query->filterByDateId(array(12, 34)); // WHERE date_id IN (12, 34)
     * $query->filterByDateId(array('min' => 12)); // WHERE date_id >= 12
     * $query->filterByDateId(array('max' => 12)); // WHERE date_id <= 12
     * </code>
     *
     * @see       filterByDimPeriod()
     *
     * @param     mixed $dateId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterByDateId($dateId = null, $comparison = null)
    {
        if (is_array($dateId)) {
            $useMinMax = false;
            if (isset($dateId['min'])) {
                $this->addUsingAlias(FactSnsdataPeer::DATE_ID, $dateId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateId['max'])) {
                $this->addUsingAlias(FactSnsdataPeer::DATE_ID, $dateId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactSnsdataPeer::DATE_ID, $dateId, $comparison);
    }

    /**
     * Filter the query on the site_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySiteId(1234); // WHERE site_id = 1234
     * $query->filterBySiteId(array(12, 34)); // WHERE site_id IN (12, 34)
     * $query->filterBySiteId(array('min' => 12)); // WHERE site_id >= 12
     * $query->filterBySiteId(array('max' => 12)); // WHERE site_id <= 12
     * </code>
     *
     * @see       filterByTrackSites()
     *
     * @param     mixed $siteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterBySiteId($siteId = null, $comparison = null)
    {
        if (is_array($siteId)) {
            $useMinMax = false;
            if (isset($siteId['min'])) {
                $this->addUsingAlias(FactSnsdataPeer::SITE_ID, $siteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($siteId['max'])) {
                $this->addUsingAlias(FactSnsdataPeer::SITE_ID, $siteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactSnsdataPeer::SITE_ID, $siteId, $comparison);
    }

    /**
     * Filter the query on the sentiment column
     *
     * Example usage:
     * <code>
     * $query->filterBySentiment(1234); // WHERE sentiment = 1234
     * $query->filterBySentiment(array(12, 34)); // WHERE sentiment IN (12, 34)
     * $query->filterBySentiment(array('min' => 12)); // WHERE sentiment >= 12
     * $query->filterBySentiment(array('max' => 12)); // WHERE sentiment <= 12
     * </code>
     *
     * @param     mixed $sentiment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterBySentiment($sentiment = null, $comparison = null)
    {
        if (is_array($sentiment)) {
            $useMinMax = false;
            if (isset($sentiment['min'])) {
                $this->addUsingAlias(FactSnsdataPeer::SENTIMENT, $sentiment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sentiment['max'])) {
                $this->addUsingAlias(FactSnsdataPeer::SENTIMENT, $sentiment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactSnsdataPeer::SENTIMENT, $sentiment, $comparison);
    }

    /**
     * Filter the query on the rating column
     *
     * Example usage:
     * <code>
     * $query->filterByRating(1234); // WHERE rating = 1234
     * $query->filterByRating(array(12, 34)); // WHERE rating IN (12, 34)
     * $query->filterByRating(array('min' => 12)); // WHERE rating >= 12
     * $query->filterByRating(array('max' => 12)); // WHERE rating <= 12
     * </code>
     *
     * @param     mixed $rating The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function filterByRating($rating = null, $comparison = null)
    {
        if (is_array($rating)) {
            $useMinMax = false;
            if (isset($rating['min'])) {
                $this->addUsingAlias(FactSnsdataPeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rating['max'])) {
                $this->addUsingAlias(FactSnsdataPeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FactSnsdataPeer::RATING, $rating, $comparison);
    }

    /**
     * Filter the query by a related DimComments object
     *
     * @param   DimComments|PropelObjectCollection $dimComments The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactSnsdataQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDimComments($dimComments, $comparison = null)
    {
        if ($dimComments instanceof DimComments) {
            return $this
                ->addUsingAlias(FactSnsdataPeer::COMMENT_ID, $dimComments->getCommentId(), $comparison);
        } elseif ($dimComments instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactSnsdataPeer::COMMENT_ID, $dimComments->toKeyValue('PrimaryKey', 'CommentId'), $comparison);
        } else {
            throw new PropelException('filterByDimComments() only accepts arguments of type DimComments or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DimComments relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function joinDimComments($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DimComments');

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
            $this->addJoinObject($join, 'DimComments');
        }

        return $this;
    }

    /**
     * Use the DimComments relation DimComments object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DimCommentsQuery A secondary query class using the current class as primary query
     */
    public function useDimCommentsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDimComments($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DimComments', 'DimCommentsQuery');
    }

    /**
     * Filter the query by a related DimPeriod object
     *
     * @param   DimPeriod|PropelObjectCollection $dimPeriod The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactSnsdataQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDimPeriod($dimPeriod, $comparison = null)
    {
        if ($dimPeriod instanceof DimPeriod) {
            return $this
                ->addUsingAlias(FactSnsdataPeer::DATE_ID, $dimPeriod->getDateId(), $comparison);
        } elseif ($dimPeriod instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactSnsdataPeer::DATE_ID, $dimPeriod->toKeyValue('PrimaryKey', 'DateId'), $comparison);
        } else {
            throw new PropelException('filterByDimPeriod() only accepts arguments of type DimPeriod or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DimPeriod relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function joinDimPeriod($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DimPeriod');

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
            $this->addJoinObject($join, 'DimPeriod');
        }

        return $this;
    }

    /**
     * Use the DimPeriod relation DimPeriod object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DimPeriodQuery A secondary query class using the current class as primary query
     */
    public function useDimPeriodQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDimPeriod($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DimPeriod', 'DimPeriodQuery');
    }

    /**
     * Filter the query by a related DimUser object
     *
     * @param   DimUser|PropelObjectCollection $dimUser The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactSnsdataQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDimUser($dimUser, $comparison = null)
    {
        if ($dimUser instanceof DimUser) {
            return $this
                ->addUsingAlias(FactSnsdataPeer::USER_ID, $dimUser->getRowId(), $comparison);
        } elseif ($dimUser instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactSnsdataPeer::USER_ID, $dimUser->toKeyValue('PrimaryKey', 'RowId'), $comparison);
        } else {
            throw new PropelException('filterByDimUser() only accepts arguments of type DimUser or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DimUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function joinDimUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DimUser');

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
            $this->addJoinObject($join, 'DimUser');
        }

        return $this;
    }

    /**
     * Use the DimUser relation DimUser object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DimUserQuery A secondary query class using the current class as primary query
     */
    public function useDimUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDimUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DimUser', 'DimUserQuery');
    }

    /**
     * Filter the query by a related TrackSites object
     *
     * @param   TrackSites|PropelObjectCollection $trackSites The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FactSnsdataQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTrackSites($trackSites, $comparison = null)
    {
        if ($trackSites instanceof TrackSites) {
            return $this
                ->addUsingAlias(FactSnsdataPeer::SITE_ID, $trackSites->getSiteId(), $comparison);
        } elseif ($trackSites instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FactSnsdataPeer::SITE_ID, $trackSites->toKeyValue('PrimaryKey', 'SiteId'), $comparison);
        } else {
            throw new PropelException('filterByTrackSites() only accepts arguments of type TrackSites or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TrackSites relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function joinTrackSites($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TrackSites');

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
            $this->addJoinObject($join, 'TrackSites');
        }

        return $this;
    }

    /**
     * Use the TrackSites relation TrackSites object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TrackSitesQuery A secondary query class using the current class as primary query
     */
    public function useTrackSitesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTrackSites($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TrackSites', 'TrackSitesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   FactSnsdata $factSnsdata Object to remove from the list of results
     *
     * @return FactSnsdataQuery The current query, for fluid interface
     */
    public function prune($factSnsdata = null)
    {
        if ($factSnsdata) {
            $this->addUsingAlias(FactSnsdataPeer::ID, $factSnsdata->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
