<?php


/**
 * Base class that represents a query for the 'FLICKR' table.
 *
 *
 *
 * @method FlickrQuery orderById($order = Criteria::ASC) Order by the id column
 * @method FlickrQuery orderByUsername($order = Criteria::ASC) Order by the userName column
 * @method FlickrQuery orderByUserlocation($order = Criteria::ASC) Order by the userLocation column
 * @method FlickrQuery orderByDateposted($order = Criteria::ASC) Order by the datePosted column
 * @method FlickrQuery orderByTimeposted($order = Criteria::ASC) Order by the timePosted column
 * @method FlickrQuery orderByDatetaken($order = Criteria::ASC) Order by the dateTaken column
 * @method FlickrQuery orderByTimetaken($order = Criteria::ASC) Order by the timeTaken column
 * @method FlickrQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method FlickrQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method FlickrQuery orderByPhotourl($order = Criteria::ASC) Order by the photoURL column
 * @method FlickrQuery orderByLicense($order = Criteria::ASC) Order by the license column
 * @method FlickrQuery orderByBumpass($order = Criteria::ASC) Order by the bumpass column
 * @method FlickrQuery orderByManzanita($order = Criteria::ASC) Order by the manzanita column
 * @method FlickrQuery orderByVisitor($order = Criteria::ASC) Order by the visitor column
 * @method FlickrQuery orderBySulphur($order = Criteria::ASC) Order by the sulphur column
 * @method FlickrQuery orderByKing($order = Criteria::ASC) Order by the king column
 * @method FlickrQuery orderBySouthwest($order = Criteria::ASC) Order by the southwest column
 * @method FlickrQuery orderByWarner($order = Criteria::ASC) Order by the warner column
 * @method FlickrQuery orderBySummit($order = Criteria::ASC) Order by the summit column
 * @method FlickrQuery orderByMount($order = Criteria::ASC) Order by the mount column
 * @method FlickrQuery orderByFantastic($order = Criteria::ASC) Order by the fantastic column
 * @method FlickrQuery orderByBoiling($order = Criteria::ASC) Order by the boiling column
 * @method FlickrQuery orderByDevil($order = Criteria::ASC) Order by the devil column
 * @method FlickrQuery orderByJuniper($order = Criteria::ASC) Order by the juniper column
 * @method FlickrQuery orderByTerminal($order = Criteria::ASC) Order by the terminal column
 * @method FlickrQuery orderBySnag($order = Criteria::ASC) Order by the snag column
 * @method FlickrQuery orderByCliff($order = Criteria::ASC) Order by the cliff column
 *
 * @method FlickrQuery groupById() Group by the id column
 * @method FlickrQuery groupByUsername() Group by the userName column
 * @method FlickrQuery groupByUserlocation() Group by the userLocation column
 * @method FlickrQuery groupByDateposted() Group by the datePosted column
 * @method FlickrQuery groupByTimeposted() Group by the timePosted column
 * @method FlickrQuery groupByDatetaken() Group by the dateTaken column
 * @method FlickrQuery groupByTimetaken() Group by the timeTaken column
 * @method FlickrQuery groupByTitle() Group by the title column
 * @method FlickrQuery groupByDescription() Group by the description column
 * @method FlickrQuery groupByPhotourl() Group by the photoURL column
 * @method FlickrQuery groupByLicense() Group by the license column
 * @method FlickrQuery groupByBumpass() Group by the bumpass column
 * @method FlickrQuery groupByManzanita() Group by the manzanita column
 * @method FlickrQuery groupByVisitor() Group by the visitor column
 * @method FlickrQuery groupBySulphur() Group by the sulphur column
 * @method FlickrQuery groupByKing() Group by the king column
 * @method FlickrQuery groupBySouthwest() Group by the southwest column
 * @method FlickrQuery groupByWarner() Group by the warner column
 * @method FlickrQuery groupBySummit() Group by the summit column
 * @method FlickrQuery groupByMount() Group by the mount column
 * @method FlickrQuery groupByFantastic() Group by the fantastic column
 * @method FlickrQuery groupByBoiling() Group by the boiling column
 * @method FlickrQuery groupByDevil() Group by the devil column
 * @method FlickrQuery groupByJuniper() Group by the juniper column
 * @method FlickrQuery groupByTerminal() Group by the terminal column
 * @method FlickrQuery groupBySnag() Group by the snag column
 * @method FlickrQuery groupByCliff() Group by the cliff column
 *
 * @method FlickrQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlickrQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlickrQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Flickr findOne(PropelPDO $con = null) Return the first Flickr matching the query
 * @method Flickr findOneOrCreate(PropelPDO $con = null) Return the first Flickr matching the query, or a new Flickr object populated from the query conditions when no match is found
 *
 * @method Flickr findOneByUsername(string $userName) Return the first Flickr filtered by the userName column
 * @method Flickr findOneByUserlocation(string $userLocation) Return the first Flickr filtered by the userLocation column
 * @method Flickr findOneByDateposted(string $datePosted) Return the first Flickr filtered by the datePosted column
 * @method Flickr findOneByTimeposted(string $timePosted) Return the first Flickr filtered by the timePosted column
 * @method Flickr findOneByDatetaken(string $dateTaken) Return the first Flickr filtered by the dateTaken column
 * @method Flickr findOneByTimetaken(string $timeTaken) Return the first Flickr filtered by the timeTaken column
 * @method Flickr findOneByTitle(string $title) Return the first Flickr filtered by the title column
 * @method Flickr findOneByDescription(string $description) Return the first Flickr filtered by the description column
 * @method Flickr findOneByPhotourl(string $photoURL) Return the first Flickr filtered by the photoURL column
 * @method Flickr findOneByLicense(int $license) Return the first Flickr filtered by the license column
 * @method Flickr findOneByBumpass(int $bumpass) Return the first Flickr filtered by the bumpass column
 * @method Flickr findOneByManzanita(int $manzanita) Return the first Flickr filtered by the manzanita column
 * @method Flickr findOneByVisitor(int $visitor) Return the first Flickr filtered by the visitor column
 * @method Flickr findOneBySulphur(int $sulphur) Return the first Flickr filtered by the sulphur column
 * @method Flickr findOneByKing(int $king) Return the first Flickr filtered by the king column
 * @method Flickr findOneBySouthwest(int $southwest) Return the first Flickr filtered by the southwest column
 * @method Flickr findOneByWarner(int $warner) Return the first Flickr filtered by the warner column
 * @method Flickr findOneBySummit(int $summit) Return the first Flickr filtered by the summit column
 * @method Flickr findOneByMount(int $mount) Return the first Flickr filtered by the mount column
 * @method Flickr findOneByFantastic(int $fantastic) Return the first Flickr filtered by the fantastic column
 * @method Flickr findOneByBoiling(int $boiling) Return the first Flickr filtered by the boiling column
 * @method Flickr findOneByDevil(int $devil) Return the first Flickr filtered by the devil column
 * @method Flickr findOneByJuniper(int $juniper) Return the first Flickr filtered by the juniper column
 * @method Flickr findOneByTerminal(int $terminal) Return the first Flickr filtered by the terminal column
 * @method Flickr findOneBySnag(int $snag) Return the first Flickr filtered by the snag column
 * @method Flickr findOneByCliff(int $cliff) Return the first Flickr filtered by the cliff column
 *
 * @method array findById(int $id) Return Flickr objects filtered by the id column
 * @method array findByUsername(string $userName) Return Flickr objects filtered by the userName column
 * @method array findByUserlocation(string $userLocation) Return Flickr objects filtered by the userLocation column
 * @method array findByDateposted(string $datePosted) Return Flickr objects filtered by the datePosted column
 * @method array findByTimeposted(string $timePosted) Return Flickr objects filtered by the timePosted column
 * @method array findByDatetaken(string $dateTaken) Return Flickr objects filtered by the dateTaken column
 * @method array findByTimetaken(string $timeTaken) Return Flickr objects filtered by the timeTaken column
 * @method array findByTitle(string $title) Return Flickr objects filtered by the title column
 * @method array findByDescription(string $description) Return Flickr objects filtered by the description column
 * @method array findByPhotourl(string $photoURL) Return Flickr objects filtered by the photoURL column
 * @method array findByLicense(int $license) Return Flickr objects filtered by the license column
 * @method array findByBumpass(int $bumpass) Return Flickr objects filtered by the bumpass column
 * @method array findByManzanita(int $manzanita) Return Flickr objects filtered by the manzanita column
 * @method array findByVisitor(int $visitor) Return Flickr objects filtered by the visitor column
 * @method array findBySulphur(int $sulphur) Return Flickr objects filtered by the sulphur column
 * @method array findByKing(int $king) Return Flickr objects filtered by the king column
 * @method array findBySouthwest(int $southwest) Return Flickr objects filtered by the southwest column
 * @method array findByWarner(int $warner) Return Flickr objects filtered by the warner column
 * @method array findBySummit(int $summit) Return Flickr objects filtered by the summit column
 * @method array findByMount(int $mount) Return Flickr objects filtered by the mount column
 * @method array findByFantastic(int $fantastic) Return Flickr objects filtered by the fantastic column
 * @method array findByBoiling(int $boiling) Return Flickr objects filtered by the boiling column
 * @method array findByDevil(int $devil) Return Flickr objects filtered by the devil column
 * @method array findByJuniper(int $juniper) Return Flickr objects filtered by the juniper column
 * @method array findByTerminal(int $terminal) Return Flickr objects filtered by the terminal column
 * @method array findBySnag(int $snag) Return Flickr objects filtered by the snag column
 * @method array findByCliff(int $cliff) Return Flickr objects filtered by the cliff column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseFlickrQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlickrQuery object.
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
            $modelName = 'Flickr';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlickrQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlickrQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlickrQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlickrQuery) {
            return $criteria;
        }
        $query = new FlickrQuery(null, null, $modelAlias);

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
     * @return   Flickr|Flickr[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlickrPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Flickr A model object, or null if the key is not found
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
     * @return                 Flickr A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `userName`, `userLocation`, `datePosted`, `timePosted`, `dateTaken`, `timeTaken`, `title`, `description`, `photoURL`, `license`, `bumpass`, `manzanita`, `visitor`, `sulphur`, `king`, `southwest`, `warner`, `summit`, `mount`, `fantastic`, `boiling`, `devil`, `juniper`, `terminal`, `snag`, `cliff` FROM `FLICKR` WHERE `id` = :p0';
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
            $obj = new Flickr();
            $obj->hydrate($row);
            FlickrPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Flickr|Flickr[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Flickr[]|mixed the list of results, formatted by the current formatter
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlickrPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlickrPeer::ID, $keys, Criteria::IN);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(FlickrPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(FlickrPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::ID, $id, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlickrPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the userLocation column
     *
     * Example usage:
     * <code>
     * $query->filterByUserlocation('fooValue');   // WHERE userLocation = 'fooValue'
     * $query->filterByUserlocation('%fooValue%'); // WHERE userLocation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userlocation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByUserlocation($userlocation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userlocation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userlocation)) {
                $userlocation = str_replace('*', '%', $userlocation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlickrPeer::USERLOCATION, $userlocation, $comparison);
    }

    /**
     * Filter the query on the datePosted column
     *
     * Example usage:
     * <code>
     * $query->filterByDateposted('2011-03-14'); // WHERE datePosted = '2011-03-14'
     * $query->filterByDateposted('now'); // WHERE datePosted = '2011-03-14'
     * $query->filterByDateposted(array('max' => 'yesterday')); // WHERE datePosted < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateposted The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByDateposted($dateposted = null, $comparison = null)
    {
        if (is_array($dateposted)) {
            $useMinMax = false;
            if (isset($dateposted['min'])) {
                $this->addUsingAlias(FlickrPeer::DATEPOSTED, $dateposted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateposted['max'])) {
                $this->addUsingAlias(FlickrPeer::DATEPOSTED, $dateposted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::DATEPOSTED, $dateposted, $comparison);
    }

    /**
     * Filter the query on the timePosted column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeposted('2011-03-14'); // WHERE timePosted = '2011-03-14'
     * $query->filterByTimeposted('now'); // WHERE timePosted = '2011-03-14'
     * $query->filterByTimeposted(array('max' => 'yesterday')); // WHERE timePosted < '2011-03-13'
     * </code>
     *
     * @param     mixed $timeposted The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByTimeposted($timeposted = null, $comparison = null)
    {
        if (is_array($timeposted)) {
            $useMinMax = false;
            if (isset($timeposted['min'])) {
                $this->addUsingAlias(FlickrPeer::TIMEPOSTED, $timeposted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timeposted['max'])) {
                $this->addUsingAlias(FlickrPeer::TIMEPOSTED, $timeposted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::TIMEPOSTED, $timeposted, $comparison);
    }

    /**
     * Filter the query on the dateTaken column
     *
     * Example usage:
     * <code>
     * $query->filterByDatetaken('2011-03-14'); // WHERE dateTaken = '2011-03-14'
     * $query->filterByDatetaken('now'); // WHERE dateTaken = '2011-03-14'
     * $query->filterByDatetaken(array('max' => 'yesterday')); // WHERE dateTaken < '2011-03-13'
     * </code>
     *
     * @param     mixed $datetaken The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByDatetaken($datetaken = null, $comparison = null)
    {
        if (is_array($datetaken)) {
            $useMinMax = false;
            if (isset($datetaken['min'])) {
                $this->addUsingAlias(FlickrPeer::DATETAKEN, $datetaken['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datetaken['max'])) {
                $this->addUsingAlias(FlickrPeer::DATETAKEN, $datetaken['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::DATETAKEN, $datetaken, $comparison);
    }

    /**
     * Filter the query on the timeTaken column
     *
     * Example usage:
     * <code>
     * $query->filterByTimetaken('2011-03-14'); // WHERE timeTaken = '2011-03-14'
     * $query->filterByTimetaken('now'); // WHERE timeTaken = '2011-03-14'
     * $query->filterByTimetaken(array('max' => 'yesterday')); // WHERE timeTaken < '2011-03-13'
     * </code>
     *
     * @param     mixed $timetaken The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByTimetaken($timetaken = null, $comparison = null)
    {
        if (is_array($timetaken)) {
            $useMinMax = false;
            if (isset($timetaken['min'])) {
                $this->addUsingAlias(FlickrPeer::TIMETAKEN, $timetaken['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timetaken['max'])) {
                $this->addUsingAlias(FlickrPeer::TIMETAKEN, $timetaken['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::TIMETAKEN, $timetaken, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlickrPeer::TITLE, $title, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlickrPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the photoURL column
     *
     * Example usage:
     * <code>
     * $query->filterByPhotourl('fooValue');   // WHERE photoURL = 'fooValue'
     * $query->filterByPhotourl('%fooValue%'); // WHERE photoURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $photourl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByPhotourl($photourl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($photourl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $photourl)) {
                $photourl = str_replace('*', '%', $photourl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlickrPeer::PHOTOURL, $photourl, $comparison);
    }

    /**
     * Filter the query on the license column
     *
     * Example usage:
     * <code>
     * $query->filterByLicense(1234); // WHERE license = 1234
     * $query->filterByLicense(array(12, 34)); // WHERE license IN (12, 34)
     * $query->filterByLicense(array('min' => 12)); // WHERE license >= 12
     * $query->filterByLicense(array('max' => 12)); // WHERE license <= 12
     * </code>
     *
     * @param     mixed $license The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByLicense($license = null, $comparison = null)
    {
        if (is_array($license)) {
            $useMinMax = false;
            if (isset($license['min'])) {
                $this->addUsingAlias(FlickrPeer::LICENSE, $license['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($license['max'])) {
                $this->addUsingAlias(FlickrPeer::LICENSE, $license['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::LICENSE, $license, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByBumpass($bumpass = null, $comparison = null)
    {
        if (is_array($bumpass)) {
            $useMinMax = false;
            if (isset($bumpass['min'])) {
                $this->addUsingAlias(FlickrPeer::BUMPASS, $bumpass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bumpass['max'])) {
                $this->addUsingAlias(FlickrPeer::BUMPASS, $bumpass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::BUMPASS, $bumpass, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByManzanita($manzanita = null, $comparison = null)
    {
        if (is_array($manzanita)) {
            $useMinMax = false;
            if (isset($manzanita['min'])) {
                $this->addUsingAlias(FlickrPeer::MANZANITA, $manzanita['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($manzanita['max'])) {
                $this->addUsingAlias(FlickrPeer::MANZANITA, $manzanita['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::MANZANITA, $manzanita, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByVisitor($visitor = null, $comparison = null)
    {
        if (is_array($visitor)) {
            $useMinMax = false;
            if (isset($visitor['min'])) {
                $this->addUsingAlias(FlickrPeer::VISITOR, $visitor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visitor['max'])) {
                $this->addUsingAlias(FlickrPeer::VISITOR, $visitor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::VISITOR, $visitor, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterBySulphur($sulphur = null, $comparison = null)
    {
        if (is_array($sulphur)) {
            $useMinMax = false;
            if (isset($sulphur['min'])) {
                $this->addUsingAlias(FlickrPeer::SULPHUR, $sulphur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sulphur['max'])) {
                $this->addUsingAlias(FlickrPeer::SULPHUR, $sulphur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::SULPHUR, $sulphur, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByKing($king = null, $comparison = null)
    {
        if (is_array($king)) {
            $useMinMax = false;
            if (isset($king['min'])) {
                $this->addUsingAlias(FlickrPeer::KING, $king['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($king['max'])) {
                $this->addUsingAlias(FlickrPeer::KING, $king['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::KING, $king, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterBySouthwest($southwest = null, $comparison = null)
    {
        if (is_array($southwest)) {
            $useMinMax = false;
            if (isset($southwest['min'])) {
                $this->addUsingAlias(FlickrPeer::SOUTHWEST, $southwest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southwest['max'])) {
                $this->addUsingAlias(FlickrPeer::SOUTHWEST, $southwest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::SOUTHWEST, $southwest, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByWarner($warner = null, $comparison = null)
    {
        if (is_array($warner)) {
            $useMinMax = false;
            if (isset($warner['min'])) {
                $this->addUsingAlias(FlickrPeer::WARNER, $warner['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($warner['max'])) {
                $this->addUsingAlias(FlickrPeer::WARNER, $warner['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::WARNER, $warner, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterBySummit($summit = null, $comparison = null)
    {
        if (is_array($summit)) {
            $useMinMax = false;
            if (isset($summit['min'])) {
                $this->addUsingAlias(FlickrPeer::SUMMIT, $summit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($summit['max'])) {
                $this->addUsingAlias(FlickrPeer::SUMMIT, $summit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::SUMMIT, $summit, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByMount($mount = null, $comparison = null)
    {
        if (is_array($mount)) {
            $useMinMax = false;
            if (isset($mount['min'])) {
                $this->addUsingAlias(FlickrPeer::MOUNT, $mount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mount['max'])) {
                $this->addUsingAlias(FlickrPeer::MOUNT, $mount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::MOUNT, $mount, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByFantastic($fantastic = null, $comparison = null)
    {
        if (is_array($fantastic)) {
            $useMinMax = false;
            if (isset($fantastic['min'])) {
                $this->addUsingAlias(FlickrPeer::FANTASTIC, $fantastic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fantastic['max'])) {
                $this->addUsingAlias(FlickrPeer::FANTASTIC, $fantastic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::FANTASTIC, $fantastic, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByBoiling($boiling = null, $comparison = null)
    {
        if (is_array($boiling)) {
            $useMinMax = false;
            if (isset($boiling['min'])) {
                $this->addUsingAlias(FlickrPeer::BOILING, $boiling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boiling['max'])) {
                $this->addUsingAlias(FlickrPeer::BOILING, $boiling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::BOILING, $boiling, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByDevil($devil = null, $comparison = null)
    {
        if (is_array($devil)) {
            $useMinMax = false;
            if (isset($devil['min'])) {
                $this->addUsingAlias(FlickrPeer::DEVIL, $devil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devil['max'])) {
                $this->addUsingAlias(FlickrPeer::DEVIL, $devil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::DEVIL, $devil, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByJuniper($juniper = null, $comparison = null)
    {
        if (is_array($juniper)) {
            $useMinMax = false;
            if (isset($juniper['min'])) {
                $this->addUsingAlias(FlickrPeer::JUNIPER, $juniper['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($juniper['max'])) {
                $this->addUsingAlias(FlickrPeer::JUNIPER, $juniper['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::JUNIPER, $juniper, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByTerminal($terminal = null, $comparison = null)
    {
        if (is_array($terminal)) {
            $useMinMax = false;
            if (isset($terminal['min'])) {
                $this->addUsingAlias(FlickrPeer::TERMINAL, $terminal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($terminal['max'])) {
                $this->addUsingAlias(FlickrPeer::TERMINAL, $terminal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::TERMINAL, $terminal, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterBySnag($snag = null, $comparison = null)
    {
        if (is_array($snag)) {
            $useMinMax = false;
            if (isset($snag['min'])) {
                $this->addUsingAlias(FlickrPeer::SNAG, $snag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($snag['max'])) {
                $this->addUsingAlias(FlickrPeer::SNAG, $snag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::SNAG, $snag, $comparison);
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
     * @return FlickrQuery The current query, for fluid interface
     */
    public function filterByCliff($cliff = null, $comparison = null)
    {
        if (is_array($cliff)) {
            $useMinMax = false;
            if (isset($cliff['min'])) {
                $this->addUsingAlias(FlickrPeer::CLIFF, $cliff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cliff['max'])) {
                $this->addUsingAlias(FlickrPeer::CLIFF, $cliff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlickrPeer::CLIFF, $cliff, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Flickr $flickr Object to remove from the list of results
     *
     * @return FlickrQuery The current query, for fluid interface
     */
    public function prune($flickr = null)
    {
        if ($flickr) {
            $this->addUsingAlias(FlickrPeer::ID, $flickr->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
