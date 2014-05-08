<?php


/**
 * Base class that represents a row from the 'FACT_SNSDATA' table.
 *
 *
 *
 * @package    propel.generator.parkview.om
 */
abstract class BaseFactSnsdata extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'FactSnsdataPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        FactSnsdataPeer
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
     * The value for the row_id field.
     * @var        int
     */
    protected $row_id;

    /**
     * The value for the comment_id field.
     * @var        int
     */
    protected $comment_id;

    /**
     * The value for the date_id field.
     * @var        int
     */
    protected $date_id;

    /**
     * The value for the places_row_id field.
     * @var        int
     */
    protected $places_row_id;

    /**
     * The value for the sentiment field.
     * @var        double
     */
    protected $sentiment;

    /**
     * The value for the rating field.
     * @var        int
     */
    protected $rating;

    /**
     * @var        DimComments
     */
    protected $aDimComments;

    /**
     * @var        DimPeriod
     */
    protected $aDimPeriod;

    /**
     * @var        DimUser
     */
    protected $aDimUser;

    /**
     * @var        DimPlaces
     */
    protected $aDimPlaces;

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
     * Get the [row_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->row_id;
    }

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
     * Get the [date_id] column value.
     *
     * @return int
     */
    public function getDateId()
    {

        return $this->date_id;
    }

    /**
     * Get the [places_row_id] column value.
     *
     * @return int
     */
    public function getPlacesRowId()
    {

        return $this->places_row_id;
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
     * Get the [rating] column value.
     *
     * @return int
     */
    public function getRating()
    {

        return $this->rating;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return FactSnsdata The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = FactSnsdataPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [row_id] column.
     *
     * @param  int $v new value
     * @return FactSnsdata The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->row_id !== $v) {
            $this->row_id = $v;
            $this->modifiedColumns[] = FactSnsdataPeer::ROW_ID;
        }

        if ($this->aDimUser !== null && $this->aDimUser->getRowId() !== $v) {
            $this->aDimUser = null;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [comment_id] column.
     *
     * @param  int $v new value
     * @return FactSnsdata The current object (for fluent API support)
     */
    public function setCommentId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->comment_id !== $v) {
            $this->comment_id = $v;
            $this->modifiedColumns[] = FactSnsdataPeer::COMMENT_ID;
        }

        if ($this->aDimComments !== null && $this->aDimComments->getCommentId() !== $v) {
            $this->aDimComments = null;
        }


        return $this;
    } // setCommentId()

    /**
     * Set the value of [date_id] column.
     *
     * @param  int $v new value
     * @return FactSnsdata The current object (for fluent API support)
     */
    public function setDateId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->date_id !== $v) {
            $this->date_id = $v;
            $this->modifiedColumns[] = FactSnsdataPeer::DATE_ID;
        }

        if ($this->aDimPeriod !== null && $this->aDimPeriod->getDateId() !== $v) {
            $this->aDimPeriod = null;
        }


        return $this;
    } // setDateId()

    /**
     * Set the value of [places_row_id] column.
     *
     * @param  int $v new value
     * @return FactSnsdata The current object (for fluent API support)
     */
    public function setPlacesRowId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->places_row_id !== $v) {
            $this->places_row_id = $v;
            $this->modifiedColumns[] = FactSnsdataPeer::PLACES_ROW_ID;
        }

        if ($this->aDimPlaces !== null && $this->aDimPlaces->getRowId() !== $v) {
            $this->aDimPlaces = null;
        }


        return $this;
    } // setPlacesRowId()

    /**
     * Set the value of [sentiment] column.
     *
     * @param  double $v new value
     * @return FactSnsdata The current object (for fluent API support)
     */
    public function setSentiment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->sentiment !== $v) {
            $this->sentiment = $v;
            $this->modifiedColumns[] = FactSnsdataPeer::SENTIMENT;
        }


        return $this;
    } // setSentiment()

    /**
     * Set the value of [rating] column.
     *
     * @param  int $v new value
     * @return FactSnsdata The current object (for fluent API support)
     */
    public function setRating($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rating !== $v) {
            $this->rating = $v;
            $this->modifiedColumns[] = FactSnsdataPeer::RATING;
        }


        return $this;
    } // setRating()

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
            $this->row_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->comment_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->date_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->places_row_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->sentiment = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->rating = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = FactSnsdataPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating FactSnsdata object", $e);
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

        if ($this->aDimUser !== null && $this->row_id !== $this->aDimUser->getRowId()) {
            $this->aDimUser = null;
        }
        if ($this->aDimComments !== null && $this->comment_id !== $this->aDimComments->getCommentId()) {
            $this->aDimComments = null;
        }
        if ($this->aDimPeriod !== null && $this->date_id !== $this->aDimPeriod->getDateId()) {
            $this->aDimPeriod = null;
        }
        if ($this->aDimPlaces !== null && $this->places_row_id !== $this->aDimPlaces->getRowId()) {
            $this->aDimPlaces = null;
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
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = FactSnsdataPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aDimComments = null;
            $this->aDimPeriod = null;
            $this->aDimUser = null;
            $this->aDimPlaces = null;
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
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = FactSnsdataQuery::create()
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
            $con = Propel::getConnection(FactSnsdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                FactSnsdataPeer::addInstanceToPool($this);
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

            if ($this->aDimComments !== null) {
                if ($this->aDimComments->isModified() || $this->aDimComments->isNew()) {
                    $affectedRows += $this->aDimComments->save($con);
                }
                $this->setDimComments($this->aDimComments);
            }

            if ($this->aDimPeriod !== null) {
                if ($this->aDimPeriod->isModified() || $this->aDimPeriod->isNew()) {
                    $affectedRows += $this->aDimPeriod->save($con);
                }
                $this->setDimPeriod($this->aDimPeriod);
            }

            if ($this->aDimUser !== null) {
                if ($this->aDimUser->isModified() || $this->aDimUser->isNew()) {
                    $affectedRows += $this->aDimUser->save($con);
                }
                $this->setDimUser($this->aDimUser);
            }

            if ($this->aDimPlaces !== null) {
                if ($this->aDimPlaces->isModified() || $this->aDimPlaces->isNew()) {
                    $affectedRows += $this->aDimPlaces->save($con);
                }
                $this->setDimPlaces($this->aDimPlaces);
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

        $this->modifiedColumns[] = FactSnsdataPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . FactSnsdataPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(FactSnsdataPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(FactSnsdataPeer::ROW_ID)) {
            $modifiedColumns[':p' . $index++]  = '`row_id`';
        }
        if ($this->isColumnModified(FactSnsdataPeer::COMMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`comment_id`';
        }
        if ($this->isColumnModified(FactSnsdataPeer::DATE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`date_id`';
        }
        if ($this->isColumnModified(FactSnsdataPeer::PLACES_ROW_ID)) {
            $modifiedColumns[':p' . $index++]  = '`places_row_id`';
        }
        if ($this->isColumnModified(FactSnsdataPeer::SENTIMENT)) {
            $modifiedColumns[':p' . $index++]  = '`sentiment`';
        }
        if ($this->isColumnModified(FactSnsdataPeer::RATING)) {
            $modifiedColumns[':p' . $index++]  = '`rating`';
        }

        $sql = sprintf(
            'INSERT INTO `FACT_SNSDATA` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`row_id`':
                        $stmt->bindValue($identifier, $this->row_id, PDO::PARAM_INT);
                        break;
                    case '`comment_id`':
                        $stmt->bindValue($identifier, $this->comment_id, PDO::PARAM_INT);
                        break;
                    case '`date_id`':
                        $stmt->bindValue($identifier, $this->date_id, PDO::PARAM_INT);
                        break;
                    case '`places_row_id`':
                        $stmt->bindValue($identifier, $this->places_row_id, PDO::PARAM_INT);
                        break;
                    case '`sentiment`':
                        $stmt->bindValue($identifier, $this->sentiment, PDO::PARAM_STR);
                        break;
                    case '`rating`':
                        $stmt->bindValue($identifier, $this->rating, PDO::PARAM_INT);
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

            if ($this->aDimComments !== null) {
                if (!$this->aDimComments->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDimComments->getValidationFailures());
                }
            }

            if ($this->aDimPeriod !== null) {
                if (!$this->aDimPeriod->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDimPeriod->getValidationFailures());
                }
            }

            if ($this->aDimUser !== null) {
                if (!$this->aDimUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDimUser->getValidationFailures());
                }
            }

            if ($this->aDimPlaces !== null) {
                if (!$this->aDimPlaces->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aDimPlaces->getValidationFailures());
                }
            }


            if (($retval = FactSnsdataPeer::doValidate($this, $columns)) !== true) {
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
        $pos = FactSnsdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUserId();
                break;
            case 2:
                return $this->getCommentId();
                break;
            case 3:
                return $this->getDateId();
                break;
            case 4:
                return $this->getPlacesRowId();
                break;
            case 5:
                return $this->getSentiment();
                break;
            case 6:
                return $this->getRating();
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
        if (isset($alreadyDumpedObjects['FactSnsdata'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['FactSnsdata'][$this->getPrimaryKey()] = true;
        $keys = FactSnsdataPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUserId(),
            $keys[2] => $this->getCommentId(),
            $keys[3] => $this->getDateId(),
            $keys[4] => $this->getPlacesRowId(),
            $keys[5] => $this->getSentiment(),
            $keys[6] => $this->getRating(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aDimComments) {
                $result['DimComments'] = $this->aDimComments->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDimPeriod) {
                $result['DimPeriod'] = $this->aDimPeriod->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDimUser) {
                $result['DimUser'] = $this->aDimUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aDimPlaces) {
                $result['DimPlaces'] = $this->aDimPlaces->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = FactSnsdataPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUserId($value);
                break;
            case 2:
                $this->setCommentId($value);
                break;
            case 3:
                $this->setDateId($value);
                break;
            case 4:
                $this->setPlacesRowId($value);
                break;
            case 5:
                $this->setSentiment($value);
                break;
            case 6:
                $this->setRating($value);
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
        $keys = FactSnsdataPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCommentId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPlacesRowId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSentiment($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRating($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(FactSnsdataPeer::DATABASE_NAME);

        if ($this->isColumnModified(FactSnsdataPeer::ID)) $criteria->add(FactSnsdataPeer::ID, $this->id);
        if ($this->isColumnModified(FactSnsdataPeer::ROW_ID)) $criteria->add(FactSnsdataPeer::ROW_ID, $this->row_id);
        if ($this->isColumnModified(FactSnsdataPeer::COMMENT_ID)) $criteria->add(FactSnsdataPeer::COMMENT_ID, $this->comment_id);
        if ($this->isColumnModified(FactSnsdataPeer::DATE_ID)) $criteria->add(FactSnsdataPeer::DATE_ID, $this->date_id);
        if ($this->isColumnModified(FactSnsdataPeer::PLACES_ROW_ID)) $criteria->add(FactSnsdataPeer::PLACES_ROW_ID, $this->places_row_id);
        if ($this->isColumnModified(FactSnsdataPeer::SENTIMENT)) $criteria->add(FactSnsdataPeer::SENTIMENT, $this->sentiment);
        if ($this->isColumnModified(FactSnsdataPeer::RATING)) $criteria->add(FactSnsdataPeer::RATING, $this->rating);

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
        $criteria = new Criteria(FactSnsdataPeer::DATABASE_NAME);
        $criteria->add(FactSnsdataPeer::ID, $this->id);

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
     * @param object $copyObj An object of FactSnsdata (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserId($this->getUserId());
        $copyObj->setCommentId($this->getCommentId());
        $copyObj->setDateId($this->getDateId());
        $copyObj->setPlacesRowId($this->getPlacesRowId());
        $copyObj->setSentiment($this->getSentiment());
        $copyObj->setRating($this->getRating());

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
     * @return FactSnsdata Clone of current object.
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
     * @return FactSnsdataPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new FactSnsdataPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a DimComments object.
     *
     * @param                  DimComments $v
     * @return FactSnsdata The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDimComments(DimComments $v = null)
    {
        if ($v === null) {
            $this->setCommentId(NULL);
        } else {
            $this->setCommentId($v->getCommentId());
        }

        $this->aDimComments = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the DimComments object, it will not be re-added.
        if ($v !== null) {
            $v->addFactSnsdata($this);
        }


        return $this;
    }


    /**
     * Get the associated DimComments object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return DimComments The associated DimComments object.
     * @throws PropelException
     */
    public function getDimComments(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDimComments === null && ($this->comment_id !== null) && $doQuery) {
            $this->aDimComments = DimCommentsQuery::create()->findPk($this->comment_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDimComments->addFactSnsdatas($this);
             */
        }

        return $this->aDimComments;
    }

    /**
     * Declares an association between this object and a DimPeriod object.
     *
     * @param                  DimPeriod $v
     * @return FactSnsdata The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDimPeriod(DimPeriod $v = null)
    {
        if ($v === null) {
            $this->setDateId(NULL);
        } else {
            $this->setDateId($v->getDateId());
        }

        $this->aDimPeriod = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the DimPeriod object, it will not be re-added.
        if ($v !== null) {
            $v->addFactSnsdata($this);
        }


        return $this;
    }


    /**
     * Get the associated DimPeriod object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return DimPeriod The associated DimPeriod object.
     * @throws PropelException
     */
    public function getDimPeriod(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDimPeriod === null && ($this->date_id !== null) && $doQuery) {
            $this->aDimPeriod = DimPeriodQuery::create()->findPk($this->date_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDimPeriod->addFactSnsdatas($this);
             */
        }

        return $this->aDimPeriod;
    }

    /**
     * Declares an association between this object and a DimUser object.
     *
     * @param                  DimUser $v
     * @return FactSnsdata The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDimUser(DimUser $v = null)
    {
        if ($v === null) {
            $this->setUserId(NULL);
        } else {
            $this->setUserId($v->getRowId());
        }

        $this->aDimUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the DimUser object, it will not be re-added.
        if ($v !== null) {
            $v->addFactSnsdata($this);
        }


        return $this;
    }


    /**
     * Get the associated DimUser object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return DimUser The associated DimUser object.
     * @throws PropelException
     */
    public function getDimUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDimUser === null && ($this->row_id !== null) && $doQuery) {
            $this->aDimUser = DimUserQuery::create()
                ->filterByFactSnsdata($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDimUser->addFactSnsdatas($this);
             */
        }

        return $this->aDimUser;
    }

    /**
     * Declares an association between this object and a DimPlaces object.
     *
     * @param                  DimPlaces $v
     * @return FactSnsdata The current object (for fluent API support)
     * @throws PropelException
     */
    public function setDimPlaces(DimPlaces $v = null)
    {
        if ($v === null) {
            $this->setPlacesRowId(NULL);
        } else {
            $this->setPlacesRowId($v->getRowId());
        }

        $this->aDimPlaces = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the DimPlaces object, it will not be re-added.
        if ($v !== null) {
            $v->addFactSnsdata($this);
        }


        return $this;
    }


    /**
     * Get the associated DimPlaces object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return DimPlaces The associated DimPlaces object.
     * @throws PropelException
     */
    public function getDimPlaces(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aDimPlaces === null && ($this->places_row_id !== null) && $doQuery) {
            $this->aDimPlaces = DimPlacesQuery::create()
                ->filterByFactSnsdata($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aDimPlaces->addFactSnsdatas($this);
             */
        }

        return $this->aDimPlaces;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->row_id = null;
        $this->comment_id = null;
        $this->date_id = null;
        $this->places_row_id = null;
        $this->sentiment = null;
        $this->rating = null;
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
            if ($this->aDimComments instanceof Persistent) {
              $this->aDimComments->clearAllReferences($deep);
            }
            if ($this->aDimPeriod instanceof Persistent) {
              $this->aDimPeriod->clearAllReferences($deep);
            }
            if ($this->aDimUser instanceof Persistent) {
              $this->aDimUser->clearAllReferences($deep);
            }
            if ($this->aDimPlaces instanceof Persistent) {
              $this->aDimPlaces->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aDimComments = null;
        $this->aDimPeriod = null;
        $this->aDimUser = null;
        $this->aDimPlaces = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(FactSnsdataPeer::DEFAULT_STRING_FORMAT);
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
