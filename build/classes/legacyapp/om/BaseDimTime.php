<?php


/**
 * Base class that represents a row from the 'dim_time' table.
 *
 *
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseDimTime extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DimTimePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DimTimePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the day field.
     * @var        int
     */
    protected $day;

    /**
     * The value for the month field.
     * @var        int
     */
    protected $month;

    /**
     * The value for the year field.
     * @var        int
     */
    protected $year;

    /**
     * The value for the recid field.
     * @var        string
     */
    protected $recid;

    /**
     * The value for the timeid field.
     * @var        int
     */
    protected $timeid;

    /**
     * @var        PropelObjectCollection|FtSocialdata[] Collection to store aggregation of FtSocialdata objects.
     */
    protected $collFtSocialdatas;
    protected $collFtSocialdatasPartial;

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
    protected $ftSocialdatasScheduledForDeletion = null;

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
     * Get the [month] column value.
     *
     * @return int
     */
    public function getMonth()
    {

        return $this->month;
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
     * Get the [recid] column value.
     *
     * @return string
     */
    public function getRecid()
    {

        return $this->recid;
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
     * Set the value of [day] column.
     *
     * @param  int $v new value
     * @return DimTime The current object (for fluent API support)
     */
    public function setDay($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->day !== $v) {
            $this->day = $v;
            $this->modifiedColumns[] = DimTimePeer::DAY;
        }


        return $this;
    } // setDay()

    /**
     * Set the value of [month] column.
     *
     * @param  int $v new value
     * @return DimTime The current object (for fluent API support)
     */
    public function setMonth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->month !== $v) {
            $this->month = $v;
            $this->modifiedColumns[] = DimTimePeer::MONTH;
        }


        return $this;
    } // setMonth()

    /**
     * Set the value of [year] column.
     *
     * @param  int $v new value
     * @return DimTime The current object (for fluent API support)
     */
    public function setYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->year !== $v) {
            $this->year = $v;
            $this->modifiedColumns[] = DimTimePeer::YEAR;
        }


        return $this;
    } // setYear()

    /**
     * Set the value of [recid] column.
     *
     * @param  string $v new value
     * @return DimTime The current object (for fluent API support)
     */
    public function setRecid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->recid !== $v) {
            $this->recid = $v;
            $this->modifiedColumns[] = DimTimePeer::RECID;
        }


        return $this;
    } // setRecid()

    /**
     * Set the value of [timeid] column.
     *
     * @param  int $v new value
     * @return DimTime The current object (for fluent API support)
     */
    public function setTimeid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->timeid !== $v) {
            $this->timeid = $v;
            $this->modifiedColumns[] = DimTimePeer::TIMEID;
        }


        return $this;
    } // setTimeid()

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

            $this->day = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->month = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->year = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->recid = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->timeid = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = DimTimePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating DimTime object", $e);
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
            $con = Propel::getConnection(DimTimePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DimTimePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collFtSocialdatas = null;

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
            $con = Propel::getConnection(DimTimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DimTimeQuery::create()
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
            $con = Propel::getConnection(DimTimePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DimTimePeer::addInstanceToPool($this);
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

            if ($this->ftSocialdatasScheduledForDeletion !== null) {
                if (!$this->ftSocialdatasScheduledForDeletion->isEmpty()) {
                    foreach ($this->ftSocialdatasScheduledForDeletion as $ftSocialdata) {
                        // need to save related object because we set the relation to null
                        $ftSocialdata->save($con);
                    }
                    $this->ftSocialdatasScheduledForDeletion = null;
                }
            }

            if ($this->collFtSocialdatas !== null) {
                foreach ($this->collFtSocialdatas as $referrerFK) {
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DimTimePeer::DAY)) {
            $modifiedColumns[':p' . $index++]  = '`day`';
        }
        if ($this->isColumnModified(DimTimePeer::MONTH)) {
            $modifiedColumns[':p' . $index++]  = '`month`';
        }
        if ($this->isColumnModified(DimTimePeer::YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`year`';
        }
        if ($this->isColumnModified(DimTimePeer::RECID)) {
            $modifiedColumns[':p' . $index++]  = '`recid`';
        }
        if ($this->isColumnModified(DimTimePeer::TIMEID)) {
            $modifiedColumns[':p' . $index++]  = '`timeid`';
        }

        $sql = sprintf(
            'INSERT INTO `dim_time` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`day`':
                        $stmt->bindValue($identifier, $this->day, PDO::PARAM_INT);
                        break;
                    case '`month`':
                        $stmt->bindValue($identifier, $this->month, PDO::PARAM_INT);
                        break;
                    case '`year`':
                        $stmt->bindValue($identifier, $this->year, PDO::PARAM_INT);
                        break;
                    case '`recid`':
                        $stmt->bindValue($identifier, $this->recid, PDO::PARAM_STR);
                        break;
                    case '`timeid`':
                        $stmt->bindValue($identifier, $this->timeid, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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


            if (($retval = DimTimePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collFtSocialdatas !== null) {
                    foreach ($this->collFtSocialdatas as $referrerFK) {
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
        $pos = DimTimePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDay();
                break;
            case 1:
                return $this->getMonth();
                break;
            case 2:
                return $this->getYear();
                break;
            case 3:
                return $this->getRecid();
                break;
            case 4:
                return $this->getTimeid();
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
        if (isset($alreadyDumpedObjects['DimTime'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['DimTime'][$this->getPrimaryKey()] = true;
        $keys = DimTimePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getDay(),
            $keys[1] => $this->getMonth(),
            $keys[2] => $this->getYear(),
            $keys[3] => $this->getRecid(),
            $keys[4] => $this->getTimeid(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collFtSocialdatas) {
                $result['FtSocialdatas'] = $this->collFtSocialdatas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = DimTimePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDay($value);
                break;
            case 1:
                $this->setMonth($value);
                break;
            case 2:
                $this->setYear($value);
                break;
            case 3:
                $this->setRecid($value);
                break;
            case 4:
                $this->setTimeid($value);
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
        $keys = DimTimePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setDay($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMonth($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setYear($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRecid($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTimeid($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DimTimePeer::DATABASE_NAME);

        if ($this->isColumnModified(DimTimePeer::DAY)) $criteria->add(DimTimePeer::DAY, $this->day);
        if ($this->isColumnModified(DimTimePeer::MONTH)) $criteria->add(DimTimePeer::MONTH, $this->month);
        if ($this->isColumnModified(DimTimePeer::YEAR)) $criteria->add(DimTimePeer::YEAR, $this->year);
        if ($this->isColumnModified(DimTimePeer::RECID)) $criteria->add(DimTimePeer::RECID, $this->recid);
        if ($this->isColumnModified(DimTimePeer::TIMEID)) $criteria->add(DimTimePeer::TIMEID, $this->timeid);

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
        $criteria = new Criteria(DimTimePeer::DATABASE_NAME);
        $criteria->add(DimTimePeer::TIMEID, $this->timeid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getTimeid();
    }

    /**
     * Generic method to set the primary key (timeid column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setTimeid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getTimeid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of DimTime (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDay($this->getDay());
        $copyObj->setMonth($this->getMonth());
        $copyObj->setYear($this->getYear());
        $copyObj->setRecid($this->getRecid());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getFtSocialdatas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addFtSocialdata($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setTimeid(NULL); // this is a auto-increment column, so set to default value
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
     * @return DimTime Clone of current object.
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
     * @return DimTimePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DimTimePeer();
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
        if ('FtSocialdata' == $relationName) {
            $this->initFtSocialdatas();
        }
    }

    /**
     * Clears out the collFtSocialdatas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return DimTime The current object (for fluent API support)
     * @see        addFtSocialdatas()
     */
    public function clearFtSocialdatas()
    {
        $this->collFtSocialdatas = null; // important to set this to null since that means it is uninitialized
        $this->collFtSocialdatasPartial = null;

        return $this;
    }

    /**
     * reset is the collFtSocialdatas collection loaded partially
     *
     * @return void
     */
    public function resetPartialFtSocialdatas($v = true)
    {
        $this->collFtSocialdatasPartial = $v;
    }

    /**
     * Initializes the collFtSocialdatas collection.
     *
     * By default this just sets the collFtSocialdatas collection to an empty array (like clearcollFtSocialdatas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initFtSocialdatas($overrideExisting = true)
    {
        if (null !== $this->collFtSocialdatas && !$overrideExisting) {
            return;
        }
        $this->collFtSocialdatas = new PropelObjectCollection();
        $this->collFtSocialdatas->setModel('FtSocialdata');
    }

    /**
     * Gets an array of FtSocialdata objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this DimTime is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|FtSocialdata[] List of FtSocialdata objects
     * @throws PropelException
     */
    public function getFtSocialdatas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collFtSocialdatasPartial && !$this->isNew();
        if (null === $this->collFtSocialdatas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collFtSocialdatas) {
                // return empty collection
                $this->initFtSocialdatas();
            } else {
                $collFtSocialdatas = FtSocialdataQuery::create(null, $criteria)
                    ->filterByDimTime($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collFtSocialdatasPartial && count($collFtSocialdatas)) {
                      $this->initFtSocialdatas(false);

                      foreach ($collFtSocialdatas as $obj) {
                        if (false == $this->collFtSocialdatas->contains($obj)) {
                          $this->collFtSocialdatas->append($obj);
                        }
                      }

                      $this->collFtSocialdatasPartial = true;
                    }

                    $collFtSocialdatas->getInternalIterator()->rewind();

                    return $collFtSocialdatas;
                }

                if ($partial && $this->collFtSocialdatas) {
                    foreach ($this->collFtSocialdatas as $obj) {
                        if ($obj->isNew()) {
                            $collFtSocialdatas[] = $obj;
                        }
                    }
                }

                $this->collFtSocialdatas = $collFtSocialdatas;
                $this->collFtSocialdatasPartial = false;
            }
        }

        return $this->collFtSocialdatas;
    }

    /**
     * Sets a collection of FtSocialdata objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ftSocialdatas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return DimTime The current object (for fluent API support)
     */
    public function setFtSocialdatas(PropelCollection $ftSocialdatas, PropelPDO $con = null)
    {
        $ftSocialdatasToDelete = $this->getFtSocialdatas(new Criteria(), $con)->diff($ftSocialdatas);


        $this->ftSocialdatasScheduledForDeletion = $ftSocialdatasToDelete;

        foreach ($ftSocialdatasToDelete as $ftSocialdataRemoved) {
            $ftSocialdataRemoved->setDimTime(null);
        }

        $this->collFtSocialdatas = null;
        foreach ($ftSocialdatas as $ftSocialdata) {
            $this->addFtSocialdata($ftSocialdata);
        }

        $this->collFtSocialdatas = $ftSocialdatas;
        $this->collFtSocialdatasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related FtSocialdata objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related FtSocialdata objects.
     * @throws PropelException
     */
    public function countFtSocialdatas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collFtSocialdatasPartial && !$this->isNew();
        if (null === $this->collFtSocialdatas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collFtSocialdatas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getFtSocialdatas());
            }
            $query = FtSocialdataQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDimTime($this)
                ->count($con);
        }

        return count($this->collFtSocialdatas);
    }

    /**
     * Method called to associate a FtSocialdata object to this object
     * through the FtSocialdata foreign key attribute.
     *
     * @param    FtSocialdata $l FtSocialdata
     * @return DimTime The current object (for fluent API support)
     */
    public function addFtSocialdata(FtSocialdata $l)
    {
        if ($this->collFtSocialdatas === null) {
            $this->initFtSocialdatas();
            $this->collFtSocialdatasPartial = true;
        }

        if (!in_array($l, $this->collFtSocialdatas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddFtSocialdata($l);

            if ($this->ftSocialdatasScheduledForDeletion and $this->ftSocialdatasScheduledForDeletion->contains($l)) {
                $this->ftSocialdatasScheduledForDeletion->remove($this->ftSocialdatasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	FtSocialdata $ftSocialdata The ftSocialdata object to add.
     */
    protected function doAddFtSocialdata($ftSocialdata)
    {
        $this->collFtSocialdatas[]= $ftSocialdata;
        $ftSocialdata->setDimTime($this);
    }

    /**
     * @param	FtSocialdata $ftSocialdata The ftSocialdata object to remove.
     * @return DimTime The current object (for fluent API support)
     */
    public function removeFtSocialdata($ftSocialdata)
    {
        if ($this->getFtSocialdatas()->contains($ftSocialdata)) {
            $this->collFtSocialdatas->remove($this->collFtSocialdatas->search($ftSocialdata));
            if (null === $this->ftSocialdatasScheduledForDeletion) {
                $this->ftSocialdatasScheduledForDeletion = clone $this->collFtSocialdatas;
                $this->ftSocialdatasScheduledForDeletion->clear();
            }
            $this->ftSocialdatasScheduledForDeletion[]= $ftSocialdata;
            $ftSocialdata->setDimTime(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimTime is new, it will return
     * an empty collection; or if this DimTime has previously
     * been saved, it will retrieve related FtSocialdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimTime.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FtSocialdata[] List of FtSocialdata objects
     */
    public function getFtSocialdatasJoinDimLocation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FtSocialdataQuery::create(null, $criteria);
        $query->joinWith('DimLocation', $join_behavior);

        return $this->getFtSocialdatas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimTime is new, it will return
     * an empty collection; or if this DimTime has previously
     * been saved, it will retrieve related FtSocialdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimTime.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FtSocialdata[] List of FtSocialdata objects
     */
    public function getFtSocialdatasJoinDimUserinfo($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FtSocialdataQuery::create(null, $criteria);
        $query->joinWith('DimUserinfo', $join_behavior);

        return $this->getFtSocialdatas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->day = null;
        $this->month = null;
        $this->year = null;
        $this->recid = null;
        $this->timeid = null;
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
            if ($this->collFtSocialdatas) {
                foreach ($this->collFtSocialdatas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFtSocialdatas instanceof PropelCollection) {
            $this->collFtSocialdatas->clearIterator();
        }
        $this->collFtSocialdatas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DimTimePeer::DEFAULT_STRING_FORMAT);
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
