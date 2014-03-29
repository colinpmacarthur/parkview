<?php


/**
 * Base class that represents a query for the 'PARKS' table.
 *
 *
 *
 * @method ParksQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method ParksQuery orderByName($order = Criteria::ASC) Order by the NAME column
 * @method ParksQuery orderByNpid($order = Criteria::ASC) Order by the NPID column
 *
 * @method ParksQuery groupById() Group by the ID column
 * @method ParksQuery groupByName() Group by the NAME column
 * @method ParksQuery groupByNpid() Group by the NPID column
 *
 * @method ParksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ParksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ParksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Parks findOne(PropelPDO $con = null) Return the first Parks matching the query
 * @method Parks findOneOrCreate(PropelPDO $con = null) Return the first Parks matching the query, or a new Parks object populated from the query conditions when no match is found
 *
 * @method Parks findOneById(int $ID) Return the first Parks filtered by the ID column
 * @method Parks findOneByName(string $NAME) Return the first Parks filtered by the NAME column
 *
 * @method array findById(int $ID) Return Parks objects filtered by the ID column
 * @method array findByName(string $NAME) Return Parks objects filtered by the NAME column
 * @method array findByNpid(string $NPID) Return Parks objects filtered by the NPID column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseParksQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseParksQuery object.
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
            $modelName = 'Parks';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ParksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ParksQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ParksQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ParksQuery) {
            return $criteria;
        }
        $query = new ParksQuery(null, null, $modelAlias);

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
     * @return   Parks|Parks[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ParksPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ParksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Parks A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByNpid($key, $con = null)
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
     * @return                 Parks A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NAME`, `NPID` FROM `PARKS` WHERE `NPID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Parks();
            $obj->hydrate($row);
            ParksPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Parks|Parks[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Parks[]|mixed the list of results, formatted by the current formatter
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
     * @return ParksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ParksPeer::NPID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ParksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ParksPeer::NPID, $keys, Criteria::IN);
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
     * @return ParksQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ParksPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ParksPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ParksPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the NAME column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE NAME = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE NAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ParksQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ParksPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the NPID column
     *
     * Example usage:
     * <code>
     * $query->filterByNpid('fooValue');   // WHERE NPID = 'fooValue'
     * $query->filterByNpid('%fooValue%'); // WHERE NPID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $npid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ParksQuery The current query, for fluid interface
     */
    public function filterByNpid($npid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($npid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $npid)) {
                $npid = str_replace('*', '%', $npid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ParksPeer::NPID, $npid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Parks $parks Object to remove from the list of results
     *
     * @return ParksQuery The current query, for fluid interface
     */
    public function prune($parks = null)
    {
        if ($parks) {
            $this->addUsingAlias(ParksPeer::NPID, $parks->getNpid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
