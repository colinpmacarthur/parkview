<?php


/**
 * Base class that represents a query for the 'SOCIALNETS' table.
 *
 *
 *
 * @method SocialnetsQuery orderBySnsId($order = Criteria::ASC) Order by the sns_id column
 * @method SocialnetsQuery orderBySns($order = Criteria::ASC) Order by the sns column
 *
 * @method SocialnetsQuery groupBySnsId() Group by the sns_id column
 * @method SocialnetsQuery groupBySns() Group by the sns column
 *
 * @method SocialnetsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SocialnetsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SocialnetsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SocialnetsQuery leftJoinTrackSites($relationAlias = null) Adds a LEFT JOIN clause to the query using the TrackSites relation
 * @method SocialnetsQuery rightJoinTrackSites($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TrackSites relation
 * @method SocialnetsQuery innerJoinTrackSites($relationAlias = null) Adds a INNER JOIN clause to the query using the TrackSites relation
 *
 * @method Socialnets findOne(PropelPDO $con = null) Return the first Socialnets matching the query
 * @method Socialnets findOneOrCreate(PropelPDO $con = null) Return the first Socialnets matching the query, or a new Socialnets object populated from the query conditions when no match is found
 *
 * @method Socialnets findOneBySns(string $sns) Return the first Socialnets filtered by the sns column
 *
 * @method array findBySnsId(int $sns_id) Return Socialnets objects filtered by the sns_id column
 * @method array findBySns(string $sns) Return Socialnets objects filtered by the sns column
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseSocialnetsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSocialnetsQuery object.
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
            $modelName = 'Socialnets';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SocialnetsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SocialnetsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SocialnetsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SocialnetsQuery) {
            return $criteria;
        }
        $query = new SocialnetsQuery(null, null, $modelAlias);

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
     * @return   Socialnets|Socialnets[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SocialnetsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SocialnetsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Socialnets A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySnsId($key, $con = null)
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
     * @return                 Socialnets A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `sns_id`, `sns` FROM `SOCIALNETS` WHERE `sns_id` = :p0';
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
            $obj = new Socialnets();
            $obj->hydrate($row);
            SocialnetsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Socialnets|Socialnets[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Socialnets[]|mixed the list of results, formatted by the current formatter
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
     * @return SocialnetsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SocialnetsPeer::SNS_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SocialnetsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SocialnetsPeer::SNS_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the sns_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySnsId(1234); // WHERE sns_id = 1234
     * $query->filterBySnsId(array(12, 34)); // WHERE sns_id IN (12, 34)
     * $query->filterBySnsId(array('min' => 12)); // WHERE sns_id >= 12
     * $query->filterBySnsId(array('max' => 12)); // WHERE sns_id <= 12
     * </code>
     *
     * @param     mixed $snsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialnetsQuery The current query, for fluid interface
     */
    public function filterBySnsId($snsId = null, $comparison = null)
    {
        if (is_array($snsId)) {
            $useMinMax = false;
            if (isset($snsId['min'])) {
                $this->addUsingAlias(SocialnetsPeer::SNS_ID, $snsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($snsId['max'])) {
                $this->addUsingAlias(SocialnetsPeer::SNS_ID, $snsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialnetsPeer::SNS_ID, $snsId, $comparison);
    }

    /**
     * Filter the query on the sns column
     *
     * Example usage:
     * <code>
     * $query->filterBySns('fooValue');   // WHERE sns = 'fooValue'
     * $query->filterBySns('%fooValue%'); // WHERE sns LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sns The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialnetsQuery The current query, for fluid interface
     */
    public function filterBySns($sns = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sns)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sns)) {
                $sns = str_replace('*', '%', $sns);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SocialnetsPeer::SNS, $sns, $comparison);
    }

    /**
     * Filter the query by a related TrackSites object
     *
     * @param   TrackSites|PropelObjectCollection $trackSites  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SocialnetsQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTrackSites($trackSites, $comparison = null)
    {
        if ($trackSites instanceof TrackSites) {
            return $this
                ->addUsingAlias(SocialnetsPeer::SNS_ID, $trackSites->getSnsId(), $comparison);
        } elseif ($trackSites instanceof PropelObjectCollection) {
            return $this
                ->useTrackSitesQuery()
                ->filterByPrimaryKeys($trackSites->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTrackSites() only accepts arguments of type TrackSites or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TrackSites relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SocialnetsQuery The current query, for fluid interface
     */
    public function joinTrackSites($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TrackSites');

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
            $this->addJoinObject($join, 'TrackSites');
        }

        return $this;
    }

    /**
     * Use the TrackSites relation TrackSites object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TrackSitesQuery A secondary query class using the current class as primary query
     */
    public function useTrackSitesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTrackSites($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TrackSites', 'TrackSitesQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Socialnets $socialnets Object to remove from the list of results
     *
     * @return SocialnetsQuery The current query, for fluid interface
     */
    public function prune($socialnets = null)
    {
        if ($socialnets) {
            $this->addUsingAlias(SocialnetsPeer::SNS_ID, $socialnets->getSnsId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
