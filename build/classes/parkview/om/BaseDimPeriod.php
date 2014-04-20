<?php


/**
 * Base class that represents a row from the 'DIM_PERIOD' table.
 *
 *
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseDimPeriod extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DimPeriodPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DimPeriodPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the date_id field.
     * @var        int
     */
    protected $date_id;

    /**
     * The value for the creation_date field.
     * @var        string
     */
    protected $creation_date;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the quarter field.
     * @var        int
     */
    protected $quarter;

    /**
     * The value for the month field.
     * @var        int
     */
    protected $month;

    /**
     * The value for the day field.
     * @var        int
     */
    protected $day;

    /**
     * @var        PropelObjectCollection|FactSnsdata[] Collection to store aggregation of FactSnsdata objects.
     */
    protected $collFactSnsdatas;
    protected $collFactSnsdatasPartial;

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
    protected $factSnsdatasScheduledForDeletion = null;

    /**
     * Get the [date_id] column value.
     *
     * @return int
     */
    public function getDateId()
    {

        return $this->date_id;
    }

    /**
     * Get the [optionally formatted] temporal [creation_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreationDate($format = '%x')
    {
        if ($this->creation_date === null) {
            return null;
        }

        if ($this->creation_date === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->creation_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->creation_date, true), $x);
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
     * Get the [year] column value.
     *
     * @return int
     */
    public function getYear()
    {

        return $this->year;
    }

    /**
     * Get the [quarter] column value.
     *
     * @return int
     */
    public function getQuarter()
    {

        return $this->quarter;
    }

    /**
     * Get the [month] column value.
     *
     * @return int
     */
    public function getMonth()
    {

        return $this->month;
    }

    /**
     * Get the [day] column value.
     *
     * @return int
     */
    public function getDay()
    {

        return $this->day;
    }

    /**
     * Set the value of [date_id] column.
     *
     * @param  int $v new value
     * @return DimPeriod The current object (for fluent API support)
     */
    public function setDateId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->date_id !== $v) {
            $this->date_id = $v;
            $this->modifiedColumns[] = DimPeriodPeer::DATE_ID;
        }


        return $this;
    } // setDateId()

    /**
     * Sets the value of [creation_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return DimPeriod The current object (for fluent API support)
     */
    public function setCreationDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->creation_date !== null || $dt !== null) {
            $currentDateAsString = ($this->creation_date !== null && $tmpDt = new DateTime($this->creation_date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->creation_date = $newDateAsString;
                $this->modifiedColumns[] = DimPeriodPeer::CREATION_DATE;
            }
        } // if either are not null


        return $this;
    } // setCreationDate()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return DimPeriod The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = DimPeriodPeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [quarter] column.
     *
     * @param  int $v new value
     * @return DimPeriod The current object (for fluent API support)
     */
    public function setQuarter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quarter !== $v) {
            $this->quarter = $v;
            $this->modifiedColumns[] = DimPeriodPeer::QUARTER;
        }


        return $this;
    } // setQuarter()

    /**
     * Set the value of [month] column.
     *
     * @param  int $v new value
     * @return DimPeriod The current object (for fluent API support)
     */
    public function setMonth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->month !== $v) {
            $this->month = $v;
            $this->modifiedColumns[] = DimPeriodPeer::MONTH;
        }


        return $this;
    } // setMonth()

    /**
     * Set the value of [day] column.
     *
     * @param  int $v new value
     * @return DimPeriod The current object (for fluent API support)
     */
    public function setDay($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->day !== $v) {
            $this->day = $v;
            $this->modifiedColumns[] = DimPeriodPeer::DAY;
        }


        return $this;
    } // setDay()

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

            $this->date_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->creation_date = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->year = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->quarter = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->month = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->day = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = DimPeriodPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating DimPeriod object", $e);
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
            $con = Propel::getConnection(DimPeriodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DimPeriodPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collFactSnsdatas = null;

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
            $con = Propel::getConnection(DimPeriodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DimPeriodQuery::create()
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
            $con = Propel::getConnection(DimPeriodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DimPeriodPeer::addInstanceToPool($this);
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

            if ($this->factSnsdatasScheduledForDeletion !== null) {
                if (!$this->factSnsdatasScheduledForDeletion->isEmpty()) {
                    FactSnsdataQuery::create()
                        ->filterByPrimaryKeys($this->factSnsdatasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->factSnsdatasScheduledForDeletion = null;
                }
            }

            if ($this->collFactSnsdatas !== null) {
                foreach ($this->collFactSnsdatas as $referrerFK) {
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

        $this->modifiedColumns[] = DimPeriodPeer::DATE_ID;
        if (null !== $this->date_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DimPeriodPeer::DATE_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DimPeriodPeer::DATE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`date_id`';
        }
        if ($this->isColumnModified(DimPeriodPeer::CREATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`creation_date`';
        }
        if ($this->isColumnModified(DimPeriodPeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`year`';
        }
        if ($this->isColumnModified(DimPeriodPeer::QUARTER)) {
            $modifiedColumns[':p' . $index++]  = '`quarter`';
        }
        if ($this->isColumnModified(DimPeriodPeer::MONTH)) {
            $modifiedColumns[':p' . $index++]  = '`month`';
        }
        if ($this->isColumnModified(DimPeriodPeer::DAY)) {
            $modifiedColumns[':p' . $index++]  = '`day`';
        }

        $sql = sprintf(
            'INSERT INTO `DIM_PERIOD` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`date_id`':
                        $stmt->bindValue($identifier, $this->date_id, PDO::PARAM_INT);
                        break;
                    case '`creation_date`':
                        $stmt->bindValue($identifier, $this->creation_date, PDO::PARAM_STR);
                        break;
                    case '`year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`quarter`':
                        $stmt->bindValue($identifier, $this->quarter, PDO::PARAM_INT);
                        break;
                    case '`month`':
                        $stmt->bindValue($identifier, $this->month, PDO::PARAM_INT);
                        break;
                    case '`day`':
                        $stmt->bindValue($identifier, $this->day, PDO::PARAM_INT);
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
        $this->setDateId($pk);

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


            if (($retval = DimPeriodPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFactSnsdatas !== null) {
                    foreach ($this->collFactSnsdatas as $referrerFK) {
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
        $pos = DimPeriodPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDateId();
                break;
            case 1:
                return $this->getCreationDate();
                break;
            case 2:
                return $this->getYear();
                break;
            case 3:
                return $this->getQuarter();
                break;
            case 4:
                return $this->getMonth();
                break;
            case 5:
                return $this->getDay();
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
        if (isset($alreadyDumpedObjects['DimPeriod'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['DimPeriod'][$this->getPrimaryKey()] = true;
        $keys = DimPeriodPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getDateId(),
            $keys[1] => $this->getCreationDate(),
            $keys[2] => $this->getYear(),
            $keys[3] => $this->getQuarter(),
            $keys[4] => $this->getMonth(),
            $keys[5] => $this->getDay(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collFactSnsdatas) {
                $result['FactSnsdatas'] = $this->collFactSnsdatas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = DimPeriodPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDateId($value);
                break;
            case 1:
                $this->setCreationDate($value);
                break;
            case 2:
                $this->setYear($value);
                break;
            case 3:
                $this->setQuarter($value);
                break;
            case 4:
                $this->setMonth($value);
                break;
            case 5:
                $this->setDay($value);
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
        $keys = DimPeriodPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setDateId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCreationDate($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setYear($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setQuarter($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMonth($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDay($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DimPeriodPeer::DATABASE_NAME);

        if ($this->isColumnModified(DimPeriodPeer::DATE_ID)) $criteria->add(DimPeriodPeer::DATE_ID, $this->date_id);
        if ($this->isColumnModified(DimPeriodPeer::CREATION_DATE)) $criteria->add(DimPeriodPeer::CREATION_DATE, $this->creation_date);
        if ($this->isColumnModified(DimPeriodPeer::YEAR)) $criteria->add(DimPeriodPeer::YEAR, $this->year);
        if ($this->isColumnModified(DimPeriodPeer::QUARTER)) $criteria->add(DimPeriodPeer::QUARTER, $this->quarter);
        if ($this->isColumnModified(DimPeriodPeer::MONTH)) $criteria->add(DimPeriodPeer::MONTH, $this->month);
        if ($this->isColumnModified(DimPeriodPeer::DAY)) $criteria->add(DimPeriodPeer::DAY, $this->day);

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
        $criteria = new Criteria(DimPeriodPeer::DATABASE_NAME);
        $criteria->add(DimPeriodPeer::DATE_ID, $this->date_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getDateId();
    }

    /**
     * Generic method to set the primary key (date_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setDateId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getDateId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of DimPeriod (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCreationDate($this->getCreationDate());
        $copyObj->setYear($this->getYear());
        $copyObj->setQuarter($this->getQuarter());
        $copyObj->setMonth($this->getMonth());
        $copyObj->setDay($this->getDay());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getFactSnsdatas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFactSnsdata($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setDateId(NULL); // this is a auto-increment column, so set to default value
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
     * @return DimPeriod Clone of current object.
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
     * @return DimPeriodPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DimPeriodPeer();
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
        if ('FactSnsdata' == $relationName) {
            $this->initFactSnsdatas();
        }
    }

    /**
     * Clears out the collFactSnsdatas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return DimPeriod The current object (for fluent API support)
     * @see        addFactSnsdatas()
     */
    public function clearFactSnsdatas()
    {
        $this->collFactSnsdatas = null; // important to set this to null since that means it is uninitialized
        $this->collFactSnsdatasPartial = null;

        return $this;
    }

    /**
     * reset is the collFactSnsdatas collection loaded partially
     *
     * @return void
     */
    public function resetPartialFactSnsdatas($v = true)
    {
        $this->collFactSnsdatasPartial = $v;
    }

    /**
     * Initializes the collFactSnsdatas collection.
     *
     * By default this just sets the collFactSnsdatas collection to an empty array (like clearcollFactSnsdatas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFactSnsdatas($overrideExisting = true)
    {
        if (null !== $this->collFactSnsdatas && !$overrideExisting) {
            return;
        }
        $this->collFactSnsdatas = new PropelObjectCollection();
        $this->collFactSnsdatas->setModel('FactSnsdata');
    }

    /**
     * Gets an array of FactSnsdata objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this DimPeriod is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|FactSnsdata[] List of FactSnsdata objects
     * @throws PropelException
     */
    public function getFactSnsdatas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFactSnsdatasPartial && !$this->isNew();
        if (null === $this->collFactSnsdatas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFactSnsdatas) {
                // return empty collection
                $this->initFactSnsdatas();
            } else {
                $collFactSnsdatas = FactSnsdataQuery::create(null, $criteria)
                    ->filterByDimPeriod($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFactSnsdatasPartial && count($collFactSnsdatas)) {
                      $this->initFactSnsdatas(false);

                      foreach ($collFactSnsdatas as $obj) {
                        if (false == $this->collFactSnsdatas->contains($obj)) {
                          $this->collFactSnsdatas->append($obj);
                        }
                      }

                      $this->collFactSnsdatasPartial = true;
                    }

                    $collFactSnsdatas->getInternalIterator()->rewind();

                    return $collFactSnsdatas;
                }

                if ($partial && $this->collFactSnsdatas) {
                    foreach ($this->collFactSnsdatas as $obj) {
                        if ($obj->isNew()) {
                            $collFactSnsdatas[] = $obj;
                        }
                    }
                }

                $this->collFactSnsdatas = $collFactSnsdatas;
                $this->collFactSnsdatasPartial = false;
            }
        }

        return $this->collFactSnsdatas;
    }

    /**
     * Sets a collection of FactSnsdata objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $factSnsdatas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return DimPeriod The current object (for fluent API support)
     */
    public function setFactSnsdatas(PropelCollection $factSnsdatas, PropelPDO $con = null)
    {
        $factSnsdatasToDelete = $this->getFactSnsdatas(new Criteria(), $con)->diff($factSnsdatas);


        $this->factSnsdatasScheduledForDeletion = $factSnsdatasToDelete;

        foreach ($factSnsdatasToDelete as $factSnsdataRemoved) {
            $factSnsdataRemoved->setDimPeriod(null);
        }

        $this->collFactSnsdatas = null;
        foreach ($factSnsdatas as $factSnsdata) {
            $this->addFactSnsdata($factSnsdata);
        }

        $this->collFactSnsdatas = $factSnsdatas;
        $this->collFactSnsdatasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related FactSnsdata objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related FactSnsdata objects.
     * @throws PropelException
     */
    public function countFactSnsdatas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFactSnsdatasPartial && !$this->isNew();
        if (null === $this->collFactSnsdatas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFactSnsdatas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFactSnsdatas());
            }
            $query = FactSnsdataQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDimPeriod($this)
                ->count($con);
        }

        return count($this->collFactSnsdatas);
    }

    /**
     * Method called to associate a FactSnsdata object to this object
     * through the FactSnsdata foreign key attribute.
     *
     * @param    FactSnsdata $l FactSnsdata
     * @return DimPeriod The current object (for fluent API support)
     */
    public function addFactSnsdata(FactSnsdata $l)
    {
        if ($this->collFactSnsdatas === null) {
            $this->initFactSnsdatas();
            $this->collFactSnsdatasPartial = true;
        }

        if (!in_array($l, $this->collFactSnsdatas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFactSnsdata($l);

            if ($this->factSnsdatasScheduledForDeletion and $this->factSnsdatasScheduledForDeletion->contains($l)) {
                $this->factSnsdatasScheduledForDeletion->remove($this->factSnsdatasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	FactSnsdata $factSnsdata The factSnsdata object to add.
     */
    protected function doAddFactSnsdata($factSnsdata)
    {
        $this->collFactSnsdatas[]= $factSnsdata;
        $factSnsdata->setDimPeriod($this);
    }

    /**
     * @param	FactSnsdata $factSnsdata The factSnsdata object to remove.
     * @return DimPeriod The current object (for fluent API support)
     */
    public function removeFactSnsdata($factSnsdata)
    {
        if ($this->getFactSnsdatas()->contains($factSnsdata)) {
            $this->collFactSnsdatas->remove($this->collFactSnsdatas->search($factSnsdata));
            if (null === $this->factSnsdatasScheduledForDeletion) {
                $this->factSnsdatasScheduledForDeletion = clone $this->collFactSnsdatas;
                $this->factSnsdatasScheduledForDeletion->clear();
            }
            $this->factSnsdatasScheduledForDeletion[]= clone $factSnsdata;
            $factSnsdata->setDimPeriod(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimPeriod is new, it will return
     * an empty collection; or if this DimPeriod has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimPeriod.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactSnsdata[] List of FactSnsdata objects
     */
    public function getFactSnsdatasJoinDimComments($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactSnsdataQuery::create(null, $criteria);
        $query->joinWith('DimComments', $join_behavior);

        return $this->getFactSnsdatas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimPeriod is new, it will return
     * an empty collection; or if this DimPeriod has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimPeriod.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactSnsdata[] List of FactSnsdata objects
     */
    public function getFactSnsdatasJoinDimUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactSnsdataQuery::create(null, $criteria);
        $query->joinWith('DimUser', $join_behavior);

        return $this->getFactSnsdatas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimPeriod is new, it will return
     * an empty collection; or if this DimPeriod has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimPeriod.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactSnsdata[] List of FactSnsdata objects
     */
    public function getFactSnsdatasJoinTrackSites($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactSnsdataQuery::create(null, $criteria);
        $query->joinWith('TrackSites', $join_behavior);

        return $this->getFactSnsdatas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->date_id = null;
        $this->creation_date = null;
        $this->year = null;
        $this->quarter = null;
        $this->month = null;
        $this->day = null;
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
            if ($this->collFactSnsdatas) {
                foreach ($this->collFactSnsdatas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFactSnsdatas instanceof PropelCollection) {
            $this->collFactSnsdatas->clearIterator();
        }
        $this->collFactSnsdatas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DimPeriodPeer::DEFAULT_STRING_FORMAT);
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
