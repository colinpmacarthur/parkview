<?php


/**
 * Base class that represents a query for the 'TRIP_ADVISOR' table.
 *
 *
 *
 * @method TripAdvisorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method TripAdvisorQuery orderByPageurl($order = Criteria::ASC) Order by the pageURL column
 * @method TripAdvisorQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method TripAdvisorQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method TripAdvisorQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method TripAdvisorQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method TripAdvisorQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method TripAdvisorQuery orderByRating($order = Criteria::ASC) Order by the rating column
 * @method TripAdvisorQuery orderByBumpass($order = Criteria::ASC) Order by the bumpass column
 * @method TripAdvisorQuery orderByManzanita($order = Criteria::ASC) Order by the manzanita column
 * @method TripAdvisorQuery orderByVisitor($order = Criteria::ASC) Order by the visitor column
 * @method TripAdvisorQuery orderBySulphur($order = Criteria::ASC) Order by the sulphur column
 * @method TripAdvisorQuery orderByKing($order = Criteria::ASC) Order by the king column
 * @method TripAdvisorQuery orderBySouthwest($order = Criteria::ASC) Order by the southwest column
 * @method TripAdvisorQuery orderByWarner($order = Criteria::ASC) Order by the warner column
 * @method TripAdvisorQuery orderBySummit($order = Criteria::ASC) Order by the summit column
 * @method TripAdvisorQuery orderByMount($order = Criteria::ASC) Order by the mount column
 * @method TripAdvisorQuery orderByFantastic($order = Criteria::ASC) Order by the fantastic column
 * @method TripAdvisorQuery orderByBoiling($order = Criteria::ASC) Order by the boiling column
 * @method TripAdvisorQuery orderByDevil($order = Criteria::ASC) Order by the devil column
 * @method TripAdvisorQuery orderByJuniper($order = Criteria::ASC) Order by the juniper column
 * @method TripAdvisorQuery orderByTerminal($order = Criteria::ASC) Order by the terminal column
 * @method TripAdvisorQuery orderBySnag($order = Criteria::ASC) Order by the snag column
 * @method TripAdvisorQuery orderByCliff($order = Criteria::ASC) Order by the cliff column
 *
 * @method TripAdvisorQuery groupById() Group by the id column
 * @method TripAdvisorQuery groupByPageurl() Group by the pageURL column
 * @method TripAdvisorQuery groupByTitle() Group by the title column
 * @method TripAdvisorQuery groupByCity() Group by the city column
 * @method TripAdvisorQuery groupByState() Group by the state column
 * @method TripAdvisorQuery groupByDate() Group by the date column
 * @method TripAdvisorQuery groupByComment() Group by the comment column
 * @method TripAdvisorQuery groupByRating() Group by the rating column
 * @method TripAdvisorQuery groupByBumpass() Group by the bumpass column
 * @method TripAdvisorQuery groupByManzanita() Group by the manzanita column
 * @method TripAdvisorQuery groupByVisitor() Group by the visitor column
 * @method TripAdvisorQuery groupBySulphur() Group by the sulphur column
 * @method TripAdvisorQuery groupByKing() Group by the king column
 * @method TripAdvisorQuery groupBySouthwest() Group by the southwest column
 * @method TripAdvisorQuery groupByWarner() Group by the warner column
 * @method TripAdvisorQuery groupBySummit() Group by the summit column
 * @method TripAdvisorQuery groupByMount() Group by the mount column
 * @method TripAdvisorQuery groupByFantastic() Group by the fantastic column
 * @method TripAdvisorQuery groupByBoiling() Group by the boiling column
 * @method TripAdvisorQuery groupByDevil() Group by the devil column
 * @method TripAdvisorQuery groupByJuniper() Group by the juniper column
 * @method TripAdvisorQuery groupByTerminal() Group by the terminal column
 * @method TripAdvisorQuery groupBySnag() Group by the snag column
 * @method TripAdvisorQuery groupByCliff() Group by the cliff column
 *
 * @method TripAdvisorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TripAdvisorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TripAdvisorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TripAdvisor findOne(PropelPDO $con = null) Return the first TripAdvisor matching the query
 * @method TripAdvisor findOneOrCreate(PropelPDO $con = null) Return the first TripAdvisor matching the query, or a new TripAdvisor object populated from the query conditions when no match is found
 *
 * @method TripAdvisor findOneByPageurl(string $pageURL) Return the first TripAdvisor filtered by the pageURL column
 * @method TripAdvisor findOneByTitle(string $title) Return the first TripAdvisor filtered by the title column
 * @method TripAdvisor findOneByCity(string $city) Return the first TripAdvisor filtered by the city column
 * @method TripAdvisor findOneByState(string $state) Return the first TripAdvisor filtered by the state column
 * @method TripAdvisor findOneByDate(string $date) Return the first TripAdvisor filtered by the date column
 * @method TripAdvisor findOneByComment(string $comment) Return the first TripAdvisor filtered by the comment column
 * @method TripAdvisor findOneByRating(int $rating) Return the first TripAdvisor filtered by the rating column
 * @method TripAdvisor findOneByBumpass(int $bumpass) Return the first TripAdvisor filtered by the bumpass column
 * @method TripAdvisor findOneByManzanita(int $manzanita) Return the first TripAdvisor filtered by the manzanita column
 * @method TripAdvisor findOneByVisitor(int $visitor) Return the first TripAdvisor filtered by the visitor column
 * @method TripAdvisor findOneBySulphur(int $sulphur) Return the first TripAdvisor filtered by the sulphur column
 * @method TripAdvisor findOneByKing(int $king) Return the first TripAdvisor filtered by the king column
 * @method TripAdvisor findOneBySouthwest(int $southwest) Return the first TripAdvisor filtered by the southwest column
 * @method TripAdvisor findOneByWarner(int $warner) Return the first TripAdvisor filtered by the warner column
 * @method TripAdvisor findOneBySummit(int $summit) Return the first TripAdvisor filtered by the summit column
 * @method TripAdvisor findOneByMount(int $mount) Return the first TripAdvisor filtered by the mount column
 * @method TripAdvisor findOneByFantastic(int $fantastic) Return the first TripAdvisor filtered by the fantastic column
 * @method TripAdvisor findOneByBoiling(int $boiling) Return the first TripAdvisor filtered by the boiling column
 * @method TripAdvisor findOneByDevil(int $devil) Return the first TripAdvisor filtered by the devil column
 * @method TripAdvisor findOneByJuniper(int $juniper) Return the first TripAdvisor filtered by the juniper column
 * @method TripAdvisor findOneByTerminal(int $terminal) Return the first TripAdvisor filtered by the terminal column
 * @method TripAdvisor findOneBySnag(int $snag) Return the first TripAdvisor filtered by the snag column
 * @method TripAdvisor findOneByCliff(int $cliff) Return the first TripAdvisor filtered by the cliff column
 *
 * @method array findById(int $id) Return TripAdvisor objects filtered by the id column
 * @method array findByPageurl(string $pageURL) Return TripAdvisor objects filtered by the pageURL column
 * @method array findByTitle(string $title) Return TripAdvisor objects filtered by the title column
 * @method array findByCity(string $city) Return TripAdvisor objects filtered by the city column
 * @method array findByState(string $state) Return TripAdvisor objects filtered by the state column
 * @method array findByDate(string $date) Return TripAdvisor objects filtered by the date column
 * @method array findByComment(string $comment) Return TripAdvisor objects filtered by the comment column
 * @method array findByRating(int $rating) Return TripAdvisor objects filtered by the rating column
 * @method array findByBumpass(int $bumpass) Return TripAdvisor objects filtered by the bumpass column
 * @method array findByManzanita(int $manzanita) Return TripAdvisor objects filtered by the manzanita column
 * @method array findByVisitor(int $visitor) Return TripAdvisor objects filtered by the visitor column
 * @method array findBySulphur(int $sulphur) Return TripAdvisor objects filtered by the sulphur column
 * @method array findByKing(int $king) Return TripAdvisor objects filtered by the king column
 * @method array findBySouthwest(int $southwest) Return TripAdvisor objects filtered by the southwest column
 * @method array findByWarner(int $warner) Return TripAdvisor objects filtered by the warner column
 * @method array findBySummit(int $summit) Return TripAdvisor objects filtered by the summit column
 * @method array findByMount(int $mount) Return TripAdvisor objects filtered by the mount column
 * @method array findByFantastic(int $fantastic) Return TripAdvisor objects filtered by the fantastic column
 * @method array findByBoiling(int $boiling) Return TripAdvisor objects filtered by the boiling column
 * @method array findByDevil(int $devil) Return TripAdvisor objects filtered by the devil column
 * @method array findByJuniper(int $juniper) Return TripAdvisor objects filtered by the juniper column
 * @method array findByTerminal(int $terminal) Return TripAdvisor objects filtered by the terminal column
 * @method array findBySnag(int $snag) Return TripAdvisor objects filtered by the snag column
 * @method array findByCliff(int $cliff) Return TripAdvisor objects filtered by the cliff column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseTripAdvisorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTripAdvisorQuery object.
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
            $modelName = 'TripAdvisor';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TripAdvisorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TripAdvisorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TripAdvisorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TripAdvisorQuery) {
            return $criteria;
        }
        $query = new TripAdvisorQuery(null, null, $modelAlias);

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
     * @return   TripAdvisor|TripAdvisor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TripAdvisorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TripAdvisor A model object, or null if the key is not found
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
     * @return                 TripAdvisor A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `pageURL`, `title`, `city`, `state`, `date`, `comment`, `rating`, `bumpass`, `manzanita`, `visitor`, `sulphur`, `king`, `southwest`, `warner`, `summit`, `mount`, `fantastic`, `boiling`, `devil`, `juniper`, `terminal`, `snag`, `cliff` FROM `TRIP_ADVISOR` WHERE `id` = :p0';
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
            $obj = new TripAdvisor();
            $obj->hydrate($row);
            TripAdvisorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TripAdvisor|TripAdvisor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TripAdvisor[]|mixed the list of results, formatted by the current formatter
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TripAdvisorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TripAdvisorPeer::ID, $keys, Criteria::IN);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::ID, $id, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TripAdvisorPeer::PAGEURL, $pageurl, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::TITLE, $title, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TripAdvisorPeer::CITY, $city, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TripAdvisorPeer::STATE, $state, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::DATE, $date, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TripAdvisorPeer::COMMENT, $comment, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByRating($rating = null, $comparison = null)
    {
        if (is_array($rating)) {
            $useMinMax = false;
            if (isset($rating['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rating['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::RATING, $rating, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByBumpass($bumpass = null, $comparison = null)
    {
        if (is_array($bumpass)) {
            $useMinMax = false;
            if (isset($bumpass['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::BUMPASS, $bumpass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bumpass['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::BUMPASS, $bumpass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::BUMPASS, $bumpass, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByManzanita($manzanita = null, $comparison = null)
    {
        if (is_array($manzanita)) {
            $useMinMax = false;
            if (isset($manzanita['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::MANZANITA, $manzanita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($manzanita['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::MANZANITA, $manzanita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::MANZANITA, $manzanita, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByVisitor($visitor = null, $comparison = null)
    {
        if (is_array($visitor)) {
            $useMinMax = false;
            if (isset($visitor['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::VISITOR, $visitor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitor['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::VISITOR, $visitor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::VISITOR, $visitor, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterBySulphur($sulphur = null, $comparison = null)
    {
        if (is_array($sulphur)) {
            $useMinMax = false;
            if (isset($sulphur['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::SULPHUR, $sulphur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sulphur['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::SULPHUR, $sulphur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::SULPHUR, $sulphur, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByKing($king = null, $comparison = null)
    {
        if (is_array($king)) {
            $useMinMax = false;
            if (isset($king['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::KING, $king['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($king['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::KING, $king['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::KING, $king, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterBySouthwest($southwest = null, $comparison = null)
    {
        if (is_array($southwest)) {
            $useMinMax = false;
            if (isset($southwest['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::SOUTHWEST, $southwest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southwest['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::SOUTHWEST, $southwest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::SOUTHWEST, $southwest, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByWarner($warner = null, $comparison = null)
    {
        if (is_array($warner)) {
            $useMinMax = false;
            if (isset($warner['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::WARNER, $warner['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warner['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::WARNER, $warner['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::WARNER, $warner, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterBySummit($summit = null, $comparison = null)
    {
        if (is_array($summit)) {
            $useMinMax = false;
            if (isset($summit['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::SUMMIT, $summit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($summit['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::SUMMIT, $summit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::SUMMIT, $summit, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByMount($mount = null, $comparison = null)
    {
        if (is_array($mount)) {
            $useMinMax = false;
            if (isset($mount['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::MOUNT, $mount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mount['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::MOUNT, $mount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::MOUNT, $mount, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByFantastic($fantastic = null, $comparison = null)
    {
        if (is_array($fantastic)) {
            $useMinMax = false;
            if (isset($fantastic['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::FANTASTIC, $fantastic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fantastic['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::FANTASTIC, $fantastic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::FANTASTIC, $fantastic, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByBoiling($boiling = null, $comparison = null)
    {
        if (is_array($boiling)) {
            $useMinMax = false;
            if (isset($boiling['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::BOILING, $boiling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boiling['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::BOILING, $boiling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::BOILING, $boiling, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByDevil($devil = null, $comparison = null)
    {
        if (is_array($devil)) {
            $useMinMax = false;
            if (isset($devil['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::DEVIL, $devil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devil['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::DEVIL, $devil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::DEVIL, $devil, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByJuniper($juniper = null, $comparison = null)
    {
        if (is_array($juniper)) {
            $useMinMax = false;
            if (isset($juniper['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::JUNIPER, $juniper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($juniper['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::JUNIPER, $juniper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::JUNIPER, $juniper, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByTerminal($terminal = null, $comparison = null)
    {
        if (is_array($terminal)) {
            $useMinMax = false;
            if (isset($terminal['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::TERMINAL, $terminal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($terminal['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::TERMINAL, $terminal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::TERMINAL, $terminal, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterBySnag($snag = null, $comparison = null)
    {
        if (is_array($snag)) {
            $useMinMax = false;
            if (isset($snag['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::SNAG, $snag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($snag['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::SNAG, $snag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::SNAG, $snag, $comparison);
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
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function filterByCliff($cliff = null, $comparison = null)
    {
        if (is_array($cliff)) {
            $useMinMax = false;
            if (isset($cliff['min'])) {
                $this->addUsingAlias(TripAdvisorPeer::CLIFF, $cliff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cliff['max'])) {
                $this->addUsingAlias(TripAdvisorPeer::CLIFF, $cliff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TripAdvisorPeer::CLIFF, $cliff, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TripAdvisor $tripAdvisor Object to remove from the list of results
     *
     * @return TripAdvisorQuery The current query, for fluid interface
     */
    public function prune($tripAdvisor = null)
    {
        if ($tripAdvisor) {
            $this->addUsingAlias(TripAdvisorPeer::ID, $tripAdvisor->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
