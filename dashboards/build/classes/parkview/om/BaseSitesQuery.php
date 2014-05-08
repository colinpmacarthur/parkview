<?php


/**
 * Base class that represents a query for the 'sites' table.
 *
 *
 *
 * @method SitesQuery orderByIdsites($order = Criteria::ASC) Order by the idsites column
 * @method SitesQuery orderBySitename($order = Criteria::ASC) Order by the sitename column
 * @method SitesQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method SitesQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 *
 * @method SitesQuery groupByIdsites() Group by the idsites column
 * @method SitesQuery groupBySitename() Group by the sitename column
 * @method SitesQuery groupByLatitude() Group by the latitude column
 * @method SitesQuery groupByLongitude() Group by the longitude column
 *
 * @method SitesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SitesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SitesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Sites findOne(PropelPDO $con = null) Return the first Sites matching the query
 * @method Sites findOneOrCreate(PropelPDO $con = null) Return the first Sites matching the query, or a new Sites object populated from the query conditions when no match is found
 *
 * @method Sites findOneBySitename(string $sitename) Return the first Sites filtered by the sitename column
 * @method Sites findOneByLatitude(double $latitude) Return the first Sites filtered by the latitude column
 * @method Sites findOneByLongitude(double $longitude) Return the first Sites filtered by the longitude column
 *
 * @method array findByIdsites(int $idsites) Return Sites objects filtered by the idsites column
 * @method array findBySitename(string $sitename) Return Sites objects filtered by the sitename column
 * @method array findByLatitude(double $latitude) Return Sites objects filtered by the latitude column
 * @method array findByLongitude(double $longitude) Return Sites objects filtered by the longitude column
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseSitesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSitesQuery object.
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
            $modelName = 'Sites';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SitesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SitesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SitesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SitesQuery) {
            return $criteria;
        }
        $query = new SitesQuery(null, null, $modelAlias);

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
     * @return   Sites|Sites[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SitesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sites A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdsites($key, $con = null)
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
     * @return                 Sites A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idsites`, `sitename`, `latitude`, `longitude` FROM `sites` WHERE `idsites` = :p0';
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
            $obj = new Sites();
            $obj->hydrate($row);
            SitesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sites|Sites[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sites[]|mixed the list of results, formatted by the current formatter
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
     * @return SitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SitesPeer::IDSITES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SitesPeer::IDSITES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idsites column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsites(1234); // WHERE idsites = 1234
     * $query->filterByIdsites(array(12, 34)); // WHERE idsites IN (12, 34)
     * $query->filterByIdsites(array('min' => 12)); // WHERE idsites >= 12
     * $query->filterByIdsites(array('max' => 12)); // WHERE idsites <= 12
     * </code>
     *
     * @param     mixed $idsites The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SitesQuery The current query, for fluid interface
     */
    public function filterByIdsites($idsites = null, $comparison = null)
    {
        if (is_array($idsites)) {
            $useMinMax = false;
            if (isset($idsites['min'])) {
                $this->addUsingAlias(SitesPeer::IDSITES, $idsites['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsites['max'])) {
                $this->addUsingAlias(SitesPeer::IDSITES, $idsites['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SitesPeer::IDSITES, $idsites, $comparison);
    }

    /**
     * Filter the query on the sitename column
     *
     * Example usage:
     * <code>
     * $query->filterBySitename('fooValue');   // WHERE sitename = 'fooValue'
     * $query->filterBySitename('%fooValue%'); // WHERE sitename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sitename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SitesQuery The current query, for fluid interface
     */
    public function filterBySitename($sitename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sitename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sitename)) {
                $sitename = str_replace('*', '%', $sitename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SitesPeer::SITENAME, $sitename, $comparison);
    }

    /**
     * Filter the query on the latitude column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitude(1234); // WHERE latitude = 1234
     * $query->filterByLatitude(array(12, 34)); // WHERE latitude IN (12, 34)
     * $query->filterByLatitude(array('min' => 12)); // WHERE latitude >= 12
     * $query->filterByLatitude(array('max' => 12)); // WHERE latitude <= 12
     * </code>
     *
     * @param     mixed $latitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SitesQuery The current query, for fluid interface
     */
    public function filterByLatitude($latitude = null, $comparison = null)
    {
        if (is_array($latitude)) {
            $useMinMax = false;
            if (isset($latitude['min'])) {
                $this->addUsingAlias(SitesPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitude['max'])) {
                $this->addUsingAlias(SitesPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SitesPeer::LATITUDE, $latitude, $comparison);
    }

    /**
     * Filter the query on the longitude column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitude(1234); // WHERE longitude = 1234
     * $query->filterByLongitude(array(12, 34)); // WHERE longitude IN (12, 34)
     * $query->filterByLongitude(array('min' => 12)); // WHERE longitude >= 12
     * $query->filterByLongitude(array('max' => 12)); // WHERE longitude <= 12
     * </code>
     *
     * @param     mixed $longitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SitesQuery The current query, for fluid interface
     */
    public function filterByLongitude($longitude = null, $comparison = null)
    {
        if (is_array($longitude)) {
            $useMinMax = false;
            if (isset($longitude['min'])) {
                $this->addUsingAlias(SitesPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitude['max'])) {
                $this->addUsingAlias(SitesPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SitesPeer::LONGITUDE, $longitude, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Sites $sites Object to remove from the list of results
     *
     * @return SitesQuery The current query, for fluid interface
     */
    public function prune($sites = null)
    {
        if ($sites) {
            $this->addUsingAlias(SitesPeer::IDSITES, $sites->getIdsites(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
