<?php


/**
 * Base class that represents a query for the 'VLOCATION' table.
 *
 *
 *
 * @method VlocationQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method VlocationQuery orderByParkid($order = Criteria::ASC) Order by the PARKID column
 * @method VlocationQuery orderByYear($order = Criteria::ASC) Order by the YEAR column
 * @method VlocationQuery orderByMonth($order = Criteria::ASC) Order by the MONTH column
 * @method VlocationQuery orderByNp($order = Criteria::ASC) Order by the NP column
 * @method VlocationQuery orderByLocation($order = Criteria::ASC) Order by the LOCATION column
 * @method VlocationQuery orderByVisitor($order = Criteria::ASC) Order by the VISITOR column
 * @method VlocationQuery orderByType($order = Criteria::ASC) Order by the TYPE column
 *
 * @method VlocationQuery groupById() Group by the ID column
 * @method VlocationQuery groupByParkid() Group by the PARKID column
 * @method VlocationQuery groupByYear() Group by the YEAR column
 * @method VlocationQuery groupByMonth() Group by the MONTH column
 * @method VlocationQuery groupByNp() Group by the NP column
 * @method VlocationQuery groupByLocation() Group by the LOCATION column
 * @method VlocationQuery groupByVisitor() Group by the VISITOR column
 * @method VlocationQuery groupByType() Group by the TYPE column
 *
 * @method VlocationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VlocationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VlocationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Vlocation findOne(PropelPDO $con = null) Return the first Vlocation matching the query
 * @method Vlocation findOneOrCreate(PropelPDO $con = null) Return the first Vlocation matching the query, or a new Vlocation object populated from the query conditions when no match is found
 *
 * @method Vlocation findOneByParkid(string $PARKID) Return the first Vlocation filtered by the PARKID column
 * @method Vlocation findOneByYear(int $YEAR) Return the first Vlocation filtered by the YEAR column
 * @method Vlocation findOneByMonth(int $MONTH) Return the first Vlocation filtered by the MONTH column
 * @method Vlocation findOneByNp(string $NP) Return the first Vlocation filtered by the NP column
 * @method Vlocation findOneByLocation(string $LOCATION) Return the first Vlocation filtered by the LOCATION column
 * @method Vlocation findOneByVisitor(int $VISITOR) Return the first Vlocation filtered by the VISITOR column
 * @method Vlocation findOneByType(string $TYPE) Return the first Vlocation filtered by the TYPE column
 *
 * @method array findById(int $ID) Return Vlocation objects filtered by the ID column
 * @method array findByParkid(string $PARKID) Return Vlocation objects filtered by the PARKID column
 * @method array findByYear(int $YEAR) Return Vlocation objects filtered by the YEAR column
 * @method array findByMonth(int $MONTH) Return Vlocation objects filtered by the MONTH column
 * @method array findByNp(string $NP) Return Vlocation objects filtered by the NP column
 * @method array findByLocation(string $LOCATION) Return Vlocation objects filtered by the LOCATION column
 * @method array findByVisitor(int $VISITOR) Return Vlocation objects filtered by the VISITOR column
 * @method array findByType(string $TYPE) Return Vlocation objects filtered by the TYPE column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseVlocationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVlocationQuery object.
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
            $modelName = 'Vlocation';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VlocationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VlocationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VlocationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VlocationQuery) {
            return $criteria;
        }
        $query = new VlocationQuery(null, null, $modelAlias);

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
     * @return   Vlocation|Vlocation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VlocationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VlocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Vlocation A model object, or null if the key is not found
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
     * @return                 Vlocation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `PARKID`, `YEAR`, `MONTH`, `NP`, `LOCATION`, `VISITOR`, `TYPE` FROM `VLOCATION` WHERE `ID` = :p0';
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
            $obj = new Vlocation();
            $obj->hydrate($row);
            VlocationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Vlocation|Vlocation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Vlocation[]|mixed the list of results, formatted by the current formatter
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
     * @return VlocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VlocationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VlocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VlocationPeer::ID, $keys, Criteria::IN);
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
     * @return VlocationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(VlocationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(VlocationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VlocationPeer::ID, $id, $comparison);
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
     * @return VlocationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VlocationPeer::PARKID, $parkid, $comparison);
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
     * @return VlocationQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(VlocationPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(VlocationPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VlocationPeer::YEAR, $year, $comparison);
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
     * @return VlocationQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (is_array($month)) {
            $useMinMax = false;
            if (isset($month['min'])) {
                $this->addUsingAlias(VlocationPeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($month['max'])) {
                $this->addUsingAlias(VlocationPeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VlocationPeer::MONTH, $month, $comparison);
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
     * @return VlocationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VlocationPeer::NP, $np, $comparison);
    }

    /**
     * Filter the query on the LOCATION column
     *
     * Example usage:
     * <code>
     * $query->filterByLocation('fooValue');   // WHERE LOCATION = 'fooValue'
     * $query->filterByLocation('%fooValue%'); // WHERE LOCATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $location The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VlocationQuery The current query, for fluid interface
     */
    public function filterByLocation($location = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($location)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $location)) {
                $location = str_replace('*', '%', $location);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VlocationPeer::LOCATION, $location, $comparison);
    }

    /**
     * Filter the query on the VISITOR column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitor(1234); // WHERE VISITOR = 1234
     * $query->filterByVisitor(array(12, 34)); // WHERE VISITOR IN (12, 34)
     * $query->filterByVisitor(array('min' => 12)); // WHERE VISITOR >= 12
     * $query->filterByVisitor(array('max' => 12)); // WHERE VISITOR <= 12
     * </code>
     *
     * @param     mixed $visitor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VlocationQuery The current query, for fluid interface
     */
    public function filterByVisitor($visitor = null, $comparison = null)
    {
        if (is_array($visitor)) {
            $useMinMax = false;
            if (isset($visitor['min'])) {
                $this->addUsingAlias(VlocationPeer::VISITOR, $visitor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitor['max'])) {
                $this->addUsingAlias(VlocationPeer::VISITOR, $visitor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VlocationPeer::VISITOR, $visitor, $comparison);
    }

    /**
     * Filter the query on the TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE TYPE = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VlocationQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VlocationPeer::TYPE, $type, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Vlocation $vlocation Object to remove from the list of results
     *
     * @return VlocationQuery The current query, for fluid interface
     */
    public function prune($vlocation = null)
    {
        if ($vlocation) {
            $this->addUsingAlias(VlocationPeer::ID, $vlocation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
