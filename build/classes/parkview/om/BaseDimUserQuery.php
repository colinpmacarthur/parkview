<?php


/**
 * Base class that represents a query for the 'DIM_USER' table.
 *
 *
 *
 * @method DimUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method DimUserQuery orderByRowId($order = Criteria::ASC) Order by the row_id column
 * @method DimUserQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method DimUserQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method DimUserQuery orderByState($order = Criteria::ASC) Order by the State column
 *
 * @method DimUserQuery groupByUserId() Group by the user_id column
 * @method DimUserQuery groupByRowId() Group by the row_id column
 * @method DimUserQuery groupByAddress() Group by the address column
 * @method DimUserQuery groupByCity() Group by the city column
 * @method DimUserQuery groupByState() Group by the State column
 *
 * @method DimUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DimUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DimUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DimUserQuery leftJoinAllsnsdata($relationAlias = null) Adds a LEFT JOIN clause to the query using the Allsnsdata relation
 * @method DimUserQuery rightJoinAllsnsdata($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Allsnsdata relation
 * @method DimUserQuery innerJoinAllsnsdata($relationAlias = null) Adds a INNER JOIN clause to the query using the Allsnsdata relation
 *
 * @method DimUserQuery leftJoinFactSnsdata($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactSnsdata relation
 * @method DimUserQuery rightJoinFactSnsdata($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactSnsdata relation
 * @method DimUserQuery innerJoinFactSnsdata($relationAlias = null) Adds a INNER JOIN clause to the query using the FactSnsdata relation
 *
 * @method DimUser findOne(PropelPDO $con = null) Return the first DimUser matching the query
 * @method DimUser findOneOrCreate(PropelPDO $con = null) Return the first DimUser matching the query, or a new DimUser object populated from the query conditions when no match is found
 *
 * @method DimUser findOneByRowId(int $row_id) Return the first DimUser filtered by the row_id column
 * @method DimUser findOneByAddress(string $address) Return the first DimUser filtered by the address column
 * @method DimUser findOneByCity(string $city) Return the first DimUser filtered by the city column
 * @method DimUser findOneByState(string $State) Return the first DimUser filtered by the State column
 *
 * @method array findByUserId(int $user_id) Return DimUser objects filtered by the user_id column
 * @method array findByRowId(int $row_id) Return DimUser objects filtered by the row_id column
 * @method array findByAddress(string $address) Return DimUser objects filtered by the address column
 * @method array findByCity(string $city) Return DimUser objects filtered by the city column
 * @method array findByState(string $State) Return DimUser objects filtered by the State column
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseDimUserQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDimUserQuery object.
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
            $modelName = 'DimUser';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DimUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DimUserQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DimUserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DimUserQuery) {
            return $criteria;
        }
        $query = new DimUserQuery(null, null, $modelAlias);

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
     * @return   DimUser|DimUser[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DimUserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DimUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 DimUser A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUserId($key, $con = null)
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
     * @return                 DimUser A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `user_id`, `row_id`, `address`, `city`, `State` FROM `DIM_USER` WHERE `user_id` = :p0';
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
            $obj = new DimUser();
            $obj->hydrate($row);
            DimUserPeer::addInstanceToPool($obj, (string) $key);
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
     * @return DimUser|DimUser[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|DimUser[]|mixed the list of results, formatted by the current formatter
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
     * @return DimUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DimUserPeer::USER_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DimUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DimUserPeer::USER_ID, $keys, Criteria::IN);
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
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(DimUserPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(DimUserPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimUserPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the row_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRowId(1234); // WHERE row_id = 1234
     * $query->filterByRowId(array(12, 34)); // WHERE row_id IN (12, 34)
     * $query->filterByRowId(array('min' => 12)); // WHERE row_id >= 12
     * $query->filterByRowId(array('max' => 12)); // WHERE row_id <= 12
     * </code>
     *
     * @see       filterByAllsnsdata()
     *
     * @param     mixed $rowId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserQuery The current query, for fluid interface
     */
    public function filterByRowId($rowId = null, $comparison = null)
    {
        if (is_array($rowId)) {
            $useMinMax = false;
            if (isset($rowId['min'])) {
                $this->addUsingAlias(DimUserPeer::ROW_ID, $rowId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rowId['max'])) {
                $this->addUsingAlias(DimUserPeer::ROW_ID, $rowId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimUserPeer::ROW_ID, $rowId, $comparison);
    }

    /**
     * Filter the query on the address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
     * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimUserPeer::ADDRESS, $address, $comparison);
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
     * @return DimUserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DimUserPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the State column
     *
     * Example usage:
     * <code>
     * $query->filterByState('fooValue');   // WHERE State = 'fooValue'
     * $query->filterByState('%fooValue%'); // WHERE State LIKE '%fooValue%'
     * </code>
     *
     * @param     string $state The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DimUserPeer::STATE, $state, $comparison);
    }

    /**
     * Filter the query by a related Allsnsdata object
     *
     * @param   Allsnsdata|PropelObjectCollection $allsnsdata The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DimUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAllsnsdata($allsnsdata, $comparison = null)
    {
        if ($allsnsdata instanceof Allsnsdata) {
            return $this
                ->addUsingAlias(DimUserPeer::ROW_ID, $allsnsdata->getRowId(), $comparison);
        } elseif ($allsnsdata instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DimUserPeer::ROW_ID, $allsnsdata->toKeyValue('PrimaryKey', 'RowId'), $comparison);
        } else {
            throw new PropelException('filterByAllsnsdata() only accepts arguments of type Allsnsdata or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Allsnsdata relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DimUserQuery The current query, for fluid interface
     */
    public function joinAllsnsdata($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Allsnsdata');

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
            $this->addJoinObject($join, 'Allsnsdata');
        }

        return $this;
    }

    /**
     * Use the Allsnsdata relation Allsnsdata object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AllsnsdataQuery A secondary query class using the current class as primary query
     */
    public function useAllsnsdataQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAllsnsdata($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Allsnsdata', 'AllsnsdataQuery');
    }

    /**
     * Filter the query by a related FactSnsdata object
     *
     * @param   FactSnsdata|PropelObjectCollection $factSnsdata  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DimUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactSnsdata($factSnsdata, $comparison = null)
    {
        if ($factSnsdata instanceof FactSnsdata) {
            return $this
                ->addUsingAlias(DimUserPeer::ROW_ID, $factSnsdata->getUserId(), $comparison);
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
     * @return DimUserQuery The current query, for fluid interface
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
     * @param   DimUser $dimUser Object to remove from the list of results
     *
     * @return DimUserQuery The current query, for fluid interface
     */
    public function prune($dimUser = null)
    {
        if ($dimUser) {
            $this->addUsingAlias(DimUserPeer::USER_ID, $dimUser->getUserId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
