<?php


/**
 * Base static class for performing query and update operations on the 'YELP' table.
 *
 *
 *
 * @package propel.generator.legacyapp.om
 */
abstract class BaseYelpPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'legacyapp';

    /** the table name for this class */
    const TABLE_NAME = 'YELP';

    /** the related Propel class for this table */
    const OM_CLASS = 'Yelp';

    /** the related TableMap class for this table */
    const TM_CLASS = 'YelpTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 28;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 28;

    /** the column name for the id field */
    const ID = 'YELP.id';

    /** the column name for the pageURL field */
    const PAGEURL = 'YELP.pageURL';

    /** the column name for the userName field */
    const USERNAME = 'YELP.userName';

    /** the column name for the address field */
    const ADDRESS = 'YELP.address';

    /** the column name for the rating field */
    const RATING = 'YELP.rating';

    /** the column name for the friendsCount field */
    const FRIENDSCOUNT = 'YELP.friendsCount';

    /** the column name for the reviewCount field */
    const REVIEWCOUNT = 'YELP.reviewCount';

    /** the column name for the date field */
    const DATE = 'YELP.date';

    /** the column name for the comment field */
    const COMMENT = 'YELP.comment';

    /** the column name for the useful field */
    const USEFUL = 'YELP.useful';

    /** the column name for the funny field */
    const FUNNY = 'YELP.funny';

    /** the column name for the cool field */
    const COOL = 'YELP.cool';

    /** the column name for the bumpass field */
    const BUMPASS = 'YELP.bumpass';

    /** the column name for the manzanita field */
    const MANZANITA = 'YELP.manzanita';

    /** the column name for the visitor field */
    const VISITOR = 'YELP.visitor';

    /** the column name for the sulphur field */
    const SULPHUR = 'YELP.sulphur';

    /** the column name for the king field */
    const KING = 'YELP.king';

    /** the column name for the southwest field */
    const SOUTHWEST = 'YELP.southwest';

    /** the column name for the warner field */
    const WARNER = 'YELP.warner';

    /** the column name for the summit field */
    const SUMMIT = 'YELP.summit';

    /** the column name for the mount field */
    const MOUNT = 'YELP.mount';

    /** the column name for the fantastic field */
    const FANTASTIC = 'YELP.fantastic';

    /** the column name for the boiling field */
    const BOILING = 'YELP.boiling';

    /** the column name for the devil field */
    const DEVIL = 'YELP.devil';

    /** the column name for the juniper field */
    const JUNIPER = 'YELP.juniper';

    /** the column name for the terminal field */
    const TERMINAL = 'YELP.terminal';

    /** the column name for the snag field */
    const SNAG = 'YELP.snag';

    /** the column name for the cliff field */
    const CLIFF = 'YELP.cliff';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Yelp objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Yelp[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. YelpPeer::$fieldNames[YelpPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Pageurl', 'Username', 'Address', 'Rating', 'Friendscount', 'Reviewcount', 'Date', 'Comment', 'Useful', 'Funny', 'Cool', 'Bumpass', 'Manzanita', 'Visitor', 'Sulphur', 'King', 'Southwest', 'Warner', 'Summit', 'Mount', 'Fantastic', 'Boiling', 'Devil', 'Juniper', 'Terminal', 'Snag', 'Cliff', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'pageurl', 'username', 'address', 'rating', 'friendscount', 'reviewcount', 'date', 'comment', 'useful', 'funny', 'cool', 'bumpass', 'manzanita', 'visitor', 'sulphur', 'king', 'southwest', 'warner', 'summit', 'mount', 'fantastic', 'boiling', 'devil', 'juniper', 'terminal', 'snag', 'cliff', ),
        BasePeer::TYPE_COLNAME => array (YelpPeer::ID, YelpPeer::PAGEURL, YelpPeer::USERNAME, YelpPeer::ADDRESS, YelpPeer::RATING, YelpPeer::FRIENDSCOUNT, YelpPeer::REVIEWCOUNT, YelpPeer::DATE, YelpPeer::COMMENT, YelpPeer::USEFUL, YelpPeer::FUNNY, YelpPeer::COOL, YelpPeer::BUMPASS, YelpPeer::MANZANITA, YelpPeer::VISITOR, YelpPeer::SULPHUR, YelpPeer::KING, YelpPeer::SOUTHWEST, YelpPeer::WARNER, YelpPeer::SUMMIT, YelpPeer::MOUNT, YelpPeer::FANTASTIC, YelpPeer::BOILING, YelpPeer::DEVIL, YelpPeer::JUNIPER, YelpPeer::TERMINAL, YelpPeer::SNAG, YelpPeer::CLIFF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PAGEURL', 'USERNAME', 'ADDRESS', 'RATING', 'FRIENDSCOUNT', 'REVIEWCOUNT', 'DATE', 'COMMENT', 'USEFUL', 'FUNNY', 'COOL', 'BUMPASS', 'MANZANITA', 'VISITOR', 'SULPHUR', 'KING', 'SOUTHWEST', 'WARNER', 'SUMMIT', 'MOUNT', 'FANTASTIC', 'BOILING', 'DEVIL', 'JUNIPER', 'TERMINAL', 'SNAG', 'CLIFF', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'pageURL', 'userName', 'address', 'rating', 'friendsCount', 'reviewCount', 'date', 'comment', 'useful', 'funny', 'cool', 'bumpass', 'manzanita', 'visitor', 'sulphur', 'king', 'southwest', 'warner', 'summit', 'mount', 'fantastic', 'boiling', 'devil', 'juniper', 'terminal', 'snag', 'cliff', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. YelpPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Pageurl' => 1, 'Username' => 2, 'Address' => 3, 'Rating' => 4, 'Friendscount' => 5, 'Reviewcount' => 6, 'Date' => 7, 'Comment' => 8, 'Useful' => 9, 'Funny' => 10, 'Cool' => 11, 'Bumpass' => 12, 'Manzanita' => 13, 'Visitor' => 14, 'Sulphur' => 15, 'King' => 16, 'Southwest' => 17, 'Warner' => 18, 'Summit' => 19, 'Mount' => 20, 'Fantastic' => 21, 'Boiling' => 22, 'Devil' => 23, 'Juniper' => 24, 'Terminal' => 25, 'Snag' => 26, 'Cliff' => 27, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'pageurl' => 1, 'username' => 2, 'address' => 3, 'rating' => 4, 'friendscount' => 5, 'reviewcount' => 6, 'date' => 7, 'comment' => 8, 'useful' => 9, 'funny' => 10, 'cool' => 11, 'bumpass' => 12, 'manzanita' => 13, 'visitor' => 14, 'sulphur' => 15, 'king' => 16, 'southwest' => 17, 'warner' => 18, 'summit' => 19, 'mount' => 20, 'fantastic' => 21, 'boiling' => 22, 'devil' => 23, 'juniper' => 24, 'terminal' => 25, 'snag' => 26, 'cliff' => 27, ),
        BasePeer::TYPE_COLNAME => array (YelpPeer::ID => 0, YelpPeer::PAGEURL => 1, YelpPeer::USERNAME => 2, YelpPeer::ADDRESS => 3, YelpPeer::RATING => 4, YelpPeer::FRIENDSCOUNT => 5, YelpPeer::REVIEWCOUNT => 6, YelpPeer::DATE => 7, YelpPeer::COMMENT => 8, YelpPeer::USEFUL => 9, YelpPeer::FUNNY => 10, YelpPeer::COOL => 11, YelpPeer::BUMPASS => 12, YelpPeer::MANZANITA => 13, YelpPeer::VISITOR => 14, YelpPeer::SULPHUR => 15, YelpPeer::KING => 16, YelpPeer::SOUTHWEST => 17, YelpPeer::WARNER => 18, YelpPeer::SUMMIT => 19, YelpPeer::MOUNT => 20, YelpPeer::FANTASTIC => 21, YelpPeer::BOILING => 22, YelpPeer::DEVIL => 23, YelpPeer::JUNIPER => 24, YelpPeer::TERMINAL => 25, YelpPeer::SNAG => 26, YelpPeer::CLIFF => 27, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PAGEURL' => 1, 'USERNAME' => 2, 'ADDRESS' => 3, 'RATING' => 4, 'FRIENDSCOUNT' => 5, 'REVIEWCOUNT' => 6, 'DATE' => 7, 'COMMENT' => 8, 'USEFUL' => 9, 'FUNNY' => 10, 'COOL' => 11, 'BUMPASS' => 12, 'MANZANITA' => 13, 'VISITOR' => 14, 'SULPHUR' => 15, 'KING' => 16, 'SOUTHWEST' => 17, 'WARNER' => 18, 'SUMMIT' => 19, 'MOUNT' => 20, 'FANTASTIC' => 21, 'BOILING' => 22, 'DEVIL' => 23, 'JUNIPER' => 24, 'TERMINAL' => 25, 'SNAG' => 26, 'CLIFF' => 27, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'pageURL' => 1, 'userName' => 2, 'address' => 3, 'rating' => 4, 'friendsCount' => 5, 'reviewCount' => 6, 'date' => 7, 'comment' => 8, 'useful' => 9, 'funny' => 10, 'cool' => 11, 'bumpass' => 12, 'manzanita' => 13, 'visitor' => 14, 'sulphur' => 15, 'king' => 16, 'southwest' => 17, 'warner' => 18, 'summit' => 19, 'mount' => 20, 'fantastic' => 21, 'boiling' => 22, 'devil' => 23, 'juniper' => 24, 'terminal' => 25, 'snag' => 26, 'cliff' => 27, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
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
        $toNames = YelpPeer::getFieldNames($toType);
        $key = isset(YelpPeer::$fieldKeys[$fromType][$name]) ? YelpPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(YelpPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, YelpPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return YelpPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. YelpPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(YelpPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(YelpPeer::ID);
            $criteria->addSelectColumn(YelpPeer::PAGEURL);
            $criteria->addSelectColumn(YelpPeer::USERNAME);
            $criteria->addSelectColumn(YelpPeer::ADDRESS);
            $criteria->addSelectColumn(YelpPeer::RATING);
            $criteria->addSelectColumn(YelpPeer::FRIENDSCOUNT);
            $criteria->addSelectColumn(YelpPeer::REVIEWCOUNT);
            $criteria->addSelectColumn(YelpPeer::DATE);
            $criteria->addSelectColumn(YelpPeer::COMMENT);
            $criteria->addSelectColumn(YelpPeer::USEFUL);
            $criteria->addSelectColumn(YelpPeer::FUNNY);
            $criteria->addSelectColumn(YelpPeer::COOL);
            $criteria->addSelectColumn(YelpPeer::BUMPASS);
            $criteria->addSelectColumn(YelpPeer::MANZANITA);
            $criteria->addSelectColumn(YelpPeer::VISITOR);
            $criteria->addSelectColumn(YelpPeer::SULPHUR);
            $criteria->addSelectColumn(YelpPeer::KING);
            $criteria->addSelectColumn(YelpPeer::SOUTHWEST);
            $criteria->addSelectColumn(YelpPeer::WARNER);
            $criteria->addSelectColumn(YelpPeer::SUMMIT);
            $criteria->addSelectColumn(YelpPeer::MOUNT);
            $criteria->addSelectColumn(YelpPeer::FANTASTIC);
            $criteria->addSelectColumn(YelpPeer::BOILING);
            $criteria->addSelectColumn(YelpPeer::DEVIL);
            $criteria->addSelectColumn(YelpPeer::JUNIPER);
            $criteria->addSelectColumn(YelpPeer::TERMINAL);
            $criteria->addSelectColumn(YelpPeer::SNAG);
            $criteria->addSelectColumn(YelpPeer::CLIFF);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.pageURL');
            $criteria->addSelectColumn($alias . '.userName');
            $criteria->addSelectColumn($alias . '.address');
            $criteria->addSelectColumn($alias . '.rating');
            $criteria->addSelectColumn($alias . '.friendsCount');
            $criteria->addSelectColumn($alias . '.reviewCount');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.comment');
            $criteria->addSelectColumn($alias . '.useful');
            $criteria->addSelectColumn($alias . '.funny');
            $criteria->addSelectColumn($alias . '.cool');
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
        $criteria->setPrimaryTableName(YelpPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            YelpPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(YelpPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Yelp
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = YelpPeer::doSelect($critcopy, $con);
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
        return YelpPeer::populateObjects(YelpPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            YelpPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(YelpPeer::DATABASE_NAME);

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
     * @param Yelp $obj A Yelp object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            YelpPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Yelp object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Yelp) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Yelp object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(YelpPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Yelp Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(YelpPeer::$instances[$key])) {
                return YelpPeer::$instances[$key];
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
        foreach (YelpPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        YelpPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to YELP
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
        $cls = YelpPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = YelpPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = YelpPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                YelpPeer::addInstanceToPool($obj, $key);
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
     * @return array (Yelp object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = YelpPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = YelpPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + YelpPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = YelpPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            YelpPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(YelpPeer::DATABASE_NAME)->getTable(YelpPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseYelpPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseYelpPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \YelpTableMap());
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
        return YelpPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Yelp or Criteria object.
     *
     * @param      mixed $values Criteria or Yelp object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Yelp object
        }


        // Set the correct dbName
        $criteria->setDbName(YelpPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Yelp or Criteria object.
     *
     * @param      mixed $values Criteria or Yelp object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(YelpPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(YelpPeer::ID);
            $value = $criteria->remove(YelpPeer::ID);
            if ($value) {
                $selectCriteria->add(YelpPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(YelpPeer::TABLE_NAME);
            }

        } else { // $values is Yelp object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(YelpPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the YELP table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(YelpPeer::TABLE_NAME, $con, YelpPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            YelpPeer::clearInstancePool();
            YelpPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Yelp or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Yelp object or primary key or array of primary keys
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
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            YelpPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Yelp) { // it's a model object
            // invalidate the cache for this single object
            YelpPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(YelpPeer::DATABASE_NAME);
            $criteria->add(YelpPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                YelpPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(YelpPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            YelpPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Yelp object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Yelp $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(YelpPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(YelpPeer::TABLE_NAME);

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

        return BasePeer::doValidate(YelpPeer::DATABASE_NAME, YelpPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Yelp
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = YelpPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(YelpPeer::DATABASE_NAME);
        $criteria->add(YelpPeer::ID, $pk);

        $v = YelpPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Yelp[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(YelpPeer::DATABASE_NAME);
            $criteria->add(YelpPeer::ID, $pks, Criteria::IN);
            $objs = YelpPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseYelpPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseYelpPeer::buildTableMap();

