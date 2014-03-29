<?php


/**
 * Base class that represents a query for the 'dim_time' table.
 *
 *
 *
 * @method DimTimeQuery orderByDay($order = Criteria::ASC) Order by the day column
 * @method DimTimeQuery orderByMonth($order = Criteria::ASC) Order by the month column
 * @method DimTimeQuery orderByYear($order = Criteria::ASC) Order by the year column
 * @method DimTimeQuery orderByRecid($order = Criteria::ASC) Order by the recid column
 * @method DimTimeQuery orderByTimeid($order = Criteria::ASC) Order by the timeid column
 *
 * @method DimTimeQuery groupByDay() Group by the day column
 * @method DimTimeQuery groupByMonth() Group by the month column
 * @method DimTimeQuery groupByYear() Group by the year column
 * @method DimTimeQuery groupByRecid() Group by the recid column
 * @method DimTimeQuery groupByTimeid() Group by the timeid column
 *
 * @method DimTimeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DimTimeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DimTimeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DimTimeQuery leftJoinFtSocialdata($relationAlias = null) Adds a LEFT JOIN clause to the query using the FtSocialdata relation
 * @method DimTimeQuery rightJoinFtSocialdata($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FtSocialdata relation
 * @method DimTimeQuery innerJoinFtSocialdata($relationAlias = null) Adds a INNER JOIN clause to the query using the FtSocialdata relation
 *
 * @method DimTime findOne(PropelPDO $con = null) Return the first DimTime matching the query
 * @method DimTime findOneOrCreate(PropelPDO $con = null) Return the first DimTime matching the query, or a new DimTime object populated from the query conditions when no match is found
 *
 * @method DimTime findOneByDay(int $day) Return the first DimTime filtered by the day column
 * @method DimTime findOneByMonth(int $month) Return the first DimTime filtered by the month column
 * @method DimTime findOneByYear(int $year) Return the first DimTime filtered by the year column
 * @method DimTime findOneByRecid(string $recid) Return the first DimTime filtered by the recid column
 *
 * @method array findByDay(int $day) Return DimTime objects filtered by the day column
 * @method array findByMonth(int $month) Return DimTime objects filtered by the month column
 * @method array findByYear(int $year) Return DimTime objects filtered by the year column
 * @method array findByRecid(string $recid) Return DimTime objects filtered by the recid column
 * @method array findByTimeid(int $timeid) Return DimTime objects filtered by the timeid column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseDimTimeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDimTimeQuery object.
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
            $modelName = 'DimTime';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DimTimeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DimTimeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DimTimeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DimTimeQuery) {
            return $criteria;
        }
        $query = new DimTimeQuery(null, null, $modelAlias);

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
     * @return   DimTime|DimTime[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DimTimePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DimTimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 DimTime A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByTimeid($key, $con = null)
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
     * @return                 DimTime A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `day`, `month`, `year`, `recid`, `timeid` FROM `dim_time` WHERE `timeid` = :p0';
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
            $obj = new DimTime();
            $obj->hydrate($row);
            DimTimePeer::addInstanceToPool($obj, (string) $key);
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
     * @return DimTime|DimTime[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|DimTime[]|mixed the list of results, formatted by the current formatter
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
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DimTimePeer::TIMEID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DimTimePeer::TIMEID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the day column
     *
     * Example usage:
     * <code>
     * $query->filterByDay(1234); // WHERE day = 1234
     * $query->filterByDay(array(12, 34)); // WHERE day IN (12, 34)
     * $query->filterByDay(array('min' => 12)); // WHERE day >= 12
     * $query->filterByDay(array('max' => 12)); // WHERE day <= 12
     * </code>
     *
     * @param     mixed $day The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function filterByDay($day = null, $comparison = null)
    {
        if (is_array($day)) {
            $useMinMax = false;
            if (isset($day['min'])) {
                $this->addUsingAlias(DimTimePeer::DAY, $day['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($day['max'])) {
                $this->addUsingAlias(DimTimePeer::DAY, $day['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimTimePeer::DAY, $day, $comparison);
    }

    /**
     * Filter the query on the month column
     *
     * Example usage:
     * <code>
     * $query->filterByMonth(1234); // WHERE month = 1234
     * $query->filterByMonth(array(12, 34)); // WHERE month IN (12, 34)
     * $query->filterByMonth(array('min' => 12)); // WHERE month >= 12
     * $query->filterByMonth(array('max' => 12)); // WHERE month <= 12
     * </code>
     *
     * @param     mixed $month The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (is_array($month)) {
            $useMinMax = false;
            if (isset($month['min'])) {
                $this->addUsingAlias(DimTimePeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($month['max'])) {
                $this->addUsingAlias(DimTimePeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimTimePeer::MONTH, $month, $comparison);
    }

    /**
     * Filter the query on the year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(DimTimePeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(DimTimePeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimTimePeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the recid column
     *
     * Example usage:
     * <code>
     * $query->filterByRecid('fooValue');   // WHERE recid = 'fooValue'
     * $query->filterByRecid('%fooValue%'); // WHERE recid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function filterByRecid($recid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recid)) {
                $recid = str_replace('*', '%', $recid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimTimePeer::RECID, $recid, $comparison);
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
     * @param     mixed $timeid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function filterByTimeid($timeid = null, $comparison = null)
    {
        if (is_array($timeid)) {
            $useMinMax = false;
            if (isset($timeid['min'])) {
                $this->addUsingAlias(DimTimePeer::TIMEID, $timeid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeid['max'])) {
                $this->addUsingAlias(DimTimePeer::TIMEID, $timeid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimTimePeer::TIMEID, $timeid, $comparison);
    }

    /**
     * Filter the query by a related FtSocialdata object
     *
     * @param   FtSocialdata|PropelObjectCollection $ftSocialdata  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DimTimeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFtSocialdata($ftSocialdata, $comparison = null)
    {
        if ($ftSocialdata instanceof FtSocialdata) {
            return $this
                ->addUsingAlias(DimTimePeer::TIMEID, $ftSocialdata->getTimeid(), $comparison);
        } elseif ($ftSocialdata instanceof PropelObjectCollection) {
            return $this
                ->useFtSocialdataQuery()
                ->filterByPrimaryKeys($ftSocialdata->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByFtSocialdata() only accepts arguments of type FtSocialdata or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the FtSocialdata relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function joinFtSocialdata($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('FtSocialdata');

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
            $this->addJoinObject($join, 'FtSocialdata');
        }

        return $this;
    }

    /**
     * Use the FtSocialdata relation FtSocialdata object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   FtSocialdataQuery A secondary query class using the current class as primary query
     */
    public function useFtSocialdataQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinFtSocialdata($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'FtSocialdata', 'FtSocialdataQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   DimTime $dimTime Object to remove from the list of results
     *
     * @return DimTimeQuery The current query, for fluid interface
     */
    public function prune($dimTime = null)
    {
        if ($dimTime) {
            $this->addUsingAlias(DimTimePeer::TIMEID, $dimTime->getTimeid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
