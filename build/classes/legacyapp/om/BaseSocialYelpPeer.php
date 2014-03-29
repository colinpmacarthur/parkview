<?php


/**
 * Base static class for performing query and update operations on the 'SOCIAL_YELP' table.
 *
 *
 *
 * @package propel.generator.legacyapp.om
 */
abstract class BaseSocialYelpPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'legacyapp';

    /** the table name for this class */
    const TABLE_NAME = 'SOCIAL_YELP';

    /** the related Propel class for this table */
    const OM_CLASS = 'SocialYelp';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SocialYelpTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the ID field */
    const ID = 'SOCIAL_YELP.ID';

    /** the column name for the PARKID field */
    const PARKID = 'SOCIAL_YELP.PARKID';

    /** the column name for the YELPUSERID field */
    const YELPUSERID = 'SOCIAL_YELP.YELPUSERID';

    /** the column name for the YELPUSERAVATAR field */
    const YELPUSERAVATAR = 'SOCIAL_YELP.YELPUSERAVATAR';

    /** the column name for the YELPUSERNAME field */
    const YELPUSERNAME = 'SOCIAL_YELP.YELPUSERNAME';

    /** the column name for the YELPUSERLOCATION field */
    const YELPUSERLOCATION = 'SOCIAL_YELP.YELPUSERLOCATION';

    /** the column name for the BADGE field */
    const BADGE = 'SOCIAL_YELP.BADGE';

    /** the column name for the YELPFRIENDSCOUNT field */
    const YELPFRIENDSCOUNT = 'SOCIAL_YELP.YELPFRIENDSCOUNT';

    /** the column name for the YELPREVIEWCOUNTS field */
    const YELPREVIEWCOUNTS = 'SOCIAL_YELP.YELPREVIEWCOUNTS';

    /** the column name for the YELPRATINGVALUE field */
    const YELPRATINGVALUE = 'SOCIAL_YELP.YELPRATINGVALUE';

    /** the column name for the YELPREVIEWYEAR field */
    const YELPREVIEWYEAR = 'SOCIAL_YELP.YELPREVIEWYEAR';

    /** the column name for the YELPREVIEWMONTH field */
    const YELPREVIEWMONTH = 'SOCIAL_YELP.YELPREVIEWMONTH';

    /** the column name for the YELPREVIEWDAY field */
    const YELPREVIEWDAY = 'SOCIAL_YELP.YELPREVIEWDAY';

    /** the column name for the YELPREVIEWCOMMENT field */
    const YELPREVIEWCOMMENT = 'SOCIAL_YELP.YELPREVIEWCOMMENT';

    /** the column name for the YELPUSEFULCOMMENT field */
    const YELPUSEFULCOMMENT = 'SOCIAL_YELP.YELPUSEFULCOMMENT';

    /** the column name for the YELPFUNNYCOMMENT field */
    const YELPFUNNYCOMMENT = 'SOCIAL_YELP.YELPFUNNYCOMMENT';

    /** the column name for the YELPCOOLCOMMENT field */
    const YELPCOOLCOMMENT = 'SOCIAL_YELP.YELPCOOLCOMMENT';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of SocialYelp objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SocialYelp[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SocialYelpPeer::$fieldNames[SocialYelpPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Parkid', 'Yelpuserid', 'Yelpuseravatar', 'Yelpusername', 'Yelpuserlocation', 'Badge', 'Yelpfriendscount', 'Yelpreviewcounts', 'Yelpratingvalue', 'Yelpreviewyear', 'Yelpreviewmonth', 'Yelpreviewday', 'Yelpreviewcomment', 'Yelpusefulcomment', 'Yelpfunnycomment', 'Yelpcoolcomment', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'parkid', 'yelpuserid', 'yelpuseravatar', 'yelpusername', 'yelpuserlocation', 'badge', 'yelpfriendscount', 'yelpreviewcounts', 'yelpratingvalue', 'yelpreviewyear', 'yelpreviewmonth', 'yelpreviewday', 'yelpreviewcomment', 'yelpusefulcomment', 'yelpfunnycomment', 'yelpcoolcomment', ),
        BasePeer::TYPE_COLNAME => array (SocialYelpPeer::ID, SocialYelpPeer::PARKID, SocialYelpPeer::YELPUSERID, SocialYelpPeer::YELPUSERAVATAR, SocialYelpPeer::YELPUSERNAME, SocialYelpPeer::YELPUSERLOCATION, SocialYelpPeer::BADGE, SocialYelpPeer::YELPFRIENDSCOUNT, SocialYelpPeer::YELPREVIEWCOUNTS, SocialYelpPeer::YELPRATINGVALUE, SocialYelpPeer::YELPREVIEWYEAR, SocialYelpPeer::YELPREVIEWMONTH, SocialYelpPeer::YELPREVIEWDAY, SocialYelpPeer::YELPREVIEWCOMMENT, SocialYelpPeer::YELPUSEFULCOMMENT, SocialYelpPeer::YELPFUNNYCOMMENT, SocialYelpPeer::YELPCOOLCOMMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PARKID', 'YELPUSERID', 'YELPUSERAVATAR', 'YELPUSERNAME', 'YELPUSERLOCATION', 'BADGE', 'YELPFRIENDSCOUNT', 'YELPREVIEWCOUNTS', 'YELPRATINGVALUE', 'YELPREVIEWYEAR', 'YELPREVIEWMONTH', 'YELPREVIEWDAY', 'YELPREVIEWCOMMENT', 'YELPUSEFULCOMMENT', 'YELPFUNNYCOMMENT', 'YELPCOOLCOMMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'PARKID', 'YELPUSERID', 'YELPUSERAVATAR', 'YELPUSERNAME', 'YELPUSERLOCATION', 'BADGE', 'YELPFRIENDSCOUNT', 'YELPREVIEWCOUNTS', 'YELPRATINGVALUE', 'YELPREVIEWYEAR', 'YELPREVIEWMONTH', 'YELPREVIEWDAY', 'YELPREVIEWCOMMENT', 'YELPUSEFULCOMMENT', 'YELPFUNNYCOMMENT', 'YELPCOOLCOMMENT', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SocialYelpPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Parkid' => 1, 'Yelpuserid' => 2, 'Yelpuseravatar' => 3, 'Yelpusername' => 4, 'Yelpuserlocation' => 5, 'Badge' => 6, 'Yelpfriendscount' => 7, 'Yelpreviewcounts' => 8, 'Yelpratingvalue' => 9, 'Yelpreviewyear' => 10, 'Yelpreviewmonth' => 11, 'Yelpreviewday' => 12, 'Yelpreviewcomment' => 13, 'Yelpusefulcomment' => 14, 'Yelpfunnycomment' => 15, 'Yelpcoolcomment' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'parkid' => 1, 'yelpuserid' => 2, 'yelpuseravatar' => 3, 'yelpusername' => 4, 'yelpuserlocation' => 5, 'badge' => 6, 'yelpfriendscount' => 7, 'yelpreviewcounts' => 8, 'yelpratingvalue' => 9, 'yelpreviewyear' => 10, 'yelpreviewmonth' => 11, 'yelpreviewday' => 12, 'yelpreviewcomment' => 13, 'yelpusefulcomment' => 14, 'yelpfunnycomment' => 15, 'yelpcoolcomment' => 16, ),
        BasePeer::TYPE_COLNAME => array (SocialYelpPeer::ID => 0, SocialYelpPeer::PARKID => 1, SocialYelpPeer::YELPUSERID => 2, SocialYelpPeer::YELPUSERAVATAR => 3, SocialYelpPeer::YELPUSERNAME => 4, SocialYelpPeer::YELPUSERLOCATION => 5, SocialYelpPeer::BADGE => 6, SocialYelpPeer::YELPFRIENDSCOUNT => 7, SocialYelpPeer::YELPREVIEWCOUNTS => 8, SocialYelpPeer::YELPRATINGVALUE => 9, SocialYelpPeer::YELPREVIEWYEAR => 10, SocialYelpPeer::YELPREVIEWMONTH => 11, SocialYelpPeer::YELPREVIEWDAY => 12, SocialYelpPeer::YELPREVIEWCOMMENT => 13, SocialYelpPeer::YELPUSEFULCOMMENT => 14, SocialYelpPeer::YELPFUNNYCOMMENT => 15, SocialYelpPeer::YELPCOOLCOMMENT => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PARKID' => 1, 'YELPUSERID' => 2, 'YELPUSERAVATAR' => 3, 'YELPUSERNAME' => 4, 'YELPUSERLOCATION' => 5, 'BADGE' => 6, 'YELPFRIENDSCOUNT' => 7, 'YELPREVIEWCOUNTS' => 8, 'YELPRATINGVALUE' => 9, 'YELPREVIEWYEAR' => 10, 'YELPREVIEWMONTH' => 11, 'YELPREVIEWDAY' => 12, 'YELPREVIEWCOMMENT' => 13, 'YELPUSEFULCOMMENT' => 14, 'YELPFUNNYCOMMENT' => 15, 'YELPCOOLCOMMENT' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'PARKID' => 1, 'YELPUSERID' => 2, 'YELPUSERAVATAR' => 3, 'YELPUSERNAME' => 4, 'YELPUSERLOCATION' => 5, 'BADGE' => 6, 'YELPFRIENDSCOUNT' => 7, 'YELPREVIEWCOUNTS' => 8, 'YELPRATINGVALUE' => 9, 'YELPREVIEWYEAR' => 10, 'YELPREVIEWMONTH' => 11, 'YELPREVIEWDAY' => 12, 'YELPREVIEWCOMMENT' => 13, 'YELPUSEFULCOMMENT' => 14, 'YELPFUNNYCOMMENT' => 15, 'YELPCOOLCOMMENT' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = SocialYelpPeer::getFieldNames($toType);
        $key = isset(SocialYelpPeer::$fieldKeys[$fromType][$name]) ? SocialYelpPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SocialYelpPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SocialYelpPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SocialYelpPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SocialYelpPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SocialYelpPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SocialYelpPeer::ID);
            $criteria->addSelectColumn(SocialYelpPeer::PARKID);
            $criteria->addSelectColumn(SocialYelpPeer::YELPUSERID);
            $criteria->addSelectColumn(SocialYelpPeer::YELPUSERAVATAR);
            $criteria->addSelectColumn(SocialYelpPeer::YELPUSERNAME);
            $criteria->addSelectColumn(SocialYelpPeer::YELPUSERLOCATION);
            $criteria->addSelectColumn(SocialYelpPeer::BADGE);
            $criteria->addSelectColumn(SocialYelpPeer::YELPFRIENDSCOUNT);
            $criteria->addSelectColumn(SocialYelpPeer::YELPREVIEWCOUNTS);
            $criteria->addSelectColumn(SocialYelpPeer::YELPRATINGVALUE);
            $criteria->addSelectColumn(SocialYelpPeer::YELPREVIEWYEAR);
            $criteria->addSelectColumn(SocialYelpPeer::YELPREVIEWMONTH);
            $criteria->addSelectColumn(SocialYelpPeer::YELPREVIEWDAY);
            $criteria->addSelectColumn(SocialYelpPeer::YELPREVIEWCOMMENT);
            $criteria->addSelectColumn(SocialYelpPeer::YELPUSEFULCOMMENT);
            $criteria->addSelectColumn(SocialYelpPeer::YELPFUNNYCOMMENT);
            $criteria->addSelectColumn(SocialYelpPeer::YELPCOOLCOMMENT);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.PARKID');
            $criteria->addSelectColumn($alias . '.YELPUSERID');
            $criteria->addSelectColumn($alias . '.YELPUSERAVATAR');
            $criteria->addSelectColumn($alias . '.YELPUSERNAME');
            $criteria->addSelectColumn($alias . '.YELPUSERLOCATION');
            $criteria->addSelectColumn($alias . '.BADGE');
            $criteria->addSelectColumn($alias . '.YELPFRIENDSCOUNT');
            $criteria->addSelectColumn($alias . '.YELPREVIEWCOUNTS');
            $criteria->addSelectColumn($alias . '.YELPRATINGVALUE');
            $criteria->addSelectColumn($alias . '.YELPREVIEWYEAR');
            $criteria->addSelectColumn($alias . '.YELPREVIEWMONTH');
            $criteria->addSelectColumn($alias . '.YELPREVIEWDAY');
            $criteria->addSelectColumn($alias . '.YELPREVIEWCOMMENT');
            $criteria->addSelectColumn($alias . '.YELPUSEFULCOMMENT');
            $criteria->addSelectColumn($alias . '.YELPFUNNYCOMMENT');
            $criteria->addSelectColumn($alias . '.YELPCOOLCOMMENT');
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
        $criteria->setPrimaryTableName(SocialYelpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SocialYelpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SocialYelpPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return SocialYelp
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SocialYelpPeer::doSelect($critcopy, $con);
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
        return SocialYelpPeer::populateObjects(SocialYelpPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SocialYelpPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SocialYelpPeer::DATABASE_NAME);

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
     * @param SocialYelp $obj A SocialYelp object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            SocialYelpPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A SocialYelp object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SocialYelp) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SocialYelp object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SocialYelpPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return SocialYelp Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SocialYelpPeer::$instances[$key])) {
                return SocialYelpPeer::$instances[$key];
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
        foreach (SocialYelpPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SocialYelpPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to SOCIAL_YELP
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
        $cls = SocialYelpPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SocialYelpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SocialYelpPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SocialYelpPeer::addInstanceToPool($obj, $key);
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
     * @return array (SocialYelp object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SocialYelpPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SocialYelpPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SocialYelpPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SocialYelpPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SocialYelpPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(SocialYelpPeer::DATABASE_NAME)->getTable(SocialYelpPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSocialYelpPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSocialYelpPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SocialYelpTableMap());
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
        return SocialYelpPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SocialYelp or Criteria object.
     *
     * @param      mixed $values Criteria or SocialYelp object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SocialYelp object
        }

        if ($criteria->containsKey(SocialYelpPeer::ID) && $criteria->keyContainsValue(SocialYelpPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SocialYelpPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SocialYelpPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a SocialYelp or Criteria object.
     *
     * @param      mixed $values Criteria or SocialYelp object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SocialYelpPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SocialYelpPeer::ID);
            $value = $criteria->remove(SocialYelpPeer::ID);
            if ($value) {
                $selectCriteria->add(SocialYelpPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SocialYelpPeer::TABLE_NAME);
            }

        } else { // $values is SocialYelp object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SocialYelpPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the SOCIAL_YELP table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SocialYelpPeer::TABLE_NAME, $con, SocialYelpPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SocialYelpPeer::clearInstancePool();
            SocialYelpPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SocialYelp or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SocialYelp object or primary key or array of primary keys
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
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SocialYelpPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SocialYelp) { // it's a model object
            // invalidate the cache for this single object
            SocialYelpPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SocialYelpPeer::DATABASE_NAME);
            $criteria->add(SocialYelpPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SocialYelpPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SocialYelpPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SocialYelpPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SocialYelp object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param SocialYelp $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SocialYelpPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SocialYelpPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SocialYelpPeer::DATABASE_NAME, SocialYelpPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return SocialYelp
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SocialYelpPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SocialYelpPeer::DATABASE_NAME);
        $criteria->add(SocialYelpPeer::ID, $pk);

        $v = SocialYelpPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return SocialYelp[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SocialYelpPeer::DATABASE_NAME);
            $criteria->add(SocialYelpPeer::ID, $pks, Criteria::IN);
            $objs = SocialYelpPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSocialYelpPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSocialYelpPeer::buildTableMap();

