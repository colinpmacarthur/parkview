<?php


/**
 * Base class that represents a row from the 'SOCIAL_YELP' table.
 *
 *
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseSocialYelp extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SocialYelpPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SocialYelpPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the parkid field.
     * @var        string
     */
    protected $parkid;

    /**
     * The value for the yelpuserid field.
     * @var        string
     */
    protected $yelpuserid;

    /**
     * The value for the yelpuseravatar field.
     * @var        string
     */
    protected $yelpuseravatar;

    /**
     * The value for the yelpusername field.
     * @var        string
     */
    protected $yelpusername;

    /**
     * The value for the yelpuserlocation field.
     * @var        string
     */
    protected $yelpuserlocation;

    /**
     * The value for the badge field.
     * @var        string
     */
    protected $badge;

    /**
     * The value for the yelpfriendscount field.
     * @var        int
     */
    protected $yelpfriendscount;

    /**
     * The value for the yelpreviewcounts field.
     * @var        int
     */
    protected $yelpreviewcounts;

    /**
     * The value for the yelpratingvalue field.
     * @var        int
     */
    protected $yelpratingvalue;

    /**
     * The value for the yelpreviewyear field.
     * @var        int
     */
    protected $yelpreviewyear;

    /**
     * The value for the yelpreviewmonth field.
     * @var        int
     */
    protected $yelpreviewmonth;

    /**
     * The value for the yelpreviewday field.
     * @var        int
     */
    protected $yelpreviewday;

    /**
     * The value for the yelpreviewcomment field.
     * @var        string
     */
    protected $yelpreviewcomment;

    /**
     * The value for the yelpusefulcomment field.
     * @var        int
     */
    protected $yelpusefulcomment;

    /**
     * The value for the yelpfunnycomment field.
     * @var        int
     */
    protected $yelpfunnycomment;

    /**
     * The value for the yelpcoolcomment field.
     * @var        int
     */
    protected $yelpcoolcomment;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [parkid] column value.
     *
     * @return string
     */
    public function getParkid()
    {

        return $this->parkid;
    }

    /**
     * Get the [yelpuserid] column value.
     *
     * @return string
     */
    public function getYelpuserid()
    {

        return $this->yelpuserid;
    }

    /**
     * Get the [yelpuseravatar] column value.
     *
     * @return string
     */
    public function getYelpuseravatar()
    {

        return $this->yelpuseravatar;
    }

    /**
     * Get the [yelpusername] column value.
     *
     * @return string
     */
    public function getYelpusername()
    {

        return $this->yelpusername;
    }

    /**
     * Get the [yelpuserlocation] column value.
     *
     * @return string
     */
    public function getYelpuserlocation()
    {

        return $this->yelpuserlocation;
    }

    /**
     * Get the [badge] column value.
     *
     * @return string
     */
    public function getBadge()
    {

        return $this->badge;
    }

    /**
     * Get the [yelpfriendscount] column value.
     *
     * @return int
     */
    public function getYelpfriendscount()
    {

        return $this->yelpfriendscount;
    }

    /**
     * Get the [yelpreviewcounts] column value.
     *
     * @return int
     */
    public function getYelpreviewcounts()
    {

        return $this->yelpreviewcounts;
    }

    /**
     * Get the [yelpratingvalue] column value.
     *
     * @return int
     */
    public function getYelpratingvalue()
    {

        return $this->yelpratingvalue;
    }

    /**
     * Get the [yelpreviewyear] column value.
     *
     * @return int
     */
    public function getYelpreviewyear()
    {

        return $this->yelpreviewyear;
    }

    /**
     * Get the [yelpreviewmonth] column value.
     *
     * @return int
     */
    public function getYelpreviewmonth()
    {

        return $this->yelpreviewmonth;
    }

    /**
     * Get the [yelpreviewday] column value.
     *
     * @return int
     */
    public function getYelpreviewday()
    {

        return $this->yelpreviewday;
    }

    /**
     * Get the [yelpreviewcomment] column value.
     *
     * @return string
     */
    public function getYelpreviewcomment()
    {

        return $this->yelpreviewcomment;
    }

    /**
     * Get the [yelpusefulcomment] column value.
     *
     * @return int
     */
    public function getYelpusefulcomment()
    {

        return $this->yelpusefulcomment;
    }

    /**
     * Get the [yelpfunnycomment] column value.
     *
     * @return int
     */
    public function getYelpfunnycomment()
    {

        return $this->yelpfunnycomment;
    }

    /**
     * Get the [yelpcoolcomment] column value.
     *
     * @return int
     */
    public function getYelpcoolcomment()
    {

        return $this->yelpcoolcomment;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = SocialYelpPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [parkid] column.
     *
     * @param  string $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setParkid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->parkid !== $v) {
            $this->parkid = $v;
            $this->modifiedColumns[] = SocialYelpPeer::PARKID;
        }


        return $this;
    } // setParkid()

    /**
     * Set the value of [yelpuserid] column.
     *
     * @param  string $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpuserid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->yelpuserid !== $v) {
            $this->yelpuserid = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPUSERID;
        }


        return $this;
    } // setYelpuserid()

    /**
     * Set the value of [yelpuseravatar] column.
     *
     * @param  string $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpuseravatar($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->yelpuseravatar !== $v) {
            $this->yelpuseravatar = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPUSERAVATAR;
        }


        return $this;
    } // setYelpuseravatar()

    /**
     * Set the value of [yelpusername] column.
     *
     * @param  string $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpusername($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->yelpusername !== $v) {
            $this->yelpusername = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPUSERNAME;
        }


        return $this;
    } // setYelpusername()

    /**
     * Set the value of [yelpuserlocation] column.
     *
     * @param  string $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpuserlocation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->yelpuserlocation !== $v) {
            $this->yelpuserlocation = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPUSERLOCATION;
        }


        return $this;
    } // setYelpuserlocation()

    /**
     * Set the value of [badge] column.
     *
     * @param  string $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setBadge($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->badge !== $v) {
            $this->badge = $v;
            $this->modifiedColumns[] = SocialYelpPeer::BADGE;
        }


        return $this;
    } // setBadge()

    /**
     * Set the value of [yelpfriendscount] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpfriendscount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpfriendscount !== $v) {
            $this->yelpfriendscount = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPFRIENDSCOUNT;
        }


        return $this;
    } // setYelpfriendscount()

    /**
     * Set the value of [yelpreviewcounts] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpreviewcounts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpreviewcounts !== $v) {
            $this->yelpreviewcounts = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPREVIEWCOUNTS;
        }


        return $this;
    } // setYelpreviewcounts()

    /**
     * Set the value of [yelpratingvalue] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpratingvalue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpratingvalue !== $v) {
            $this->yelpratingvalue = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPRATINGVALUE;
        }


        return $this;
    } // setYelpratingvalue()

    /**
     * Set the value of [yelpreviewyear] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpreviewyear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpreviewyear !== $v) {
            $this->yelpreviewyear = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPREVIEWYEAR;
        }


        return $this;
    } // setYelpreviewyear()

    /**
     * Set the value of [yelpreviewmonth] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpreviewmonth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpreviewmonth !== $v) {
            $this->yelpreviewmonth = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPREVIEWMONTH;
        }


        return $this;
    } // setYelpreviewmonth()

    /**
     * Set the value of [yelpreviewday] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpreviewday($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpreviewday !== $v) {
            $this->yelpreviewday = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPREVIEWDAY;
        }


        return $this;
    } // setYelpreviewday()

    /**
     * Set the value of [yelpreviewcomment] column.
     *
     * @param  string $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpreviewcomment($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->yelpreviewcomment !== $v) {
            $this->yelpreviewcomment = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPREVIEWCOMMENT;
        }


        return $this;
    } // setYelpreviewcomment()

    /**
     * Set the value of [yelpusefulcomment] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpusefulcomment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpusefulcomment !== $v) {
            $this->yelpusefulcomment = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPUSEFULCOMMENT;
        }


        return $this;
    } // setYelpusefulcomment()

    /**
     * Set the value of [yelpfunnycomment] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpfunnycomment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpfunnycomment !== $v) {
            $this->yelpfunnycomment = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPFUNNYCOMMENT;
        }


        return $this;
    } // setYelpfunnycomment()

    /**
     * Set the value of [yelpcoolcomment] column.
     *
     * @param  int $v new value
     * @return SocialYelp The current object (for fluent API support)
     */
    public function setYelpcoolcomment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->yelpcoolcomment !== $v) {
            $this->yelpcoolcomment = $v;
            $this->modifiedColumns[] = SocialYelpPeer::YELPCOOLCOMMENT;
        }


        return $this;
    } // setYelpcoolcomment()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->parkid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->yelpuserid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->yelpuseravatar = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->yelpusername = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->yelpuserlocation = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->badge = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->yelpfriendscount = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->yelpreviewcounts = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->yelpratingvalue = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->yelpreviewyear = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->yelpreviewmonth = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->yelpreviewday = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->yelpreviewcomment = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->yelpusefulcomment = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->yelpfunnycomment = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->yelpcoolcomment = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = SocialYelpPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SocialYelp object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SocialYelpPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SocialYelpQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SocialYelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                SocialYelpPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = SocialYelpPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SocialYelpPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SocialYelpPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(SocialYelpPeer::PARKID)) {
            $modifiedColumns[':p' . $index++]  = '`PARKID`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPUSERID)) {
            $modifiedColumns[':p' . $index++]  = '`YELPUSERID`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPUSERAVATAR)) {
            $modifiedColumns[':p' . $index++]  = '`YELPUSERAVATAR`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPUSERNAME)) {
            $modifiedColumns[':p' . $index++]  = '`YELPUSERNAME`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPUSERLOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`YELPUSERLOCATION`';
        }
        if ($this->isColumnModified(SocialYelpPeer::BADGE)) {
            $modifiedColumns[':p' . $index++]  = '`BADGE`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPFRIENDSCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`YELPFRIENDSCOUNT`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWCOUNTS)) {
            $modifiedColumns[':p' . $index++]  = '`YELPREVIEWCOUNTS`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPRATINGVALUE)) {
            $modifiedColumns[':p' . $index++]  = '`YELPRATINGVALUE`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWYEAR)) {
            $modifiedColumns[':p' . $index++]  = '`YELPREVIEWYEAR`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWMONTH)) {
            $modifiedColumns[':p' . $index++]  = '`YELPREVIEWMONTH`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWDAY)) {
            $modifiedColumns[':p' . $index++]  = '`YELPREVIEWDAY`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`YELPREVIEWCOMMENT`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPUSEFULCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`YELPUSEFULCOMMENT`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPFUNNYCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`YELPFUNNYCOMMENT`';
        }
        if ($this->isColumnModified(SocialYelpPeer::YELPCOOLCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`YELPCOOLCOMMENT`';
        }

        $sql = sprintf(
            'INSERT INTO `SOCIAL_YELP` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`PARKID`':
                        $stmt->bindValue($identifier, $this->parkid, PDO::PARAM_STR);
                        break;
                    case '`YELPUSERID`':
                        $stmt->bindValue($identifier, $this->yelpuserid, PDO::PARAM_STR);
                        break;
                    case '`YELPUSERAVATAR`':
                        $stmt->bindValue($identifier, $this->yelpuseravatar, PDO::PARAM_STR);
                        break;
                    case '`YELPUSERNAME`':
                        $stmt->bindValue($identifier, $this->yelpusername, PDO::PARAM_STR);
                        break;
                    case '`YELPUSERLOCATION`':
                        $stmt->bindValue($identifier, $this->yelpuserlocation, PDO::PARAM_STR);
                        break;
                    case '`BADGE`':
                        $stmt->bindValue($identifier, $this->badge, PDO::PARAM_STR);
                        break;
                    case '`YELPFRIENDSCOUNT`':
                        $stmt->bindValue($identifier, $this->yelpfriendscount, PDO::PARAM_INT);
                        break;
                    case '`YELPREVIEWCOUNTS`':
                        $stmt->bindValue($identifier, $this->yelpreviewcounts, PDO::PARAM_INT);
                        break;
                    case '`YELPRATINGVALUE`':
                        $stmt->bindValue($identifier, $this->yelpratingvalue, PDO::PARAM_INT);
                        break;
                    case '`YELPREVIEWYEAR`':
                        $stmt->bindValue($identifier, $this->yelpreviewyear, PDO::PARAM_INT);
                        break;
                    case '`YELPREVIEWMONTH`':
                        $stmt->bindValue($identifier, $this->yelpreviewmonth, PDO::PARAM_INT);
                        break;
                    case '`YELPREVIEWDAY`':
                        $stmt->bindValue($identifier, $this->yelpreviewday, PDO::PARAM_INT);
                        break;
                    case '`YELPREVIEWCOMMENT`':
                        $stmt->bindValue($identifier, $this->yelpreviewcomment, PDO::PARAM_STR);
                        break;
                    case '`YELPUSEFULCOMMENT`':
                        $stmt->bindValue($identifier, $this->yelpusefulcomment, PDO::PARAM_INT);
                        break;
                    case '`YELPFUNNYCOMMENT`':
                        $stmt->bindValue($identifier, $this->yelpfunnycomment, PDO::PARAM_INT);
                        break;
                    case '`YELPCOOLCOMMENT`':
                        $stmt->bindValue($identifier, $this->yelpcoolcomment, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = SocialYelpPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = SocialYelpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getParkid();
                break;
            case 2:
                return $this->getYelpuserid();
                break;
            case 3:
                return $this->getYelpuseravatar();
                break;
            case 4:
                return $this->getYelpusername();
                break;
            case 5:
                return $this->getYelpuserlocation();
                break;
            case 6:
                return $this->getBadge();
                break;
            case 7:
                return $this->getYelpfriendscount();
                break;
            case 8:
                return $this->getYelpreviewcounts();
                break;
            case 9:
                return $this->getYelpratingvalue();
                break;
            case 10:
                return $this->getYelpreviewyear();
                break;
            case 11:
                return $this->getYelpreviewmonth();
                break;
            case 12:
                return $this->getYelpreviewday();
                break;
            case 13:
                return $this->getYelpreviewcomment();
                break;
            case 14:
                return $this->getYelpusefulcomment();
                break;
            case 15:
                return $this->getYelpfunnycomment();
                break;
            case 16:
                return $this->getYelpcoolcomment();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['SocialYelp'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SocialYelp'][$this->getPrimaryKey()] = true;
        $keys = SocialYelpPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getParkid(),
            $keys[2] => $this->getYelpuserid(),
            $keys[3] => $this->getYelpuseravatar(),
            $keys[4] => $this->getYelpusername(),
            $keys[5] => $this->getYelpuserlocation(),
            $keys[6] => $this->getBadge(),
            $keys[7] => $this->getYelpfriendscount(),
            $keys[8] => $this->getYelpreviewcounts(),
            $keys[9] => $this->getYelpratingvalue(),
            $keys[10] => $this->getYelpreviewyear(),
            $keys[11] => $this->getYelpreviewmonth(),
            $keys[12] => $this->getYelpreviewday(),
            $keys[13] => $this->getYelpreviewcomment(),
            $keys[14] => $this->getYelpusefulcomment(),
            $keys[15] => $this->getYelpfunnycomment(),
            $keys[16] => $this->getYelpcoolcomment(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = SocialYelpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setParkid($value);
                break;
            case 2:
                $this->setYelpuserid($value);
                break;
            case 3:
                $this->setYelpuseravatar($value);
                break;
            case 4:
                $this->setYelpusername($value);
                break;
            case 5:
                $this->setYelpuserlocation($value);
                break;
            case 6:
                $this->setBadge($value);
                break;
            case 7:
                $this->setYelpfriendscount($value);
                break;
            case 8:
                $this->setYelpreviewcounts($value);
                break;
            case 9:
                $this->setYelpratingvalue($value);
                break;
            case 10:
                $this->setYelpreviewyear($value);
                break;
            case 11:
                $this->setYelpreviewmonth($value);
                break;
            case 12:
                $this->setYelpreviewday($value);
                break;
            case 13:
                $this->setYelpreviewcomment($value);
                break;
            case 14:
                $this->setYelpusefulcomment($value);
                break;
            case 15:
                $this->setYelpfunnycomment($value);
                break;
            case 16:
                $this->setYelpcoolcomment($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = SocialYelpPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setParkid($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setYelpuserid($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setYelpuseravatar($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setYelpusername($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setYelpuserlocation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setBadge($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setYelpfriendscount($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setYelpreviewcounts($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setYelpratingvalue($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setYelpreviewyear($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setYelpreviewmonth($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setYelpreviewday($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setYelpreviewcomment($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setYelpusefulcomment($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setYelpfunnycomment($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setYelpcoolcomment($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SocialYelpPeer::DATABASE_NAME);

        if ($this->isColumnModified(SocialYelpPeer::ID)) $criteria->add(SocialYelpPeer::ID, $this->id);
        if ($this->isColumnModified(SocialYelpPeer::PARKID)) $criteria->add(SocialYelpPeer::PARKID, $this->parkid);
        if ($this->isColumnModified(SocialYelpPeer::YELPUSERID)) $criteria->add(SocialYelpPeer::YELPUSERID, $this->yelpuserid);
        if ($this->isColumnModified(SocialYelpPeer::YELPUSERAVATAR)) $criteria->add(SocialYelpPeer::YELPUSERAVATAR, $this->yelpuseravatar);
        if ($this->isColumnModified(SocialYelpPeer::YELPUSERNAME)) $criteria->add(SocialYelpPeer::YELPUSERNAME, $this->yelpusername);
        if ($this->isColumnModified(SocialYelpPeer::YELPUSERLOCATION)) $criteria->add(SocialYelpPeer::YELPUSERLOCATION, $this->yelpuserlocation);
        if ($this->isColumnModified(SocialYelpPeer::BADGE)) $criteria->add(SocialYelpPeer::BADGE, $this->badge);
        if ($this->isColumnModified(SocialYelpPeer::YELPFRIENDSCOUNT)) $criteria->add(SocialYelpPeer::YELPFRIENDSCOUNT, $this->yelpfriendscount);
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWCOUNTS)) $criteria->add(SocialYelpPeer::YELPREVIEWCOUNTS, $this->yelpreviewcounts);
        if ($this->isColumnModified(SocialYelpPeer::YELPRATINGVALUE)) $criteria->add(SocialYelpPeer::YELPRATINGVALUE, $this->yelpratingvalue);
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWYEAR)) $criteria->add(SocialYelpPeer::YELPREVIEWYEAR, $this->yelpreviewyear);
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWMONTH)) $criteria->add(SocialYelpPeer::YELPREVIEWMONTH, $this->yelpreviewmonth);
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWDAY)) $criteria->add(SocialYelpPeer::YELPREVIEWDAY, $this->yelpreviewday);
        if ($this->isColumnModified(SocialYelpPeer::YELPREVIEWCOMMENT)) $criteria->add(SocialYelpPeer::YELPREVIEWCOMMENT, $this->yelpreviewcomment);
        if ($this->isColumnModified(SocialYelpPeer::YELPUSEFULCOMMENT)) $criteria->add(SocialYelpPeer::YELPUSEFULCOMMENT, $this->yelpusefulcomment);
        if ($this->isColumnModified(SocialYelpPeer::YELPFUNNYCOMMENT)) $criteria->add(SocialYelpPeer::YELPFUNNYCOMMENT, $this->yelpfunnycomment);
        if ($this->isColumnModified(SocialYelpPeer::YELPCOOLCOMMENT)) $criteria->add(SocialYelpPeer::YELPCOOLCOMMENT, $this->yelpcoolcomment);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(SocialYelpPeer::DATABASE_NAME);
        $criteria->add(SocialYelpPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SocialYelp (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setParkid($this->getParkid());
        $copyObj->setYelpuserid($this->getYelpuserid());
        $copyObj->setYelpuseravatar($this->getYelpuseravatar());
        $copyObj->setYelpusername($this->getYelpusername());
        $copyObj->setYelpuserlocation($this->getYelpuserlocation());
        $copyObj->setBadge($this->getBadge());
        $copyObj->setYelpfriendscount($this->getYelpfriendscount());
        $copyObj->setYelpreviewcounts($this->getYelpreviewcounts());
        $copyObj->setYelpratingvalue($this->getYelpratingvalue());
        $copyObj->setYelpreviewyear($this->getYelpreviewyear());
        $copyObj->setYelpreviewmonth($this->getYelpreviewmonth());
        $copyObj->setYelpreviewday($this->getYelpreviewday());
        $copyObj->setYelpreviewcomment($this->getYelpreviewcomment());
        $copyObj->setYelpusefulcomment($this->getYelpusefulcomment());
        $copyObj->setYelpfunnycomment($this->getYelpfunnycomment());
        $copyObj->setYelpcoolcomment($this->getYelpcoolcomment());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return SocialYelp Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return SocialYelpPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SocialYelpPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->parkid = null;
        $this->yelpuserid = null;
        $this->yelpuseravatar = null;
        $this->yelpusername = null;
        $this->yelpuserlocation = null;
        $this->badge = null;
        $this->yelpfriendscount = null;
        $this->yelpreviewcounts = null;
        $this->yelpratingvalue = null;
        $this->yelpreviewyear = null;
        $this->yelpreviewmonth = null;
        $this->yelpreviewday = null;
        $this->yelpreviewcomment = null;
        $this->yelpusefulcomment = null;
        $this->yelpfunnycomment = null;
        $this->yelpcoolcomment = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SocialYelpPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
