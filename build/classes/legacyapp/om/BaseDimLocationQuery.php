<?php


/**
 * Base class that represents a query for the 'dim_location' table.
 *
 *
 *
 * @method DimLocationQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method DimLocationQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method DimLocationQuery orderByRecid($order = Criteria::ASC) Order by the recid column
 * @method DimLocationQuery orderByLocationid($order = Criteria::ASC) Order by the locationID column
 *
 * @method DimLocationQuery groupByCity() Group by the city column
 * @method DimLocationQuery groupByState() Group by the state column
 * @method DimLocationQuery groupByRecid() Group by the recid column
 * @method DimLocationQuery groupByLocationid() Group by the locationID column
 *
 * @method DimLocationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DimLocationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DimLocationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DimLocationQuery leftJoinFtSocialdata($relationAlias = null) Adds a LEFT JOIN clause to the query using the FtSocialdata relation
 * @method DimLocationQuery rightJoinFtSocialdata($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FtSocialdata relation
 * @method DimLocationQuery innerJoinFtSocialdata($relationAlias = null) Adds a INNER JOIN clause to the query using the FtSocialdata relation
 *
 * @method DimLocation findOne(PropelPDO $con = null) Return the first DimLocation matching the query
 * @method DimLocation findOneOrCreate(PropelPDO $con = null) Return the first DimLocation matching the query, or a new DimLocation object populated from the query conditions when no match is found
 *
 * @method DimLocation findOneByCity(string $city) Return the first DimLocation filtered by the city column
 * @method DimLocation findOneByState(string $state) Return the first DimLocation filtered by the state column
 * @method DimLocation findOneByRecid(string $recid) Return the first DimLocation filtered by the recid column
 *
 * @method array findByCity(string $city) Return DimLocation objects filtered by the city column
 * @method array findByState(string $state) Return DimLocation objects filtered by the state column
 * @method array findByRecid(string $recid) Return DimLocation objects filtered by the recid column
 * @method array findByLocationid(int $locationID) Return DimLocation objects filtered by the locationID column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseDimLocationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDimLocationQuery object.
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
            $modelName = 'DimLocation';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DimLocationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DimLocationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DimLocationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DimLocationQuery) {
            return $criteria;
        }
        $query = new DimLocationQuery(null, null, $modelAlias);

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
     * @return   DimLocation|DimLocation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DimLocationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DimLocationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 DimLocation A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLocationid($key, $con = null)
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
     * @return                 DimLocation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `city`, `state`, `recid`, `locationID` FROM `dim_location` WHERE `locationID` = :p0';
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
            $obj = new DimLocation();
            $obj->hydrate($row);
            DimLocationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return DimLocation|DimLocation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|DimLocation[]|mixed the list of results, formatted by the current formatter
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
     * @return DimLocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DimLocationPeer::LOCATIONID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DimLocationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DimLocationPeer::LOCATIONID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimLocationQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimLocationPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the state column
     *
     * Example usage:
     * <code>
     * $query->filterByState('fooValue');   // WHERE state = 'fooValue'
     * $query->filterByState('%fooValue%'); // WHERE state LIKE '%fooValue%'
     * </code>
     *
     * @param     string $state The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimLocationQuery The current query, for fluid interface
     */
    public function filterByState($state = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($state)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $state)) {
                $state = str_replace('*', '%', $state);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimLocationPeer::STATE, $state, $comparison);
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
     * @return DimLocationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DimLocationPeer::RECID, $recid, $comparison);
    }

    /**
     * Filter the query on the locationID column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationid(1234); // WHERE locationID = 1234
     * $query->filterByLocationid(array(12, 34)); // WHERE locationID IN (12, 34)
     * $query->filterByLocationid(array('min' => 12)); // WHERE locationID >= 12
     * $query->filterByLocationid(array('max' => 12)); // WHERE locationID <= 12
     * </code>
     *
     * @param     mixed $locationid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimLocationQuery The current query, for fluid interface
     */
    public function filterByLocationid($locationid = null, $comparison = null)
    {
        if (is_array($locationid)) {
            $useMinMax = false;
            if (isset($locationid['min'])) {
                $this->addUsingAlias(DimLocationPeer::LOCATIONID, $locationid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationid['max'])) {
                $this->addUsingAlias(DimLocationPeer::LOCATIONID, $locationid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimLocationPeer::LOCATIONID, $locationid, $comparison);
    }

    /**
     * Filter the query by a related FtSocialdata object
     *
     * @param   FtSocialdata|PropelObjectCollection $ftSocialdata  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DimLocationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFtSocialdata($ftSocialdata, $comparison = null)
    {
        if ($ftSocialdata instanceof FtSocialdata) {
            return $this
                ->addUsingAlias(DimLocationPeer::LOCATIONID, $ftSocialdata->getLocationid(), $comparison);
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
     * @return DimLocationQuery The current query, for fluid interface
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
     * @param   DimLocation $dimLocation Object to remove from the list of results
     *
     * @return DimLocationQuery The current query, for fluid interface
     */
    public function prune($dimLocation = null)
    {
        if ($dimLocation) {
            $this->addUsingAlias(DimLocationPeer::LOCATIONID, $dimLocation->getLocationid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
