<?php


/**
 * Base class that represents a query for the 'TRACK_SITES' table.
 *
 *
 *
 * @method TrackSitesQuery orderBySiteId($order = Criteria::ASC) Order by the site_id column
 * @method TrackSitesQuery orderByRecid($order = Criteria::ASC) Order by the recID column
 * @method TrackSitesQuery orderByPlace($order = Criteria::ASC) Order by the place column
 * @method TrackSitesQuery orderBySnsId($order = Criteria::ASC) Order by the sns_id column
 *
 * @method TrackSitesQuery groupBySiteId() Group by the site_id column
 * @method TrackSitesQuery groupByRecid() Group by the recID column
 * @method TrackSitesQuery groupByPlace() Group by the place column
 * @method TrackSitesQuery groupBySnsId() Group by the sns_id column
 *
 * @method TrackSitesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TrackSitesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TrackSitesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TrackSitesQuery leftJoinSocialnets($relationAlias = null) Adds a LEFT JOIN clause to the query using the Socialnets relation
 * @method TrackSitesQuery rightJoinSocialnets($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Socialnets relation
 * @method TrackSitesQuery innerJoinSocialnets($relationAlias = null) Adds a INNER JOIN clause to the query using the Socialnets relation
 *
 * @method TrackSitesQuery leftJoinFactSnsdata($relationAlias = null) Adds a LEFT JOIN clause to the query using the FactSnsdata relation
 * @method TrackSitesQuery rightJoinFactSnsdata($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FactSnsdata relation
 * @method TrackSitesQuery innerJoinFactSnsdata($relationAlias = null) Adds a INNER JOIN clause to the query using the FactSnsdata relation
 *
 * @method TrackSites findOne(PropelPDO $con = null) Return the first TrackSites matching the query
 * @method TrackSites findOneOrCreate(PropelPDO $con = null) Return the first TrackSites matching the query, or a new TrackSites object populated from the query conditions when no match is found
 *
 * @method TrackSites findOneByRecid(int $recID) Return the first TrackSites filtered by the recID column
 * @method TrackSites findOneByPlace(string $place) Return the first TrackSites filtered by the place column
 * @method TrackSites findOneBySnsId(int $sns_id) Return the first TrackSites filtered by the sns_id column
 *
 * @method array findBySiteId(int $site_id) Return TrackSites objects filtered by the site_id column
 * @method array findByRecid(int $recID) Return TrackSites objects filtered by the recID column
 * @method array findByPlace(string $place) Return TrackSites objects filtered by the place column
 * @method array findBySnsId(int $sns_id) Return TrackSites objects filtered by the sns_id column
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseTrackSitesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTrackSitesQuery object.
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
            $modelName = 'TrackSites';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TrackSitesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TrackSitesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TrackSitesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TrackSitesQuery) {
            return $criteria;
        }
        $query = new TrackSitesQuery(null, null, $modelAlias);

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
     * @return   TrackSites|TrackSites[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TrackSitesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TrackSitesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TrackSites A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySiteId($key, $con = null)
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
     * @return                 TrackSites A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `site_id`, `recID`, `place`, `sns_id` FROM `TRACK_SITES` WHERE `site_id` = :p0';
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
            $obj = new TrackSites();
            $obj->hydrate($row);
            TrackSitesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TrackSites|TrackSites[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TrackSites[]|mixed the list of results, formatted by the current formatter
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
     * @return TrackSitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TrackSitesPeer::SITE_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TrackSitesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TrackSitesPeer::SITE_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the site_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySiteId(1234); // WHERE site_id = 1234
     * $query->filterBySiteId(array(12, 34)); // WHERE site_id IN (12, 34)
     * $query->filterBySiteId(array('min' => 12)); // WHERE site_id >= 12
     * $query->filterBySiteId(array('max' => 12)); // WHERE site_id <= 12
     * </code>
     *
     * @param     mixed $siteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrackSitesQuery The current query, for fluid interface
     */
    public function filterBySiteId($siteId = null, $comparison = null)
    {
        if (is_array($siteId)) {
            $useMinMax = false;
            if (isset($siteId['min'])) {
                $this->addUsingAlias(TrackSitesPeer::SITE_ID, $siteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($siteId['max'])) {
                $this->addUsingAlias(TrackSitesPeer::SITE_ID, $siteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrackSitesPeer::SITE_ID, $siteId, $comparison);
    }

    /**
     * Filter the query on the recID column
     *
     * Example usage:
     * <code>
     * $query->filterByRecid(1234); // WHERE recID = 1234
     * $query->filterByRecid(array(12, 34)); // WHERE recID IN (12, 34)
     * $query->filterByRecid(array('min' => 12)); // WHERE recID >= 12
     * $query->filterByRecid(array('max' => 12)); // WHERE recID <= 12
     * </code>
     *
     * @param     mixed $recid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrackSitesQuery The current query, for fluid interface
     */
    public function filterByRecid($recid = null, $comparison = null)
    {
        if (is_array($recid)) {
            $useMinMax = false;
            if (isset($recid['min'])) {
                $this->addUsingAlias(TrackSitesPeer::RECID, $recid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recid['max'])) {
                $this->addUsingAlias(TrackSitesPeer::RECID, $recid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrackSitesPeer::RECID, $recid, $comparison);
    }

    /**
     * Filter the query on the place column
     *
     * Example usage:
     * <code>
     * $query->filterByPlace('fooValue');   // WHERE place = 'fooValue'
     * $query->filterByPlace('%fooValue%'); // WHERE place LIKE '%fooValue%'
     * </code>
     *
     * @param     string $place The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrackSitesQuery The current query, for fluid interface
     */
    public function filterByPlace($place = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($place)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $place)) {
                $place = str_replace('*', '%', $place);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TrackSitesPeer::PLACE, $place, $comparison);
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
     * @see       filterBySocialnets()
     *
     * @param     mixed $snsId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TrackSitesQuery The current query, for fluid interface
     */
    public function filterBySnsId($snsId = null, $comparison = null)
    {
        if (is_array($snsId)) {
            $useMinMax = false;
            if (isset($snsId['min'])) {
                $this->addUsingAlias(TrackSitesPeer::SNS_ID, $snsId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($snsId['max'])) {
                $this->addUsingAlias(TrackSitesPeer::SNS_ID, $snsId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TrackSitesPeer::SNS_ID, $snsId, $comparison);
    }

    /**
     * Filter the query by a related Socialnets object
     *
     * @param   Socialnets|PropelObjectCollection $socialnets The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TrackSitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySocialnets($socialnets, $comparison = null)
    {
        if ($socialnets instanceof Socialnets) {
            return $this
                ->addUsingAlias(TrackSitesPeer::SNS_ID, $socialnets->getSnsId(), $comparison);
        } elseif ($socialnets instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TrackSitesPeer::SNS_ID, $socialnets->toKeyValue('PrimaryKey', 'SnsId'), $comparison);
        } else {
            throw new PropelException('filterBySocialnets() only accepts arguments of type Socialnets or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Socialnets relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TrackSitesQuery The current query, for fluid interface
     */
    public function joinSocialnets($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Socialnets');

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
            $this->addJoinObject($join, 'Socialnets');
        }

        return $this;
    }

    /**
     * Use the Socialnets relation Socialnets object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SocialnetsQuery A secondary query class using the current class as primary query
     */
    public function useSocialnetsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSocialnets($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Socialnets', 'SocialnetsQuery');
    }

    /**
     * Filter the query by a related FactSnsdata object
     *
     * @param   FactSnsdata|PropelObjectCollection $factSnsdata  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TrackSitesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFactSnsdata($factSnsdata, $comparison = null)
    {
        if ($factSnsdata instanceof FactSnsdata) {
            return $this
                ->addUsingAlias(TrackSitesPeer::SITE_ID, $factSnsdata->getSiteId(), $comparison);
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
     * @return TrackSitesQuery The current query, for fluid interface
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
     * @param   TrackSites $trackSites Object to remove from the list of results
     *
     * @return TrackSitesQuery The current query, for fluid interface
     */
    public function prune($trackSites = null)
    {
        if ($trackSites) {
            $this->addUsingAlias(TrackSitesPeer::SITE_ID, $trackSites->getSiteId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
