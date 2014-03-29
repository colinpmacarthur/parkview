<?php


/**
 * Base class that represents a row from the 'dim_userinfo' table.
 *
 *
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseDimUserinfo extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DimUserinfoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DimUserinfoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the yuserid field.
     * @var        string
     */
    protected $yuserid;

    /**
     * The value for the avatar field.
     * @var        string
     */
    protected $avatar;

    /**
     * The value for the username field.
     * @var        string
     */
    protected $username;

    /**
     * The value for the badge field.
     * @var        string
     */
    protected $badge;

    /**
     * The value for the friendcount field.
     * @var        int
     */
    protected $friendcount;

    /**
     * The value for the reviewcomment field.
     * @var        string
     */
    protected $reviewcomment;

    /**
     * The value for the reviewcount field.
     * @var        int
     */
    protected $reviewcount;

    /**
     * The value for the ucomment field.
     * @var        int
     */
    protected $ucomment;

    /**
     * The value for the fcomment field.
     * @var        int
     */
    protected $fcomment;

    /**
     * The value for the ccomment field.
     * @var        int
     */
    protected $ccomment;

    /**
     * The value for the userid field.
     * @var        int
     */
    protected $userid;

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
     * Get the [yuserid] column value.
     *
     * @return string
     */
    public function getYuserid()
    {

        return $this->yuserid;
    }

    /**
     * Get the [avatar] column value.
     *
     * @return string
     */
    public function getAvatar()
    {

        return $this->avatar;
    }

    /**
     * Get the [username] column value.
     *
     * @return string
     */
    public function getUsername()
    {

        return $this->username;
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
     * Get the [friendcount] column value.
     *
     * @return int
     */
    public function getFriendcount()
    {

        return $this->friendcount;
    }

    /**
     * Get the [reviewcomment] column value.
     *
     * @return string
     */
    public function getReviewcomment()
    {

        return $this->reviewcomment;
    }

    /**
     * Get the [reviewcount] column value.
     *
     * @return int
     */
    public function getReviewcount()
    {

        return $this->reviewcount;
    }

    /**
     * Get the [ucomment] column value.
     *
     * @return int
     */
    public function getUcomment()
    {

        return $this->ucomment;
    }

    /**
     * Get the [fcomment] column value.
     *
     * @return int
     */
    public function getFcomment()
    {

        return $this->fcomment;
    }

    /**
     * Get the [ccomment] column value.
     *
     * @return int
     */
    public function getCcomment()
    {

        return $this->ccomment;
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
     * Set the value of [yuserid] column.
     *
     * @param  string $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setYuserid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->yuserid !== $v) {
            $this->yuserid = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::YUSERID;
        }


        return $this;
    } // setYuserid()

    /**
     * Set the value of [avatar] column.
     *
     * @param  string $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setAvatar($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->avatar !== $v) {
            $this->avatar = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::AVATAR;
        }


        return $this;
    } // setAvatar()

    /**
     * Set the value of [username] column.
     *
     * @param  string $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setUsername($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->username !== $v) {
            $this->username = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::USERNAME;
        }


        return $this;
    } // setUsername()

    /**
     * Set the value of [badge] column.
     *
     * @param  string $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setBadge($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->badge !== $v) {
            $this->badge = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::BADGE;
        }


        return $this;
    } // setBadge()

    /**
     * Set the value of [friendcount] column.
     *
     * @param  int $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setFriendcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->friendcount !== $v) {
            $this->friendcount = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::FRIENDCOUNT;
        }


        return $this;
    } // setFriendcount()

    /**
     * Set the value of [reviewcomment] column.
     *
     * @param  string $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setReviewcomment($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->reviewcomment !== $v) {
            $this->reviewcomment = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::REVIEWCOMMENT;
        }


        return $this;
    } // setReviewcomment()

    /**
     * Set the value of [reviewcount] column.
     *
     * @param  int $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setReviewcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reviewcount !== $v) {
            $this->reviewcount = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::REVIEWCOUNT;
        }


        return $this;
    } // setReviewcount()

    /**
     * Set the value of [ucomment] column.
     *
     * @param  int $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setUcomment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ucomment !== $v) {
            $this->ucomment = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::UCOMMENT;
        }


        return $this;
    } // setUcomment()

    /**
     * Set the value of [fcomment] column.
     *
     * @param  int $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setFcomment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fcomment !== $v) {
            $this->fcomment = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::FCOMMENT;
        }


        return $this;
    } // setFcomment()

    /**
     * Set the value of [ccomment] column.
     *
     * @param  int $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setCcomment($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ccomment !== $v) {
            $this->ccomment = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::CCOMMENT;
        }


        return $this;
    } // setCcomment()

    /**
     * Set the value of [userid] column.
     *
     * @param  int $v new value
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setUserid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->userid !== $v) {
            $this->userid = $v;
            $this->modifiedColumns[] = DimUserinfoPeer::USERID;
        }


        return $this;
    } // setUserid()

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

            $this->yuserid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->avatar = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->username = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->badge = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->friendcount = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->reviewcomment = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->reviewcount = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->ucomment = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->fcomment = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->ccomment = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->userid = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = DimUserinfoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating DimUserinfo object", $e);
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
            $con = Propel::getConnection(DimUserinfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DimUserinfoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(DimUserinfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DimUserinfoQuery::create()
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
            $con = Propel::getConnection(DimUserinfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DimUserinfoPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(DimUserinfoPeer::YUSERID)) {
            $modifiedColumns[':p' . $index++]  = '`yuserid`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::AVATAR)) {
            $modifiedColumns[':p' . $index++]  = '`avatar`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::USERNAME)) {
            $modifiedColumns[':p' . $index++]  = '`username`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::BADGE)) {
            $modifiedColumns[':p' . $index++]  = '`badge`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::FRIENDCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`friendcount`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::REVIEWCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`reviewComment`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::REVIEWCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`reviewCount`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::UCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`ucomment`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::FCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`fcomment`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::CCOMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`ccomment`';
        }
        if ($this->isColumnModified(DimUserinfoPeer::USERID)) {
            $modifiedColumns[':p' . $index++]  = '`userid`';
        }

        $sql = sprintf(
            'INSERT INTO `dim_userinfo` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`yuserid`':
                        $stmt->bindValue($identifier, $this->yuserid, PDO::PARAM_STR);
                        break;
                    case '`avatar`':
                        $stmt->bindValue($identifier, $this->avatar, PDO::PARAM_STR);
                        break;
                    case '`username`':
                        $stmt->bindValue($identifier, $this->username, PDO::PARAM_STR);
                        break;
                    case '`badge`':
                        $stmt->bindValue($identifier, $this->badge, PDO::PARAM_STR);
                        break;
                    case '`friendcount`':
                        $stmt->bindValue($identifier, $this->friendcount, PDO::PARAM_INT);
                        break;
                    case '`reviewComment`':
                        $stmt->bindValue($identifier, $this->reviewcomment, PDO::PARAM_STR);
                        break;
                    case '`reviewCount`':
                        $stmt->bindValue($identifier, $this->reviewcount, PDO::PARAM_INT);
                        break;
                    case '`ucomment`':
                        $stmt->bindValue($identifier, $this->ucomment, PDO::PARAM_INT);
                        break;
                    case '`fcomment`':
                        $stmt->bindValue($identifier, $this->fcomment, PDO::PARAM_INT);
                        break;
                    case '`ccomment`':
                        $stmt->bindValue($identifier, $this->ccomment, PDO::PARAM_INT);
                        break;
                    case '`userid`':
                        $stmt->bindValue($identifier, $this->userid, PDO::PARAM_INT);
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


            if (($retval = DimUserinfoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = DimUserinfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getYuserid();
                break;
            case 1:
                return $this->getAvatar();
                break;
            case 2:
                return $this->getUsername();
                break;
            case 3:
                return $this->getBadge();
                break;
            case 4:
                return $this->getFriendcount();
                break;
            case 5:
                return $this->getReviewcomment();
                break;
            case 6:
                return $this->getReviewcount();
                break;
            case 7:
                return $this->getUcomment();
                break;
            case 8:
                return $this->getFcomment();
                break;
            case 9:
                return $this->getCcomment();
                break;
            case 10:
                return $this->getUserid();
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
        if (isset($alreadyDumpedObjects['DimUserinfo'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['DimUserinfo'][$this->getPrimaryKey()] = true;
        $keys = DimUserinfoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getYuserid(),
            $keys[1] => $this->getAvatar(),
            $keys[2] => $this->getUsername(),
            $keys[3] => $this->getBadge(),
            $keys[4] => $this->getFriendcount(),
            $keys[5] => $this->getReviewcomment(),
            $keys[6] => $this->getReviewcount(),
            $keys[7] => $this->getUcomment(),
            $keys[8] => $this->getFcomment(),
            $keys[9] => $this->getCcomment(),
            $keys[10] => $this->getUserid(),
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
        $pos = DimUserinfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setYuserid($value);
                break;
            case 1:
                $this->setAvatar($value);
                break;
            case 2:
                $this->setUsername($value);
                break;
            case 3:
                $this->setBadge($value);
                break;
            case 4:
                $this->setFriendcount($value);
                break;
            case 5:
                $this->setReviewcomment($value);
                break;
            case 6:
                $this->setReviewcount($value);
                break;
            case 7:
                $this->setUcomment($value);
                break;
            case 8:
                $this->setFcomment($value);
                break;
            case 9:
                $this->setCcomment($value);
                break;
            case 10:
                $this->setUserid($value);
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
        $keys = DimUserinfoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setYuserid($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAvatar($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUsername($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setBadge($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFriendcount($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setReviewcomment($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setReviewcount($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUcomment($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFcomment($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCcomment($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUserid($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DimUserinfoPeer::DATABASE_NAME);

        if ($this->isColumnModified(DimUserinfoPeer::YUSERID)) $criteria->add(DimUserinfoPeer::YUSERID, $this->yuserid);
        if ($this->isColumnModified(DimUserinfoPeer::AVATAR)) $criteria->add(DimUserinfoPeer::AVATAR, $this->avatar);
        if ($this->isColumnModified(DimUserinfoPeer::USERNAME)) $criteria->add(DimUserinfoPeer::USERNAME, $this->username);
        if ($this->isColumnModified(DimUserinfoPeer::BADGE)) $criteria->add(DimUserinfoPeer::BADGE, $this->badge);
        if ($this->isColumnModified(DimUserinfoPeer::FRIENDCOUNT)) $criteria->add(DimUserinfoPeer::FRIENDCOUNT, $this->friendcount);
        if ($this->isColumnModified(DimUserinfoPeer::REVIEWCOMMENT)) $criteria->add(DimUserinfoPeer::REVIEWCOMMENT, $this->reviewcomment);
        if ($this->isColumnModified(DimUserinfoPeer::REVIEWCOUNT)) $criteria->add(DimUserinfoPeer::REVIEWCOUNT, $this->reviewcount);
        if ($this->isColumnModified(DimUserinfoPeer::UCOMMENT)) $criteria->add(DimUserinfoPeer::UCOMMENT, $this->ucomment);
        if ($this->isColumnModified(DimUserinfoPeer::FCOMMENT)) $criteria->add(DimUserinfoPeer::FCOMMENT, $this->fcomment);
        if ($this->isColumnModified(DimUserinfoPeer::CCOMMENT)) $criteria->add(DimUserinfoPeer::CCOMMENT, $this->ccomment);
        if ($this->isColumnModified(DimUserinfoPeer::USERID)) $criteria->add(DimUserinfoPeer::USERID, $this->userid);

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
        $criteria = new Criteria(DimUserinfoPeer::DATABASE_NAME);
        $criteria->add(DimUserinfoPeer::USERID, $this->userid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getUserid();
    }

    /**
     * Generic method to set the primary key (userid column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUserid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getUserid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of DimUserinfo (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setYuserid($this->getYuserid());
        $copyObj->setAvatar($this->getAvatar());
        $copyObj->setUsername($this->getUsername());
        $copyObj->setBadge($this->getBadge());
        $copyObj->setFriendcount($this->getFriendcount());
        $copyObj->setReviewcomment($this->getReviewcomment());
        $copyObj->setReviewcount($this->getReviewcount());
        $copyObj->setUcomment($this->getUcomment());
        $copyObj->setFcomment($this->getFcomment());
        $copyObj->setCcomment($this->getCcomment());

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
            $copyObj->setUserid(NULL); // this is a auto-increment column, so set to default value
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
     * @return DimUserinfo Clone of current object.
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
     * @return DimUserinfoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DimUserinfoPeer();
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
     * @return DimUserinfo The current object (for fluent API support)
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
     * If this DimUserinfo is new, it will return
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
                    ->filterByDimUserinfo($this)
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
     * @return DimUserinfo The current object (for fluent API support)
     */
    public function setFtSocialdatas(PropelCollection $ftSocialdatas, PropelPDO $con = null)
    {
        $ftSocialdatasToDelete = $this->getFtSocialdatas(new Criteria(), $con)->diff($ftSocialdatas);


        $this->ftSocialdatasScheduledForDeletion = $ftSocialdatasToDelete;

        foreach ($ftSocialdatasToDelete as $ftSocialdataRemoved) {
            $ftSocialdataRemoved->setDimUserinfo(null);
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
                ->filterByDimUserinfo($this)
                ->count($con);
        }

        return count($this->collFtSocialdatas);
    }

    /**
     * Method called to associate a FtSocialdata object to this object
     * through the FtSocialdata foreign key attribute.
     *
     * @param    FtSocialdata $l FtSocialdata
     * @return DimUserinfo The current object (for fluent API support)
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
        $ftSocialdata->setDimUserinfo($this);
    }

    /**
     * @param	FtSocialdata $ftSocialdata The ftSocialdata object to remove.
     * @return DimUserinfo The current object (for fluent API support)
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
            $ftSocialdata->setDimUserinfo(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DimUserinfo is new, it will return
     * an empty collection; or if this DimUserinfo has previously
     * been saved, it will retrieve related FtSocialdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimUserinfo.
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
     * Otherwise if this DimUserinfo is new, it will return
     * an empty collection; or if this DimUserinfo has previously
     * been saved, it will retrieve related FtSocialdatas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DimUserinfo.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|FtSocialdata[] List of FtSocialdata objects
     */
    public function getFtSocialdatasJoinDimTime($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = FtSocialdataQuery::create(null, $criteria);
        $query->joinWith('DimTime', $join_behavior);

        return $this->getFtSocialdatas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->yuserid = null;
        $this->avatar = null;
        $this->username = null;
        $this->badge = null;
        $this->friendcount = null;
        $this->reviewcomment = null;
        $this->reviewcount = null;
        $this->ucomment = null;
        $this->fcomment = null;
        $this->ccomment = null;
        $this->userid = null;
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
        return (string) $this->exportTo(DimUserinfoPeer::DEFAULT_STRING_FORMAT);
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
