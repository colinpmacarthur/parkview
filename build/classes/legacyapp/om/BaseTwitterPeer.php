<?php


/**
 * Base static class for performing query and update operations on the 'TWITTER' table.
 *
 *
 *
 * @package propel.generator.legacyapp.om
 */
abstract class BaseTwitterPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'legacyapp';

    /** the table name for this class */
    const TABLE_NAME = 'TWITTER';

    /** the related Propel class for this table */
    const OM_CLASS = 'Twitter';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TwitterTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the ID field */
    const ID = 'TWITTER.ID';

    /** the column name for the name field */
    const NAME = 'TWITTER.name';

    /** the column name for the accountID field */
    const ACCOUNTID = 'TWITTER.accountID';

    /** the column name for the date field */
    const DATE = 'TWITTER.date';

    /** the column name for the tweet field */
    const TWEET = 'TWITTER.tweet';

    /** the column name for the url field */
    const URL = 'TWITTER.url';

    /** the column name for the bumpass field */
    const BUMPASS = 'TWITTER.bumpass';

    /** the column name for the manzanita field */
    const MANZANITA = 'TWITTER.manzanita';

    /** the column name for the visitor field */
    const VISITOR = 'TWITTER.visitor';

    /** the column name for the sulphur field */
    const SULPHUR = 'TWITTER.sulphur';

    /** the column name for the king field */
    const KING = 'TWITTER.king';

    /** the column name for the southwest field */
    const SOUTHWEST = 'TWITTER.southwest';

    /** the column name for the warner field */
    const WARNER = 'TWITTER.warner';

    /** the column name for the summit field */
    const SUMMIT = 'TWITTER.summit';

    /** the column name for the mount field */
    const MOUNT = 'TWITTER.mount';

    /** the column name for the fantastic field */
    const FANTASTIC = 'TWITTER.fantastic';

    /** the column name for the boiling field */
    const BOILING = 'TWITTER.boiling';

    /** the column name for the devil field */
    const DEVIL = 'TWITTER.devil';

    /** the column name for the juniper field */
    const JUNIPER = 'TWITTER.juniper';

    /** the column name for the terminal field */
    const TERMINAL = 'TWITTER.terminal';

    /** the column name for the snag field */
    const SNAG = 'TWITTER.snag';

    /** the column name for the cliff field */
    const CLIFF = 'TWITTER.cliff';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Twitter objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Twitter[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TwitterPeer::$fieldNames[TwitterPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Accountid', 'Date', 'Tweet', 'Url', 'Bumpass', 'Manzanita', 'Visitor', 'Sulphur', 'King', 'Southwest', 'Warner', 'Summit', 'Mount', 'Fantastic', 'Boiling', 'Devil', 'Juniper', 'Terminal', 'Snag', 'Cliff', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'accountid', 'date', 'tweet', 'url', 'bumpass', 'manzanita', 'visitor', 'sulphur', 'king', 'southwest', 'warner', 'summit', 'mount', 'fantastic', 'boiling', 'devil', 'juniper', 'terminal', 'snag', 'cliff', ),
        BasePeer::TYPE_COLNAME => array (TwitterPeer::ID, TwitterPeer::NAME, TwitterPeer::ACCOUNTID, TwitterPeer::DATE, TwitterPeer::TWEET, TwitterPeer::URL, TwitterPeer::BUMPASS, TwitterPeer::MANZANITA, TwitterPeer::VISITOR, TwitterPeer::SULPHUR, TwitterPeer::KING, TwitterPeer::SOUTHWEST, TwitterPeer::WARNER, TwitterPeer::SUMMIT, TwitterPeer::MOUNT, TwitterPeer::FANTASTIC, TwitterPeer::BOILING, TwitterPeer::DEVIL, TwitterPeer::JUNIPER, TwitterPeer::TERMINAL, TwitterPeer::SNAG, TwitterPeer::CLIFF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'ACCOUNTID', 'DATE', 'TWEET', 'URL', 'BUMPASS', 'MANZANITA', 'VISITOR', 'SULPHUR', 'KING', 'SOUTHWEST', 'WARNER', 'SUMMIT', 'MOUNT', 'FANTASTIC', 'BOILING', 'DEVIL', 'JUNIPER', 'TERMINAL', 'SNAG', 'CLIFF', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'name', 'accountID', 'date', 'tweet', 'url', 'bumpass', 'manzanita', 'visitor', 'sulphur', 'king', 'southwest', 'warner', 'summit', 'mount', 'fantastic', 'boiling', 'devil', 'juniper', 'terminal', 'snag', 'cliff', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TwitterPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Accountid' => 2, 'Date' => 3, 'Tweet' => 4, 'Url' => 5, 'Bumpass' => 6, 'Manzanita' => 7, 'Visitor' => 8, 'Sulphur' => 9, 'King' => 10, 'Southwest' => 11, 'Warner' => 12, 'Summit' => 13, 'Mount' => 14, 'Fantastic' => 15, 'Boiling' => 16, 'Devil' => 17, 'Juniper' => 18, 'Terminal' => 19, 'Snag' => 20, 'Cliff' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'accountid' => 2, 'date' => 3, 'tweet' => 4, 'url' => 5, 'bumpass' => 6, 'manzanita' => 7, 'visitor' => 8, 'sulphur' => 9, 'king' => 10, 'southwest' => 11, 'warner' => 12, 'summit' => 13, 'mount' => 14, 'fantastic' => 15, 'boiling' => 16, 'devil' => 17, 'juniper' => 18, 'terminal' => 19, 'snag' => 20, 'cliff' => 21, ),
        BasePeer::TYPE_COLNAME => array (TwitterPeer::ID => 0, TwitterPeer::NAME => 1, TwitterPeer::ACCOUNTID => 2, TwitterPeer::DATE => 3, TwitterPeer::TWEET => 4, TwitterPeer::URL => 5, TwitterPeer::BUMPASS => 6, TwitterPeer::MANZANITA => 7, TwitterPeer::VISITOR => 8, TwitterPeer::SULPHUR => 9, TwitterPeer::KING => 10, TwitterPeer::SOUTHWEST => 11, TwitterPeer::WARNER => 12, TwitterPeer::SUMMIT => 13, TwitterPeer::MOUNT => 14, TwitterPeer::FANTASTIC => 15, TwitterPeer::BOILING => 16, TwitterPeer::DEVIL => 17, TwitterPeer::JUNIPER => 18, TwitterPeer::TERMINAL => 19, TwitterPeer::SNAG => 20, TwitterPeer::CLIFF => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'ACCOUNTID' => 2, 'DATE' => 3, 'TWEET' => 4, 'URL' => 5, 'BUMPASS' => 6, 'MANZANITA' => 7, 'VISITOR' => 8, 'SULPHUR' => 9, 'KING' => 10, 'SOUTHWEST' => 11, 'WARNER' => 12, 'SUMMIT' => 13, 'MOUNT' => 14, 'FANTASTIC' => 15, 'BOILING' => 16, 'DEVIL' => 17, 'JUNIPER' => 18, 'TERMINAL' => 19, 'SNAG' => 20, 'CLIFF' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'name' => 1, 'accountID' => 2, 'date' => 3, 'tweet' => 4, 'url' => 5, 'bumpass' => 6, 'manzanita' => 7, 'visitor' => 8, 'sulphur' => 9, 'king' => 10, 'southwest' => 11, 'warner' => 12, 'summit' => 13, 'mount' => 14, 'fantastic' => 15, 'boiling' => 16, 'devil' => 17, 'juniper' => 18, 'terminal' => 19, 'snag' => 20, 'cliff' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $toNames = TwitterPeer::getFieldNames($toType);
        $key = isset(TwitterPeer::$fieldKeys[$fromType][$name]) ? TwitterPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TwitterPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TwitterPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TwitterPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TwitterPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TwitterPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TwitterPeer::ID);
            $criteria->addSelectColumn(TwitterPeer::NAME);
            $criteria->addSelectColumn(TwitterPeer::ACCOUNTID);
            $criteria->addSelectColumn(TwitterPeer::DATE);
            $criteria->addSelectColumn(TwitterPeer::TWEET);
            $criteria->addSelectColumn(TwitterPeer::URL);
            $criteria->addSelectColumn(TwitterPeer::BUMPASS);
            $criteria->addSelectColumn(TwitterPeer::MANZANITA);
            $criteria->addSelectColumn(TwitterPeer::VISITOR);
            $criteria->addSelectColumn(TwitterPeer::SULPHUR);
            $criteria->addSelectColumn(TwitterPeer::KING);
            $criteria->addSelectColumn(TwitterPeer::SOUTHWEST);
            $criteria->addSelectColumn(TwitterPeer::WARNER);
            $criteria->addSelectColumn(TwitterPeer::SUMMIT);
            $criteria->addSelectColumn(TwitterPeer::MOUNT);
            $criteria->addSelectColumn(TwitterPeer::FANTASTIC);
            $criteria->addSelectColumn(TwitterPeer::BOILING);
            $criteria->addSelectColumn(TwitterPeer::DEVIL);
            $criteria->addSelectColumn(TwitterPeer::JUNIPER);
            $criteria->addSelectColumn(TwitterPeer::TERMINAL);
            $criteria->addSelectColumn(TwitterPeer::SNAG);
            $criteria->addSelectColumn(TwitterPeer::CLIFF);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.accountID');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.tweet');
            $criteria->addSelectColumn($alias . '.url');
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
        $criteria->setPrimaryTableName(TwitterPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TwitterPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TwitterPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Twitter
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TwitterPeer::doSelect($critcopy, $con);
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
        return TwitterPeer::populateObjects(TwitterPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TwitterPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TwitterPeer::DATABASE_NAME);

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
     * @param Twitter $obj A Twitter object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            TwitterPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Twitter object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Twitter) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Twitter object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TwitterPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Twitter Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TwitterPeer::$instances[$key])) {
                return TwitterPeer::$instances[$key];
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
        foreach (TwitterPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TwitterPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to TWITTER
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
        $cls = TwitterPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TwitterPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TwitterPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TwitterPeer::addInstanceToPool($obj, $key);
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
     * @return array (Twitter object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TwitterPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TwitterPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TwitterPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TwitterPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TwitterPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TwitterPeer::DATABASE_NAME)->getTable(TwitterPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTwitterPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTwitterPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TwitterTableMap());
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
        return TwitterPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Twitter or Criteria object.
     *
     * @param      mixed $values Criteria or Twitter object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Twitter object
        }


        // Set the correct dbName
        $criteria->setDbName(TwitterPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Twitter or Criteria object.
     *
     * @param      mixed $values Criteria or Twitter object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TwitterPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TwitterPeer::ID);
            $value = $criteria->remove(TwitterPeer::ID);
            if ($value) {
                $selectCriteria->add(TwitterPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TwitterPeer::TABLE_NAME);
            }

        } else { // $values is Twitter object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TwitterPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the TWITTER table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TwitterPeer::TABLE_NAME, $con, TwitterPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TwitterPeer::clearInstancePool();
            TwitterPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Twitter or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Twitter object or primary key or array of primary keys
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
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TwitterPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Twitter) { // it's a model object
            // invalidate the cache for this single object
            TwitterPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TwitterPeer::DATABASE_NAME);
            $criteria->add(TwitterPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TwitterPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TwitterPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TwitterPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Twitter object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Twitter $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TwitterPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TwitterPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TwitterPeer::DATABASE_NAME, TwitterPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Twitter
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TwitterPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TwitterPeer::DATABASE_NAME);
        $criteria->add(TwitterPeer::ID, $pk);

        $v = TwitterPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Twitter[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TwitterPeer::DATABASE_NAME);
            $criteria->add(TwitterPeer::ID, $pks, Criteria::IN);
            $objs = TwitterPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTwitterPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTwitterPeer::buildTableMap();

