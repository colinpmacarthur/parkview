<?php


/**
 * Base class that represents a query for the 'YELP' table.
 *
 *
 *
 * @method YelpQuery orderById($order = Criteria::ASC) Order by the id column
 * @method YelpQuery orderByPageurl($order = Criteria::ASC) Order by the pageURL column
 * @method YelpQuery orderByUsername($order = Criteria::ASC) Order by the userName column
 * @method YelpQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method YelpQuery orderByRating($order = Criteria::ASC) Order by the rating column
 * @method YelpQuery orderByFriendscount($order = Criteria::ASC) Order by the friendsCount column
 * @method YelpQuery orderByReviewcount($order = Criteria::ASC) Order by the reviewCount column
 * @method YelpQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method YelpQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method YelpQuery orderByUseful($order = Criteria::ASC) Order by the useful column
 * @method YelpQuery orderByFunny($order = Criteria::ASC) Order by the funny column
 * @method YelpQuery orderByCool($order = Criteria::ASC) Order by the cool column
 * @method YelpQuery orderByBumpass($order = Criteria::ASC) Order by the bumpass column
 * @method YelpQuery orderByManzanita($order = Criteria::ASC) Order by the manzanita column
 * @method YelpQuery orderByVisitor($order = Criteria::ASC) Order by the visitor column
 * @method YelpQuery orderBySulphur($order = Criteria::ASC) Order by the sulphur column
 * @method YelpQuery orderByKing($order = Criteria::ASC) Order by the king column
 * @method YelpQuery orderBySouthwest($order = Criteria::ASC) Order by the southwest column
 * @method YelpQuery orderByWarner($order = Criteria::ASC) Order by the warner column
 * @method YelpQuery orderBySummit($order = Criteria::ASC) Order by the summit column
 * @method YelpQuery orderByMount($order = Criteria::ASC) Order by the mount column
 * @method YelpQuery orderByFantastic($order = Criteria::ASC) Order by the fantastic column
 * @method YelpQuery orderByBoiling($order = Criteria::ASC) Order by the boiling column
 * @method YelpQuery orderByDevil($order = Criteria::ASC) Order by the devil column
 * @method YelpQuery orderByJuniper($order = Criteria::ASC) Order by the juniper column
 * @method YelpQuery orderByTerminal($order = Criteria::ASC) Order by the terminal column
 * @method YelpQuery orderBySnag($order = Criteria::ASC) Order by the snag column
 * @method YelpQuery orderByCliff($order = Criteria::ASC) Order by the cliff column
 *
 * @method YelpQuery groupById() Group by the id column
 * @method YelpQuery groupByPageurl() Group by the pageURL column
 * @method YelpQuery groupByUsername() Group by the userName column
 * @method YelpQuery groupByAddress() Group by the address column
 * @method YelpQuery groupByRating() Group by the rating column
 * @method YelpQuery groupByFriendscount() Group by the friendsCount column
 * @method YelpQuery groupByReviewcount() Group by the reviewCount column
 * @method YelpQuery groupByDate() Group by the date column
 * @method YelpQuery groupByComment() Group by the comment column
 * @method YelpQuery groupByUseful() Group by the useful column
 * @method YelpQuery groupByFunny() Group by the funny column
 * @method YelpQuery groupByCool() Group by the cool column
 * @method YelpQuery groupByBumpass() Group by the bumpass column
 * @method YelpQuery groupByManzanita() Group by the manzanita column
 * @method YelpQuery groupByVisitor() Group by the visitor column
 * @method YelpQuery groupBySulphur() Group by the sulphur column
 * @method YelpQuery groupByKing() Group by the king column
 * @method YelpQuery groupBySouthwest() Group by the southwest column
 * @method YelpQuery groupByWarner() Group by the warner column
 * @method YelpQuery groupBySummit() Group by the summit column
 * @method YelpQuery groupByMount() Group by the mount column
 * @method YelpQuery groupByFantastic() Group by the fantastic column
 * @method YelpQuery groupByBoiling() Group by the boiling column
 * @method YelpQuery groupByDevil() Group by the devil column
 * @method YelpQuery groupByJuniper() Group by the juniper column
 * @method YelpQuery groupByTerminal() Group by the terminal column
 * @method YelpQuery groupBySnag() Group by the snag column
 * @method YelpQuery groupByCliff() Group by the cliff column
 *
 * @method YelpQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method YelpQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method YelpQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Yelp findOne(PropelPDO $con = null) Return the first Yelp matching the query
 * @method Yelp findOneOrCreate(PropelPDO $con = null) Return the first Yelp matching the query, or a new Yelp object populated from the query conditions when no match is found
 *
 * @method Yelp findOneByPageurl(string $pageURL) Return the first Yelp filtered by the pageURL column
 * @method Yelp findOneByUsername(string $userName) Return the first Yelp filtered by the userName column
 * @method Yelp findOneByAddress(string $address) Return the first Yelp filtered by the address column
 * @method Yelp findOneByRating(int $rating) Return the first Yelp filtered by the rating column
 * @method Yelp findOneByFriendscount(int $friendsCount) Return the first Yelp filtered by the friendsCount column
 * @method Yelp findOneByReviewcount(int $reviewCount) Return the first Yelp filtered by the reviewCount column
 * @method Yelp findOneByDate(string $date) Return the first Yelp filtered by the date column
 * @method Yelp findOneByComment(string $comment) Return the first Yelp filtered by the comment column
 * @method Yelp findOneByUseful(int $useful) Return the first Yelp filtered by the useful column
 * @method Yelp findOneByFunny(int $funny) Return the first Yelp filtered by the funny column
 * @method Yelp findOneByCool(int $cool) Return the first Yelp filtered by the cool column
 * @method Yelp findOneByBumpass(int $bumpass) Return the first Yelp filtered by the bumpass column
 * @method Yelp findOneByManzanita(int $manzanita) Return the first Yelp filtered by the manzanita column
 * @method Yelp findOneByVisitor(int $visitor) Return the first Yelp filtered by the visitor column
 * @method Yelp findOneBySulphur(int $sulphur) Return the first Yelp filtered by the sulphur column
 * @method Yelp findOneByKing(int $king) Return the first Yelp filtered by the king column
 * @method Yelp findOneBySouthwest(int $southwest) Return the first Yelp filtered by the southwest column
 * @method Yelp findOneByWarner(int $warner) Return the first Yelp filtered by the warner column
 * @method Yelp findOneBySummit(int $summit) Return the first Yelp filtered by the summit column
 * @method Yelp findOneByMount(int $mount) Return the first Yelp filtered by the mount column
 * @method Yelp findOneByFantastic(int $fantastic) Return the first Yelp filtered by the fantastic column
 * @method Yelp findOneByBoiling(int $boiling) Return the first Yelp filtered by the boiling column
 * @method Yelp findOneByDevil(int $devil) Return the first Yelp filtered by the devil column
 * @method Yelp findOneByJuniper(int $juniper) Return the first Yelp filtered by the juniper column
 * @method Yelp findOneByTerminal(int $terminal) Return the first Yelp filtered by the terminal column
 * @method Yelp findOneBySnag(int $snag) Return the first Yelp filtered by the snag column
 * @method Yelp findOneByCliff(int $cliff) Return the first Yelp filtered by the cliff column
 *
 * @method array findById(int $id) Return Yelp objects filtered by the id column
 * @method array findByPageurl(string $pageURL) Return Yelp objects filtered by the pageURL column
 * @method array findByUsername(string $userName) Return Yelp objects filtered by the userName column
 * @method array findByAddress(string $address) Return Yelp objects filtered by the address column
 * @method array findByRating(int $rating) Return Yelp objects filtered by the rating column
 * @method array findByFriendscount(int $friendsCount) Return Yelp objects filtered by the friendsCount column
 * @method array findByReviewcount(int $reviewCount) Return Yelp objects filtered by the reviewCount column
 * @method array findByDate(string $date) Return Yelp objects filtered by the date column
 * @method array findByComment(string $comment) Return Yelp objects filtered by the comment column
 * @method array findByUseful(int $useful) Return Yelp objects filtered by the useful column
 * @method array findByFunny(int $funny) Return Yelp objects filtered by the funny column
 * @method array findByCool(int $cool) Return Yelp objects filtered by the cool column
 * @method array findByBumpass(int $bumpass) Return Yelp objects filtered by the bumpass column
 * @method array findByManzanita(int $manzanita) Return Yelp objects filtered by the manzanita column
 * @method array findByVisitor(int $visitor) Return Yelp objects filtered by the visitor column
 * @method array findBySulphur(int $sulphur) Return Yelp objects filtered by the sulphur column
 * @method array findByKing(int $king) Return Yelp objects filtered by the king column
 * @method array findBySouthwest(int $southwest) Return Yelp objects filtered by the southwest column
 * @method array findByWarner(int $warner) Return Yelp objects filtered by the warner column
 * @method array findBySummit(int $summit) Return Yelp objects filtered by the summit column
 * @method array findByMount(int $mount) Return Yelp objects filtered by the mount column
 * @method array findByFantastic(int $fantastic) Return Yelp objects filtered by the fantastic column
 * @method array findByBoiling(int $boiling) Return Yelp objects filtered by the boiling column
 * @method array findByDevil(int $devil) Return Yelp objects filtered by the devil column
 * @method array findByJuniper(int $juniper) Return Yelp objects filtered by the juniper column
 * @method array findByTerminal(int $terminal) Return Yelp objects filtered by the terminal column
 * @method array findBySnag(int $snag) Return Yelp objects filtered by the snag column
 * @method array findByCliff(int $cliff) Return Yelp objects filtered by the cliff column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseYelpQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseYelpQuery object.
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
            $modelName = 'Yelp';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new YelpQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   YelpQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return YelpQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof YelpQuery) {
            return $criteria;
        }
        $query = new YelpQuery(null, null, $modelAlias);

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
     * @return   Yelp|Yelp[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = YelpPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Yelp A model object, or null if the key is not found
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
     * @return                 Yelp A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `pageURL`, `userName`, `address`, `rating`, `friendsCount`, `reviewCount`, `date`, `comment`, `useful`, `funny`, `cool`, `bumpass`, `manzanita`, `visitor`, `sulphur`, `king`, `southwest`, `warner`, `summit`, `mount`, `fantastic`, `boiling`, `devil`, `juniper`, `terminal`, `snag`, `cliff` FROM `YELP` WHERE `id` = :p0';
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
            $obj = new Yelp();
            $obj->hydrate($row);
            YelpPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Yelp|Yelp[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Yelp[]|mixed the list of results, formatted by the current formatter
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
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(YelpPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(YelpPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(YelpPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(YelpPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the pageURL column
     *
     * Example usage:
     * <code>
     * $query->filterByPageurl('fooValue');   // WHERE pageURL = 'fooValue'
     * $query->filterByPageurl('%fooValue%'); // WHERE pageURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pageurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByPageurl($pageurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pageurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pageurl)) {
                $pageurl = str_replace('*', '%', $pageurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(YelpPeer::PAGEURL, $pageurl, $comparison);
    }

    /**
     * Filter the query on the userName column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE userName = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE userName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(YelpPeer::USERNAME, $username, $comparison);
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
     * @return YelpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(YelpPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the rating column
     *
     * Example usage:
     * <code>
     * $query->filterByRating(1234); // WHERE rating = 1234
     * $query->filterByRating(array(12, 34)); // WHERE rating IN (12, 34)
     * $query->filterByRating(array('min' => 12)); // WHERE rating >= 12
     * $query->filterByRating(array('max' => 12)); // WHERE rating <= 12
     * </code>
     *
     * @param     mixed $rating The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByRating($rating = null, $comparison = null)
    {
        if (is_array($rating)) {
            $useMinMax = false;
            if (isset($rating['min'])) {
                $this->addUsingAlias(YelpPeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rating['max'])) {
                $this->addUsingAlias(YelpPeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::RATING, $rating, $comparison);
    }

    /**
     * Filter the query on the friendsCount column
     *
     * Example usage:
     * <code>
     * $query->filterByFriendscount(1234); // WHERE friendsCount = 1234
     * $query->filterByFriendscount(array(12, 34)); // WHERE friendsCount IN (12, 34)
     * $query->filterByFriendscount(array('min' => 12)); // WHERE friendsCount >= 12
     * $query->filterByFriendscount(array('max' => 12)); // WHERE friendsCount <= 12
     * </code>
     *
     * @param     mixed $friendscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByFriendscount($friendscount = null, $comparison = null)
    {
        if (is_array($friendscount)) {
            $useMinMax = false;
            if (isset($friendscount['min'])) {
                $this->addUsingAlias(YelpPeer::FRIENDSCOUNT, $friendscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($friendscount['max'])) {
                $this->addUsingAlias(YelpPeer::FRIENDSCOUNT, $friendscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::FRIENDSCOUNT, $friendscount, $comparison);
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
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByReviewcount($reviewcount = null, $comparison = null)
    {
        if (is_array($reviewcount)) {
            $useMinMax = false;
            if (isset($reviewcount['min'])) {
                $this->addUsingAlias(YelpPeer::REVIEWCOUNT, $reviewcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reviewcount['max'])) {
                $this->addUsingAlias(YelpPeer::REVIEWCOUNT, $reviewcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::REVIEWCOUNT, $reviewcount, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date < '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(YelpPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(YelpPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(YelpPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the useful column
     *
     * Example usage:
     * <code>
     * $query->filterByUseful(1234); // WHERE useful = 1234
     * $query->filterByUseful(array(12, 34)); // WHERE useful IN (12, 34)
     * $query->filterByUseful(array('min' => 12)); // WHERE useful >= 12
     * $query->filterByUseful(array('max' => 12)); // WHERE useful <= 12
     * </code>
     *
     * @param     mixed $useful The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByUseful($useful = null, $comparison = null)
    {
        if (is_array($useful)) {
            $useMinMax = false;
            if (isset($useful['min'])) {
                $this->addUsingAlias(YelpPeer::USEFUL, $useful['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($useful['max'])) {
                $this->addUsingAlias(YelpPeer::USEFUL, $useful['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::USEFUL, $useful, $comparison);
    }

    /**
     * Filter the query on the funny column
     *
     * Example usage:
     * <code>
     * $query->filterByFunny(1234); // WHERE funny = 1234
     * $query->filterByFunny(array(12, 34)); // WHERE funny IN (12, 34)
     * $query->filterByFunny(array('min' => 12)); // WHERE funny >= 12
     * $query->filterByFunny(array('max' => 12)); // WHERE funny <= 12
     * </code>
     *
     * @param     mixed $funny The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByFunny($funny = null, $comparison = null)
    {
        if (is_array($funny)) {
            $useMinMax = false;
            if (isset($funny['min'])) {
                $this->addUsingAlias(YelpPeer::FUNNY, $funny['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($funny['max'])) {
                $this->addUsingAlias(YelpPeer::FUNNY, $funny['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::FUNNY, $funny, $comparison);
    }

    /**
     * Filter the query on the cool column
     *
     * Example usage:
     * <code>
     * $query->filterByCool(1234); // WHERE cool = 1234
     * $query->filterByCool(array(12, 34)); // WHERE cool IN (12, 34)
     * $query->filterByCool(array('min' => 12)); // WHERE cool >= 12
     * $query->filterByCool(array('max' => 12)); // WHERE cool <= 12
     * </code>
     *
     * @param     mixed $cool The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByCool($cool = null, $comparison = null)
    {
        if (is_array($cool)) {
            $useMinMax = false;
            if (isset($cool['min'])) {
                $this->addUsingAlias(YelpPeer::COOL, $cool['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cool['max'])) {
                $this->addUsingAlias(YelpPeer::COOL, $cool['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::COOL, $cool, $comparison);
    }

    /**
     * Filter the query on the bumpass column
     *
     * Example usage:
     * <code>
     * $query->filterByBumpass(1234); // WHERE bumpass = 1234
     * $query->filterByBumpass(array(12, 34)); // WHERE bumpass IN (12, 34)
     * $query->filterByBumpass(array('min' => 12)); // WHERE bumpass >= 12
     * $query->filterByBumpass(array('max' => 12)); // WHERE bumpass <= 12
     * </code>
     *
     * @param     mixed $bumpass The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByBumpass($bumpass = null, $comparison = null)
    {
        if (is_array($bumpass)) {
            $useMinMax = false;
            if (isset($bumpass['min'])) {
                $this->addUsingAlias(YelpPeer::BUMPASS, $bumpass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bumpass['max'])) {
                $this->addUsingAlias(YelpPeer::BUMPASS, $bumpass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::BUMPASS, $bumpass, $comparison);
    }

    /**
     * Filter the query on the manzanita column
     *
     * Example usage:
     * <code>
     * $query->filterByManzanita(1234); // WHERE manzanita = 1234
     * $query->filterByManzanita(array(12, 34)); // WHERE manzanita IN (12, 34)
     * $query->filterByManzanita(array('min' => 12)); // WHERE manzanita >= 12
     * $query->filterByManzanita(array('max' => 12)); // WHERE manzanita <= 12
     * </code>
     *
     * @param     mixed $manzanita The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByManzanita($manzanita = null, $comparison = null)
    {
        if (is_array($manzanita)) {
            $useMinMax = false;
            if (isset($manzanita['min'])) {
                $this->addUsingAlias(YelpPeer::MANZANITA, $manzanita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($manzanita['max'])) {
                $this->addUsingAlias(YelpPeer::MANZANITA, $manzanita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::MANZANITA, $manzanita, $comparison);
    }

    /**
     * Filter the query on the visitor column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitor(1234); // WHERE visitor = 1234
     * $query->filterByVisitor(array(12, 34)); // WHERE visitor IN (12, 34)
     * $query->filterByVisitor(array('min' => 12)); // WHERE visitor >= 12
     * $query->filterByVisitor(array('max' => 12)); // WHERE visitor <= 12
     * </code>
     *
     * @param     mixed $visitor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByVisitor($visitor = null, $comparison = null)
    {
        if (is_array($visitor)) {
            $useMinMax = false;
            if (isset($visitor['min'])) {
                $this->addUsingAlias(YelpPeer::VISITOR, $visitor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitor['max'])) {
                $this->addUsingAlias(YelpPeer::VISITOR, $visitor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::VISITOR, $visitor, $comparison);
    }

    /**
     * Filter the query on the sulphur column
     *
     * Example usage:
     * <code>
     * $query->filterBySulphur(1234); // WHERE sulphur = 1234
     * $query->filterBySulphur(array(12, 34)); // WHERE sulphur IN (12, 34)
     * $query->filterBySulphur(array('min' => 12)); // WHERE sulphur >= 12
     * $query->filterBySulphur(array('max' => 12)); // WHERE sulphur <= 12
     * </code>
     *
     * @param     mixed $sulphur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterBySulphur($sulphur = null, $comparison = null)
    {
        if (is_array($sulphur)) {
            $useMinMax = false;
            if (isset($sulphur['min'])) {
                $this->addUsingAlias(YelpPeer::SULPHUR, $sulphur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sulphur['max'])) {
                $this->addUsingAlias(YelpPeer::SULPHUR, $sulphur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::SULPHUR, $sulphur, $comparison);
    }

    /**
     * Filter the query on the king column
     *
     * Example usage:
     * <code>
     * $query->filterByKing(1234); // WHERE king = 1234
     * $query->filterByKing(array(12, 34)); // WHERE king IN (12, 34)
     * $query->filterByKing(array('min' => 12)); // WHERE king >= 12
     * $query->filterByKing(array('max' => 12)); // WHERE king <= 12
     * </code>
     *
     * @param     mixed $king The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByKing($king = null, $comparison = null)
    {
        if (is_array($king)) {
            $useMinMax = false;
            if (isset($king['min'])) {
                $this->addUsingAlias(YelpPeer::KING, $king['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($king['max'])) {
                $this->addUsingAlias(YelpPeer::KING, $king['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::KING, $king, $comparison);
    }

    /**
     * Filter the query on the southwest column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthwest(1234); // WHERE southwest = 1234
     * $query->filterBySouthwest(array(12, 34)); // WHERE southwest IN (12, 34)
     * $query->filterBySouthwest(array('min' => 12)); // WHERE southwest >= 12
     * $query->filterBySouthwest(array('max' => 12)); // WHERE southwest <= 12
     * </code>
     *
     * @param     mixed $southwest The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterBySouthwest($southwest = null, $comparison = null)
    {
        if (is_array($southwest)) {
            $useMinMax = false;
            if (isset($southwest['min'])) {
                $this->addUsingAlias(YelpPeer::SOUTHWEST, $southwest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southwest['max'])) {
                $this->addUsingAlias(YelpPeer::SOUTHWEST, $southwest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::SOUTHWEST, $southwest, $comparison);
    }

    /**
     * Filter the query on the warner column
     *
     * Example usage:
     * <code>
     * $query->filterByWarner(1234); // WHERE warner = 1234
     * $query->filterByWarner(array(12, 34)); // WHERE warner IN (12, 34)
     * $query->filterByWarner(array('min' => 12)); // WHERE warner >= 12
     * $query->filterByWarner(array('max' => 12)); // WHERE warner <= 12
     * </code>
     *
     * @param     mixed $warner The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByWarner($warner = null, $comparison = null)
    {
        if (is_array($warner)) {
            $useMinMax = false;
            if (isset($warner['min'])) {
                $this->addUsingAlias(YelpPeer::WARNER, $warner['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warner['max'])) {
                $this->addUsingAlias(YelpPeer::WARNER, $warner['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::WARNER, $warner, $comparison);
    }

    /**
     * Filter the query on the summit column
     *
     * Example usage:
     * <code>
     * $query->filterBySummit(1234); // WHERE summit = 1234
     * $query->filterBySummit(array(12, 34)); // WHERE summit IN (12, 34)
     * $query->filterBySummit(array('min' => 12)); // WHERE summit >= 12
     * $query->filterBySummit(array('max' => 12)); // WHERE summit <= 12
     * </code>
     *
     * @param     mixed $summit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterBySummit($summit = null, $comparison = null)
    {
        if (is_array($summit)) {
            $useMinMax = false;
            if (isset($summit['min'])) {
                $this->addUsingAlias(YelpPeer::SUMMIT, $summit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($summit['max'])) {
                $this->addUsingAlias(YelpPeer::SUMMIT, $summit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::SUMMIT, $summit, $comparison);
    }

    /**
     * Filter the query on the mount column
     *
     * Example usage:
     * <code>
     * $query->filterByMount(1234); // WHERE mount = 1234
     * $query->filterByMount(array(12, 34)); // WHERE mount IN (12, 34)
     * $query->filterByMount(array('min' => 12)); // WHERE mount >= 12
     * $query->filterByMount(array('max' => 12)); // WHERE mount <= 12
     * </code>
     *
     * @param     mixed $mount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByMount($mount = null, $comparison = null)
    {
        if (is_array($mount)) {
            $useMinMax = false;
            if (isset($mount['min'])) {
                $this->addUsingAlias(YelpPeer::MOUNT, $mount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mount['max'])) {
                $this->addUsingAlias(YelpPeer::MOUNT, $mount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::MOUNT, $mount, $comparison);
    }

    /**
     * Filter the query on the fantastic column
     *
     * Example usage:
     * <code>
     * $query->filterByFantastic(1234); // WHERE fantastic = 1234
     * $query->filterByFantastic(array(12, 34)); // WHERE fantastic IN (12, 34)
     * $query->filterByFantastic(array('min' => 12)); // WHERE fantastic >= 12
     * $query->filterByFantastic(array('max' => 12)); // WHERE fantastic <= 12
     * </code>
     *
     * @param     mixed $fantastic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByFantastic($fantastic = null, $comparison = null)
    {
        if (is_array($fantastic)) {
            $useMinMax = false;
            if (isset($fantastic['min'])) {
                $this->addUsingAlias(YelpPeer::FANTASTIC, $fantastic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fantastic['max'])) {
                $this->addUsingAlias(YelpPeer::FANTASTIC, $fantastic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::FANTASTIC, $fantastic, $comparison);
    }

    /**
     * Filter the query on the boiling column
     *
     * Example usage:
     * <code>
     * $query->filterByBoiling(1234); // WHERE boiling = 1234
     * $query->filterByBoiling(array(12, 34)); // WHERE boiling IN (12, 34)
     * $query->filterByBoiling(array('min' => 12)); // WHERE boiling >= 12
     * $query->filterByBoiling(array('max' => 12)); // WHERE boiling <= 12
     * </code>
     *
     * @param     mixed $boiling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByBoiling($boiling = null, $comparison = null)
    {
        if (is_array($boiling)) {
            $useMinMax = false;
            if (isset($boiling['min'])) {
                $this->addUsingAlias(YelpPeer::BOILING, $boiling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boiling['max'])) {
                $this->addUsingAlias(YelpPeer::BOILING, $boiling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::BOILING, $boiling, $comparison);
    }

    /**
     * Filter the query on the devil column
     *
     * Example usage:
     * <code>
     * $query->filterByDevil(1234); // WHERE devil = 1234
     * $query->filterByDevil(array(12, 34)); // WHERE devil IN (12, 34)
     * $query->filterByDevil(array('min' => 12)); // WHERE devil >= 12
     * $query->filterByDevil(array('max' => 12)); // WHERE devil <= 12
     * </code>
     *
     * @param     mixed $devil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByDevil($devil = null, $comparison = null)
    {
        if (is_array($devil)) {
            $useMinMax = false;
            if (isset($devil['min'])) {
                $this->addUsingAlias(YelpPeer::DEVIL, $devil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devil['max'])) {
                $this->addUsingAlias(YelpPeer::DEVIL, $devil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::DEVIL, $devil, $comparison);
    }

    /**
     * Filter the query on the juniper column
     *
     * Example usage:
     * <code>
     * $query->filterByJuniper(1234); // WHERE juniper = 1234
     * $query->filterByJuniper(array(12, 34)); // WHERE juniper IN (12, 34)
     * $query->filterByJuniper(array('min' => 12)); // WHERE juniper >= 12
     * $query->filterByJuniper(array('max' => 12)); // WHERE juniper <= 12
     * </code>
     *
     * @param     mixed $juniper The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByJuniper($juniper = null, $comparison = null)
    {
        if (is_array($juniper)) {
            $useMinMax = false;
            if (isset($juniper['min'])) {
                $this->addUsingAlias(YelpPeer::JUNIPER, $juniper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($juniper['max'])) {
                $this->addUsingAlias(YelpPeer::JUNIPER, $juniper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::JUNIPER, $juniper, $comparison);
    }

    /**
     * Filter the query on the terminal column
     *
     * Example usage:
     * <code>
     * $query->filterByTerminal(1234); // WHERE terminal = 1234
     * $query->filterByTerminal(array(12, 34)); // WHERE terminal IN (12, 34)
     * $query->filterByTerminal(array('min' => 12)); // WHERE terminal >= 12
     * $query->filterByTerminal(array('max' => 12)); // WHERE terminal <= 12
     * </code>
     *
     * @param     mixed $terminal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByTerminal($terminal = null, $comparison = null)
    {
        if (is_array($terminal)) {
            $useMinMax = false;
            if (isset($terminal['min'])) {
                $this->addUsingAlias(YelpPeer::TERMINAL, $terminal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($terminal['max'])) {
                $this->addUsingAlias(YelpPeer::TERMINAL, $terminal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::TERMINAL, $terminal, $comparison);
    }

    /**
     * Filter the query on the snag column
     *
     * Example usage:
     * <code>
     * $query->filterBySnag(1234); // WHERE snag = 1234
     * $query->filterBySnag(array(12, 34)); // WHERE snag IN (12, 34)
     * $query->filterBySnag(array('min' => 12)); // WHERE snag >= 12
     * $query->filterBySnag(array('max' => 12)); // WHERE snag <= 12
     * </code>
     *
     * @param     mixed $snag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterBySnag($snag = null, $comparison = null)
    {
        if (is_array($snag)) {
            $useMinMax = false;
            if (isset($snag['min'])) {
                $this->addUsingAlias(YelpPeer::SNAG, $snag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($snag['max'])) {
                $this->addUsingAlias(YelpPeer::SNAG, $snag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::SNAG, $snag, $comparison);
    }

    /**
     * Filter the query on the cliff column
     *
     * Example usage:
     * <code>
     * $query->filterByCliff(1234); // WHERE cliff = 1234
     * $query->filterByCliff(array(12, 34)); // WHERE cliff IN (12, 34)
     * $query->filterByCliff(array('min' => 12)); // WHERE cliff >= 12
     * $query->filterByCliff(array('max' => 12)); // WHERE cliff <= 12
     * </code>
     *
     * @param     mixed $cliff The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function filterByCliff($cliff = null, $comparison = null)
    {
        if (is_array($cliff)) {
            $useMinMax = false;
            if (isset($cliff['min'])) {
                $this->addUsingAlias(YelpPeer::CLIFF, $cliff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cliff['max'])) {
                $this->addUsingAlias(YelpPeer::CLIFF, $cliff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(YelpPeer::CLIFF, $cliff, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Yelp $yelp Object to remove from the list of results
     *
     * @return YelpQuery The current query, for fluid interface
     */
    public function prune($yelp = null)
    {
        if ($yelp) {
            $this->addUsingAlias(YelpPeer::ID, $yelp->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
