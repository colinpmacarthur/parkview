<?php


/**
 * Base class that represents a row from the 'ALLSNSDATA' table.
 *
 *
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseAllsnsdata extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AllsnsdataPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AllsnsdataPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the row_id field.
     * @var        int
     */
    protected $row_id;

    /**
     * The value for the recid field.
     * @var        int
     */
    protected $recid;

    /**
     * The value for the user field.
     * @var        string
     */
    protected $user;

    /**
     * The value for the link field.
     * @var        string
     */
    protected $link;

    /**
     * The value for the sns field.
     * @var        int
     */
    protected $sns;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the rating field.
     * @var        int
     */
    protected $rating;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the state field.
     * @var        string
     */
    protected $state;

    /**
     * The value for the address field.
     * @var        string
     */
    protected $address;

    /**
     * The value for the visbility_count field.
     * @var        int
     */
    protected $visbility_count;

    /**
     * The value for the sentiment field.
     * @var        double
     */
    protected $sentiment;

    /**
     * @var        PropelObjectCollection|DimUser[] Collection to store aggregation of DimUser objects.
     */
    protected $collDimUsers;
    protected $collDimUsersPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $dimUsersScheduledForDeletion = null;

    /**
     * Get the [row_id] column value.
     *
     * @return int
     */
    public function getRowId()
    {

        return $this->row_id;
    }

    /**
     * Get the [recid] column value.
     *
     * @return int
     */
    public function getRecid()
    {

        return $this->recid;
    }

    /**
     * Get the [user] column value.
     *
     * @return string
     */
    public function getUser()
    {

        return $this->user;
    }

    /**
     * Get the [link] column value.
     *
     * @return string
     */
    public function getLink()
    {

        return $this->link;
    }

    /**
     * Get the [sns] column value.
     *
     * @return int
     */
    public function getSns()
    {

        return $this->sns;
    }

    /**
     * Get the [optionally formatted] temporal [date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = '%x')
    {
        if ($this->date === null) {
            return null;
        }

        if ($this->date === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [rating] column value.
     *
     * @return int
     */
    public function getRating()
    {

        return $this->rating;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {

        return $this->city;
    }

    /**
     * Get the [state] column value.
     *
     * @return string
     */
    public function getState()
    {

        return $this->state;
    }

    /**
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {

        return $this->address;
    }

    /**
     * Get the [visbility_count] column value.
     *
     * @return int
     */
    public function getVisbilityCount()
    {

        return $this->visbility_count;
    }

    /**
     * Get the [sentiment] column value.
     *
     * @return double
     */
    public function getSentiment()
    {

        return $this->sentiment;
    }

    /**
     * Set the value of [row_id] column.
     *
     * @param  int $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setRowId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->row_id !== $v) {
            $this->row_id = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::ROW_ID;
        }


        return $this;
    } // setRowId()

    /**
     * Set the value of [recid] column.
     *
     * @param  int $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setRecid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->recid !== $v) {
            $this->recid = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::RECID;
        }


        return $this;
    } // setRecid()

    /**
     * Set the value of [user] column.
     *
     * @param  string $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setUser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user !== $v) {
            $this->user = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::USER;
        }


        return $this;
    } // setUser()

    /**
     * Set the value of [link] column.
     *
     * @param  string $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setLink($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->link !== $v) {
            $this->link = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::LINK;
        }


        return $this;
    } // setLink()

    /**
     * Set the value of [sns] column.
     *
     * @param  int $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setSns($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sns !== $v) {
            $this->sns = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::SNS;
        }


        return $this;
    } // setSns()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = AllsnsdataPeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [rating] column.
     *
     * @param  int $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setRating($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rating !== $v) {
            $this->rating = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::RATING;
        }


        return $this;
    } // setRating()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [state] column.
     *
     * @param  string $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setState($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->state !== $v) {
            $this->state = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::STATE;
        }


        return $this;
    } // setState()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [visbility_count] column.
     *
     * @param  int $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setVisbilityCount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->visbility_count !== $v) {
            $this->visbility_count = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::VISBILITY_COUNT;
        }


        return $this;
    } // setVisbilityCount()

    /**
     * Set the value of [sentiment] column.
     *
     * @param  double $v new value
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setSentiment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sentiment !== $v) {
            $this->sentiment = $v;
            $this->modifiedColumns[] = AllsnsdataPeer::SENTIMENT;
        }


        return $this;
    } // setSentiment()

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

            $this->row_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->recid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->user = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->link = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->sns = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->date = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->rating = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->title = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->comment = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->city = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->state = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->address = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->visbility_count = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->sentiment = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = AllsnsdataPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Allsnsdata object", $e);
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
            $con = Propel::getConnection(AllsnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AllsnsdataPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collDimUsers = null;

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
            $con = Propel::getConnection(AllsnsdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AllsnsdataQuery::create()
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
            $con = Propel::getConnection(AllsnsdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AllsnsdataPeer::addInstanceToPool($this);
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

            if ($this->dimUsersScheduledForDeletion !== null) {
                if (!$this->dimUsersScheduledForDeletion->isEmpty()) {
                    DimUserQuery::create()
                        ->filterByPrimaryKeys($this->dimUsersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->dimUsersScheduledForDeletion = null;
                }
            }

            if ($this->collDimUsers !== null) {
                foreach ($this->collDimUsers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = AllsnsdataPeer::ROW_ID;
        if (null !== $this->row_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AllsnsdataPeer::ROW_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AllsnsdataPeer::ROW_ID)) {
            $modifiedColumns[':p' . $index++]  = '`row_id`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::RECID)) {
            $modifiedColumns[':p' . $index++]  = '`recId`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::USER)) {
            $modifiedColumns[':p' . $index++]  = '`user`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::LINK)) {
            $modifiedColumns[':p' . $index++]  = '`link`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::SNS)) {
            $modifiedColumns[':p' . $index++]  = '`sns`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::RATING)) {
            $modifiedColumns[':p' . $index++]  = '`rating`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`comment`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`city`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::STATE)) {
            $modifiedColumns[':p' . $index++]  = '`state`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`address`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::VISBILITY_COUNT)) {
            $modifiedColumns[':p' . $index++]  = '`visbility_count`';
        }
        if ($this->isColumnModified(AllsnsdataPeer::SENTIMENT)) {
            $modifiedColumns[':p' . $index++]  = '`sentiment`';
        }

        $sql = sprintf(
            'INSERT INTO `ALLSNSDATA` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`row_id`':
                        $stmt->bindValue($identifier, $this->row_id, PDO::PARAM_INT);
                        break;
                    case '`recId`':
                        $stmt->bindValue($identifier, $this->recid, PDO::PARAM_INT);
                        break;
                    case '`user`':
                        $stmt->bindValue($identifier, $this->user, PDO::PARAM_STR);
                        break;
                    case '`link`':
                        $stmt->bindValue($identifier, $this->link, PDO::PARAM_STR);
                        break;
                    case '`sns`':
                        $stmt->bindValue($identifier, $this->sns, PDO::PARAM_INT);
                        break;
                    case '`date`':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`rating`':
                        $stmt->bindValue($identifier, $this->rating, PDO::PARAM_INT);
                        break;
                    case '`title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`city`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`state`':
                        $stmt->bindValue($identifier, $this->state, PDO::PARAM_STR);
                        break;
                    case '`address`':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case '`visbility_count`':
                        $stmt->bindValue($identifier, $this->visbility_count, PDO::PARAM_INT);
                        break;
                    case '`sentiment`':
                        $stmt->bindValue($identifier, $this->sentiment, PDO::PARAM_STR);
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
        $this->setRowId($pk);

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


            if (($retval = AllsnsdataPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDimUsers !== null) {
                    foreach ($this->collDimUsers as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = AllsnsdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRowId();
                break;
            case 1:
                return $this->getRecid();
                break;
            case 2:
                return $this->getUser();
                break;
            case 3:
                return $this->getLink();
                break;
            case 4:
                return $this->getSns();
                break;
            case 5:
                return $this->getDate();
                break;
            case 6:
                return $this->getRating();
                break;
            case 7:
                return $this->getTitle();
                break;
            case 8:
                return $this->getComment();
                break;
            case 9:
                return $this->getCity();
                break;
            case 10:
                return $this->getState();
                break;
            case 11:
                return $this->getAddress();
                break;
            case 12:
                return $this->getVisbilityCount();
                break;
            case 13:
                return $this->getSentiment();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Allsnsdata'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Allsnsdata'][$this->getPrimaryKey()] = true;
        $keys = AllsnsdataPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRowId(),
            $keys[1] => $this->getRecid(),
            $keys[2] => $this->getUser(),
            $keys[3] => $this->getLink(),
            $keys[4] => $this->getSns(),
            $keys[5] => $this->getDate(),
            $keys[6] => $this->getRating(),
            $keys[7] => $this->getTitle(),
            $keys[8] => $this->getComment(),
            $keys[9] => $this->getCity(),
            $keys[10] => $this->getState(),
            $keys[11] => $this->getAddress(),
            $keys[12] => $this->getVisbilityCount(),
            $keys[13] => $this->getSentiment(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collDimUsers) {
                $result['DimUsers'] = $this->collDimUsers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
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
        $pos = AllsnsdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRowId($value);
                break;
            case 1:
                $this->setRecid($value);
                break;
            case 2:
                $this->setUser($value);
                break;
            case 3:
                $this->setLink($value);
                break;
            case 4:
                $this->setSns($value);
                break;
            case 5:
                $this->setDate($value);
                break;
            case 6:
                $this->setRating($value);
                break;
            case 7:
                $this->setTitle($value);
                break;
            case 8:
                $this->setComment($value);
                break;
            case 9:
                $this->setCity($value);
                break;
            case 10:
                $this->setState($value);
                break;
            case 11:
                $this->setAddress($value);
                break;
            case 12:
                $this->setVisbilityCount($value);
                break;
            case 13:
                $this->setSentiment($value);
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
        $keys = AllsnsdataPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRowId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRecid($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUser($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLink($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSns($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDate($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRating($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTitle($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setComment($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCity($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setState($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAddress($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setVisbilityCount($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSentiment($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AllsnsdataPeer::DATABASE_NAME);

        if ($this->isColumnModified(AllsnsdataPeer::ROW_ID)) $criteria->add(AllsnsdataPeer::ROW_ID, $this->row_id);
        if ($this->isColumnModified(AllsnsdataPeer::RECID)) $criteria->add(AllsnsdataPeer::RECID, $this->recid);
        if ($this->isColumnModified(AllsnsdataPeer::USER)) $criteria->add(AllsnsdataPeer::USER, $this->user);
        if ($this->isColumnModified(AllsnsdataPeer::LINK)) $criteria->add(AllsnsdataPeer::LINK, $this->link);
        if ($this->isColumnModified(AllsnsdataPeer::SNS)) $criteria->add(AllsnsdataPeer::SNS, $this->sns);
        if ($this->isColumnModified(AllsnsdataPeer::DATE)) $criteria->add(AllsnsdataPeer::DATE, $this->date);
        if ($this->isColumnModified(AllsnsdataPeer::RATING)) $criteria->add(AllsnsdataPeer::RATING, $this->rating);
        if ($this->isColumnModified(AllsnsdataPeer::TITLE)) $criteria->add(AllsnsdataPeer::TITLE, $this->title);
        if ($this->isColumnModified(AllsnsdataPeer::COMMENT)) $criteria->add(AllsnsdataPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(AllsnsdataPeer::CITY)) $criteria->add(AllsnsdataPeer::CITY, $this->city);
        if ($this->isColumnModified(AllsnsdataPeer::STATE)) $criteria->add(AllsnsdataPeer::STATE, $this->state);
        if ($this->isColumnModified(AllsnsdataPeer::ADDRESS)) $criteria->add(AllsnsdataPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(AllsnsdataPeer::VISBILITY_COUNT)) $criteria->add(AllsnsdataPeer::VISBILITY_COUNT, $this->visbility_count);
        if ($this->isColumnModified(AllsnsdataPeer::SENTIMENT)) $criteria->add(AllsnsdataPeer::SENTIMENT, $this->sentiment);

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
        $criteria = new Criteria(AllsnsdataPeer::DATABASE_NAME);
        $criteria->add(AllsnsdataPeer::ROW_ID, $this->row_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRowId();
    }

    /**
     * Generic method to set the primary key (row_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRowId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRowId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Allsnsdata (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRecid($this->getRecid());
        $copyObj->setUser($this->getUser());
        $copyObj->setLink($this->getLink());
        $copyObj->setSns($this->getSns());
        $copyObj->setDate($this->getDate());
        $copyObj->setRating($this->getRating());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setComment($this->getComment());
        $copyObj->setCity($this->getCity());
        $copyObj->setState($this->getState());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setVisbilityCount($this->getVisbilityCount());
        $copyObj->setSentiment($this->getSentiment());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getDimUsers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDimUser($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRowId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Allsnsdata Clone of current object.
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
     * @return AllsnsdataPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AllsnsdataPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('DimUser' == $relationName) {
            $this->initDimUsers();
        }
    }

    /**
     * Clears out the collDimUsers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Allsnsdata The current object (for fluent API support)
     * @see        addDimUsers()
     */
    public function clearDimUsers()
    {
        $this->collDimUsers = null; // important to set this to null since that means it is uninitialized
        $this->collDimUsersPartial = null;

        return $this;
    }

    /**
     * reset is the collDimUsers collection loaded partially
     *
     * @return void
     */
    public function resetPartialDimUsers($v = true)
    {
        $this->collDimUsersPartial = $v;
    }

    /**
     * Initializes the collDimUsers collection.
     *
     * By default this just sets the collDimUsers collection to an empty array (like clearcollDimUsers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDimUsers($overrideExisting = true)
    {
        if (null !== $this->collDimUsers && !$overrideExisting) {
            return;
        }
        $this->collDimUsers = new PropelObjectCollection();
        $this->collDimUsers->setModel('DimUser');
    }

    /**
     * Gets an array of DimUser objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Allsnsdata is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|DimUser[] List of DimUser objects
     * @throws PropelException
     */
    public function getDimUsers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDimUsersPartial && !$this->isNew();
        if (null === $this->collDimUsers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDimUsers) {
                // return empty collection
                $this->initDimUsers();
            } else {
                $collDimUsers = DimUserQuery::create(null, $criteria)
                    ->filterByAllsnsdata($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDimUsersPartial && count($collDimUsers)) {
                      $this->initDimUsers(false);

                      foreach ($collDimUsers as $obj) {
                        if (false == $this->collDimUsers->contains($obj)) {
                          $this->collDimUsers->append($obj);
                        }
                      }

                      $this->collDimUsersPartial = true;
                    }

                    $collDimUsers->getInternalIterator()->rewind();

                    return $collDimUsers;
                }

                if ($partial && $this->collDimUsers) {
                    foreach ($this->collDimUsers as $obj) {
                        if ($obj->isNew()) {
                            $collDimUsers[] = $obj;
                        }
                    }
                }

                $this->collDimUsers = $collDimUsers;
                $this->collDimUsersPartial = false;
            }
        }

        return $this->collDimUsers;
    }

    /**
     * Sets a collection of DimUser objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $dimUsers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function setDimUsers(PropelCollection $dimUsers, PropelPDO $con = null)
    {
        $dimUsersToDelete = $this->getDimUsers(new Criteria(), $con)->diff($dimUsers);


        $this->dimUsersScheduledForDeletion = $dimUsersToDelete;

        foreach ($dimUsersToDelete as $dimUserRemoved) {
            $dimUserRemoved->setAllsnsdata(null);
        }

        $this->collDimUsers = null;
        foreach ($dimUsers as $dimUser) {
            $this->addDimUser($dimUser);
        }

        $this->collDimUsers = $dimUsers;
        $this->collDimUsersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related DimUser objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related DimUser objects.
     * @throws PropelException
     */
    public function countDimUsers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDimUsersPartial && !$this->isNew();
        if (null === $this->collDimUsers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDimUsers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDimUsers());
            }
            $query = DimUserQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAllsnsdata($this)
                ->count($con);
        }

        return count($this->collDimUsers);
    }

    /**
     * Method called to associate a DimUser object to this object
     * through the DimUser foreign key attribute.
     *
     * @param    DimUser $l DimUser
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function addDimUser(DimUser $l)
    {
        if ($this->collDimUsers === null) {
            $this->initDimUsers();
            $this->collDimUsersPartial = true;
        }

        if (!in_array($l, $this->collDimUsers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDimUser($l);

            if ($this->dimUsersScheduledForDeletion and $this->dimUsersScheduledForDeletion->contains($l)) {
                $this->dimUsersScheduledForDeletion->remove($this->dimUsersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	DimUser $dimUser The dimUser object to add.
     */
    protected function doAddDimUser($dimUser)
    {
        $this->collDimUsers[]= $dimUser;
        $dimUser->setAllsnsdata($this);
    }

    /**
     * @param	DimUser $dimUser The dimUser object to remove.
     * @return Allsnsdata The current object (for fluent API support)
     */
    public function removeDimUser($dimUser)
    {
        if ($this->getDimUsers()->contains($dimUser)) {
            $this->collDimUsers->remove($this->collDimUsers->search($dimUser));
            if (null === $this->dimUsersScheduledForDeletion) {
                $this->dimUsersScheduledForDeletion = clone $this->collDimUsers;
                $this->dimUsersScheduledForDeletion->clear();
            }
            $this->dimUsersScheduledForDeletion[]= clone $dimUser;
            $dimUser->setAllsnsdata(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->row_id = null;
        $this->recid = null;
        $this->user = null;
        $this->link = null;
        $this->sns = null;
        $this->date = null;
        $this->rating = null;
        $this->title = null;
        $this->comment = null;
        $this->city = null;
        $this->state = null;
        $this->address = null;
        $this->visbility_count = null;
        $this->sentiment = null;
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
            if ($this->collDimUsers) {
                foreach ($this->collDimUsers as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collDimUsers instanceof PropelCollection) {
            $this->collDimUsers->clearIterator();
        }
        $this->collDimUsers = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AllsnsdataPeer::DEFAULT_STRING_FORMAT);
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
