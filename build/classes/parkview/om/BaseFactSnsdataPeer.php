<?php


/**
 * Base static class for performing query and update operations on the 'FACT_SNSDATA' table.
 *
 *
 *
 * @package propel.generator.parkview.om
 */
abstract class BaseFactSnsdataPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'parkview';

    /** the table name for this class */
    const TABLE_NAME = 'FACT_SNSDATA';

    /** the related Propel class for this table */
    const OM_CLASS = 'FactSnsdata';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FactSnsdataTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 7;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 7;

    /** the column name for the id field */
    const ID = 'FACT_SNSDATA.id';

    /** the column name for the user_id field */
    const USER_ID = 'FACT_SNSDATA.user_id';

    /** the column name for the comment_id field */
    const COMMENT_ID = 'FACT_SNSDATA.comment_id';

    /** the column name for the date_id field */
    const DATE_ID = 'FACT_SNSDATA.date_id';

    /** the column name for the site_id field */
    const SITE_ID = 'FACT_SNSDATA.site_id';

    /** the column name for the sentiment field */
    const SENTIMENT = 'FACT_SNSDATA.sentiment';

    /** the column name for the rating field */
    const RATING = 'FACT_SNSDATA.rating';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of FactSnsdata objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array FactSnsdata[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FactSnsdataPeer::$fieldNames[FactSnsdataPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'CommentId', 'DateId', 'SiteId', 'Sentiment', 'Rating', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'userId', 'commentId', 'dateId', 'siteId', 'sentiment', 'rating', ),
        BasePeer::TYPE_COLNAME => array (FactSnsdataPeer::ID, FactSnsdataPeer::USER_ID, FactSnsdataPeer::COMMENT_ID, FactSnsdataPeer::DATE_ID, FactSnsdataPeer::SITE_ID, FactSnsdataPeer::SENTIMENT, FactSnsdataPeer::RATING, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER_ID', 'COMMENT_ID', 'DATE_ID', 'SITE_ID', 'SENTIMENT', 'RATING', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'comment_id', 'date_id', 'site_id', 'sentiment', 'rating', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FactSnsdataPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'CommentId' => 2, 'DateId' => 3, 'SiteId' => 4, 'Sentiment' => 5, 'Rating' => 6, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'userId' => 1, 'commentId' => 2, 'dateId' => 3, 'siteId' => 4, 'sentiment' => 5, 'rating' => 6, ),
        BasePeer::TYPE_COLNAME => array (FactSnsdataPeer::ID => 0, FactSnsdataPeer::USER_ID => 1, FactSnsdataPeer::COMMENT_ID => 2, FactSnsdataPeer::DATE_ID => 3, FactSnsdataPeer::SITE_ID => 4, FactSnsdataPeer::SENTIMENT => 5, FactSnsdataPeer::RATING => 6, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER_ID' => 1, 'COMMENT_ID' => 2, 'DATE_ID' => 3, 'SITE_ID' => 4, 'SENTIMENT' => 5, 'RATING' => 6, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'comment_id' => 2, 'date_id' => 3, 'site_id' => 4, 'sentiment' => 5, 'rating' => 6, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = FactSnsdataPeer::getFieldNames($toType);
        $key = isset(FactSnsdataPeer::$fieldKeys[$fromType][$name]) ? FactSnsdataPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FactSnsdataPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, FactSnsdataPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FactSnsdataPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. FactSnsdataPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FactSnsdataPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(FactSnsdataPeer::ID);
            $criteria->addSelectColumn(FactSnsdataPeer::USER_ID);
            $criteria->addSelectColumn(FactSnsdataPeer::COMMENT_ID);
            $criteria->addSelectColumn(FactSnsdataPeer::DATE_ID);
            $criteria->addSelectColumn(FactSnsdataPeer::SITE_ID);
            $criteria->addSelectColumn(FactSnsdataPeer::SENTIMENT);
            $criteria->addSelectColumn(FactSnsdataPeer::RATING);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.comment_id');
            $criteria->addSelectColumn($alias . '.date_id');
            $criteria->addSelectColumn($alias . '.site_id');
            $criteria->addSelectColumn($alias . '.sentiment');
            $criteria->addSelectColumn($alias . '.rating');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return FactSnsdata
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FactSnsdataPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return FactSnsdataPeer::populateObjects(FactSnsdataPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param FactSnsdata $obj A FactSnsdata object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            FactSnsdataPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A FactSnsdata object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof FactSnsdata) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or FactSnsdata object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FactSnsdataPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return FactSnsdata Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FactSnsdataPeer::$instances[$key])) {
                return FactSnsdataPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (FactSnsdataPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FactSnsdataPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to FACT_SNSDATA
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = FactSnsdataPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FactSnsdataPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FactSnsdataPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (FactSnsdata object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FactSnsdataPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FactSnsdataPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FactSnsdataPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FactSnsdataPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related DimComments table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinDimComments(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related DimPeriod table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinDimPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related DimUser table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinDimUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TrackSites table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTrackSites(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of FactSnsdata objects pre-filled with their DimComments objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinDimComments(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;
        DimCommentsPeer::addSelectColumns($criteria);

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = DimCommentsPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = DimCommentsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = DimCommentsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    DimCommentsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (FactSnsdata) to $obj2 (DimComments)
                $obj2->addFactSnsdata($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FactSnsdata objects pre-filled with their DimPeriod objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinDimPeriod(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;
        DimPeriodPeer::addSelectColumns($criteria);

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = DimPeriodPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = DimPeriodPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = DimPeriodPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    DimPeriodPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (FactSnsdata) to $obj2 (DimPeriod)
                $obj2->addFactSnsdata($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FactSnsdata objects pre-filled with their DimUser objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinDimUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;
        DimUserPeer::addSelectColumns($criteria);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = DimUserPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = DimUserPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = DimUserPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    DimUserPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (FactSnsdata) to $obj2 (DimUser)
                $obj2->addFactSnsdata($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FactSnsdata objects pre-filled with their TrackSites objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTrackSites(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;
        TrackSitesPeer::addSelectColumns($criteria);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TrackSitesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TrackSitesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TrackSitesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TrackSitesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (FactSnsdata) to $obj2 (TrackSites)
                $obj2->addFactSnsdata($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of FactSnsdata objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol2 = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;

        DimCommentsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DimCommentsPeer::NUM_HYDRATE_COLUMNS;

        DimPeriodPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DimPeriodPeer::NUM_HYDRATE_COLUMNS;

        DimUserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + DimUserPeer::NUM_HYDRATE_COLUMNS;

        TrackSitesPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TrackSitesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined DimComments rows

            $key2 = DimCommentsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = DimCommentsPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = DimCommentsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DimCommentsPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj2 (DimComments)
                $obj2->addFactSnsdata($obj1);
            } // if joined row not null

            // Add objects for joined DimPeriod rows

            $key3 = DimPeriodPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = DimPeriodPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = DimPeriodPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DimPeriodPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj3 (DimPeriod)
                $obj3->addFactSnsdata($obj1);
            } // if joined row not null

            // Add objects for joined DimUser rows

            $key4 = DimUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = DimUserPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = DimUserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    DimUserPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj4 (DimUser)
                $obj4->addFactSnsdata($obj1);
            } // if joined row not null

            // Add objects for joined TrackSites rows

            $key5 = TrackSitesPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = TrackSitesPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = TrackSitesPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TrackSitesPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj5 (TrackSites)
                $obj5->addFactSnsdata($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related DimComments table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptDimComments(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related DimPeriod table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptDimPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related DimUser table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptDimUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related TrackSites table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTrackSites(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FactSnsdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of FactSnsdata objects pre-filled with all related objects except DimComments.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptDimComments(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol2 = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;

        DimPeriodPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DimPeriodPeer::NUM_HYDRATE_COLUMNS;

        DimUserPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DimUserPeer::NUM_HYDRATE_COLUMNS;

        TrackSitesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TrackSitesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined DimPeriod rows

                $key2 = DimPeriodPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DimPeriodPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DimPeriodPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DimPeriodPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj2 (DimPeriod)
                $obj2->addFactSnsdata($obj1);

            } // if joined row is not null

                // Add objects for joined DimUser rows

                $key3 = DimUserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = DimUserPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = DimUserPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DimUserPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj3 (DimUser)
                $obj3->addFactSnsdata($obj1);

            } // if joined row is not null

                // Add objects for joined TrackSites rows

                $key4 = TrackSitesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TrackSitesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TrackSitesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TrackSitesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj4 (TrackSites)
                $obj4->addFactSnsdata($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FactSnsdata objects pre-filled with all related objects except DimPeriod.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptDimPeriod(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol2 = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;

        DimCommentsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DimCommentsPeer::NUM_HYDRATE_COLUMNS;

        DimUserPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DimUserPeer::NUM_HYDRATE_COLUMNS;

        TrackSitesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TrackSitesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined DimComments rows

                $key2 = DimCommentsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DimCommentsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DimCommentsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DimCommentsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj2 (DimComments)
                $obj2->addFactSnsdata($obj1);

            } // if joined row is not null

                // Add objects for joined DimUser rows

                $key3 = DimUserPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = DimUserPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = DimUserPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DimUserPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj3 (DimUser)
                $obj3->addFactSnsdata($obj1);

            } // if joined row is not null

                // Add objects for joined TrackSites rows

                $key4 = TrackSitesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TrackSitesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TrackSitesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TrackSitesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj4 (TrackSites)
                $obj4->addFactSnsdata($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FactSnsdata objects pre-filled with all related objects except DimUser.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptDimUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol2 = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;

        DimCommentsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DimCommentsPeer::NUM_HYDRATE_COLUMNS;

        DimPeriodPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DimPeriodPeer::NUM_HYDRATE_COLUMNS;

        TrackSitesPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TrackSitesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::SITE_ID, TrackSitesPeer::SITE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined DimComments rows

                $key2 = DimCommentsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DimCommentsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DimCommentsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DimCommentsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj2 (DimComments)
                $obj2->addFactSnsdata($obj1);

            } // if joined row is not null

                // Add objects for joined DimPeriod rows

                $key3 = DimPeriodPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = DimPeriodPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = DimPeriodPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DimPeriodPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj3 (DimPeriod)
                $obj3->addFactSnsdata($obj1);

            } // if joined row is not null

                // Add objects for joined TrackSites rows

                $key4 = TrackSitesPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TrackSitesPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TrackSitesPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TrackSitesPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj4 (TrackSites)
                $obj4->addFactSnsdata($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of FactSnsdata objects pre-filled with all related objects except TrackSites.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of FactSnsdata objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTrackSites(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);
        }

        FactSnsdataPeer::addSelectColumns($criteria);
        $startcol2 = FactSnsdataPeer::NUM_HYDRATE_COLUMNS;

        DimCommentsPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DimCommentsPeer::NUM_HYDRATE_COLUMNS;

        DimPeriodPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DimPeriodPeer::NUM_HYDRATE_COLUMNS;

        DimUserPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + DimUserPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FactSnsdataPeer::COMMENT_ID, DimCommentsPeer::COMMENT_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::DATE_ID, DimPeriodPeer::DATE_ID, $join_behavior);

        $criteria->addJoin(FactSnsdataPeer::USER_ID, DimUserPeer::ROW_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FactSnsdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FactSnsdataPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FactSnsdataPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FactSnsdataPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined DimComments rows

                $key2 = DimCommentsPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DimCommentsPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DimCommentsPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DimCommentsPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj2 (DimComments)
                $obj2->addFactSnsdata($obj1);

            } // if joined row is not null

                // Add objects for joined DimPeriod rows

                $key3 = DimPeriodPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = DimPeriodPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = DimPeriodPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DimPeriodPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj3 (DimPeriod)
                $obj3->addFactSnsdata($obj1);

            } // if joined row is not null

                // Add objects for joined DimUser rows

                $key4 = DimUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = DimUserPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = DimUserPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    DimUserPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (FactSnsdata) to the collection in $obj4 (DimUser)
                $obj4->addFactSnsdata($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(FactSnsdataPeer::DATABASE_NAME)->getTable(FactSnsdataPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFactSnsdataPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFactSnsdataPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FactSnsdataTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return FactSnsdataPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a FactSnsdata or Criteria object.
     *
     * @param      mixed $values Criteria or FactSnsdata object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from FactSnsdata object
        }

        if ($criteria->containsKey(FactSnsdataPeer::ID) && $criteria->keyContainsValue(FactSnsdataPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FactSnsdataPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a FactSnsdata or Criteria object.
     *
     * @param      mixed $values Criteria or FactSnsdata object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FactSnsdataPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FactSnsdataPeer::ID);
            $value = $criteria->remove(FactSnsdataPeer::ID);
            if ($value) {
                $selectCriteria->add(FactSnsdataPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FactSnsdataPeer::TABLE_NAME);
            }

        } else { // $values is FactSnsdata object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the FACT_SNSDATA table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FactSnsdataPeer::TABLE_NAME, $con, FactSnsdataPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FactSnsdataPeer::clearInstancePool();
            FactSnsdataPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a FactSnsdata or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or FactSnsdata object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FactSnsdataPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof FactSnsdata) { // it's a model object
            // invalidate the cache for this single object
            FactSnsdataPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FactSnsdataPeer::DATABASE_NAME);
            $criteria->add(FactSnsdataPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FactSnsdataPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FactSnsdataPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FactSnsdataPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given FactSnsdata object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param FactSnsdata $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FactSnsdataPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FactSnsdataPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(FactSnsdataPeer::DATABASE_NAME, FactSnsdataPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return FactSnsdata
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FactSnsdataPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FactSnsdataPeer::DATABASE_NAME);
        $criteria->add(FactSnsdataPeer::ID, $pk);

        $v = FactSnsdataPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return FactSnsdata[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FactSnsdataPeer::DATABASE_NAME);
            $criteria->add(FactSnsdataPeer::ID, $pks, Criteria::IN);
            $objs = FactSnsdataPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFactSnsdataPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFactSnsdataPeer::buildTableMap();

