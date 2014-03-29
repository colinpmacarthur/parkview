<?php


/**
 * Base class that represents a row from the 'ft_socialdata' table.
 *
 *
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseFtSocialdata extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FtSocialdataPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FtSocialdataPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the timeid field.
     * @var        int
     */
    protected $timeid;

    /**
     * The value for the locationid field.
     * @var        int
     */
    protected $locationid;

    /**
     * The value for the userid field.
     * @var        int
     */
    protected $userid;

    /**
     * The value for the rating field.
     * @var        int
     */
    protected $rating;

    /**
     * The value for the createddate field.
     * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
     * @var        string
     */
    protected $createddate;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * @var        DimLocation
     */
    protected $aDimLocation;

    /**
     * @var        DimTime
     */
    protected $aDimTime;

    /**
     * @var        DimUserinfo
     */
    protected $aDimUserinfo;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
    }

    /**
     * Initializes internal state of BaseFtSocialdata object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [timeid] column value.
     *
     * @return int
     */
    public function getTimeid()
    {

        return $this->timeid;
    }

    /**
     * Get the [locationid] column value.
     *
     * @return int
     */
    public function getLocationid()
    {

        return $this->locationid;
    }

    /**
     * Get the [userid] column value.
     *
     * @return int
     */
    public function getUserid()
    {

        return $this->userid;
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
     * Get the [optionally formatted] temporal [createddate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreateddate($format = 'Y-m-d H:i:s')
    {
        if ($this->createddate === null) {
            return null;
        }

        if ($this->createddate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->createddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->createddate, true), $x);
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
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Set the value of [timeid] column.
     *
     * @param  int $v new value
     * @return FtSocialdata The current object (for fluent API support)
     */
    public function setTimeid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->timeid !== $v) {
            $this->timeid = $v;
            $this->modifiedColumns[] = FtSocialdataPeer::TIMEID;
        }

        if ($this->aDimTime !== null && $this->aDimTime->getTimeid() !== $v) {
            $this->aDimTime = null;
        }


        return $this;
    } // setTimeid()

    /**
     * Set the value of [locationid] column.
     *
     * @param  int $v new value
     * @return FtSocialdata The current object (for fluent API support)
     */
    public function setLocationid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->locationid !== $v) {
            $this->locationid = $v;
            $this->modifiedColumns[] = FtSocialdataPeer::LOCATIONID;
        }

        if ($this->aDimLocation !== null && $this->aDimLocation->getLocationid() !== $v) {
            $this->aDimLocation = null;
        }


        return $this;
    } // setLocationid()

    /**
     * Set the value of [userid] column.
     *
     * @param  int $v new value
     * @return FtSocialdata The current object (for fluent API support)
     */
    public function setUserid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->userid !== $v) {
            $this->userid = $v;
            $this->modifiedColumns[] = FtSocialdataPeer::USERID;
        }

        if ($this->aDimUserinfo !== null && $this->aDimUserinfo->getUserid() !== $v) {
            $this->aDimUserinfo = null;
        }


        return $this;
    } // setUserid()

    /**
     * Set the value of [rating] column.
     *
     * @param  int $v new value
     * @return FtSocialdata The current object (for fluent API support)
     */
    public function setRating($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rating !== $v) {
            $this->rating = $v;
            $this->modifiedColumns[] = FtSocialdataPeer::RATING;
        }


        return $this;
    } // setRating()

    /**
     * Sets the value of [createddate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return FtSocialdata The current object (for fluent API support)
     */
    public function setCreateddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->createddate !== null || $dt !== null) {
            $currentDateAsString = ($this->createddate !== null && $tmpDt = new DateTime($this->createddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->createddate = $newDateAsString;
                $this->modifiedColumns[] = FtSocialdataPeer::CREATEDDATE;
            }
        } // if either are not null


        return $this;
    } // setCreateddate()

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return FtSocialdata The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = FtSocialdataPeer::ID;
        }


        return $this;
    } // setId()

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

            $this->timeid = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->locationid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->userid = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->rating = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->createddate = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = FtSocialdataPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FtSocialdata object", $e);
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

        if ($this->aDimTime !== null && $this->timeid !== $this->aDimTime->getTimeid()) {
            $this->aDimTime = null;
        }
        if ($this->aDimLocation !== null && $this->locationid !== $this->aDimLocation->getLocationid()) {
            $this->aDimLocation = null;
        }
        if ($this->aDimUserinfo !== null && $this->userid !== $this->aDimUserinfo->getUserid()) {
            $this->aDimUserinfo = null;
        }
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
            $con = Propel::getConnection(FtSocialdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FtSocialdataPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aDimLocation = null;
            $this->aDimTime = null;
            $this->aDimUserinfo = null;
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
            $con = Propel::getConnection(FtSocialdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FtSocialdataQuery::create()
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
            $con = Propel::getConnection(FtSocialdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FtSocialdataPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aDimLocation !== null) {
                if ($this->aDimLocation->isModified() || $this->aDimLocation->isNew()) {
                    $affectedRows += $this->aDimLocation->save($con);
                }
                $this->setDimLocation($this->aDimLocation);
            }

            if ($this->aDimTime !== null) {
                if ($this->aDimTime->isModified() || $this->aDimTime->isNew()) {
                    $affectedRows += $this->aDimTime->save($con);
                }
                $this->setDimTime($this->aDimTime);
            }

            if ($this->aDimUserinfo !== null) {
                if ($this->aDimUserinfo->isModified() || $this->aDimUserinfo->isNew()) {
                    $affectedRows += $this->aDimUserinfo->save($con);
                }
                $this->setDimUserinfo($this->aDimUserinfo);
            }

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

        $this->modifiedColumns[] = FtSocialdataPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FtSocialdataPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FtSocialdataPeer::TIMEID)) {
            $modifiedColumns[':p' . $index++]  = '`timeid`';
        }
        if ($this->isColumnModified(FtSocialdataPeer::LOCATIONID)) {
            $modifiedColumns[':p' . $index++]  = '`locationid`';
        }
        if ($this->isColumnModified(FtSocialdataPeer::USERID)) {
            $modifiedColumns[':p' . $index++]  = '`userid`';
        }
        if ($this->isColumnModified(FtSocialdataPeer::RATING)) {
            $modifiedColumns[':p' . $index++]  = '`rating`';
        }
        if ($this->isColumnModified(FtSocialdataPeer::CREATEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`createddate`';
        }
        if ($this->isColumnModified(FtSocialdataPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }

        $sql = sprintf(
            'INSERT INTO `ft_socialdata` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`timeid`':
                        $stmt->bindValue($identifier, $this->timeid, PDO::PARAM_INT);
                        break;
                    case '`locationid`':
                        $stmt->bindValue($identifier, $this->locationid, PDO::PARAM_INT);
                        break;
                    case '`userid`':
                        $stmt->bindValue($identifier, $this->userid, PDO::PARAM_INT);
                        break;
                    case '`rating`':
                        $stmt->bindValue($identifier, $this->rating, PDO::PARAM_INT);
                        break;
                    case '`createddate`':
                        $stmt->bindValue($identifier, $this->createddate, PDO::PARAM_STR);
                        break;
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aDimLocation !== null) {
                if (!$this->aDimLocation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDimLocation->getValidationFailures());
                }
            }

            if ($this->aDimTime !== null) {
                if (!$this->aDimTime->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDimTime->getValidationFailures());
                }
            }

            if ($this->aDimUserinfo !== null) {
                if (!$this->aDimUserinfo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDimUserinfo->getValidationFailures());
                }
            }


            if (($retval = FtSocialdataPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FtSocialdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTimeid();
                break;
            case 1:
                return $this->getLocationid();
                break;
            case 2:
                return $this->getUserid();
                break;
            case 3:
                return $this->getRating();
                break;
            case 4:
                return $this->getCreateddate();
                break;
            case 5:
                return $this->getId();
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
        if (isset($alreadyDumpedObjects['FtSocialdata'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FtSocialdata'][$this->getPrimaryKey()] = true;
        $keys = FtSocialdataPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getTimeid(),
            $keys[1] => $this->getLocationid(),
            $keys[2] => $this->getUserid(),
            $keys[3] => $this->getRating(),
            $keys[4] => $this->getCreateddate(),
            $keys[5] => $this->getId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aDimLocation) {
                $result['DimLocation'] = $this->aDimLocation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDimTime) {
                $result['DimTime'] = $this->aDimTime->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDimUserinfo) {
                $result['DimUserinfo'] = $this->aDimUserinfo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = FtSocialdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTimeid($value);
                break;
            case 1:
                $this->setLocationid($value);
                break;
            case 2:
                $this->setUserid($value);
                break;
            case 3:
                $this->setRating($value);
                break;
            case 4:
                $this->setCreateddate($value);
                break;
            case 5:
                $this->setId($value);
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
        $keys = FtSocialdataPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setTimeid($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLocationid($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUserid($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRating($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCreateddate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setId($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FtSocialdataPeer::DATABASE_NAME);

        if ($this->isColumnModified(FtSocialdataPeer::TIMEID)) $criteria->add(FtSocialdataPeer::TIMEID, $this->timeid);
        if ($this->isColumnModified(FtSocialdataPeer::LOCATIONID)) $criteria->add(FtSocialdataPeer::LOCATIONID, $this->locationid);
        if ($this->isColumnModified(FtSocialdataPeer::USERID)) $criteria->add(FtSocialdataPeer::USERID, $this->userid);
        if ($this->isColumnModified(FtSocialdataPeer::RATING)) $criteria->add(FtSocialdataPeer::RATING, $this->rating);
        if ($this->isColumnModified(FtSocialdataPeer::CREATEDDATE)) $criteria->add(FtSocialdataPeer::CREATEDDATE, $this->createddate);
        if ($this->isColumnModified(FtSocialdataPeer::ID)) $criteria->add(FtSocialdataPeer::ID, $this->id);

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
        $criteria = new Criteria(FtSocialdataPeer::DATABASE_NAME);
        $criteria->add(FtSocialdataPeer::ID, $this->id);

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
     * @param object $copyObj An object of FtSocialdata (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTimeid($this->getTimeid());
        $copyObj->setLocationid($this->getLocationid());
        $copyObj->setUserid($this->getUserid());
        $copyObj->setRating($this->getRating());
        $copyObj->setCreateddate($this->getCreateddate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @return FtSocialdata Clone of current object.
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
     * @return FtSocialdataPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FtSocialdataPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a DimLocation object.
     *
     * @param                  DimLocation $v
     * @return FtSocialdata The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDimLocation(DimLocation $v = null)
    {
        if ($v === null) {
            $this->setLocationid(NULL);
        } else {
            $this->setLocationid($v->getLocationid());
        }

        $this->aDimLocation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the DimLocation object, it will not be re-added.
        if ($v !== null) {
            $v->addFtSocialdata($this);
        }


        return $this;
    }


    /**
     * Get the associated DimLocation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return DimLocation The associated DimLocation object.
     * @throws PropelException
     */
    public function getDimLocation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDimLocation === null && ($this->locationid !== null) && $doQuery) {
            $this->aDimLocation = DimLocationQuery::create()->findPk($this->locationid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDimLocation->addFtSocialdatas($this);
             */
        }

        return $this->aDimLocation;
    }

    /**
     * Declares an association between this object and a DimTime object.
     *
     * @param                  DimTime $v
     * @return FtSocialdata The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDimTime(DimTime $v = null)
    {
        if ($v === null) {
            $this->setTimeid(NULL);
        } else {
            $this->setTimeid($v->getTimeid());
        }

        $this->aDimTime = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the DimTime object, it will not be re-added.
        if ($v !== null) {
            $v->addFtSocialdata($this);
        }


        return $this;
    }


    /**
     * Get the associated DimTime object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return DimTime The associated DimTime object.
     * @throws PropelException
     */
    public function getDimTime(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDimTime === null && ($this->timeid !== null) && $doQuery) {
            $this->aDimTime = DimTimeQuery::create()->findPk($this->timeid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDimTime->addFtSocialdatas($this);
             */
        }

        return $this->aDimTime;
    }

    /**
     * Declares an association between this object and a DimUserinfo object.
     *
     * @param                  DimUserinfo $v
     * @return FtSocialdata The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDimUserinfo(DimUserinfo $v = null)
    {
        if ($v === null) {
            $this->setUserid(NULL);
        } else {
            $this->setUserid($v->getUserid());
        }

        $this->aDimUserinfo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the DimUserinfo object, it will not be re-added.
        if ($v !== null) {
            $v->addFtSocialdata($this);
        }


        return $this;
    }


    /**
     * Get the associated DimUserinfo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return DimUserinfo The associated DimUserinfo object.
     * @throws PropelException
     */
    public function getDimUserinfo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDimUserinfo === null && ($this->userid !== null) && $doQuery) {
            $this->aDimUserinfo = DimUserinfoQuery::create()->findPk($this->userid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDimUserinfo->addFtSocialdatas($this);
             */
        }

        return $this->aDimUserinfo;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->timeid = null;
        $this->locationid = null;
        $this->userid = null;
        $this->rating = null;
        $this->createddate = null;
        $this->id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->aDimLocation instanceof Persistent) {
              $this->aDimLocation->clearAllReferences($deep);
            }
            if ($this->aDimTime instanceof Persistent) {
              $this->aDimTime->clearAllReferences($deep);
            }
            if ($this->aDimUserinfo instanceof Persistent) {
              $this->aDimUserinfo->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aDimLocation = null;
        $this->aDimTime = null;
        $this->aDimUserinfo = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FtSocialdataPeer::DEFAULT_STRING_FORMAT);
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
