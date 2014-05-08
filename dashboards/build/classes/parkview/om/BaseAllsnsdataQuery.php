<?php


/**
 * Base class that represents a query for the 'ALLSNSDATA' table.
 *
 *
 *
 * @method AllsnsdataQuery orderByRowId($order = Criteria::ASC) Order by the row_id column
 * @method AllsnsdataQuery orderByRecid($order = Criteria::ASC) Order by the recId column
 * @method AllsnsdataQuery orderByUser($order = Criteria::ASC) Order by the user column
 * @method AllsnsdataQuery orderByLink($order = Criteria::ASC) Order by the link column
 * @method AllsnsdataQuery orderBySns($order = Criteria::ASC) Order by the sns column
 * @method AllsnsdataQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method AllsnsdataQuery orderByRating($order = Criteria::ASC) Order by the rating column
 * @method AllsnsdataQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method AllsnsdataQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method AllsnsdataQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method AllsnsdataQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method AllsnsdataQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method AllsnsdataQuery orderByVisbilityCount($order = Criteria::ASC) Order by the visbility_count column
 * @method AllsnsdataQuery orderBySentiment($order = Criteria::ASC) Order by the sentiment column
 *
 * @method AllsnsdataQuery groupByRowId() Group by the row_id column
 * @method AllsnsdataQuery groupByRecid() Group by the recId column
 * @method AllsnsdataQuery groupByUser() Group by the user column
 * @method AllsnsdataQuery groupByLink() Group by the link column
 * @method AllsnsdataQuery groupBySns() Group by the sns column
 * @method AllsnsdataQuery groupByDate() Group by the date column
 * @method AllsnsdataQuery groupByRating() Group by the rating column
 * @method AllsnsdataQuery groupByTitle() Group by the title column
 * @method AllsnsdataQuery groupByComment() Group by the comment column
 * @method AllsnsdataQuery groupByCity() Group by the city column
 * @method AllsnsdataQuery groupByState() Group by the state column
 * @method AllsnsdataQuery groupByAddress() Group by the address column
 * @method AllsnsdataQuery groupByVisbilityCount() Group by the visbility_count column
 * @method AllsnsdataQuery groupBySentiment() Group by the sentiment column
 *
 * @method AllsnsdataQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AllsnsdataQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AllsnsdataQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AllsnsdataQuery leftJoinDimUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the DimUser relation
 * @method AllsnsdataQuery rightJoinDimUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DimUser relation
 * @method AllsnsdataQuery innerJoinDimUser($relationAlias = null) Adds a INNER JOIN clause to the query using the DimUser relation
 *
 * @method Allsnsdata findOne(PropelPDO $con = null) Return the first Allsnsdata matching the query
 * @method Allsnsdata findOneOrCreate(PropelPDO $con = null) Return the first Allsnsdata matching the query, or a new Allsnsdata object populated from the query conditions when no match is found
 *
 * @method Allsnsdata findOneByRecid(int $recId) Return the first Allsnsdata filtered by the recId column
 * @method Allsnsdata findOneByUser(string $user) Return the first Allsnsdata filtered by the user column
 * @method Allsnsdata findOneByLink(string $link) Return the first Allsnsdata filtered by the link column
 * @method Allsnsdata findOneBySns(int $sns) Return the first Allsnsdata filtered by the sns column
 * @method Allsnsdata findOneByDate(string $date) Return the first Allsnsdata filtered by the date column
 * @method Allsnsdata findOneByRating(int $rating) Return the first Allsnsdata filtered by the rating column
 * @method Allsnsdata findOneByTitle(string $title) Return the first Allsnsdata filtered by the title column
 * @method Allsnsdata findOneByComment(string $comment) Return the first Allsnsdata filtered by the comment column
 * @method Allsnsdata findOneByCity(string $city) Return the first Allsnsdata filtered by the city column
 * @method Allsnsdata findOneByState(string $state) Return the first Allsnsdata filtered by the state column
 * @method Allsnsdata findOneByAddress(string $address) Return the first Allsnsdata filtered by the address column
 * @method Allsnsdata findOneByVisbilityCount(int $visbility_count) Return the first Allsnsdata filtered by the visbility_count column
 * @method Allsnsdata findOneBySentiment(double $sentiment) Return the first Allsnsdata filtered by the sentiment column
 *
 * @method array findByRowId(int $row_id) Return Allsnsdata objects filtered by the row_id column
 * @method array findByRecid(int $recId) Return Allsnsdata objects filtered by the recId column
 * @method array findByUser(string $user) Return Allsnsdata objects filtered by the user column
 * @method array findByLink(string $link) Return Allsnsdata objects filtered by the link column
 * @method array findBySns(int $sns) Return Allsnsdata objects filtered by the sns column
 * @method array findByDate(string $date) Return Allsnsdata objects filtered by the date column
 * @method array findByRating(int $rating) Return Allsnsdata objects filtered by the rating column
 * @method array findByTitle(string $title) Return Allsnsdata objects filtered by the title column
 * @method array findByComment(string $comment) Return Allsnsdata objects filtered by the comment column
 * @method array findByCity(string $city) Return Allsnsdata objects filtered by the city column
 * @method array findByState(string $state) Return Allsnsdata objects filtered by the state column
 * @method array findByAddress(string $address) Return Allsnsdata objects filtered by the address column
 * @method array findByVisbilityCount(int $visbility_count) Return Allsnsdata objects filtered by the visbility_count column
 * @method array findBySentiment(double $sentiment) Return Allsnsdata objects filtered by the sentiment column
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseAllsnsdataQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAllsnsdataQuery object.
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
            $modelName = 'Allsnsdata';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AllsnsdataQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AllsnsdataQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AllsnsdataQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AllsnsdataQuery) {
            return $criteria;
        }
        $query = new AllsnsdataQuery(null, null, $modelAlias);

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
     * @return   Allsnsdata|Allsnsdata[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AllsnsdataPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AllsnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Allsnsdata A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRowId($key, $con = null)
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
     * @return                 Allsnsdata A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `row_id`, `recId`, `user`, `link`, `sns`, `date`, `rating`, `title`, `comment`, `city`, `state`, `address`, `visbility_count`, `sentiment` FROM `ALLSNSDATA` WHERE `row_id` = :p0';
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
            $obj = new Allsnsdata();
            $obj->hydrate($row);
            AllsnsdataPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Allsnsdata|Allsnsdata[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Allsnsdata[]|mixed the list of results, formatted by the current formatter
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
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AllsnsdataPeer::ROW_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AllsnsdataPeer::ROW_ID, $keys, Criteria::IN);
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
     * @param     mixed $rowId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByRowId($rowId = null, $comparison = null)
    {
        if (is_array($rowId)) {
            $useMinMax = false;
            if (isset($rowId['min'])) {
                $this->addUsingAlias(AllsnsdataPeer::ROW_ID, $rowId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rowId['max'])) {
                $this->addUsingAlias(AllsnsdataPeer::ROW_ID, $rowId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::ROW_ID, $rowId, $comparison);
    }

    /**
     * Filter the query on the recId column
     *
     * Example usage:
     * <code>
     * $query->filterByRecid(1234); // WHERE recId = 1234
     * $query->filterByRecid(array(12, 34)); // WHERE recId IN (12, 34)
     * $query->filterByRecid(array('min' => 12)); // WHERE recId >= 12
     * $query->filterByRecid(array('max' => 12)); // WHERE recId <= 12
     * </code>
     *
     * @param     mixed $recid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByRecid($recid = null, $comparison = null)
    {
        if (is_array($recid)) {
            $useMinMax = false;
            if (isset($recid['min'])) {
                $this->addUsingAlias(AllsnsdataPeer::RECID, $recid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recid['max'])) {
                $this->addUsingAlias(AllsnsdataPeer::RECID, $recid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::RECID, $recid, $comparison);
    }

    /**
     * Filter the query on the user column
     *
     * Example usage:
     * <code>
     * $query->filterByUser('fooValue');   // WHERE user = 'fooValue'
     * $query->filterByUser('%fooValue%'); // WHERE user LIKE '%fooValue%'
     * </code>
     *
     * @param     string $user The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByUser($user = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($user)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $user)) {
                $user = str_replace('*', '%', $user);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::USER, $user, $comparison);
    }

    /**
     * Filter the query on the link column
     *
     * Example usage:
     * <code>
     * $query->filterByLink('fooValue');   // WHERE link = 'fooValue'
     * $query->filterByLink('%fooValue%'); // WHERE link LIKE '%fooValue%'
     * </code>
     *
     * @param     string $link The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByLink($link = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($link)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $link)) {
                $link = str_replace('*', '%', $link);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::LINK, $link, $comparison);
    }

    /**
     * Filter the query on the sns column
     *
     * Example usage:
     * <code>
     * $query->filterBySns(1234); // WHERE sns = 1234
     * $query->filterBySns(array(12, 34)); // WHERE sns IN (12, 34)
     * $query->filterBySns(array('min' => 12)); // WHERE sns >= 12
     * $query->filterBySns(array('max' => 12)); // WHERE sns <= 12
     * </code>
     *
     * @param     mixed $sns The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterBySns($sns = null, $comparison = null)
    {
        if (is_array($sns)) {
            $useMinMax = false;
            if (isset($sns['min'])) {
                $this->addUsingAlias(AllsnsdataPeer::SNS, $sns['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sns['max'])) {
                $this->addUsingAlias(AllsnsdataPeer::SNS, $sns['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::SNS, $sns, $comparison);
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
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(AllsnsdataPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(AllsnsdataPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::DATE, $date, $comparison);
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
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByRating($rating = null, $comparison = null)
    {
        if (is_array($rating)) {
            $useMinMax = false;
            if (isset($rating['min'])) {
                $this->addUsingAlias(AllsnsdataPeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rating['max'])) {
                $this->addUsingAlias(AllsnsdataPeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::RATING, $rating, $comparison);
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
     * @return AllsnsdataQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AllsnsdataPeer::TITLE, $title, $comparison);
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
     * @return AllsnsdataQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AllsnsdataPeer::COMMENT, $comment, $comparison);
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
     * @return AllsnsdataQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AllsnsdataPeer::CITY, $city, $comparison);
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
     * @return AllsnsdataQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AllsnsdataPeer::STATE, $state, $comparison);
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
     * @return AllsnsdataQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AllsnsdataPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the visbility_count column
     *
     * Example usage:
     * <code>
     * $query->filterByVisbilityCount(1234); // WHERE visbility_count = 1234
     * $query->filterByVisbilityCount(array(12, 34)); // WHERE visbility_count IN (12, 34)
     * $query->filterByVisbilityCount(array('min' => 12)); // WHERE visbility_count >= 12
     * $query->filterByVisbilityCount(array('max' => 12)); // WHERE visbility_count <= 12
     * </code>
     *
     * @param     mixed $visbilityCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterByVisbilityCount($visbilityCount = null, $comparison = null)
    {
        if (is_array($visbilityCount)) {
            $useMinMax = false;
            if (isset($visbilityCount['min'])) {
                $this->addUsingAlias(AllsnsdataPeer::VISBILITY_COUNT, $visbilityCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visbilityCount['max'])) {
                $this->addUsingAlias(AllsnsdataPeer::VISBILITY_COUNT, $visbilityCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::VISBILITY_COUNT, $visbilityCount, $comparison);
    }

    /**
     * Filter the query on the sentiment column
     *
     * Example usage:
     * <code>
     * $query->filterBySentiment(1234); // WHERE sentiment = 1234
     * $query->filterBySentiment(array(12, 34)); // WHERE sentiment IN (12, 34)
     * $query->filterBySentiment(array('min' => 12)); // WHERE sentiment >= 12
     * $query->filterBySentiment(array('max' => 12)); // WHERE sentiment <= 12
     * </code>
     *
     * @param     mixed $sentiment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function filterBySentiment($sentiment = null, $comparison = null)
    {
        if (is_array($sentiment)) {
            $useMinMax = false;
            if (isset($sentiment['min'])) {
                $this->addUsingAlias(AllsnsdataPeer::SENTIMENT, $sentiment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sentiment['max'])) {
                $this->addUsingAlias(AllsnsdataPeer::SENTIMENT, $sentiment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AllsnsdataPeer::SENTIMENT, $sentiment, $comparison);
    }

    /**
     * Filter the query by a related DimUser object
     *
     * @param   DimUser|PropelObjectCollection $dimUser  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AllsnsdataQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDimUser($dimUser, $comparison = null)
    {
        if ($dimUser instanceof DimUser) {
            return $this
                ->addUsingAlias(AllsnsdataPeer::ROW_ID, $dimUser->getRowId(), $comparison);
        } elseif ($dimUser instanceof PropelObjectCollection) {
            return $this
                ->useDimUserQuery()
                ->filterByPrimaryKeys($dimUser->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDimUser() only accepts arguments of type DimUser or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the DimUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function joinDimUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('DimUser');

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
            $this->addJoinObject($join, 'DimUser');
        }

        return $this;
    }

    /**
     * Use the DimUser relation DimUser object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DimUserQuery A secondary query class using the current class as primary query
     */
    public function useDimUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDimUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'DimUser', 'DimUserQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Allsnsdata $allsnsdata Object to remove from the list of results
     *
     * @return AllsnsdataQuery The current query, for fluid interface
     */
    public function prune($allsnsdata = null)
    {
        if ($allsnsdata) {
            $this->addUsingAlias(AllsnsdataPeer::ROW_ID, $allsnsdata->getRowId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
