<?php


/**
 * Base class that represents a query for the 'DIM_PERIOD' table.
 *
 *
 *
 * @method DimPeriodQuery orderByDateId($order = Criteria::ASC) Order by the date_id column
 * @method DimPeriodQuery orderByCreationDate($order = Criteria::ASC) Order by the creation_date column
 * @method DimPeriodQuery orderByYear($order = Criteria::ASC) Order by the year column
 * @method DimPeriodQuery orderByQuarter($order = Criteria::ASC) Order by the quarter column
 * @method DimPeriodQuery orderByMonth($order = Criteria::ASC) Order by the month column
 * @method DimPeriodQuery orderByDay($order = Criteria::ASC) Order by the day column
 *
 * @method DimPeriodQuery groupByDateId() Group by the date_id column
 * @method DimPeriodQuery groupByCreationDate() Group by the creation_date column
 * @method DimPeriodQuery groupByYear() Group by the year column
 * @method DimPeriodQuery groupByQuarter() Group by the quarter column
 * @method DimPeriodQuery groupByMonth() Group by the month column
 * @method DimPeriodQuery groupByDay() Group by the day column
 *
 * @method DimPeriodQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DimPeriodQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DimPeriodQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DimPeriodQuery leftJoinFactSnsdata($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactSnsdata relation
 * @method DimPeriodQuery rightJoinFactSnsdata($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactSnsdata relation
 * @method DimPeriodQuery innerJoinFactSnsdata($relationAlias = null) Adds a INNER JOIN clause to the query using the FactSnsdata relation
 *
 * @method DimPeriod findOne(PropelPDO $con = null) Return the first DimPeriod matching the query
 * @method DimPeriod findOneOrCreate(PropelPDO $con = null) Return the first DimPeriod matching the query, or a new DimPeriod object populated from the query conditions when no match is found
 *
 * @method DimPeriod findOneByCreationDate(string $creation_date) Return the first DimPeriod filtered by the creation_date column
 * @method DimPeriod findOneByYear(int $year) Return the first DimPeriod filtered by the year column
 * @method DimPeriod findOneByQuarter(int $quarter) Return the first DimPeriod filtered by the quarter column
 * @method DimPeriod findOneByMonth(int $month) Return the first DimPeriod filtered by the month column
 * @method DimPeriod findOneByDay(int $day) Return the first DimPeriod filtered by the day column
 *
 * @method array findByDateId(int $date_id) Return DimPeriod objects filtered by the date_id column
 * @method array findByCreationDate(string $creation_date) Return DimPeriod objects filtered by the creation_date column
 * @method array findByYear(int $year) Return DimPeriod objects filtered by the year column
 * @method array findByQuarter(int $quarter) Return DimPeriod objects filtered by the quarter column
 * @method array findByMonth(int $month) Return DimPeriod objects filtered by the month column
 * @method array findByDay(int $day) Return DimPeriod objects filtered by the day column
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseDimPeriodQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDimPeriodQuery object.
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
            $modelName = 'DimPeriod';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DimPeriodQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DimPeriodQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DimPeriodQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DimPeriodQuery) {
            return $criteria;
        }
        $query = new DimPeriodQuery(null, null, $modelAlias);

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
     * @return   DimPeriod|DimPeriod[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DimPeriodPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DimPeriodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 DimPeriod A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByDateId($key, $con = null)
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
     * @return                 DimPeriod A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `date_id`, `creation_date`, `year`, `quarter`, `month`, `day` FROM `DIM_PERIOD` WHERE `date_id` = :p0';
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
            $obj = new DimPeriod();
            $obj->hydrate($row);
            DimPeriodPeer::addInstanceToPool($obj, (string) $key);
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
     * @return DimPeriod|DimPeriod[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|DimPeriod[]|mixed the list of results, formatted by the current formatter
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
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DimPeriodPeer::DATE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DimPeriodPeer::DATE_ID, $keys, Criteria::IN);
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
     * @param     mixed $dateId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function filterByDateId($dateId = null, $comparison = null)
    {
        if (is_array($dateId)) {
            $useMinMax = false;
            if (isset($dateId['min'])) {
                $this->addUsingAlias(DimPeriodPeer::DATE_ID, $dateId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateId['max'])) {
                $this->addUsingAlias(DimPeriodPeer::DATE_ID, $dateId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimPeriodPeer::DATE_ID, $dateId, $comparison);
    }

    /**
     * Filter the query on the creation_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCreationDate('2011-03-14'); // WHERE creation_date = '2011-03-14'
     * $query->filterByCreationDate('now'); // WHERE creation_date = '2011-03-14'
     * $query->filterByCreationDate(array('max' => 'yesterday')); // WHERE creation_date < '2011-03-13'
     * </code>
     *
     * @param     mixed $creationDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function filterByCreationDate($creationDate = null, $comparison = null)
    {
        if (is_array($creationDate)) {
            $useMinMax = false;
            if (isset($creationDate['min'])) {
                $this->addUsingAlias(DimPeriodPeer::CREATION_DATE, $creationDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($creationDate['max'])) {
                $this->addUsingAlias(DimPeriodPeer::CREATION_DATE, $creationDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimPeriodPeer::CREATION_DATE, $creationDate, $comparison);
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
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(DimPeriodPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(DimPeriodPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimPeriodPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the quarter column
     *
     * Example usage:
     * <code>
     * $query->filterByQuarter(1234); // WHERE quarter = 1234
     * $query->filterByQuarter(array(12, 34)); // WHERE quarter IN (12, 34)
     * $query->filterByQuarter(array('min' => 12)); // WHERE quarter >= 12
     * $query->filterByQuarter(array('max' => 12)); // WHERE quarter <= 12
     * </code>
     *
     * @param     mixed $quarter The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function filterByQuarter($quarter = null, $comparison = null)
    {
        if (is_array($quarter)) {
            $useMinMax = false;
            if (isset($quarter['min'])) {
                $this->addUsingAlias(DimPeriodPeer::QUARTER, $quarter['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quarter['max'])) {
                $this->addUsingAlias(DimPeriodPeer::QUARTER, $quarter['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimPeriodPeer::QUARTER, $quarter, $comparison);
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
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (is_array($month)) {
            $useMinMax = false;
            if (isset($month['min'])) {
                $this->addUsingAlias(DimPeriodPeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($month['max'])) {
                $this->addUsingAlias(DimPeriodPeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimPeriodPeer::MONTH, $month, $comparison);
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
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function filterByDay($day = null, $comparison = null)
    {
        if (is_array($day)) {
            $useMinMax = false;
            if (isset($day['min'])) {
                $this->addUsingAlias(DimPeriodPeer::DAY, $day['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($day['max'])) {
                $this->addUsingAlias(DimPeriodPeer::DAY, $day['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimPeriodPeer::DAY, $day, $comparison);
    }

    /**
     * Filter the query by a related FactSnsdata object
     *
     * @param   FactSnsdata|PropelObjectCollection $factSnsdata  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DimPeriodQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactSnsdata($factSnsdata, $comparison = null)
    {
        if ($factSnsdata instanceof FactSnsdata) {
            return $this
                ->addUsingAlias(DimPeriodPeer::DATE_ID, $factSnsdata->getDateId(), $comparison);
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
     * @return DimPeriodQuery The current query, for fluid interface
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
     * @param   DimPeriod $dimPeriod Object to remove from the list of results
     *
     * @return DimPeriodQuery The current query, for fluid interface
     */
    public function prune($dimPeriod = null)
    {
        if ($dimPeriod) {
            $this->addUsingAlias(DimPeriodPeer::DATE_ID, $dimPeriod->getDateId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
