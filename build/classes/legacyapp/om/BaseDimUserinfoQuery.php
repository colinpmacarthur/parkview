<?php


/**
 * Base class that represents a query for the 'dim_userinfo' table.
 *
 *
 *
 * @method DimUserinfoQuery orderByYuserid($order = Criteria::ASC) Order by the yuserid column
 * @method DimUserinfoQuery orderByAvatar($order = Criteria::ASC) Order by the avatar column
 * @method DimUserinfoQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method DimUserinfoQuery orderByBadge($order = Criteria::ASC) Order by the badge column
 * @method DimUserinfoQuery orderByFriendcount($order = Criteria::ASC) Order by the friendcount column
 * @method DimUserinfoQuery orderByReviewcomment($order = Criteria::ASC) Order by the reviewComment column
 * @method DimUserinfoQuery orderByReviewcount($order = Criteria::ASC) Order by the reviewCount column
 * @method DimUserinfoQuery orderByUcomment($order = Criteria::ASC) Order by the ucomment column
 * @method DimUserinfoQuery orderByFcomment($order = Criteria::ASC) Order by the fcomment column
 * @method DimUserinfoQuery orderByCcomment($order = Criteria::ASC) Order by the ccomment column
 * @method DimUserinfoQuery orderByUserid($order = Criteria::ASC) Order by the userid column
 *
 * @method DimUserinfoQuery groupByYuserid() Group by the yuserid column
 * @method DimUserinfoQuery groupByAvatar() Group by the avatar column
 * @method DimUserinfoQuery groupByUsername() Group by the username column
 * @method DimUserinfoQuery groupByBadge() Group by the badge column
 * @method DimUserinfoQuery groupByFriendcount() Group by the friendcount column
 * @method DimUserinfoQuery groupByReviewcomment() Group by the reviewComment column
 * @method DimUserinfoQuery groupByReviewcount() Group by the reviewCount column
 * @method DimUserinfoQuery groupByUcomment() Group by the ucomment column
 * @method DimUserinfoQuery groupByFcomment() Group by the fcomment column
 * @method DimUserinfoQuery groupByCcomment() Group by the ccomment column
 * @method DimUserinfoQuery groupByUserid() Group by the userid column
 *
 * @method DimUserinfoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DimUserinfoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DimUserinfoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DimUserinfoQuery leftJoinFtSocialdata($relationAlias = null) Adds a LEFT JOIN clause to the query using the FtSocialdata relation
 * @method DimUserinfoQuery rightJoinFtSocialdata($relationAlias = null) Adds a RIGHT JOIN clause to the query using the FtSocialdata relation
 * @method DimUserinfoQuery innerJoinFtSocialdata($relationAlias = null) Adds a INNER JOIN clause to the query using the FtSocialdata relation
 *
 * @method DimUserinfo findOne(PropelPDO $con = null) Return the first DimUserinfo matching the query
 * @method DimUserinfo findOneOrCreate(PropelPDO $con = null) Return the first DimUserinfo matching the query, or a new DimUserinfo object populated from the query conditions when no match is found
 *
 * @method DimUserinfo findOneByYuserid(string $yuserid) Return the first DimUserinfo filtered by the yuserid column
 * @method DimUserinfo findOneByAvatar(string $avatar) Return the first DimUserinfo filtered by the avatar column
 * @method DimUserinfo findOneByUsername(string $username) Return the first DimUserinfo filtered by the username column
 * @method DimUserinfo findOneByBadge(string $badge) Return the first DimUserinfo filtered by the badge column
 * @method DimUserinfo findOneByFriendcount(int $friendcount) Return the first DimUserinfo filtered by the friendcount column
 * @method DimUserinfo findOneByReviewcomment(string $reviewComment) Return the first DimUserinfo filtered by the reviewComment column
 * @method DimUserinfo findOneByReviewcount(int $reviewCount) Return the first DimUserinfo filtered by the reviewCount column
 * @method DimUserinfo findOneByUcomment(int $ucomment) Return the first DimUserinfo filtered by the ucomment column
 * @method DimUserinfo findOneByFcomment(int $fcomment) Return the first DimUserinfo filtered by the fcomment column
 * @method DimUserinfo findOneByCcomment(int $ccomment) Return the first DimUserinfo filtered by the ccomment column
 *
 * @method array findByYuserid(string $yuserid) Return DimUserinfo objects filtered by the yuserid column
 * @method array findByAvatar(string $avatar) Return DimUserinfo objects filtered by the avatar column
 * @method array findByUsername(string $username) Return DimUserinfo objects filtered by the username column
 * @method array findByBadge(string $badge) Return DimUserinfo objects filtered by the badge column
 * @method array findByFriendcount(int $friendcount) Return DimUserinfo objects filtered by the friendcount column
 * @method array findByReviewcomment(string $reviewComment) Return DimUserinfo objects filtered by the reviewComment column
 * @method array findByReviewcount(int $reviewCount) Return DimUserinfo objects filtered by the reviewCount column
 * @method array findByUcomment(int $ucomment) Return DimUserinfo objects filtered by the ucomment column
 * @method array findByFcomment(int $fcomment) Return DimUserinfo objects filtered by the fcomment column
 * @method array findByCcomment(int $ccomment) Return DimUserinfo objects filtered by the ccomment column
 * @method array findByUserid(int $userid) Return DimUserinfo objects filtered by the userid column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseDimUserinfoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDimUserinfoQuery object.
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
            $modelName = 'DimUserinfo';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DimUserinfoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DimUserinfoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DimUserinfoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DimUserinfoQuery) {
            return $criteria;
        }
        $query = new DimUserinfoQuery(null, null, $modelAlias);

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
     * @return   DimUserinfo|DimUserinfo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DimUserinfoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DimUserinfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 DimUserinfo A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByUserid($key, $con = null)
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
     * @return                 DimUserinfo A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `yuserid`, `avatar`, `username`, `badge`, `friendcount`, `reviewComment`, `reviewCount`, `ucomment`, `fcomment`, `ccomment`, `userid` FROM `dim_userinfo` WHERE `userid` = :p0';
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
            $obj = new DimUserinfo();
            $obj->hydrate($row);
            DimUserinfoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return DimUserinfo|DimUserinfo[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|DimUserinfo[]|mixed the list of results, formatted by the current formatter
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
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DimUserinfoPeer::USERID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DimUserinfoPeer::USERID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the yuserid column
     *
     * Example usage:
     * <code>
     * $query->filterByYuserid('fooValue');   // WHERE yuserid = 'fooValue'
     * $query->filterByYuserid('%fooValue%'); // WHERE yuserid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yuserid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByYuserid($yuserid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yuserid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yuserid)) {
                $yuserid = str_replace('*', '%', $yuserid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::YUSERID, $yuserid, $comparison);
    }

    /**
     * Filter the query on the avatar column
     *
     * Example usage:
     * <code>
     * $query->filterByAvatar('fooValue');   // WHERE avatar = 'fooValue'
     * $query->filterByAvatar('%fooValue%'); // WHERE avatar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $avatar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByAvatar($avatar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($avatar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $avatar)) {
                $avatar = str_replace('*', '%', $avatar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::AVATAR, $avatar, $comparison);
    }

    /**
     * Filter the query on the username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the badge column
     *
     * Example usage:
     * <code>
     * $query->filterByBadge('fooValue');   // WHERE badge = 'fooValue'
     * $query->filterByBadge('%fooValue%'); // WHERE badge LIKE '%fooValue%'
     * </code>
     *
     * @param     string $badge The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DimUserinfoPeer::BADGE, $badge, $comparison);
    }

    /**
     * Filter the query on the friendcount column
     *
     * Example usage:
     * <code>
     * $query->filterByFriendcount(1234); // WHERE friendcount = 1234
     * $query->filterByFriendcount(array(12, 34)); // WHERE friendcount IN (12, 34)
     * $query->filterByFriendcount(array('min' => 12)); // WHERE friendcount >= 12
     * $query->filterByFriendcount(array('max' => 12)); // WHERE friendcount <= 12
     * </code>
     *
     * @param     mixed $friendcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByFriendcount($friendcount = null, $comparison = null)
    {
        if (is_array($friendcount)) {
            $useMinMax = false;
            if (isset($friendcount['min'])) {
                $this->addUsingAlias(DimUserinfoPeer::FRIENDCOUNT, $friendcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($friendcount['max'])) {
                $this->addUsingAlias(DimUserinfoPeer::FRIENDCOUNT, $friendcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::FRIENDCOUNT, $friendcount, $comparison);
    }

    /**
     * Filter the query on the reviewComment column
     *
     * Example usage:
     * <code>
     * $query->filterByReviewcomment('fooValue');   // WHERE reviewComment = 'fooValue'
     * $query->filterByReviewcomment('%fooValue%'); // WHERE reviewComment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reviewcomment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByReviewcomment($reviewcomment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reviewcomment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reviewcomment)) {
                $reviewcomment = str_replace('*', '%', $reviewcomment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::REVIEWCOMMENT, $reviewcomment, $comparison);
    }

    /**
     * Filter the query on the reviewCount column
     *
     * Example usage:
     * <code>
     * $query->filterByReviewcount(1234); // WHERE reviewCount = 1234
     * $query->filterByReviewcount(array(12, 34)); // WHERE reviewCount IN (12, 34)
     * $query->filterByReviewcount(array('min' => 12)); // WHERE reviewCount >= 12
     * $query->filterByReviewcount(array('max' => 12)); // WHERE reviewCount <= 12
     * </code>
     *
     * @param     mixed $reviewcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByReviewcount($reviewcount = null, $comparison = null)
    {
        if (is_array($reviewcount)) {
            $useMinMax = false;
            if (isset($reviewcount['min'])) {
                $this->addUsingAlias(DimUserinfoPeer::REVIEWCOUNT, $reviewcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reviewcount['max'])) {
                $this->addUsingAlias(DimUserinfoPeer::REVIEWCOUNT, $reviewcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::REVIEWCOUNT, $reviewcount, $comparison);
    }

    /**
     * Filter the query on the ucomment column
     *
     * Example usage:
     * <code>
     * $query->filterByUcomment(1234); // WHERE ucomment = 1234
     * $query->filterByUcomment(array(12, 34)); // WHERE ucomment IN (12, 34)
     * $query->filterByUcomment(array('min' => 12)); // WHERE ucomment >= 12
     * $query->filterByUcomment(array('max' => 12)); // WHERE ucomment <= 12
     * </code>
     *
     * @param     mixed $ucomment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByUcomment($ucomment = null, $comparison = null)
    {
        if (is_array($ucomment)) {
            $useMinMax = false;
            if (isset($ucomment['min'])) {
                $this->addUsingAlias(DimUserinfoPeer::UCOMMENT, $ucomment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ucomment['max'])) {
                $this->addUsingAlias(DimUserinfoPeer::UCOMMENT, $ucomment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::UCOMMENT, $ucomment, $comparison);
    }

    /**
     * Filter the query on the fcomment column
     *
     * Example usage:
     * <code>
     * $query->filterByFcomment(1234); // WHERE fcomment = 1234
     * $query->filterByFcomment(array(12, 34)); // WHERE fcomment IN (12, 34)
     * $query->filterByFcomment(array('min' => 12)); // WHERE fcomment >= 12
     * $query->filterByFcomment(array('max' => 12)); // WHERE fcomment <= 12
     * </code>
     *
     * @param     mixed $fcomment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByFcomment($fcomment = null, $comparison = null)
    {
        if (is_array($fcomment)) {
            $useMinMax = false;
            if (isset($fcomment['min'])) {
                $this->addUsingAlias(DimUserinfoPeer::FCOMMENT, $fcomment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fcomment['max'])) {
                $this->addUsingAlias(DimUserinfoPeer::FCOMMENT, $fcomment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::FCOMMENT, $fcomment, $comparison);
    }

    /**
     * Filter the query on the ccomment column
     *
     * Example usage:
     * <code>
     * $query->filterByCcomment(1234); // WHERE ccomment = 1234
     * $query->filterByCcomment(array(12, 34)); // WHERE ccomment IN (12, 34)
     * $query->filterByCcomment(array('min' => 12)); // WHERE ccomment >= 12
     * $query->filterByCcomment(array('max' => 12)); // WHERE ccomment <= 12
     * </code>
     *
     * @param     mixed $ccomment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByCcomment($ccomment = null, $comparison = null)
    {
        if (is_array($ccomment)) {
            $useMinMax = false;
            if (isset($ccomment['min'])) {
                $this->addUsingAlias(DimUserinfoPeer::CCOMMENT, $ccomment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ccomment['max'])) {
                $this->addUsingAlias(DimUserinfoPeer::CCOMMENT, $ccomment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::CCOMMENT, $ccomment, $comparison);
    }

    /**
     * Filter the query on the userid column
     *
     * Example usage:
     * <code>
     * $query->filterByUserid(1234); // WHERE userid = 1234
     * $query->filterByUserid(array(12, 34)); // WHERE userid IN (12, 34)
     * $query->filterByUserid(array('min' => 12)); // WHERE userid >= 12
     * $query->filterByUserid(array('max' => 12)); // WHERE userid <= 12
     * </code>
     *
     * @param     mixed $userid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function filterByUserid($userid = null, $comparison = null)
    {
        if (is_array($userid)) {
            $useMinMax = false;
            if (isset($userid['min'])) {
                $this->addUsingAlias(DimUserinfoPeer::USERID, $userid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userid['max'])) {
                $this->addUsingAlias(DimUserinfoPeer::USERID, $userid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DimUserinfoPeer::USERID, $userid, $comparison);
    }

    /**
     * Filter the query by a related FtSocialdata object
     *
     * @param   FtSocialdata|PropelObjectCollection $ftSocialdata  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DimUserinfoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByFtSocialdata($ftSocialdata, $comparison = null)
    {
        if ($ftSocialdata instanceof FtSocialdata) {
            return $this
                ->addUsingAlias(DimUserinfoPeer::USERID, $ftSocialdata->getUserid(), $comparison);
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
     * @return DimUserinfoQuery The current query, for fluid interface
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
     * @param   DimUserinfo $dimUserinfo Object to remove from the list of results
     *
     * @return DimUserinfoQuery The current query, for fluid interface
     */
    public function prune($dimUserinfo = null)
    {
        if ($dimUserinfo) {
            $this->addUsingAlias(DimUserinfoPeer::USERID, $dimUserinfo->getUserid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
