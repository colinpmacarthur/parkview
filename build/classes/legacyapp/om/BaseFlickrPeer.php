<?php


/**
 * Base static class for performing query and update operations on the 'FLICKR' table.
 *
 *
 *
 * @package propel.generator.legacyapp.om
 */
abstract class BaseFlickrPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'legacyapp';

    /** the table name for this class */
    const TABLE_NAME = 'FLICKR';

    /** the related Propel class for this table */
    const OM_CLASS = 'Flickr';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FlickrTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 27;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 27;

    /** the column name for the id field */
    const ID = 'FLICKR.id';

    /** the column name for the userName field */
    const USERNAME = 'FLICKR.userName';

    /** the column name for the userLocation field */
    const USERLOCATION = 'FLICKR.userLocation';

    /** the column name for the datePosted field */
    const DATEPOSTED = 'FLICKR.datePosted';

    /** the column name for the timePosted field */
    const TIMEPOSTED = 'FLICKR.timePosted';

    /** the column name for the dateTaken field */
    const DATETAKEN = 'FLICKR.dateTaken';

    /** the column name for the timeTaken field */
    const TIMETAKEN = 'FLICKR.timeTaken';

    /** the column name for the title field */
    const TITLE = 'FLICKR.title';

    /** the column name for the description field */
    const DESCRIPTION = 'FLICKR.description';

    /** the column name for the photoURL field */
    const PHOTOURL = 'FLICKR.photoURL';

    /** the column name for the license field */
    const LICENSE = 'FLICKR.license';

    /** the column name for the bumpass field */
    const BUMPASS = 'FLICKR.bumpass';

    /** the column name for the manzanita field */
    const MANZANITA = 'FLICKR.manzanita';

    /** the column name for the visitor field */
    const VISITOR = 'FLICKR.visitor';

    /** the column name for the sulphur field */
    const SULPHUR = 'FLICKR.sulphur';

    /** the column name for the king field */
    const KING = 'FLICKR.king';

    /** the column name for the southwest field */
    const SOUTHWEST = 'FLICKR.southwest';

    /** the column name for the warner field */
    const WARNER = 'FLICKR.warner';

    /** the column name for the summit field */
    const SUMMIT = 'FLICKR.summit';

    /** the column name for the mount field */
    const MOUNT = 'FLICKR.mount';

    /** the column name for the fantastic field */
    const FANTASTIC = 'FLICKR.fantastic';

    /** the column name for the boiling field */
    const BOILING = 'FLICKR.boiling';

    /** the column name for the devil field */
    const DEVIL = 'FLICKR.devil';

    /** the column name for the juniper field */
    const JUNIPER = 'FLICKR.juniper';

    /** the column name for the terminal field */
    const TERMINAL = 'FLICKR.terminal';

    /** the column name for the snag field */
    const SNAG = 'FLICKR.snag';

    /** the column name for the cliff field */
    const CLIFF = 'FLICKR.cliff';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Flickr objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Flickr[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FlickrPeer::$fieldNames[FlickrPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Username', 'Userlocation', 'Dateposted', 'Timeposted', 'Datetaken', 'Timetaken', 'Title', 'Description', 'Photourl', 'License', 'Bumpass', 'Manzanita', 'Visitor', 'Sulphur', 'King', 'Southwest', 'Warner', 'Summit', 'Mount', 'Fantastic', 'Boiling', 'Devil', 'Juniper', 'Terminal', 'Snag', 'Cliff', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'username', 'userlocation', 'dateposted', 'timeposted', 'datetaken', 'timetaken', 'title', 'description', 'photourl', 'license', 'bumpass', 'manzanita', 'visitor', 'sulphur', 'king', 'southwest', 'warner', 'summit', 'mount', 'fantastic', 'boiling', 'devil', 'juniper', 'terminal', 'snag', 'cliff', ),
        BasePeer::TYPE_COLNAME => array (FlickrPeer::ID, FlickrPeer::USERNAME, FlickrPeer::USERLOCATION, FlickrPeer::DATEPOSTED, FlickrPeer::TIMEPOSTED, FlickrPeer::DATETAKEN, FlickrPeer::TIMETAKEN, FlickrPeer::TITLE, FlickrPeer::DESCRIPTION, FlickrPeer::PHOTOURL, FlickrPeer::LICENSE, FlickrPeer::BUMPASS, FlickrPeer::MANZANITA, FlickrPeer::VISITOR, FlickrPeer::SULPHUR, FlickrPeer::KING, FlickrPeer::SOUTHWEST, FlickrPeer::WARNER, FlickrPeer::SUMMIT, FlickrPeer::MOUNT, FlickrPeer::FANTASTIC, FlickrPeer::BOILING, FlickrPeer::DEVIL, FlickrPeer::JUNIPER, FlickrPeer::TERMINAL, FlickrPeer::SNAG, FlickrPeer::CLIFF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USERNAME', 'USERLOCATION', 'DATEPOSTED', 'TIMEPOSTED', 'DATETAKEN', 'TIMETAKEN', 'TITLE', 'DESCRIPTION', 'PHOTOURL', 'LICENSE', 'BUMPASS', 'MANZANITA', 'VISITOR', 'SULPHUR', 'KING', 'SOUTHWEST', 'WARNER', 'SUMMIT', 'MOUNT', 'FANTASTIC', 'BOILING', 'DEVIL', 'JUNIPER', 'TERMINAL', 'SNAG', 'CLIFF', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'userName', 'userLocation', 'datePosted', 'timePosted', 'dateTaken', 'timeTaken', 'title', 'description', 'photoURL', 'license', 'bumpass', 'manzanita', 'visitor', 'sulphur', 'king', 'southwest', 'warner', 'summit', 'mount', 'fantastic', 'boiling', 'devil', 'juniper', 'terminal', 'snag', 'cliff', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FlickrPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Username' => 1, 'Userlocation' => 2, 'Dateposted' => 3, 'Timeposted' => 4, 'Datetaken' => 5, 'Timetaken' => 6, 'Title' => 7, 'Description' => 8, 'Photourl' => 9, 'License' => 10, 'Bumpass' => 11, 'Manzanita' => 12, 'Visitor' => 13, 'Sulphur' => 14, 'King' => 15, 'Southwest' => 16, 'Warner' => 17, 'Summit' => 18, 'Mount' => 19, 'Fantastic' => 20, 'Boiling' => 21, 'Devil' => 22, 'Juniper' => 23, 'Terminal' => 24, 'Snag' => 25, 'Cliff' => 26, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'username' => 1, 'userlocation' => 2, 'dateposted' => 3, 'timeposted' => 4, 'datetaken' => 5, 'timetaken' => 6, 'title' => 7, 'description' => 8, 'photourl' => 9, 'license' => 10, 'bumpass' => 11, 'manzanita' => 12, 'visitor' => 13, 'sulphur' => 14, 'king' => 15, 'southwest' => 16, 'warner' => 17, 'summit' => 18, 'mount' => 19, 'fantastic' => 20, 'boiling' => 21, 'devil' => 22, 'juniper' => 23, 'terminal' => 24, 'snag' => 25, 'cliff' => 26, ),
        BasePeer::TYPE_COLNAME => array (FlickrPeer::ID => 0, FlickrPeer::USERNAME => 1, FlickrPeer::USERLOCATION => 2, FlickrPeer::DATEPOSTED => 3, FlickrPeer::TIMEPOSTED => 4, FlickrPeer::DATETAKEN => 5, FlickrPeer::TIMETAKEN => 6, FlickrPeer::TITLE => 7, FlickrPeer::DESCRIPTION => 8, FlickrPeer::PHOTOURL => 9, FlickrPeer::LICENSE => 10, FlickrPeer::BUMPASS => 11, FlickrPeer::MANZANITA => 12, FlickrPeer::VISITOR => 13, FlickrPeer::SULPHUR => 14, FlickrPeer::KING => 15, FlickrPeer::SOUTHWEST => 16, FlickrPeer::WARNER => 17, FlickrPeer::SUMMIT => 18, FlickrPeer::MOUNT => 19, FlickrPeer::FANTASTIC => 20, FlickrPeer::BOILING => 21, FlickrPeer::DEVIL => 22, FlickrPeer::JUNIPER => 23, FlickrPeer::TERMINAL => 24, FlickrPeer::SNAG => 25, FlickrPeer::CLIFF => 26, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USERNAME' => 1, 'USERLOCATION' => 2, 'DATEPOSTED' => 3, 'TIMEPOSTED' => 4, 'DATETAKEN' => 5, 'TIMETAKEN' => 6, 'TITLE' => 7, 'DESCRIPTION' => 8, 'PHOTOURL' => 9, 'LICENSE' => 10, 'BUMPASS' => 11, 'MANZANITA' => 12, 'VISITOR' => 13, 'SULPHUR' => 14, 'KING' => 15, 'SOUTHWEST' => 16, 'WARNER' => 17, 'SUMMIT' => 18, 'MOUNT' => 19, 'FANTASTIC' => 20, 'BOILING' => 21, 'DEVIL' => 22, 'JUNIPER' => 23, 'TERMINAL' => 24, 'SNAG' => 25, 'CLIFF' => 26, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'userName' => 1, 'userLocation' => 2, 'datePosted' => 3, 'timePosted' => 4, 'dateTaken' => 5, 'timeTaken' => 6, 'title' => 7, 'description' => 8, 'photoURL' => 9, 'license' => 10, 'bumpass' => 11, 'manzanita' => 12, 'visitor' => 13, 'sulphur' => 14, 'king' => 15, 'southwest' => 16, 'warner' => 17, 'summit' => 18, 'mount' => 19, 'fantastic' => 20, 'boiling' => 21, 'devil' => 22, 'juniper' => 23, 'terminal' => 24, 'snag' => 25, 'cliff' => 26, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
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
        $toNames = FlickrPeer::getFieldNames($toType);
        $key = isset(FlickrPeer::$fieldKeys[$fromType][$name]) ? FlickrPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FlickrPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FlickrPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FlickrPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FlickrPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FlickrPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FlickrPeer::ID);
            $criteria->addSelectColumn(FlickrPeer::USERNAME);
            $criteria->addSelectColumn(FlickrPeer::USERLOCATION);
            $criteria->addSelectColumn(FlickrPeer::DATEPOSTED);
            $criteria->addSelectColumn(FlickrPeer::TIMEPOSTED);
            $criteria->addSelectColumn(FlickrPeer::DATETAKEN);
            $criteria->addSelectColumn(FlickrPeer::TIMETAKEN);
            $criteria->addSelectColumn(FlickrPeer::TITLE);
            $criteria->addSelectColumn(FlickrPeer::DESCRIPTION);
            $criteria->addSelectColumn(FlickrPeer::PHOTOURL);
            $criteria->addSelectColumn(FlickrPeer::LICENSE);
            $criteria->addSelectColumn(FlickrPeer::BUMPASS);
            $criteria->addSelectColumn(FlickrPeer::MANZANITA);
            $criteria->addSelectColumn(FlickrPeer::VISITOR);
            $criteria->addSelectColumn(FlickrPeer::SULPHUR);
            $criteria->addSelectColumn(FlickrPeer::KING);
            $criteria->addSelectColumn(FlickrPeer::SOUTHWEST);
            $criteria->addSelectColumn(FlickrPeer::WARNER);
            $criteria->addSelectColumn(FlickrPeer::SUMMIT);
            $criteria->addSelectColumn(FlickrPeer::MOUNT);
            $criteria->addSelectColumn(FlickrPeer::FANTASTIC);
            $criteria->addSelectColumn(FlickrPeer::BOILING);
            $criteria->addSelectColumn(FlickrPeer::DEVIL);
            $criteria->addSelectColumn(FlickrPeer::JUNIPER);
            $criteria->addSelectColumn(FlickrPeer::TERMINAL);
            $criteria->addSelectColumn(FlickrPeer::SNAG);
            $criteria->addSelectColumn(FlickrPeer::CLIFF);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.userName');
            $criteria->addSelectColumn($alias . '.userLocation');
            $criteria->addSelectColumn($alias . '.datePosted');
            $criteria->addSelectColumn($alias . '.timePosted');
            $criteria->addSelectColumn($alias . '.dateTaken');
            $criteria->addSelectColumn($alias . '.timeTaken');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.photoURL');
            $criteria->addSelectColumn($alias . '.license');
            $criteria->addSelectColumn($alias . '.bumpass');
            $criteria->addSelectColumn($alias . '.manzanita');
            $criteria->addSelectColumn($alias . '.visitor');
            $criteria->addSelectColumn($alias . '.sulphur');
            $criteria->addSelectColumn($alias . '.king');
            $criteria->addSelectColumn($alias . '.southwest');
            $criteria->addSelectColumn($alias . '.warner');
            $criteria->addSelectColumn($alias . '.summit');
            $criteria->addSelectColumn($alias . '.mount');
            $criteria->addSelectColumn($alias . '.fantastic');
            $criteria->addSelectColumn($alias . '.boiling');
            $criteria->addSelectColumn($alias . '.devil');
            $criteria->addSelectColumn($alias . '.juniper');
            $criteria->addSelectColumn($alias . '.terminal');
            $criteria->addSelectColumn($alias . '.snag');
            $criteria->addSelectColumn($alias . '.cliff');
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
        $criteria->setPrimaryTableName(FlickrPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlickrPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FlickrPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Flickr
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FlickrPeer::doSelect($critcopy, $con);
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
        return FlickrPeer::populateObjects(FlickrPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FlickrPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FlickrPeer::DATABASE_NAME);

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
     * @param Flickr $obj A Flickr object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            FlickrPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Flickr object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Flickr) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Flickr object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FlickrPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Flickr Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FlickrPeer::$instances[$key])) {
                return FlickrPeer::$instances[$key];
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
        foreach (FlickrPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FlickrPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to FLICKR
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
        $cls = FlickrPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FlickrPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FlickrPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FlickrPeer::addInstanceToPool($obj, $key);
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
     * @return array (Flickr object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FlickrPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FlickrPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FlickrPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FlickrPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FlickrPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FlickrPeer::DATABASE_NAME)->getTable(FlickrPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFlickrPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFlickrPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FlickrTableMap());
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
        return FlickrPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Flickr or Criteria object.
     *
     * @param      mixed $values Criteria or Flickr object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Flickr object
        }


        // Set the correct dbName
        $criteria->setDbName(FlickrPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Flickr or Criteria object.
     *
     * @param      mixed $values Criteria or Flickr object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FlickrPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FlickrPeer::ID);
            $value = $criteria->remove(FlickrPeer::ID);
            if ($value) {
                $selectCriteria->add(FlickrPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FlickrPeer::TABLE_NAME);
            }

        } else { // $values is Flickr object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FlickrPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the FLICKR table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FlickrPeer::TABLE_NAME, $con, FlickrPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FlickrPeer::clearInstancePool();
            FlickrPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Flickr or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Flickr object or primary key or array of primary keys
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
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FlickrPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Flickr) { // it's a model object
            // invalidate the cache for this single object
            FlickrPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FlickrPeer::DATABASE_NAME);
            $criteria->add(FlickrPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FlickrPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FlickrPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FlickrPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Flickr object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Flickr $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FlickrPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FlickrPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FlickrPeer::DATABASE_NAME, FlickrPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Flickr
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FlickrPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FlickrPeer::DATABASE_NAME);
        $criteria->add(FlickrPeer::ID, $pk);

        $v = FlickrPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Flickr[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlickrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FlickrPeer::DATABASE_NAME);
            $criteria->add(FlickrPeer::ID, $pks, Criteria::IN);
            $objs = FlickrPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFlickrPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFlickrPeer::buildTableMap();

