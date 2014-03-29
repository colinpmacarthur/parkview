<?php


/**
 * Base class that represents a query for the 'ALLVISITORS' table.
 *
 *
 *
 * @method AllvisitorsQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method AllvisitorsQuery orderByParkid($order = Criteria::ASC) Order by the PARKID column
 * @method AllvisitorsQuery orderByYear($order = Criteria::ASC) Order by the YEAR column
 * @method AllvisitorsQuery orderByMonth($order = Criteria::ASC) Order by the MONTH column
 * @method AllvisitorsQuery orderByNp($order = Criteria::ASC) Order by the NP column
 * @method AllvisitorsQuery orderByStation($order = Criteria::ASC) Order by the STATION column
 * @method AllvisitorsQuery orderByTraffic($order = Criteria::ASC) Order by the TRAFFIC column
 *
 * @method AllvisitorsQuery groupById() Group by the ID column
 * @method AllvisitorsQuery groupByParkid() Group by the PARKID column
 * @method AllvisitorsQuery groupByYear() Group by the YEAR column
 * @method AllvisitorsQuery groupByMonth() Group by the MONTH column
 * @method AllvisitorsQuery groupByNp() Group by the NP column
 * @method AllvisitorsQuery groupByStation() Group by the STATION column
 * @method AllvisitorsQuery groupByTraffic() Group by the TRAFFIC column
 *
 * @method AllvisitorsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AllvisitorsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AllvisitorsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Allvisitors findOne(PropelPDO $con = null) Return the first Allvisitors matching the query
 * @method Allvisitors findOneOrCreate(PropelPDO $con = null) Return the first Allvisitors matching the query, or a new Allvisitors object populated from the query conditions when no match is found
 *
 * @method Allvisitors findOneByParkid(string $PARKID) Return the first Allvisitors filtered by the PARKID column
 * @method Allvisitors findOneByYear(int $YEAR) Return the first Allvisitors filtered by the YEAR column
 * @method Allvisitors findOneByMonth(int $MONTH) Return the first Allvisitors filtered by the MONTH column
 * @method Allvisitors findOneByNp(string $NP) Return the first Allvisitors filtered by the NP column
 * @method Allvisitors findOneByStation(string $STATION) Return the first Allvisitors filtered by the STATION column
 * @method Allvisitors findOneByTraffic(int $TRAFFIC) Return the first Allvisitors filtered by the TRAFFIC column
 *
 * @method array findById(int $ID) Return Allvisitors objects filtered by the ID column
 * @method array findByParkid(string $PARKID) Return Allvisitors objects filtered by the PARKID column
 * @method array findByYear(int $YEAR) Return Allvisitors objects filtered by the YEAR column
 * @method array findByMonth(int $MONTH) Return Allvisitors objects filtered by the MONTH column
 * @method array findByNp(string $NP) Return Allvisitors objects filtered by the NP column
 * @method array findByStation(string $STATION) Return Allvisitors objects filtered by the STATION column
 * @method array findByTraffic(int $TRAFFIC) Return Allvisitors objects filtered by the TRAFFIC column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseAllvisitorsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAllvisitorsQuery object.
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
            $modelName = 'Allvisitors';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AllvisitorsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AllvisitorsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AllvisitorsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AllvisitorsQuery) {
            return $criteria;
        }
        $query = new AllvisitorsQuery(null, null, $modelAlias);

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
     * @return   Allvisitors|Allvisitors[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AllvisitorsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AllvisitorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Allvisitors A model object, or null if the key is not found
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
     * @return                 Allvisitors A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `PARKID`, `YEAR`, `MONTH`, `NP`, `STATION`, `TRAFFIC` FROM `ALLVISITORS` WHERE `ID` = :p0';
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
            $obj = new Allvisitors();
            $obj->hydrate($row);
            AllvisitorsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Allvisitors|Allvisitors[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Allvisitors[]|mixed the list of results, formatted by the current formatter
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
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AllvisitorsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AllvisitorsPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AllvisitorsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AllvisitorsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllvisitorsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the PARKID column
     *
     * Example usage:
     * <code>
     * $query->filterByParkid('fooValue');   // WHERE PARKID = 'fooValue'
     * $query->filterByParkid('%fooValue%'); // WHERE PARKID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parkid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterByParkid($parkid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parkid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parkid)) {
                $parkid = str_replace('*', '%', $parkid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AllvisitorsPeer::PARKID, $parkid, $comparison);
    }

    /**
     * Filter the query on the YEAR column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE YEAR = 1234
     * $query->filterByYear(array(12, 34)); // WHERE YEAR IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE YEAR >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE YEAR <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(AllvisitorsPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(AllvisitorsPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllvisitorsPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the MONTH column
     *
     * Example usage:
     * <code>
     * $query->filterByMonth(1234); // WHERE MONTH = 1234
     * $query->filterByMonth(array(12, 34)); // WHERE MONTH IN (12, 34)
     * $query->filterByMonth(array('min' => 12)); // WHERE MONTH >= 12
     * $query->filterByMonth(array('max' => 12)); // WHERE MONTH <= 12
     * </code>
     *
     * @param     mixed $month The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (is_array($month)) {
            $useMinMax = false;
            if (isset($month['min'])) {
                $this->addUsingAlias(AllvisitorsPeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($month['max'])) {
                $this->addUsingAlias(AllvisitorsPeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllvisitorsPeer::MONTH, $month, $comparison);
    }

    /**
     * Filter the query on the NP column
     *
     * Example usage:
     * <code>
     * $query->filterByNp('fooValue');   // WHERE NP = 'fooValue'
     * $query->filterByNp('%fooValue%'); // WHERE NP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $np The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterByNp($np = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($np)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $np)) {
                $np = str_replace('*', '%', $np);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AllvisitorsPeer::NP, $np, $comparison);
    }

    /**
     * Filter the query on the STATION column
     *
     * Example usage:
     * <code>
     * $query->filterByStation('fooValue');   // WHERE STATION = 'fooValue'
     * $query->filterByStation('%fooValue%'); // WHERE STATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $station The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterByStation($station = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($station)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $station)) {
                $station = str_replace('*', '%', $station);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AllvisitorsPeer::STATION, $station, $comparison);
    }

    /**
     * Filter the query on the TRAFFIC column
     *
     * Example usage:
     * <code>
     * $query->filterByTraffic(1234); // WHERE TRAFFIC = 1234
     * $query->filterByTraffic(array(12, 34)); // WHERE TRAFFIC IN (12, 34)
     * $query->filterByTraffic(array('min' => 12)); // WHERE TRAFFIC >= 12
     * $query->filterByTraffic(array('max' => 12)); // WHERE TRAFFIC <= 12
     * </code>
     *
     * @param     mixed $traffic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function filterByTraffic($traffic = null, $comparison = null)
    {
        if (is_array($traffic)) {
            $useMinMax = false;
            if (isset($traffic['min'])) {
                $this->addUsingAlias(AllvisitorsPeer::TRAFFIC, $traffic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($traffic['max'])) {
                $this->addUsingAlias(AllvisitorsPeer::TRAFFIC, $traffic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllvisitorsPeer::TRAFFIC, $traffic, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Allvisitors $allvisitors Object to remove from the list of results
     *
     * @return AllvisitorsQuery The current query, for fluid interface
     */
    public function prune($allvisitors = null)
    {
        if ($allvisitors) {
            $this->addUsingAlias(AllvisitorsPeer::ID, $allvisitors->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
