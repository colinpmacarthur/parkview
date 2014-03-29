<?php


/**
 * Base class that represents a query for the 'VOVERNIGHT' table.
 *
 *
 *
 * @method VovernightQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method VovernightQuery orderByParkid($order = Criteria::ASC) Order by the PARKID column
 * @method VovernightQuery orderByNp($order = Criteria::ASC) Order by the NP column
 * @method VovernightQuery orderByMonth($order = Criteria::ASC) Order by the MONTH column
 * @method VovernightQuery orderByYear($order = Criteria::ASC) Order by the YEAR column
 * @method VovernightQuery orderByStaytype($order = Criteria::ASC) Order by the STAYTYPE column
 * @method VovernightQuery orderByVisitor($order = Criteria::ASC) Order by the VISITOR column
 *
 * @method VovernightQuery groupById() Group by the ID column
 * @method VovernightQuery groupByParkid() Group by the PARKID column
 * @method VovernightQuery groupByNp() Group by the NP column
 * @method VovernightQuery groupByMonth() Group by the MONTH column
 * @method VovernightQuery groupByYear() Group by the YEAR column
 * @method VovernightQuery groupByStaytype() Group by the STAYTYPE column
 * @method VovernightQuery groupByVisitor() Group by the VISITOR column
 *
 * @method VovernightQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VovernightQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VovernightQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Vovernight findOne(PropelPDO $con = null) Return the first Vovernight matching the query
 * @method Vovernight findOneOrCreate(PropelPDO $con = null) Return the first Vovernight matching the query, or a new Vovernight object populated from the query conditions when no match is found
 *
 * @method Vovernight findOneByParkid(string $PARKID) Return the first Vovernight filtered by the PARKID column
 * @method Vovernight findOneByNp(string $NP) Return the first Vovernight filtered by the NP column
 * @method Vovernight findOneByMonth(int $MONTH) Return the first Vovernight filtered by the MONTH column
 * @method Vovernight findOneByYear(int $YEAR) Return the first Vovernight filtered by the YEAR column
 * @method Vovernight findOneByStaytype(string $STAYTYPE) Return the first Vovernight filtered by the STAYTYPE column
 * @method Vovernight findOneByVisitor(int $VISITOR) Return the first Vovernight filtered by the VISITOR column
 *
 * @method array findById(int $ID) Return Vovernight objects filtered by the ID column
 * @method array findByParkid(string $PARKID) Return Vovernight objects filtered by the PARKID column
 * @method array findByNp(string $NP) Return Vovernight objects filtered by the NP column
 * @method array findByMonth(int $MONTH) Return Vovernight objects filtered by the MONTH column
 * @method array findByYear(int $YEAR) Return Vovernight objects filtered by the YEAR column
 * @method array findByStaytype(string $STAYTYPE) Return Vovernight objects filtered by the STAYTYPE column
 * @method array findByVisitor(int $VISITOR) Return Vovernight objects filtered by the VISITOR column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseVovernightQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVovernightQuery object.
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
            $modelName = 'Vovernight';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VovernightQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VovernightQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VovernightQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VovernightQuery) {
            return $criteria;
        }
        $query = new VovernightQuery(null, null, $modelAlias);

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
     * @return   Vovernight|Vovernight[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VovernightPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VovernightPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Vovernight A model object, or null if the key is not found
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
     * @return                 Vovernight A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `PARKID`, `NP`, `MONTH`, `YEAR`, `STAYTYPE`, `VISITOR` FROM `VOVERNIGHT` WHERE `ID` = :p0';
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
            $obj = new Vovernight();
            $obj->hydrate($row);
            VovernightPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Vovernight|Vovernight[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Vovernight[]|mixed the list of results, formatted by the current formatter
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
     * @return VovernightQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VovernightPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VovernightQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VovernightPeer::ID, $keys, Criteria::IN);
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
     * @return VovernightQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(VovernightPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(VovernightPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VovernightPeer::ID, $id, $comparison);
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
     * @return VovernightQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VovernightPeer::PARKID, $parkid, $comparison);
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
     * @return VovernightQuery The current query, for fluid interface
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

        return $this->addUsingAlias(VovernightPeer::NP, $np, $comparison);
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
     * @return VovernightQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (is_array($month)) {
            $useMinMax = false;
            if (isset($month['min'])) {
                $this->addUsingAlias(VovernightPeer::MONTH, $month['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($month['max'])) {
                $this->addUsingAlias(VovernightPeer::MONTH, $month['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VovernightPeer::MONTH, $month, $comparison);
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
     * @return VovernightQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(VovernightPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(VovernightPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VovernightPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the STAYTYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByStaytype('fooValue');   // WHERE STAYTYPE = 'fooValue'
     * $query->filterByStaytype('%fooValue%'); // WHERE STAYTYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $staytype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VovernightQuery The current query, for fluid interface
     */
    public function filterByStaytype($staytype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($staytype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $staytype)) {
                $staytype = str_replace('*', '%', $staytype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VovernightPeer::STAYTYPE, $staytype, $comparison);
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
     * @return VovernightQuery The current query, for fluid interface
     */
    public function filterByVisitor($visitor = null, $comparison = null)
    {
        if (is_array($visitor)) {
            $useMinMax = false;
            if (isset($visitor['min'])) {
                $this->addUsingAlias(VovernightPeer::VISITOR, $visitor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitor['max'])) {
                $this->addUsingAlias(VovernightPeer::VISITOR, $visitor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VovernightPeer::VISITOR, $visitor, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Vovernight $vovernight Object to remove from the list of results
     *
     * @return VovernightQuery The current query, for fluid interface
     */
    public function prune($vovernight = null)
    {
        if ($vovernight) {
            $this->addUsingAlias(VovernightPeer::ID, $vovernight->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
