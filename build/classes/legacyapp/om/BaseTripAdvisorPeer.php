<?php


/**
 * Base static class for performing query and update operations on the 'TRIP_ADVISOR' table.
 *
 *
 *
 * @package propel.generator.legacyapp.om
 */
abstract class BaseTripAdvisorPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'legacyapp';

    /** the table name for this class */
    const TABLE_NAME = 'TRIP_ADVISOR';

    /** the related Propel class for this table */
    const OM_CLASS = 'TripAdvisor';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TripAdvisorTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 24;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 24;

    /** the column name for the id field */
    const ID = 'TRIP_ADVISOR.id';

    /** the column name for the pageURL field */
    const PAGEURL = 'TRIP_ADVISOR.pageURL';

    /** the column name for the title field */
    const TITLE = 'TRIP_ADVISOR.title';

    /** the column name for the city field */
    const CITY = 'TRIP_ADVISOR.city';

    /** the column name for the state field */
    const STATE = 'TRIP_ADVISOR.state';

    /** the column name for the date field */
    const DATE = 'TRIP_ADVISOR.date';

    /** the column name for the comment field */
    const COMMENT = 'TRIP_ADVISOR.comment';

    /** the column name for the rating field */
    const RATING = 'TRIP_ADVISOR.rating';

    /** the column name for the bumpass field */
    const BUMPASS = 'TRIP_ADVISOR.bumpass';

    /** the column name for the manzanita field */
    const MANZANITA = 'TRIP_ADVISOR.manzanita';

    /** the column name for the visitor field */
    const VISITOR = 'TRIP_ADVISOR.visitor';

    /** the column name for the sulphur field */
    const SULPHUR = 'TRIP_ADVISOR.sulphur';

    /** the column name for the king field */
    const KING = 'TRIP_ADVISOR.king';

    /** the column name for the southwest field */
    const SOUTHWEST = 'TRIP_ADVISOR.southwest';

    /** the column name for the warner field */
    const WARNER = 'TRIP_ADVISOR.warner';

    /** the column name for the summit field */
    const SUMMIT = 'TRIP_ADVISOR.summit';

    /** the column name for the mount field */
    const MOUNT = 'TRIP_ADVISOR.mount';

    /** the column name for the fantastic field */
    const FANTASTIC = 'TRIP_ADVISOR.fantastic';

    /** the column name for the boiling field */
    const BOILING = 'TRIP_ADVISOR.boiling';

    /** the column name for the devil field */
    const DEVIL = 'TRIP_ADVISOR.devil';

    /** the column name for the juniper field */
    const JUNIPER = 'TRIP_ADVISOR.juniper';

    /** the column name for the terminal field */
    const TERMINAL = 'TRIP_ADVISOR.terminal';

    /** the column name for the snag field */
    const SNAG = 'TRIP_ADVISOR.snag';

    /** the column name for the cliff field */
    const CLIFF = 'TRIP_ADVISOR.cliff';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of TripAdvisor objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TripAdvisor[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TripAdvisorPeer::$fieldNames[TripAdvisorPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Pageurl', 'Title', 'City', 'State', 'Date', 'Comment', 'Rating', 'Bumpass', 'Manzanita', 'Visitor', 'Sulphur', 'King', 'Southwest', 'Warner', 'Summit', 'Mount', 'Fantastic', 'Boiling', 'Devil', 'Juniper', 'Terminal', 'Snag', 'Cliff', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'pageurl', 'title', 'city', 'state', 'date', 'comment', 'rating', 'bumpass', 'manzanita', 'visitor', 'sulphur', 'king', 'southwest', 'warner', 'summit', 'mount', 'fantastic', 'boiling', 'devil', 'juniper', 'terminal', 'snag', 'cliff', ),
        BasePeer::TYPE_COLNAME => array (TripAdvisorPeer::ID, TripAdvisorPeer::PAGEURL, TripAdvisorPeer::TITLE, TripAdvisorPeer::CITY, TripAdvisorPeer::STATE, TripAdvisorPeer::DATE, TripAdvisorPeer::COMMENT, TripAdvisorPeer::RATING, TripAdvisorPeer::BUMPASS, TripAdvisorPeer::MANZANITA, TripAdvisorPeer::VISITOR, TripAdvisorPeer::SULPHUR, TripAdvisorPeer::KING, TripAdvisorPeer::SOUTHWEST, TripAdvisorPeer::WARNER, TripAdvisorPeer::SUMMIT, TripAdvisorPeer::MOUNT, TripAdvisorPeer::FANTASTIC, TripAdvisorPeer::BOILING, TripAdvisorPeer::DEVIL, TripAdvisorPeer::JUNIPER, TripAdvisorPeer::TERMINAL, TripAdvisorPeer::SNAG, TripAdvisorPeer::CLIFF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PAGEURL', 'TITLE', 'CITY', 'STATE', 'DATE', 'COMMENT', 'RATING', 'BUMPASS', 'MANZANITA', 'VISITOR', 'SULPHUR', 'KING', 'SOUTHWEST', 'WARNER', 'SUMMIT', 'MOUNT', 'FANTASTIC', 'BOILING', 'DEVIL', 'JUNIPER', 'TERMINAL', 'SNAG', 'CLIFF', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'pageURL', 'title', 'city', 'state', 'date', 'comment', 'rating', 'bumpass', 'manzanita', 'visitor', 'sulphur', 'king', 'southwest', 'warner', 'summit', 'mount', 'fantastic', 'boiling', 'devil', 'juniper', 'terminal', 'snag', 'cliff', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TripAdvisorPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Pageurl' => 1, 'Title' => 2, 'City' => 3, 'State' => 4, 'Date' => 5, 'Comment' => 6, 'Rating' => 7, 'Bumpass' => 8, 'Manzanita' => 9, 'Visitor' => 10, 'Sulphur' => 11, 'King' => 12, 'Southwest' => 13, 'Warner' => 14, 'Summit' => 15, 'Mount' => 16, 'Fantastic' => 17, 'Boiling' => 18, 'Devil' => 19, 'Juniper' => 20, 'Terminal' => 21, 'Snag' => 22, 'Cliff' => 23, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'pageurl' => 1, 'title' => 2, 'city' => 3, 'state' => 4, 'date' => 5, 'comment' => 6, 'rating' => 7, 'bumpass' => 8, 'manzanita' => 9, 'visitor' => 10, 'sulphur' => 11, 'king' => 12, 'southwest' => 13, 'warner' => 14, 'summit' => 15, 'mount' => 16, 'fantastic' => 17, 'boiling' => 18, 'devil' => 19, 'juniper' => 20, 'terminal' => 21, 'snag' => 22, 'cliff' => 23, ),
        BasePeer::TYPE_COLNAME => array (TripAdvisorPeer::ID => 0, TripAdvisorPeer::PAGEURL => 1, TripAdvisorPeer::TITLE => 2, TripAdvisorPeer::CITY => 3, TripAdvisorPeer::STATE => 4, TripAdvisorPeer::DATE => 5, TripAdvisorPeer::COMMENT => 6, TripAdvisorPeer::RATING => 7, TripAdvisorPeer::BUMPASS => 8, TripAdvisorPeer::MANZANITA => 9, TripAdvisorPeer::VISITOR => 10, TripAdvisorPeer::SULPHUR => 11, TripAdvisorPeer::KING => 12, TripAdvisorPeer::SOUTHWEST => 13, TripAdvisorPeer::WARNER => 14, TripAdvisorPeer::SUMMIT => 15, TripAdvisorPeer::MOUNT => 16, TripAdvisorPeer::FANTASTIC => 17, TripAdvisorPeer::BOILING => 18, TripAdvisorPeer::DEVIL => 19, TripAdvisorPeer::JUNIPER => 20, TripAdvisorPeer::TERMINAL => 21, TripAdvisorPeer::SNAG => 22, TripAdvisorPeer::CLIFF => 23, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PAGEURL' => 1, 'TITLE' => 2, 'CITY' => 3, 'STATE' => 4, 'DATE' => 5, 'COMMENT' => 6, 'RATING' => 7, 'BUMPASS' => 8, 'MANZANITA' => 9, 'VISITOR' => 10, 'SULPHUR' => 11, 'KING' => 12, 'SOUTHWEST' => 13, 'WARNER' => 14, 'SUMMIT' => 15, 'MOUNT' => 16, 'FANTASTIC' => 17, 'BOILING' => 18, 'DEVIL' => 19, 'JUNIPER' => 20, 'TERMINAL' => 21, 'SNAG' => 22, 'CLIFF' => 23, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'pageURL' => 1, 'title' => 2, 'city' => 3, 'state' => 4, 'date' => 5, 'comment' => 6, 'rating' => 7, 'bumpass' => 8, 'manzanita' => 9, 'visitor' => 10, 'sulphur' => 11, 'king' => 12, 'southwest' => 13, 'warner' => 14, 'summit' => 15, 'mount' => 16, 'fantastic' => 17, 'boiling' => 18, 'devil' => 19, 'juniper' => 20, 'terminal' => 21, 'snag' => 22, 'cliff' => 23, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $toNames = TripAdvisorPeer::getFieldNames($toType);
        $key = isset(TripAdvisorPeer::$fieldKeys[$fromType][$name]) ? TripAdvisorPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TripAdvisorPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TripAdvisorPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TripAdvisorPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TripAdvisorPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TripAdvisorPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TripAdvisorPeer::ID);
            $criteria->addSelectColumn(TripAdvisorPeer::PAGEURL);
            $criteria->addSelectColumn(TripAdvisorPeer::TITLE);
            $criteria->addSelectColumn(TripAdvisorPeer::CITY);
            $criteria->addSelectColumn(TripAdvisorPeer::STATE);
            $criteria->addSelectColumn(TripAdvisorPeer::DATE);
            $criteria->addSelectColumn(TripAdvisorPeer::COMMENT);
            $criteria->addSelectColumn(TripAdvisorPeer::RATING);
            $criteria->addSelectColumn(TripAdvisorPeer::BUMPASS);
            $criteria->addSelectColumn(TripAdvisorPeer::MANZANITA);
            $criteria->addSelectColumn(TripAdvisorPeer::VISITOR);
            $criteria->addSelectColumn(TripAdvisorPeer::SULPHUR);
            $criteria->addSelectColumn(TripAdvisorPeer::KING);
            $criteria->addSelectColumn(TripAdvisorPeer::SOUTHWEST);
            $criteria->addSelectColumn(TripAdvisorPeer::WARNER);
            $criteria->addSelectColumn(TripAdvisorPeer::SUMMIT);
            $criteria->addSelectColumn(TripAdvisorPeer::MOUNT);
            $criteria->addSelectColumn(TripAdvisorPeer::FANTASTIC);
            $criteria->addSelectColumn(TripAdvisorPeer::BOILING);
            $criteria->addSelectColumn(TripAdvisorPeer::DEVIL);
            $criteria->addSelectColumn(TripAdvisorPeer::JUNIPER);
            $criteria->addSelectColumn(TripAdvisorPeer::TERMINAL);
            $criteria->addSelectColumn(TripAdvisorPeer::SNAG);
            $criteria->addSelectColumn(TripAdvisorPeer::CLIFF);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.pageURL');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.state');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.comment');
            $criteria->addSelectColumn($alias . '.rating');
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
        $criteria->setPrimaryTableName(TripAdvisorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TripAdvisorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TripAdvisorPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return TripAdvisor
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TripAdvisorPeer::doSelect($critcopy, $con);
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
        return TripAdvisorPeer::populateObjects(TripAdvisorPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TripAdvisorPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TripAdvisorPeer::DATABASE_NAME);

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
     * @param TripAdvisor $obj A TripAdvisor object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            TripAdvisorPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A TripAdvisor object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TripAdvisor) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TripAdvisor object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TripAdvisorPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return TripAdvisor Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TripAdvisorPeer::$instances[$key])) {
                return TripAdvisorPeer::$instances[$key];
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
        foreach (TripAdvisorPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TripAdvisorPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to TRIP_ADVISOR
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
        $cls = TripAdvisorPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TripAdvisorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TripAdvisorPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TripAdvisorPeer::addInstanceToPool($obj, $key);
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
     * @return array (TripAdvisor object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TripAdvisorPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TripAdvisorPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TripAdvisorPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TripAdvisorPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TripAdvisorPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TripAdvisorPeer::DATABASE_NAME)->getTable(TripAdvisorPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTripAdvisorPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTripAdvisorPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TripAdvisorTableMap());
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
        return TripAdvisorPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TripAdvisor or Criteria object.
     *
     * @param      mixed $values Criteria or TripAdvisor object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TripAdvisor object
        }


        // Set the correct dbName
        $criteria->setDbName(TripAdvisorPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a TripAdvisor or Criteria object.
     *
     * @param      mixed $values Criteria or TripAdvisor object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TripAdvisorPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TripAdvisorPeer::ID);
            $value = $criteria->remove(TripAdvisorPeer::ID);
            if ($value) {
                $selectCriteria->add(TripAdvisorPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TripAdvisorPeer::TABLE_NAME);
            }

        } else { // $values is TripAdvisor object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TripAdvisorPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the TRIP_ADVISOR table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TripAdvisorPeer::TABLE_NAME, $con, TripAdvisorPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TripAdvisorPeer::clearInstancePool();
            TripAdvisorPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TripAdvisor or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TripAdvisor object or primary key or array of primary keys
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
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TripAdvisorPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TripAdvisor) { // it's a model object
            // invalidate the cache for this single object
            TripAdvisorPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TripAdvisorPeer::DATABASE_NAME);
            $criteria->add(TripAdvisorPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TripAdvisorPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TripAdvisorPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TripAdvisorPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TripAdvisor object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param TripAdvisor $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TripAdvisorPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TripAdvisorPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TripAdvisorPeer::DATABASE_NAME, TripAdvisorPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TripAdvisor
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TripAdvisorPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TripAdvisorPeer::DATABASE_NAME);
        $criteria->add(TripAdvisorPeer::ID, $pk);

        $v = TripAdvisorPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TripAdvisor[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TripAdvisorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TripAdvisorPeer::DATABASE_NAME);
            $criteria->add(TripAdvisorPeer::ID, $pks, Criteria::IN);
            $objs = TripAdvisorPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTripAdvisorPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTripAdvisorPeer::buildTableMap();

