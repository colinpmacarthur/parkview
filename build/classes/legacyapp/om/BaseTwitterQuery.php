<?php


/**
 * Base class that represents a query for the 'TWITTER' table.
 *
 *
 *
 * @method TwitterQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TwitterQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method TwitterQuery orderByAccountid($order = Criteria::ASC) Order by the accountID column
 * @method TwitterQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method TwitterQuery orderByTweet($order = Criteria::ASC) Order by the tweet column
 * @method TwitterQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method TwitterQuery orderByBumpass($order = Criteria::ASC) Order by the bumpass column
 * @method TwitterQuery orderByManzanita($order = Criteria::ASC) Order by the manzanita column
 * @method TwitterQuery orderByVisitor($order = Criteria::ASC) Order by the visitor column
 * @method TwitterQuery orderBySulphur($order = Criteria::ASC) Order by the sulphur column
 * @method TwitterQuery orderByKing($order = Criteria::ASC) Order by the king column
 * @method TwitterQuery orderBySouthwest($order = Criteria::ASC) Order by the southwest column
 * @method TwitterQuery orderByWarner($order = Criteria::ASC) Order by the warner column
 * @method TwitterQuery orderBySummit($order = Criteria::ASC) Order by the summit column
 * @method TwitterQuery orderByMount($order = Criteria::ASC) Order by the mount column
 * @method TwitterQuery orderByFantastic($order = Criteria::ASC) Order by the fantastic column
 * @method TwitterQuery orderByBoiling($order = Criteria::ASC) Order by the boiling column
 * @method TwitterQuery orderByDevil($order = Criteria::ASC) Order by the devil column
 * @method TwitterQuery orderByJuniper($order = Criteria::ASC) Order by the juniper column
 * @method TwitterQuery orderByTerminal($order = Criteria::ASC) Order by the terminal column
 * @method TwitterQuery orderBySnag($order = Criteria::ASC) Order by the snag column
 * @method TwitterQuery orderByCliff($order = Criteria::ASC) Order by the cliff column
 *
 * @method TwitterQuery groupById() Group by the ID column
 * @method TwitterQuery groupByName() Group by the name column
 * @method TwitterQuery groupByAccountid() Group by the accountID column
 * @method TwitterQuery groupByDate() Group by the date column
 * @method TwitterQuery groupByTweet() Group by the tweet column
 * @method TwitterQuery groupByUrl() Group by the url column
 * @method TwitterQuery groupByBumpass() Group by the bumpass column
 * @method TwitterQuery groupByManzanita() Group by the manzanita column
 * @method TwitterQuery groupByVisitor() Group by the visitor column
 * @method TwitterQuery groupBySulphur() Group by the sulphur column
 * @method TwitterQuery groupByKing() Group by the king column
 * @method TwitterQuery groupBySouthwest() Group by the southwest column
 * @method TwitterQuery groupByWarner() Group by the warner column
 * @method TwitterQuery groupBySummit() Group by the summit column
 * @method TwitterQuery groupByMount() Group by the mount column
 * @method TwitterQuery groupByFantastic() Group by the fantastic column
 * @method TwitterQuery groupByBoiling() Group by the boiling column
 * @method TwitterQuery groupByDevil() Group by the devil column
 * @method TwitterQuery groupByJuniper() Group by the juniper column
 * @method TwitterQuery groupByTerminal() Group by the terminal column
 * @method TwitterQuery groupBySnag() Group by the snag column
 * @method TwitterQuery groupByCliff() Group by the cliff column
 *
 * @method TwitterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TwitterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TwitterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Twitter findOne(PropelPDO $con = null) Return the first Twitter matching the query
 * @method Twitter findOneOrCreate(PropelPDO $con = null) Return the first Twitter matching the query, or a new Twitter object populated from the query conditions when no match is found
 *
 * @method Twitter findOneByName(int $name) Return the first Twitter filtered by the name column
 * @method Twitter findOneByAccountid(string $accountID) Return the first Twitter filtered by the accountID column
 * @method Twitter findOneByDate(string $date) Return the first Twitter filtered by the date column
 * @method Twitter findOneByTweet(string $tweet) Return the first Twitter filtered by the tweet column
 * @method Twitter findOneByUrl(string $url) Return the first Twitter filtered by the url column
 * @method Twitter findOneByBumpass(int $bumpass) Return the first Twitter filtered by the bumpass column
 * @method Twitter findOneByManzanita(int $manzanita) Return the first Twitter filtered by the manzanita column
 * @method Twitter findOneByVisitor(int $visitor) Return the first Twitter filtered by the visitor column
 * @method Twitter findOneBySulphur(int $sulphur) Return the first Twitter filtered by the sulphur column
 * @method Twitter findOneByKing(int $king) Return the first Twitter filtered by the king column
 * @method Twitter findOneBySouthwest(int $southwest) Return the first Twitter filtered by the southwest column
 * @method Twitter findOneByWarner(int $warner) Return the first Twitter filtered by the warner column
 * @method Twitter findOneBySummit(int $summit) Return the first Twitter filtered by the summit column
 * @method Twitter findOneByMount(int $mount) Return the first Twitter filtered by the mount column
 * @method Twitter findOneByFantastic(int $fantastic) Return the first Twitter filtered by the fantastic column
 * @method Twitter findOneByBoiling(int $boiling) Return the first Twitter filtered by the boiling column
 * @method Twitter findOneByDevil(int $devil) Return the first Twitter filtered by the devil column
 * @method Twitter findOneByJuniper(int $juniper) Return the first Twitter filtered by the juniper column
 * @method Twitter findOneByTerminal(int $terminal) Return the first Twitter filtered by the terminal column
 * @method Twitter findOneBySnag(int $snag) Return the first Twitter filtered by the snag column
 * @method Twitter findOneByCliff(int $cliff) Return the first Twitter filtered by the cliff column
 *
 * @method array findById(int $ID) Return Twitter objects filtered by the ID column
 * @method array findByName(int $name) Return Twitter objects filtered by the name column
 * @method array findByAccountid(string $accountID) Return Twitter objects filtered by the accountID column
 * @method array findByDate(string $date) Return Twitter objects filtered by the date column
 * @method array findByTweet(string $tweet) Return Twitter objects filtered by the tweet column
 * @method array findByUrl(string $url) Return Twitter objects filtered by the url column
 * @method array findByBumpass(int $bumpass) Return Twitter objects filtered by the bumpass column
 * @method array findByManzanita(int $manzanita) Return Twitter objects filtered by the manzanita column
 * @method array findByVisitor(int $visitor) Return Twitter objects filtered by the visitor column
 * @method array findBySulphur(int $sulphur) Return Twitter objects filtered by the sulphur column
 * @method array findByKing(int $king) Return Twitter objects filtered by the king column
 * @method array findBySouthwest(int $southwest) Return Twitter objects filtered by the southwest column
 * @method array findByWarner(int $warner) Return Twitter objects filtered by the warner column
 * @method array findBySummit(int $summit) Return Twitter objects filtered by the summit column
 * @method array findByMount(int $mount) Return Twitter objects filtered by the mount column
 * @method array findByFantastic(int $fantastic) Return Twitter objects filtered by the fantastic column
 * @method array findByBoiling(int $boiling) Return Twitter objects filtered by the boiling column
 * @method array findByDevil(int $devil) Return Twitter objects filtered by the devil column
 * @method array findByJuniper(int $juniper) Return Twitter objects filtered by the juniper column
 * @method array findByTerminal(int $terminal) Return Twitter objects filtered by the terminal column
 * @method array findBySnag(int $snag) Return Twitter objects filtered by the snag column
 * @method array findByCliff(int $cliff) Return Twitter objects filtered by the cliff column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseTwitterQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTwitterQuery object.
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
            $modelName = 'Twitter';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TwitterQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TwitterQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TwitterQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TwitterQuery) {
            return $criteria;
        }
        $query = new TwitterQuery(null, null, $modelAlias);

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
     * @return   Twitter|Twitter[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TwitterPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Twitter A model object, or null if the key is not found
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
     * @return                 Twitter A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `name`, `accountID`, `date`, `tweet`, `url`, `bumpass`, `manzanita`, `visitor`, `sulphur`, `king`, `southwest`, `warner`, `summit`, `mount`, `fantastic`, `boiling`, `devil`, `juniper`, `terminal`, `snag`, `cliff` FROM `TWITTER` WHERE `ID` = :p0';
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
            $obj = new Twitter();
            $obj->hydrate($row);
            TwitterPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Twitter|Twitter[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Twitter[]|mixed the list of results, formatted by the current formatter
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TwitterPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TwitterPeer::ID, $keys, Criteria::IN);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TwitterPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TwitterPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName(1234); // WHERE name = 1234
     * $query->filterByName(array(12, 34)); // WHERE name IN (12, 34)
     * $query->filterByName(array('min' => 12)); // WHERE name >= 12
     * $query->filterByName(array('max' => 12)); // WHERE name <= 12
     * </code>
     *
     * @param     mixed $name The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (is_array($name)) {
            $useMinMax = false;
            if (isset($name['min'])) {
                $this->addUsingAlias(TwitterPeer::NAME, $name['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($name['max'])) {
                $this->addUsingAlias(TwitterPeer::NAME, $name['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the accountID column
     *
     * Example usage:
     * <code>
     * $query->filterByAccountid('fooValue');   // WHERE accountID = 'fooValue'
     * $query->filterByAccountid('%fooValue%'); // WHERE accountID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accountid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByAccountid($accountid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accountid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accountid)) {
                $accountid = str_replace('*', '%', $accountid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TwitterPeer::ACCOUNTID, $accountid, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(TwitterPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(TwitterPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the tweet column
     *
     * Example usage:
     * <code>
     * $query->filterByTweet('fooValue');   // WHERE tweet = 'fooValue'
     * $query->filterByTweet('%fooValue%'); // WHERE tweet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tweet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByTweet($tweet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tweet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tweet)) {
                $tweet = str_replace('*', '%', $tweet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TwitterPeer::TWEET, $tweet, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TwitterPeer::URL, $url, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByBumpass($bumpass = null, $comparison = null)
    {
        if (is_array($bumpass)) {
            $useMinMax = false;
            if (isset($bumpass['min'])) {
                $this->addUsingAlias(TwitterPeer::BUMPASS, $bumpass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bumpass['max'])) {
                $this->addUsingAlias(TwitterPeer::BUMPASS, $bumpass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::BUMPASS, $bumpass, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByManzanita($manzanita = null, $comparison = null)
    {
        if (is_array($manzanita)) {
            $useMinMax = false;
            if (isset($manzanita['min'])) {
                $this->addUsingAlias(TwitterPeer::MANZANITA, $manzanita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($manzanita['max'])) {
                $this->addUsingAlias(TwitterPeer::MANZANITA, $manzanita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::MANZANITA, $manzanita, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByVisitor($visitor = null, $comparison = null)
    {
        if (is_array($visitor)) {
            $useMinMax = false;
            if (isset($visitor['min'])) {
                $this->addUsingAlias(TwitterPeer::VISITOR, $visitor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitor['max'])) {
                $this->addUsingAlias(TwitterPeer::VISITOR, $visitor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::VISITOR, $visitor, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterBySulphur($sulphur = null, $comparison = null)
    {
        if (is_array($sulphur)) {
            $useMinMax = false;
            if (isset($sulphur['min'])) {
                $this->addUsingAlias(TwitterPeer::SULPHUR, $sulphur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sulphur['max'])) {
                $this->addUsingAlias(TwitterPeer::SULPHUR, $sulphur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::SULPHUR, $sulphur, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByKing($king = null, $comparison = null)
    {
        if (is_array($king)) {
            $useMinMax = false;
            if (isset($king['min'])) {
                $this->addUsingAlias(TwitterPeer::KING, $king['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($king['max'])) {
                $this->addUsingAlias(TwitterPeer::KING, $king['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::KING, $king, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterBySouthwest($southwest = null, $comparison = null)
    {
        if (is_array($southwest)) {
            $useMinMax = false;
            if (isset($southwest['min'])) {
                $this->addUsingAlias(TwitterPeer::SOUTHWEST, $southwest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southwest['max'])) {
                $this->addUsingAlias(TwitterPeer::SOUTHWEST, $southwest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::SOUTHWEST, $southwest, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByWarner($warner = null, $comparison = null)
    {
        if (is_array($warner)) {
            $useMinMax = false;
            if (isset($warner['min'])) {
                $this->addUsingAlias(TwitterPeer::WARNER, $warner['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warner['max'])) {
                $this->addUsingAlias(TwitterPeer::WARNER, $warner['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::WARNER, $warner, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterBySummit($summit = null, $comparison = null)
    {
        if (is_array($summit)) {
            $useMinMax = false;
            if (isset($summit['min'])) {
                $this->addUsingAlias(TwitterPeer::SUMMIT, $summit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($summit['max'])) {
                $this->addUsingAlias(TwitterPeer::SUMMIT, $summit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::SUMMIT, $summit, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByMount($mount = null, $comparison = null)
    {
        if (is_array($mount)) {
            $useMinMax = false;
            if (isset($mount['min'])) {
                $this->addUsingAlias(TwitterPeer::MOUNT, $mount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mount['max'])) {
                $this->addUsingAlias(TwitterPeer::MOUNT, $mount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::MOUNT, $mount, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByFantastic($fantastic = null, $comparison = null)
    {
        if (is_array($fantastic)) {
            $useMinMax = false;
            if (isset($fantastic['min'])) {
                $this->addUsingAlias(TwitterPeer::FANTASTIC, $fantastic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fantastic['max'])) {
                $this->addUsingAlias(TwitterPeer::FANTASTIC, $fantastic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::FANTASTIC, $fantastic, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByBoiling($boiling = null, $comparison = null)
    {
        if (is_array($boiling)) {
            $useMinMax = false;
            if (isset($boiling['min'])) {
                $this->addUsingAlias(TwitterPeer::BOILING, $boiling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boiling['max'])) {
                $this->addUsingAlias(TwitterPeer::BOILING, $boiling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::BOILING, $boiling, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByDevil($devil = null, $comparison = null)
    {
        if (is_array($devil)) {
            $useMinMax = false;
            if (isset($devil['min'])) {
                $this->addUsingAlias(TwitterPeer::DEVIL, $devil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devil['max'])) {
                $this->addUsingAlias(TwitterPeer::DEVIL, $devil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::DEVIL, $devil, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByJuniper($juniper = null, $comparison = null)
    {
        if (is_array($juniper)) {
            $useMinMax = false;
            if (isset($juniper['min'])) {
                $this->addUsingAlias(TwitterPeer::JUNIPER, $juniper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($juniper['max'])) {
                $this->addUsingAlias(TwitterPeer::JUNIPER, $juniper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::JUNIPER, $juniper, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByTerminal($terminal = null, $comparison = null)
    {
        if (is_array($terminal)) {
            $useMinMax = false;
            if (isset($terminal['min'])) {
                $this->addUsingAlias(TwitterPeer::TERMINAL, $terminal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($terminal['max'])) {
                $this->addUsingAlias(TwitterPeer::TERMINAL, $terminal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::TERMINAL, $terminal, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterBySnag($snag = null, $comparison = null)
    {
        if (is_array($snag)) {
            $useMinMax = false;
            if (isset($snag['min'])) {
                $this->addUsingAlias(TwitterPeer::SNAG, $snag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($snag['max'])) {
                $this->addUsingAlias(TwitterPeer::SNAG, $snag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::SNAG, $snag, $comparison);
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
     * @return TwitterQuery The current query, for fluid interface
     */
    public function filterByCliff($cliff = null, $comparison = null)
    {
        if (is_array($cliff)) {
            $useMinMax = false;
            if (isset($cliff['min'])) {
                $this->addUsingAlias(TwitterPeer::CLIFF, $cliff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cliff['max'])) {
                $this->addUsingAlias(TwitterPeer::CLIFF, $cliff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TwitterPeer::CLIFF, $cliff, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Twitter $twitter Object to remove from the list of results
     *
     * @return TwitterQuery The current query, for fluid interface
     */
    public function prune($twitter = null)
    {
        if ($twitter) {
            $this->addUsingAlias(TwitterPeer::ID, $twitter->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
