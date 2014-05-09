<?php


/**
 * Base class that represents a row from the 'DIM_COMMENTS' table.
 *
 *
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseDimComments extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DimCommentsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DimCommentsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the comment_id field.
     * @var        int
     */
    protected $comment_id;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the link field.
     * @var        string
     */
    protected $link;

    /**
     * The value for the spread field.
     * @var        int
     */
    protected $spread;

    /**
     * The value for the sns field.
     * @var        string
     */
    protected $sns;

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
     * Get the [comment_id] column value.
     *
     * @return int
     */
    public function getCommentId()
    {

        return $this->comment_id;
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
     * Get the [title] column value.
     *
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
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
     * Get the [spread] column value.
     *
     * @return int
     */
    public function getSpread()
    {

        return $this->spread;
    }

    /**
     * Get the [sns] column value.
     *
     * @return string
     */
    public function getSns()
    {

        return $this->sns;
    }

    /**
     * Set the value of [comment_id] column.
     *
     * @param  int $v new value
     * @return DimComments The current object (for fluent API support)
     */
    public function setCommentId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comment_id !== $v) {
            $this->comment_id = $v;
            $this->modifiedColumns[] = DimCommentsPeer::COMMENT_ID;
        }


        return $this;
    } // setCommentId()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return DimComments The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = DimCommentsPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [title] column.
     *
     * @param  string $v new value
     * @return DimComments The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = DimCommentsPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [link] column.
     *
     * @param  string $v new value
     * @return DimComments The current object (for fluent API support)
     */
    public function setLink($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->link !== $v) {
            $this->link = $v;
            $this->modifiedColumns[] = DimCommentsPeer::LINK;
        }


        return $this;
    } // setLink()

    /**
     * Set the value of [spread] column.
     *
     * @param  int $v new value
     * @return DimComments The current object (for fluent API support)
     */
    public function setSpread($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->spread !== $v) {
            $this->spread = $v;
            $this->modifiedColumns[] = DimCommentsPeer::SPREAD;
        }


        return $this;
    } // setSpread()

    /**
     * Set the value of [sns] column.
     *
     * @param  string $v new value
     * @return DimComments The current object (for fluent API support)
     */
    public function setSns($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sns !== $v) {
            $this->sns = $v;
            $this->modifiedColumns[] = DimCommentsPeer::SNS;
        }


        return $this;
    } // setSns()

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

            $this->comment_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->comment = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->title = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->link = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->spread = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->sns = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = DimCommentsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating DimComments object", $e);
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
            $con = Propel::getConnection(DimCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DimCommentsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(DimCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DimCommentsQuery::create()
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
            $con = Propel::getConnection(DimCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DimCommentsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = DimCommentsPeer::COMMENT_ID;
        if (null !== $this->comment_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DimCommentsPeer::COMMENT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DimCommentsPeer::COMMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`comment_id`';
        }
        if ($this->isColumnModified(DimCommentsPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`comment`';
        }
        if ($this->isColumnModified(DimCommentsPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }
        if ($this->isColumnModified(DimCommentsPeer::LINK)) {
            $modifiedColumns[':p' . $index++]  = '`link`';
        }
        if ($this->isColumnModified(DimCommentsPeer::SPREAD)) {
            $modifiedColumns[':p' . $index++]  = '`spread`';
        }
        if ($this->isColumnModified(DimCommentsPeer::SNS)) {
            $modifiedColumns[':p' . $index++]  = '`sns`';
        }

        $sql = sprintf(
            'INSERT INTO `DIM_COMMENTS` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`comment_id`':
                        $stmt->bindValue($identifier, $this->comment_id, PDO::PARAM_INT);
                        break;
                    case '`comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`title`':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case '`link`':
                        $stmt->bindValue($identifier, $this->link, PDO::PARAM_STR);
                        break;
                    case '`spread`':
                        $stmt->bindValue($identifier, $this->spread, PDO::PARAM_INT);
                        break;
                    case '`sns`':
                        $stmt->bindValue($identifier, $this->sns, PDO::PARAM_STR);
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
        $this->setCommentId($pk);

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


            if (($retval = DimCommentsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DimCommentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCommentId();
                break;
            case 1:
                return $this->getComment();
                break;
            case 2:
                return $this->getTitle();
                break;
            case 3:
                return $this->getLink();
                break;
            case 4:
                return $this->getSpread();
                break;
            case 5:
                return $this->getSns();
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
        if (isset($alreadyDumpedObjects['DimComments'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['DimComments'][$this->getPrimaryKey()] = true;
        $keys = DimCommentsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCommentId(),
            $keys[1] => $this->getComment(),
            $keys[2] => $this->getTitle(),
            $keys[3] => $this->getLink(),
            $keys[4] => $this->getSpread(),
            $keys[5] => $this->getSns(),
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
        $pos = DimCommentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCommentId($value);
                break;
            case 1:
                $this->setComment($value);
                break;
            case 2:
                $this->setTitle($value);
                break;
            case 3:
                $this->setLink($value);
                break;
            case 4:
                $this->setSpread($value);
                break;
            case 5:
                $this->setSns($value);
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
        $keys = DimCommentsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCommentId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setComment($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLink($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSpread($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSns($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DimCommentsPeer::DATABASE_NAME);

        if ($this->isColumnModified(DimCommentsPeer::COMMENT_ID)) $criteria->add(DimCommentsPeer::COMMENT_ID, $this->comment_id);
        if ($this->isColumnModified(DimCommentsPeer::COMMENT)) $criteria->add(DimCommentsPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(DimCommentsPeer::TITLE)) $criteria->add(DimCommentsPeer::TITLE, $this->title);
        if ($this->isColumnModified(DimCommentsPeer::LINK)) $criteria->add(DimCommentsPeer::LINK, $this->link);
        if ($this->isColumnModified(DimCommentsPeer::SPREAD)) $criteria->add(DimCommentsPeer::SPREAD, $this->spread);
        if ($this->isColumnModified(DimCommentsPeer::SNS)) $criteria->add(DimCommentsPeer::SNS, $this->sns);

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
        $criteria = new Criteria(DimCommentsPeer::DATABASE_NAME);
        $criteria->add(DimCommentsPeer::COMMENT_ID, $this->comment_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getCommentId();
    }

    /**
     * Generic method to set the primary key (comment_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCommentId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCommentId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of DimComments (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setComment($this->getComment());
        $copyObj->setTitle($this->getTitle());
        $copyObj->setLink($this->getLink());
        $copyObj->setSpread($this->getSpread());
        $copyObj->setSns($this->getSns());

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
            $copyObj->setCommentId(NULL); // this is a auto-increment column, so set to default value
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
     * @return DimComments Clone of current object.
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
     * @return DimCommentsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DimCommentsPeer();
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
     * @return DimComments The current object (for fluent API support)
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
     * If this DimComments is new, it will return
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
                    ->filterByDimComments($this)
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
     * @return DimComments The current object (for fluent API support)
     */
    public function setFactSnsdatas(PropelCollection $factSnsdatas, PropelPDO $con = null)
    {
        $factSnsdatasToDelete = $this->getFactSnsdatas(new Criteria(), $con)->diff($factSnsdatas);


        $this->factSnsdatasScheduledForDeletion = $factSnsdatasToDelete;

        foreach ($factSnsdatasToDelete as $factSnsdataRemoved) {
            $factSnsdataRemoved->setDimComments(null);
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
                ->filterByDimComments($this)
                ->count($con);
        }

        return count($this->collFactSnsdatas);
    }

    /**
     * Method called to associate a FactSnsdata object to this object
     * through the FactSnsdata foreign key attribute.
     *
     * @param    FactSnsdata $l FactSnsdata
     * @return DimComments The current object (for fluent API support)
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
        $factSnsdata->setDimComments($this);
    }

    /**
     * @param	FactSnsdata $factSnsdata The factSnsdata object to remove.
     * @return DimComments The current object (for fluent API support)
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
            $factSnsdata->setDimComments(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimComments is new, it will return
     * an empty collection; or if this DimComments has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimComments.
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
     * Otherwise if this DimComments is new, it will return
     * an empty collection; or if this DimComments has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimComments.
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
     * Otherwise if this DimComments is new, it will return
     * an empty collection; or if this DimComments has previously
     * been saved, it will retrieve related FactSnsdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimComments.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FactSnsdata[] List of FactSnsdata objects
     */
    public function getFactSnsdatasJoinDimPlaces($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FactSnsdataQuery::create(null, $criteria);
        $query->joinWith('DimPlaces', $join_behavior);

        return $this->getFactSnsdatas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->comment_id = null;
        $this->comment = null;
        $this->title = null;
        $this->link = null;
        $this->spread = null;
        $this->sns = null;
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
        return (string) $this->exportTo(DimCommentsPeer::DEFAULT_STRING_FORMAT);
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