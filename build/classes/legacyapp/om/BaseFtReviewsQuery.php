<?php


/**
 * Base class that represents a query for the 'ft_Reviews' table.
 *
 *
 *
 * @method FtReviewsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method FtReviewsQuery orderByRecordid($order = Criteria::ASC) Order by the recordID column
 * @method FtReviewsQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method FtReviewsQuery orderByRating($order = Criteria::ASC) Order by the rating column
 * @method FtReviewsQuery orderBySocial($order = Criteria::ASC) Order by the social column
 *
 * @method FtReviewsQuery groupById() Group by the id column
 * @method FtReviewsQuery groupByRecordid() Group by the recordID column
 * @method FtReviewsQuery groupByDate() Group by the date column
 * @method FtReviewsQuery groupByRating() Group by the rating column
 * @method FtReviewsQuery groupBySocial() Group by the social column
 *
 * @method FtReviewsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FtReviewsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FtReviewsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FtReviews findOne(PropelPDO $con = null) Return the first FtReviews matching the query
 * @method FtReviews findOneOrCreate(PropelPDO $con = null) Return the first FtReviews matching the query, or a new FtReviews object populated from the query conditions when no match is found
 *
 * @method FtReviews findOneByRecordid(string $recordID) Return the first FtReviews filtered by the recordID column
 * @method FtReviews findOneByDate(string $date) Return the first FtReviews filtered by the date column
 * @method FtReviews findOneByRating(int $rating) Return the first FtReviews filtered by the rating column
 * @method FtReviews findOneBySocial(string $social) Return the first FtReviews filtered by the social column
 *
 * @method array findById(int $id) Return FtReviews objects filtered by the id column
 * @method array findByRecordid(string $recordID) Return FtReviews objects filtered by the recordID column
 * @method array findByDate(string $date) Return FtReviews objects filtered by the date column
 * @method array findByRating(int $rating) Return FtReviews objects filtered by the rating column
 * @method array findBySocial(string $social) Return FtReviews objects filtered by the social column
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseFtReviewsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFtReviewsQuery object.
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
            $modelName = 'FtReviews';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FtReviewsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FtReviewsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FtReviewsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FtReviewsQuery) {
            return $criteria;
        }
        $query = new FtReviewsQuery(null, null, $modelAlias);

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
     * @return   FtReviews|FtReviews[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FtReviewsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FtReviewsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FtReviews A model object, or null if the key is not found
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
     * @return                 FtReviews A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `recordID`, `date`, `rating`, `social` FROM `ft_Reviews` WHERE `id` = :p0';
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
            $obj = new FtReviews();
            $obj->hydrate($row);
            FtReviewsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FtReviews|FtReviews[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FtReviews[]|mixed the list of results, formatted by the current formatter
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
     * @return FtReviewsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FtReviewsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FtReviewsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FtReviewsPeer::ID, $keys, Criteria::IN);
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
     * @return FtReviewsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(FtReviewsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(FtReviewsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtReviewsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the recordID column
     *
     * Example usage:
     * <code>
     * $query->filterByRecordid('fooValue');   // WHERE recordID = 'fooValue'
     * $query->filterByRecordid('%fooValue%'); // WHERE recordID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recordid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FtReviewsQuery The current query, for fluid interface
     */
    public function filterByRecordid($recordid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recordid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recordid)) {
                $recordid = str_replace('*', '%', $recordid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FtReviewsPeer::RECORDID, $recordid, $comparison);
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
     * @return FtReviewsQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(FtReviewsPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(FtReviewsPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtReviewsPeer::DATE, $date, $comparison);
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
     * @return FtReviewsQuery The current query, for fluid interface
     */
    public function filterByRating($rating = null, $comparison = null)
    {
        if (is_array($rating)) {
            $useMinMax = false;
            if (isset($rating['min'])) {
                $this->addUsingAlias(FtReviewsPeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rating['max'])) {
                $this->addUsingAlias(FtReviewsPeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FtReviewsPeer::RATING, $rating, $comparison);
    }

    /**
     * Filter the query on the social column
     *
     * Example usage:
     * <code>
     * $query->filterBySocial('fooValue');   // WHERE social = 'fooValue'
     * $query->filterBySocial('%fooValue%'); // WHERE social LIKE '%fooValue%'
     * </code>
     *
     * @param     string $social The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FtReviewsQuery The current query, for fluid interface
     */
    public function filterBySocial($social = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($social)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $social)) {
                $social = str_replace('*', '%', $social);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FtReviewsPeer::SOCIAL, $social, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FtReviews $ftReviews Object to remove from the list of results
     *
     * @return FtReviewsQuery The current query, for fluid interface
     */
    public function prune($ftReviews = null)
    {
        if ($ftReviews) {
            $this->addUsingAlias(FtReviewsPeer::ID, $ftReviews->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
