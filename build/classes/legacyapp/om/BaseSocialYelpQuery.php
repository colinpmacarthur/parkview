<?php


/**
 * Base class that represents a query for the 'SOCIAL_YELP' table.
 *
 *
 *
 * @method SocialYelpQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method SocialYelpQuery orderByParkid($order = Criteria::ASC) Order by the PARKID column
 * @method SocialYelpQuery orderByYelpuserid($order = Criteria::ASC) Order by the YELPUSERID column
 * @method SocialYelpQuery orderByYelpuseravatar($order = Criteria::ASC) Order by the YELPUSERAVATAR column
 * @method SocialYelpQuery orderByYelpusername($order = Criteria::ASC) Order by the YELPUSERNAME column
 * @method SocialYelpQuery orderByYelpuserlocation($order = Criteria::ASC) Order by the YELPUSERLOCATION column
 * @method SocialYelpQuery orderByBadge($order = Criteria::ASC) Order by the BADGE column
 * @method SocialYelpQuery orderByYelpfriendscount($order = Criteria::ASC) Order by the YELPFRIENDSCOUNT column
 * @method SocialYelpQuery orderByYelpreviewcounts($order = Criteria::ASC) Order by the YELPREVIEWCOUNTS column
 * @method SocialYelpQuery orderByYelpratingvalue($order = Criteria::ASC) Order by the YELPRATINGVALUE column
 * @method SocialYelpQuery orderByYelpreviewyear($order = Criteria::ASC) Order by the YELPREVIEWYEAR column
 * @method SocialYelpQuery orderByYelpreviewmonth($order = Criteria::ASC) Order by the YELPREVIEWMONTH column
 * @method SocialYelpQuery orderByYelpreviewday($order = Criteria::ASC) Order by the YELPREVIEWDAY column
 * @method SocialYelpQuery orderByYelpreviewcomment($order = Criteria::ASC) Order by the YELPREVIEWCOMMENT column
 * @method SocialYelpQuery orderByYelpusefulcomment($order = Criteria::ASC) Order by the YELPUSEFULCOMMENT column
 * @method SocialYelpQuery orderByYelpfunnycomment($order = Criteria::ASC) Order by the YELPFUNNYCOMMENT column
 * @method SocialYelpQuery orderByYelpcoolcomment($order = Criteria::ASC) Order by the YELPCOOLCOMMENT column
 *
 * @method SocialYelpQuery groupById() Group by the ID column
 * @method SocialYelpQuery groupByParkid() Group by the PARKID column
 * @method SocialYelpQuery groupByYelpuserid() Group by the YELPUSERID column
 * @method SocialYelpQuery groupByYelpuseravatar() Group by the YELPUSERAVATAR column
 * @method SocialYelpQuery groupByYelpusername() Group by the YELPUSERNAME column
 * @method SocialYelpQuery groupByYelpuserlocation() Group by the YELPUSERLOCATION column
 * @method SocialYelpQuery groupByBadge() Group by the BADGE column
 * @method SocialYelpQuery groupByYelpfriendscount() Group by the YELPFRIENDSCOUNT column
 * @method SocialYelpQuery groupByYelpreviewcounts() Group by the YELPREVIEWCOUNTS column
 * @method SocialYelpQuery groupByYelpratingvalue() Group by the YELPRATINGVALUE column
 * @method SocialYelpQuery groupByYelpreviewyear() Group by the YELPREVIEWYEAR column
 * @method SocialYelpQuery groupByYelpreviewmonth() Group by the YELPREVIEWMONTH column
 * @method SocialYelpQuery groupByYelpreviewday() Group by the YELPREVIEWDAY column
 * @method SocialYelpQuery groupByYelpreviewcomment() Group by the YELPREVIEWCOMMENT column
 * @method SocialYelpQuery groupByYelpusefulcomment() Group by the YELPUSEFULCOMMENT column
 * @method SocialYelpQuery groupByYelpfunnycomment() Group by the YELPFUNNYCOMMENT column
 * @method SocialYelpQuery groupByYelpcoolcomment() Group by the YELPCOOLCOMMENT column
 *
 * @method SocialYelpQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SocialYelpQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SocialYelpQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SocialYelp findOne(PropelPDO $con = null) Return the first SocialYelp matching the query
 * @method SocialYelp findOneOrCreate(PropelPDO $con = null) Return the first SocialYelp matching the query, or a new SocialYelp object populated from the query conditions when no match is found
 *
 * @method SocialYelp findOneByParkid(string $PARKID) Return the first SocialYelp filtered by the PARKID column
 * @method SocialYelp findOneByYelpuserid(string $YELPUSERID) Return the first SocialYelp filtered by the YELPUSERID column
 * @method SocialYelp findOneByYelpuseravatar(string $YELPUSERAVATAR) Return the first SocialYelp filtered by the YELPUSERAVATAR column
 * @method SocialYelp findOneByYelpusername(string $YELPUSERNAME) Return the first SocialYelp filtered by the YELPUSERNAME column
 * @method SocialYelp findOneByYelpuserlocation(string $YELPUSERLOCATION) Return the first SocialYelp filtered by the YELPUSERLOCATION column
 * @method SocialYelp findOneByBadge(string $BADGE) Return the first SocialYelp filtered by the BADGE column
 * @method SocialYelp findOneByYelpfriendscount(int $YELPFRIENDSCOUNT) Return the first SocialYelp filtered by the YELPFRIENDSCOUNT column
 * @method SocialYelp findOneByYelpreviewcounts(int $YELPREVIEWCOUNTS) Return the first SocialYelp filtered by the YELPREVIEWCOUNTS column
 * @method SocialYelp findOneByYelpratingvalue(int $YELPRATINGVALUE) Return the first SocialYelp filtered by the YELPRATINGVALUE column
 * @method SocialYelp findOneByYelpreviewyear(int $YELPREVIEWYEAR) Return the first SocialYelp filtered by the YELPREVIEWYEAR column
 * @method SocialYelp findOneByYelpreviewmonth(int $YELPREVIEWMONTH) Return the first SocialYelp filtered by the YELPREVIEWMONTH column
 * @method SocialYelp findOneByYelpreviewday(int $YELPREVIEWDAY) Return the first SocialYelp filtered by the YELPREVIEWDAY column
 * @method SocialYelp findOneByYelpreviewcomment(string $YELPREVIEWCOMMENT) Return the first SocialYelp filtered by the YELPREVIEWCOMMENT column
 * @method SocialYelp findOneByYelpusefulcomment(int $YELPUSEFULCOMMENT) Return the first SocialYelp filtered by the YELPUSEFULCOMMENT column
 * @method SocialYelp findOneByYelpfunnycomment(int $YELPFUNNYCOMMENT) Return the first SocialYelp filtered by the YELPFUNNYCOMMENT column
 * @method SocialYelp findOneByYelpcoolcomment(int $YELPCOOLCOMMENT) Return the first SocialYelp filtered by the YELPCOOLCOMMENT column
 *
 * @method array findById(int $ID) Return SocialYelp objects filtered by the ID column
 * @method array findByParkid(string $PARKID) Return SocialYelp objects filtered by the PARKID column
 * @method array findByYelpuserid(string $YELPUSERID) Return SocialYelp objects filtered by the YELPUSERID column
 * @method array findByYelpuseravatar(string $YELPUSERAVATAR) Return SocialYelp objects filtered by the YELPUSERAVATAR column
 * @method array findByYelpusername(string $YELPUSERNAME) Return SocialYelp objects filtered by the YELPUSERNAME column
 * @method array findByYelpuserlocation(string $YELPUSERLOCATION) Return SocialYelp objects filtered by the YELPUSERLOCATION column
 * @method array findByBadge(string $BADGE) Return SocialYelp objects filtered by the BADGE column
 * @method array findByYelpfriendscount(int $YELPFRIENDSCOUNT) Return SocialYelp objects filtered by the YELPFRIENDSCOUNT column
 * @method array findByYelpreviewcounts(int $YELPREVIEWCOUNTS) Return SocialYelp objects filtered by the YELPREVIEWCOUNTS column
 * @method array findByYelpratingvalue(int $YELPRATINGVALUE) Return SocialYelp objects filtered by the YELPRATINGVALUE column
 * @method array findByYelpreviewyear(int $YELPREVIEWYEAR) Return SocialYelp objects filtered by the YELPREVIEWYEAR column
 * @method array findByYelpreviewmonth(int $YELPREVIEWMONTH) Return SocialYelp objects filtered by the YELPREVIEWMONTH column
 * @method array findByYelpreviewday(int $YELPREVIEWDAY) Return SocialYelp objects filtered by the YELPREVIEWDAY column
 * @method array findByYelpreviewcomment(string $YELPREVIEWCOMMENT) Return SocialYelp objects filtered by the YELPREVIEWCOMMENT column
 * @method array findByYelpusefulcomment(int $YELPUSEFULCOMMENT) Return SocialYelp objects filtered by the YELPUSEFULCOMMENT column
 * @method array findByYelpfunnycomment(int $YELPFUNNYCOMMENT) Return SocialYelp objects filtered by the YELPFUNNYCOMMENT column
 * @method array findByYelpcoolcomment(int $YELPCOOLCOMMENT) Return SocialYelp objects filtered by the YELPCOOLCOMMENT column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseSocialYelpQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSocialYelpQuery object.
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
            $modelName = 'SocialYelp';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SocialYelpQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SocialYelpQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SocialYelpQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SocialYelpQuery) {
            return $criteria;
        }
        $query = new SocialYelpQuery(null, null, $modelAlias);

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
     * @return   SocialYelp|SocialYelp[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SocialYelpPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 SocialYelp A model object, or null if the key is not found
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
     * @return                 SocialYelp A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `PARKID`, `YELPUSERID`, `YELPUSERAVATAR`, `YELPUSERNAME`, `YELPUSERLOCATION`, `BADGE`, `YELPFRIENDSCOUNT`, `YELPREVIEWCOUNTS`, `YELPRATINGVALUE`, `YELPREVIEWYEAR`, `YELPREVIEWMONTH`, `YELPREVIEWDAY`, `YELPREVIEWCOMMENT`, `YELPUSEFULCOMMENT`, `YELPFUNNYCOMMENT`, `YELPCOOLCOMMENT` FROM `SOCIAL_YELP` WHERE `ID` = :p0';
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
            $obj = new SocialYelp();
            $obj->hydrate($row);
            SocialYelpPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SocialYelp|SocialYelp[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SocialYelp[]|mixed the list of results, formatted by the current formatter
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
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SocialYelpPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SocialYelpPeer::ID, $keys, Criteria::IN);
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
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SocialYelpPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SocialYelpPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::ID, $id, $comparison);
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
     * @return SocialYelpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SocialYelpPeer::PARKID, $parkid, $comparison);
    }

    /**
     * Filter the query on the YELPUSERID column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpuserid('fooValue');   // WHERE YELPUSERID = 'fooValue'
     * $query->filterByYelpuserid('%fooValue%'); // WHERE YELPUSERID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yelpuserid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpuserid($yelpuserid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yelpuserid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yelpuserid)) {
                $yelpuserid = str_replace('*', '%', $yelpuserid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPUSERID, $yelpuserid, $comparison);
    }

    /**
     * Filter the query on the YELPUSERAVATAR column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpuseravatar('fooValue');   // WHERE YELPUSERAVATAR = 'fooValue'
     * $query->filterByYelpuseravatar('%fooValue%'); // WHERE YELPUSERAVATAR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yelpuseravatar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpuseravatar($yelpuseravatar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yelpuseravatar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yelpuseravatar)) {
                $yelpuseravatar = str_replace('*', '%', $yelpuseravatar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPUSERAVATAR, $yelpuseravatar, $comparison);
    }

    /**
     * Filter the query on the YELPUSERNAME column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpusername('fooValue');   // WHERE YELPUSERNAME = 'fooValue'
     * $query->filterByYelpusername('%fooValue%'); // WHERE YELPUSERNAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yelpusername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpusername($yelpusername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yelpusername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yelpusername)) {
                $yelpusername = str_replace('*', '%', $yelpusername);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPUSERNAME, $yelpusername, $comparison);
    }

    /**
     * Filter the query on the YELPUSERLOCATION column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpuserlocation('fooValue');   // WHERE YELPUSERLOCATION = 'fooValue'
     * $query->filterByYelpuserlocation('%fooValue%'); // WHERE YELPUSERLOCATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yelpuserlocation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpuserlocation($yelpuserlocation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yelpuserlocation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yelpuserlocation)) {
                $yelpuserlocation = str_replace('*', '%', $yelpuserlocation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPUSERLOCATION, $yelpuserlocation, $comparison);
    }

    /**
     * Filter the query on the BADGE column
     *
     * Example usage:
     * <code>
     * $query->filterByBadge('fooValue');   // WHERE BADGE = 'fooValue'
     * $query->filterByBadge('%fooValue%'); // WHERE BADGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $badge The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByBadge($badge = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($badge)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $badge)) {
                $badge = str_replace('*', '%', $badge);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::BADGE, $badge, $comparison);
    }

    /**
     * Filter the query on the YELPFRIENDSCOUNT column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpfriendscount(1234); // WHERE YELPFRIENDSCOUNT = 1234
     * $query->filterByYelpfriendscount(array(12, 34)); // WHERE YELPFRIENDSCOUNT IN (12, 34)
     * $query->filterByYelpfriendscount(array('min' => 12)); // WHERE YELPFRIENDSCOUNT >= 12
     * $query->filterByYelpfriendscount(array('max' => 12)); // WHERE YELPFRIENDSCOUNT <= 12
     * </code>
     *
     * @param     mixed $yelpfriendscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpfriendscount($yelpfriendscount = null, $comparison = null)
    {
        if (is_array($yelpfriendscount)) {
            $useMinMax = false;
            if (isset($yelpfriendscount['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPFRIENDSCOUNT, $yelpfriendscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpfriendscount['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPFRIENDSCOUNT, $yelpfriendscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPFRIENDSCOUNT, $yelpfriendscount, $comparison);
    }

    /**
     * Filter the query on the YELPREVIEWCOUNTS column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpreviewcounts(1234); // WHERE YELPREVIEWCOUNTS = 1234
     * $query->filterByYelpreviewcounts(array(12, 34)); // WHERE YELPREVIEWCOUNTS IN (12, 34)
     * $query->filterByYelpreviewcounts(array('min' => 12)); // WHERE YELPREVIEWCOUNTS >= 12
     * $query->filterByYelpreviewcounts(array('max' => 12)); // WHERE YELPREVIEWCOUNTS <= 12
     * </code>
     *
     * @param     mixed $yelpreviewcounts The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpreviewcounts($yelpreviewcounts = null, $comparison = null)
    {
        if (is_array($yelpreviewcounts)) {
            $useMinMax = false;
            if (isset($yelpreviewcounts['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPREVIEWCOUNTS, $yelpreviewcounts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpreviewcounts['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPREVIEWCOUNTS, $yelpreviewcounts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPREVIEWCOUNTS, $yelpreviewcounts, $comparison);
    }

    /**
     * Filter the query on the YELPRATINGVALUE column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpratingvalue(1234); // WHERE YELPRATINGVALUE = 1234
     * $query->filterByYelpratingvalue(array(12, 34)); // WHERE YELPRATINGVALUE IN (12, 34)
     * $query->filterByYelpratingvalue(array('min' => 12)); // WHERE YELPRATINGVALUE >= 12
     * $query->filterByYelpratingvalue(array('max' => 12)); // WHERE YELPRATINGVALUE <= 12
     * </code>
     *
     * @param     mixed $yelpratingvalue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpratingvalue($yelpratingvalue = null, $comparison = null)
    {
        if (is_array($yelpratingvalue)) {
            $useMinMax = false;
            if (isset($yelpratingvalue['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPRATINGVALUE, $yelpratingvalue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpratingvalue['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPRATINGVALUE, $yelpratingvalue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPRATINGVALUE, $yelpratingvalue, $comparison);
    }

    /**
     * Filter the query on the YELPREVIEWYEAR column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpreviewyear(1234); // WHERE YELPREVIEWYEAR = 1234
     * $query->filterByYelpreviewyear(array(12, 34)); // WHERE YELPREVIEWYEAR IN (12, 34)
     * $query->filterByYelpreviewyear(array('min' => 12)); // WHERE YELPREVIEWYEAR >= 12
     * $query->filterByYelpreviewyear(array('max' => 12)); // WHERE YELPREVIEWYEAR <= 12
     * </code>
     *
     * @param     mixed $yelpreviewyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpreviewyear($yelpreviewyear = null, $comparison = null)
    {
        if (is_array($yelpreviewyear)) {
            $useMinMax = false;
            if (isset($yelpreviewyear['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPREVIEWYEAR, $yelpreviewyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpreviewyear['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPREVIEWYEAR, $yelpreviewyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPREVIEWYEAR, $yelpreviewyear, $comparison);
    }

    /**
     * Filter the query on the YELPREVIEWMONTH column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpreviewmonth(1234); // WHERE YELPREVIEWMONTH = 1234
     * $query->filterByYelpreviewmonth(array(12, 34)); // WHERE YELPREVIEWMONTH IN (12, 34)
     * $query->filterByYelpreviewmonth(array('min' => 12)); // WHERE YELPREVIEWMONTH >= 12
     * $query->filterByYelpreviewmonth(array('max' => 12)); // WHERE YELPREVIEWMONTH <= 12
     * </code>
     *
     * @param     mixed $yelpreviewmonth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpreviewmonth($yelpreviewmonth = null, $comparison = null)
    {
        if (is_array($yelpreviewmonth)) {
            $useMinMax = false;
            if (isset($yelpreviewmonth['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPREVIEWMONTH, $yelpreviewmonth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpreviewmonth['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPREVIEWMONTH, $yelpreviewmonth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPREVIEWMONTH, $yelpreviewmonth, $comparison);
    }

    /**
     * Filter the query on the YELPREVIEWDAY column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpreviewday(1234); // WHERE YELPREVIEWDAY = 1234
     * $query->filterByYelpreviewday(array(12, 34)); // WHERE YELPREVIEWDAY IN (12, 34)
     * $query->filterByYelpreviewday(array('min' => 12)); // WHERE YELPREVIEWDAY >= 12
     * $query->filterByYelpreviewday(array('max' => 12)); // WHERE YELPREVIEWDAY <= 12
     * </code>
     *
     * @param     mixed $yelpreviewday The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpreviewday($yelpreviewday = null, $comparison = null)
    {
        if (is_array($yelpreviewday)) {
            $useMinMax = false;
            if (isset($yelpreviewday['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPREVIEWDAY, $yelpreviewday['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpreviewday['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPREVIEWDAY, $yelpreviewday['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPREVIEWDAY, $yelpreviewday, $comparison);
    }

    /**
     * Filter the query on the YELPREVIEWCOMMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpreviewcomment('fooValue');   // WHERE YELPREVIEWCOMMENT = 'fooValue'
     * $query->filterByYelpreviewcomment('%fooValue%'); // WHERE YELPREVIEWCOMMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yelpreviewcomment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpreviewcomment($yelpreviewcomment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yelpreviewcomment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yelpreviewcomment)) {
                $yelpreviewcomment = str_replace('*', '%', $yelpreviewcomment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPREVIEWCOMMENT, $yelpreviewcomment, $comparison);
    }

    /**
     * Filter the query on the YELPUSEFULCOMMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpusefulcomment(1234); // WHERE YELPUSEFULCOMMENT = 1234
     * $query->filterByYelpusefulcomment(array(12, 34)); // WHERE YELPUSEFULCOMMENT IN (12, 34)
     * $query->filterByYelpusefulcomment(array('min' => 12)); // WHERE YELPUSEFULCOMMENT >= 12
     * $query->filterByYelpusefulcomment(array('max' => 12)); // WHERE YELPUSEFULCOMMENT <= 12
     * </code>
     *
     * @param     mixed $yelpusefulcomment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpusefulcomment($yelpusefulcomment = null, $comparison = null)
    {
        if (is_array($yelpusefulcomment)) {
            $useMinMax = false;
            if (isset($yelpusefulcomment['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPUSEFULCOMMENT, $yelpusefulcomment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpusefulcomment['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPUSEFULCOMMENT, $yelpusefulcomment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPUSEFULCOMMENT, $yelpusefulcomment, $comparison);
    }

    /**
     * Filter the query on the YELPFUNNYCOMMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpfunnycomment(1234); // WHERE YELPFUNNYCOMMENT = 1234
     * $query->filterByYelpfunnycomment(array(12, 34)); // WHERE YELPFUNNYCOMMENT IN (12, 34)
     * $query->filterByYelpfunnycomment(array('min' => 12)); // WHERE YELPFUNNYCOMMENT >= 12
     * $query->filterByYelpfunnycomment(array('max' => 12)); // WHERE YELPFUNNYCOMMENT <= 12
     * </code>
     *
     * @param     mixed $yelpfunnycomment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpfunnycomment($yelpfunnycomment = null, $comparison = null)
    {
        if (is_array($yelpfunnycomment)) {
            $useMinMax = false;
            if (isset($yelpfunnycomment['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPFUNNYCOMMENT, $yelpfunnycomment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpfunnycomment['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPFUNNYCOMMENT, $yelpfunnycomment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPFUNNYCOMMENT, $yelpfunnycomment, $comparison);
    }

    /**
     * Filter the query on the YELPCOOLCOMMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByYelpcoolcomment(1234); // WHERE YELPCOOLCOMMENT = 1234
     * $query->filterByYelpcoolcomment(array(12, 34)); // WHERE YELPCOOLCOMMENT IN (12, 34)
     * $query->filterByYelpcoolcomment(array('min' => 12)); // WHERE YELPCOOLCOMMENT >= 12
     * $query->filterByYelpcoolcomment(array('max' => 12)); // WHERE YELPCOOLCOMMENT <= 12
     * </code>
     *
     * @param     mixed $yelpcoolcomment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function filterByYelpcoolcomment($yelpcoolcomment = null, $comparison = null)
    {
        if (is_array($yelpcoolcomment)) {
            $useMinMax = false;
            if (isset($yelpcoolcomment['min'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPCOOLCOMMENT, $yelpcoolcomment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yelpcoolcomment['max'])) {
                $this->addUsingAlias(SocialYelpPeer::YELPCOOLCOMMENT, $yelpcoolcomment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SocialYelpPeer::YELPCOOLCOMMENT, $yelpcoolcomment, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SocialYelp $socialYelp Object to remove from the list of results
     *
     * @return SocialYelpQuery The current query, for fluid interface
     */
    public function prune($socialYelp = null)
    {
        if ($socialYelp) {
            $this->addUsingAlias(SocialYelpPeer::ID, $socialYelp->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
