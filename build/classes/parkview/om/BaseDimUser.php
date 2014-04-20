<?php


/**
 * Base class that represents a row from the 'DIM_USER' table.
 *
 *
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseDimUser extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DimUserPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DimUserPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the row_id field.
     * @var        int
     */
    protected $row_id;

    /**
     * The value for the address field.
     * @var        string
     */
    protected $address;

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
     * @var        Allsnsdata
     */
    protected $aAllsnsdata;

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
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

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
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {

        return $this->address;
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
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return DimUser The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = DimUserPeer::USER_ID;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [row_id] column.
     *
     * @param  int $v new value
     * @return DimUser The current object (for fluent API support)
     */
    public function setRowId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->row_id !== $v) {
            $this->row_id = $v;
            $this->modifiedColumns[] = DimUserPeer::ROW_ID;
        }

        if ($this->aAllsnsdata !== null && $this->aAllsnsdata->getRowId() !== $v) {
            $this->aAllsnsdata = null;
        }


        return $this;
    } // setRowId()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return DimUser The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = DimUserPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return DimUser The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = DimUserPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [state] column.
     *
     * @param  string $v new value
     * @return DimUser The current object (for fluent API support)
     */
    public function setState($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->state !== $v) {
            $this->state = $v;
            $this->modifiedColumns[] = DimUserPeer::STATE;
        }


        return $this;
    } // setState()

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

            $this->user_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->row_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->address = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->city = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->state = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = DimUserPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating DimUser object", $e);
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

        if ($this->aAllsnsdata !== null && $this->row_id !== $this->aAllsnsdata->getRowId()) {
            $this->aAllsnsdata = null;
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
            $con = Propel::getConnection(DimUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DimUserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aAllsnsdata = null;
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
            $con = Propel::getConnection(DimUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DimUserQuery::create()
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
            $con = Propel::getConnection(DimUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DimUserPeer::addInstanceToPool($this);
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

            if ($this->aAllsnsdata !== null) {
                if ($this->aAllsnsdata->isModified() || $this->aAllsnsdata->isNew()) {
                    $affectedRows += $this->aAllsnsdata->save($con);
                }
                $this->setAllsnsdata($this->aAllsnsdata);
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

        $this->modifiedColumns[] = DimUserPeer::USER_ID;
        if (null !== $this->user_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DimUserPeer::USER_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DimUserPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(DimUserPeer::ROW_ID)) {
            $modifiedColumns[':p' . $index++]  = '`row_id`';
        }
        if ($this->isColumnModified(DimUserPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`address`';
        }
        if ($this->isColumnModified(DimUserPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = '`city`';
        }
        if ($this->isColumnModified(DimUserPeer::STATE)) {
            $modifiedColumns[':p' . $index++]  = '`State`';
        }

        $sql = sprintf(
            'INSERT INTO `DIM_USER` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`row_id`':
                        $stmt->bindValue($identifier, $this->row_id, PDO::PARAM_INT);
                        break;
                    case '`address`':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case '`city`':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case '`State`':
                        $stmt->bindValue($identifier, $this->state, PDO::PARAM_STR);
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
        $this->setUserId($pk);

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

            if ($this->aAllsnsdata !== null) {
                if (!$this->aAllsnsdata->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAllsnsdata->getValidationFailures());
                }
            }


            if (($retval = DimUserPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DimUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUserId();
                break;
            case 1:
                return $this->getRowId();
                break;
            case 2:
                return $this->getAddress();
                break;
            case 3:
                return $this->getCity();
                break;
            case 4:
                return $this->getState();
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
        if (isset($alreadyDumpedObjects['DimUser'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['DimUser'][$this->getPrimaryKey()] = true;
        $keys = DimUserPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUserId(),
            $keys[1] => $this->getRowId(),
            $keys[2] => $this->getAddress(),
            $keys[3] => $this->getCity(),
            $keys[4] => $this->getState(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aAllsnsdata) {
                $result['Allsnsdata'] = $this->aAllsnsdata->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
        $pos = DimUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUserId($value);
                break;
            case 1:
                $this->setRowId($value);
                break;
            case 2:
                $this->setAddress($value);
                break;
            case 3:
                $this->setCity($value);
                break;
            case 4:
                $this->setState($value);
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
        $keys = DimUserPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRowId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAddress($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCity($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setState($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DimUserPeer::DATABASE_NAME);

        if ($this->isColumnModified(DimUserPeer::USER_ID)) $criteria->add(DimUserPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(DimUserPeer::ROW_ID)) $criteria->add(DimUserPeer::ROW_ID, $this->row_id);
        if ($this->isColumnModified(DimUserPeer::ADDRESS)) $criteria->add(DimUserPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(DimUserPeer::CITY)) $criteria->add(DimUserPeer::CITY, $this->city);
        if ($this->isColumnModified(DimUserPeer::STATE)) $criteria->add(DimUserPeer::STATE, $this->state);

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
        $criteria = new Criteria(DimUserPeer::DATABASE_NAME);
        $criteria->add(DimUserPeer::USER_ID, $this->user_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getUserId();
    }

    /**
     * Generic method to set the primary key (user_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUserId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getUserId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of DimUser (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRowId($this->getRowId());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setCity($this->getCity());
        $copyObj->setState($this->getState());

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
            $copyObj->setUserId(NULL); // this is a auto-increment column, so set to default value
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
     * @return DimUser Clone of current object.
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
     * @return DimUserPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DimUserPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Allsnsdata object.
     *
     * @param                  Allsnsdata $v
     * @return DimUser The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAllsnsdata(Allsnsdata $v = null)
    {
        if ($v === null) {
            $this->setRowId(NULL);
        } else {
            $this->setRowId($v->getRowId());
        }

        $this->aAllsnsdata = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Allsnsdata object, it will not be re-added.
        if ($v !== null) {
            $v->addDimUser($this);
        }


        return $this;
    }


    /**
     * Get the associated Allsnsdata object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Allsnsdata The associated Allsnsdata object.
     * @throws PropelException
     */
    public function getAllsnsdata(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAllsnsdata === null && ($this->row_id !== null) && $doQuery) {
            $this->aAllsnsdata = AllsnsdataQuery::create()->findPk($this->row_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAllsnsdata->addDimUsers($this);
             */
        }

        return $this->aAllsnsdata;
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
     * @return DimUser The current object (for fluent API support)
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
     * If this DimUser is new, it will return
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
                    ->filterByDimUser($this)
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
     * @return DimUser The current object (for fluent API support)
     */
    public function setFactSnsdatas(PropelCollection $factSnsdatas, PropelPDO $con = null)
    {
        $factSnsdatasToDelete = $this->getFactSnsdatas(new Criteria(), $con)->diff($factSnsdatas);


        $this->factSnsdatasScheduledForDeletion = $factSnsdatasToDelete;

        foreach ($factSnsdatasToDelete as $factSnsdataRemoved) {
            $factSnsdataRemoved->setDimUser(null);
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
                ->filterByDimUser($this)
                ->count($con);
        }

        return count($this->collFactSnsdatas);
    }

    /**
     * Method called to associate a FactSnsdata object to this object
     * through the FactSnsdata foreign key attribute.
     *
     * @param    FactSnsdata $l FactSnsdata
     * @return DimUser The current object (for fluent API support)
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
        $factSnsdata->setDimUser($this);
    }

    /**
     * @param	FactSnsdata $factSnsdata The factSnsdata object to remove.
     * @return DimUser The current object (for fluent API support)
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
            $factSnsdata->setDimUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimUser is new, it will return
     * an empty collection; or if this DimUser has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimUser.
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
     * Otherwise if this DimUser is new, it will return
     * an empty collection; or if this DimUser has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimUser.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactSnsdata[] List of FactSnsdata objects
     */
    public function getFactSnsdatasJoinDimPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactSnsdataQuery::create(null, $criteria);
        $query->joinWith('DimPeriod', $join_behavior);

        return $this->getFactSnsdatas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimUser is new, it will return
     * an empty collection; or if this DimUser has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimUser.
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
        $this->user_id = null;
        $this->row_id = null;
        $this->address = null;
        $this->city = null;
        $this->state = null;
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
            if ($this->aAllsnsdata instanceof Persistent) {
              $this->aAllsnsdata->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collFactSnsdatas instanceof PropelCollection) {
            $this->collFactSnsdatas->clearIterator();
        }
        $this->collFactSnsdatas = null;
        $this->aAllsnsdata = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DimUserPeer::DEFAULT_STRING_FORMAT);
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
