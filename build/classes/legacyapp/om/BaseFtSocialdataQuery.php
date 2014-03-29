<?php


/**
 * Base class that represents a query for the 'ft_socialdata' table.
 *
 *
 *
 * @method FtSocialdataQuery orderByTimeid($order = Criteria::ASC) Order by the timeid column
 * @method FtSocialdataQuery orderByLocationid($order = Criteria::ASC) Order by the locationid column
 * @method FtSocialdataQuery orderByUserid($order = Criteria::ASC) Order by the userid column
 * @method FtSocialdataQuery orderByRating($order = Criteria::ASC) Order by the rating column
 * @method FtSocialdataQuery orderByCreateddate($order = Criteria::ASC) Order by the createddate column
 * @method FtSocialdataQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method FtSocialdataQuery groupByTimeid() Group by the timeid column
 * @method FtSocialdataQuery groupByLocationid() Group by the locationid column
 * @method FtSocialdataQuery groupByUserid() Group by the userid column
 * @method FtSocialdataQuery groupByRating() Group by the rating column
 * @method FtSocialdataQuery groupByCreateddate() Group by the createddate column
 * @method FtSocialdataQuery groupById() Group by the id column
 *
 * @method FtSocialdataQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FtSocialdataQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FtSocialdataQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FtSocialdataQuery leftJoinDimLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the DimLocation relation
 * @method FtSocialdataQuery rightJoinDimLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DimLocation relation
 * @method FtSocialdataQuery innerJoinDimLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the DimLocation relation
 *
 * @method FtSocialdataQuery leftJoinDimTime($relationAlias = null) Adds a LEFT JOIN clause to the query using the DimTime relation
 * @method FtSocialdataQuery rightJoinDimTime($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DimTime relation
 * @method FtSocialdataQuery innerJoinDimTime($relationAlias = null) Adds a INNER JOIN clause to the query using the DimTime relation
 *
 * @method FtSocialdataQuery leftJoinDimUserinfo($relationAlias = null) Adds a LEFT JOIN clause to the query using the DimUserinfo relation
 * @method FtSocialdataQuery rightJoinDimUserinfo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DimUserinfo relation
 * @method FtSocialdataQuery innerJoinDimUserinfo($relationAlias = null) Adds a INNER JOIN clause to the query using the DimUserinfo relation
 *
 * @method FtSocialdata findOne(PropelPDO $con = null) Return the first FtSocialdata matching the query
 * @method FtSocialdata findOneOrCreate(PropelPDO $con = null) Return the first FtSocialdata matching the query, or a new FtSocialdata object populated from the query conditions when no match is found
 *
 * @method FtSocialdata findOneByTimeid(int $timeid) Return the first FtSocialdata filtered by the timeid column
 * @method FtSocialdata findOneByLocationid(int $locationid) Return the first FtSocialdata filtered by the locationid column
 * @method FtSocialdata findOneByUserid(int $userid) Return the first FtSocialdata filtered by the userid column
 * @method FtSocialdata findOneByRating(int $rating) Return the first FtSocialdata filtered by the rating column
 * @method FtSocialdata findOneByCreateddate(string $createddate) Return the first FtSocialdata filtered by the createddate column
 *
 * @method array findByTimeid(int $timeid) Return FtSocialdata objects filtered by the timeid column
 * @method array findByLocationid(int $locationid) Return FtSocialdata objects filtered by the locationid column
 * @method array findByUserid(int $userid) Return FtSocialdata objects filtered by the userid column
 * @method array findByRating(int $rating) Return FtSocialdata objects filtered by the rating column
 * @method array findByCreateddate(string $createddate) Return FtSocialdata objects filtered by the createddate column
 * @method array findById(int $id) Return FtSocialdata objects filtered by the id column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseFtSocialdataQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFtSocialdataQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'legacyapp';
        }
        if (null === $modelName) {
            $modelName = 'FtSocialdata';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FtSocialdataQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FtSocialdataQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FtSocialdataQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FtSocialdataQuery) {
            return $criteria;
        }
        $query = new FtSocialdataQuery(null, null, $modelAlias);

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
     * @return   FtSocialdata|FtSocialdata[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FtSocialdataPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FtSocialdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FtSocialdata A model object, or null if the key is not found
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
     * @return                 FtSocialdata A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `timeid`, `locationid`, `userid`, `rating`, `createddate`, `id` FROM `ft_socialdata` WHERE `id` = :p0';
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
            $obj = new FtSocialdata();
            $obj->hydrate($row);
            FtSocialdataPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FtSocialdata|FtSocialdata[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FtSocialdata[]|mixed the list of results, formatted by the current formatter
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
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FtSocialdataPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FtSocialdataPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the timeid column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeid(1234); // WHERE timeid = 1234
     * $query->filterByTimeid(array(12, 34)); // WHERE timeid IN (12, 34)
     * $query->filterByTimeid(array('min' => 12)); // WHERE timeid >= 12
     * $query->filterByTimeid(array('max' => 12)); // WHERE timeid <= 12
     * </code>
     *
     * @see       filterByDimTime()
     *
     * @param     mixed $timeid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function filterByTimeid($timeid = null, $comparison = null)
    {
        if (is_array($timeid)) {
            $useMinMax = false;
            if (isset($timeid['min'])) {
                $this->addUsingAlias(FtSocialdataPeer::TIMEID, $timeid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeid['max'])) {
                $this->addUsingAlias(FtSocialdataPeer::TIMEID, $timeid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtSocialdataPeer::TIMEID, $timeid, $comparison);
    }

    /**
     * Filter the query on the locationid column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationid(1234); // WHERE locationid = 1234
     * $query->filterByLocationid(array(12, 34)); // WHERE locationid IN (12, 34)
     * $query->filterByLocationid(array('min' => 12)); // WHERE locationid >= 12
     * $query->filterByLocationid(array('max' => 12)); // WHERE locationid <= 12
     * </code>
     *
     * @see       filterByDimLocation()
     *
     * @param     mixed $locationid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function filterByLocationid($locationid = null, $comparison = null)
    {
        if (is_array($locationid)) {
            $useMinMax = false;
            if (isset($locationid['min'])) {
                $this->addUsingAlias(FtSocialdataPeer::LOCATIONID, $locationid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationid['max'])) {
                $this->addUsingAlias(FtSocialdataPeer::LOCATIONID, $locationid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtSocialdataPeer::LOCATIONID, $locationid, $comparison);
    }

    /**
     * Filter the query on the userid column
     *
     * Example usage:
     * <code>
     * $query->filterByUserid(1234); // WHERE userid = 1234
     * $query->filterByUserid(array(12, 34)); // WHERE userid IN (12, 34)
     * $query->filterByUserid(array('min' => 12)); // WHERE userid >= 12
     * $query->filterByUserid(array('max' => 12)); // WHERE userid <= 12
     * </code>
     *
     * @see       filterByDimUserinfo()
     *
     * @param     mixed $userid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (is_array($userid)) {
            $useMinMax = false;
            if (isset($userid['min'])) {
                $this->addUsingAlias(FtSocialdataPeer::USERID, $userid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userid['max'])) {
                $this->addUsingAlias(FtSocialdataPeer::USERID, $userid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtSocialdataPeer::USERID, $userid, $comparison);
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
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function filterByRating($rating = null, $comparison = null)
    {
        if (is_array($rating)) {
            $useMinMax = false;
            if (isset($rating['min'])) {
                $this->addUsingAlias(FtSocialdataPeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rating['max'])) {
                $this->addUsingAlias(FtSocialdataPeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtSocialdataPeer::RATING, $rating, $comparison);
    }

    /**
     * Filter the query on the createddate column
     *
     * Example usage:
     * <code>
     * $query->filterByCreateddate('2011-03-14'); // WHERE createddate = '2011-03-14'
     * $query->filterByCreateddate('now'); // WHERE createddate = '2011-03-14'
     * $query->filterByCreateddate(array('max' => 'yesterday')); // WHERE createddate < '2011-03-13'
     * </code>
     *
     * @param     mixed $createddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function filterByCreateddate($createddate = null, $comparison = null)
    {
        if (is_array($createddate)) {
            $useMinMax = false;
            if (isset($createddate['min'])) {
                $this->addUsingAlias(FtSocialdataPeer::CREATEDDATE, $createddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createddate['max'])) {
                $this->addUsingAlias(FtSocialdataPeer::CREATEDDATE, $createddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtSocialdataPeer::CREATEDDATE, $createddate, $comparison);
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
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(FtSocialdataPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(FtSocialdataPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtSocialdataPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query by a related DimLocation object
     *
     * @param   DimLocation|PropelObjectCollection $dimLocation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FtSocialdataQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDimLocation($dimLocation, $comparison = null)
    {
        if ($dimLocation instanceof DimLocation) {
            return $this
                ->addUsingAlias(FtSocialdataPeer::LOCATIONID, $dimLocation->getLocationid(), $comparison);
        } elseif ($dimLocation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FtSocialdataPeer::LOCATIONID, $dimLocation->toKeyValue('PrimaryKey', 'Locationid'), $comparison);
        } else {
            throw new PropelException('filterByDimLocation() only accepts arguments of type DimLocation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DimLocation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function joinDimLocation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DimLocation');

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
            $this->addJoinObject($join, 'DimLocation');
        }

        return $this;
    }

    /**
     * Use the DimLocation relation DimLocation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DimLocationQuery A secondary query class using the current class as primary query
     */
    public function useDimLocationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDimLocation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DimLocation', 'DimLocationQuery');
    }

    /**
     * Filter the query by a related DimTime object
     *
     * @param   DimTime|PropelObjectCollection $dimTime The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FtSocialdataQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDimTime($dimTime, $comparison = null)
    {
        if ($dimTime instanceof DimTime) {
            return $this
                ->addUsingAlias(FtSocialdataPeer::TIMEID, $dimTime->getTimeid(), $comparison);
        } elseif ($dimTime instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FtSocialdataPeer::TIMEID, $dimTime->toKeyValue('PrimaryKey', 'Timeid'), $comparison);
        } else {
            throw new PropelException('filterByDimTime() only accepts arguments of type DimTime or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DimTime relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function joinDimTime($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DimTime');

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
            $this->addJoinObject($join, 'DimTime');
        }

        return $this;
    }

    /**
     * Use the DimTime relation DimTime object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DimTimeQuery A secondary query class using the current class as primary query
     */
    public function useDimTimeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDimTime($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DimTime', 'DimTimeQuery');
    }

    /**
     * Filter the query by a related DimUserinfo object
     *
     * @param   DimUserinfo|PropelObjectCollection $dimUserinfo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 FtSocialdataQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDimUserinfo($dimUserinfo, $comparison = null)
    {
        if ($dimUserinfo instanceof DimUserinfo) {
            return $this
                ->addUsingAlias(FtSocialdataPeer::USERID, $dimUserinfo->getUserid(), $comparison);
        } elseif ($dimUserinfo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(FtSocialdataPeer::USERID, $dimUserinfo->toKeyValue('PrimaryKey', 'Userid'), $comparison);
        } else {
            throw new PropelException('filterByDimUserinfo() only accepts arguments of type DimUserinfo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DimUserinfo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function joinDimUserinfo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DimUserinfo');

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
            $this->addJoinObject($join, 'DimUserinfo');
        }

        return $this;
    }

    /**
     * Use the DimUserinfo relation DimUserinfo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DimUserinfoQuery A secondary query class using the current class as primary query
     */
    public function useDimUserinfoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDimUserinfo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DimUserinfo', 'DimUserinfoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   FtSocialdata $ftSocialdata Object to remove from the list of results
     *
     * @return FtSocialdataQuery The current query, for fluid interface
     */
    public function prune($ftSocialdata = null)
    {
        if ($ftSocialdata) {
            $this->addUsingAlias(FtSocialdataPeer::ID, $ftSocialdata->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
