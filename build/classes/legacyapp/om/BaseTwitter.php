<?php


/**
 * Base class that represents a row from the 'TWITTER' table.
 *
 *
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseTwitter extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TwitterPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TwitterPeer
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
     * The value for the name field.
     * @var        int
     */
    protected $name;

    /**
     * The value for the accountid field.
     * @var        string
     */
    protected $accountid;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the tweet field.
     * @var        string
     */
    protected $tweet;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the bumpass field.
     * @var        int
     */
    protected $bumpass;

    /**
     * The value for the manzanita field.
     * @var        int
     */
    protected $manzanita;

    /**
     * The value for the visitor field.
     * @var        int
     */
    protected $visitor;

    /**
     * The value for the sulphur field.
     * @var        int
     */
    protected $sulphur;

    /**
     * The value for the king field.
     * @var        int
     */
    protected $king;

    /**
     * The value for the southwest field.
     * @var        int
     */
    protected $southwest;

    /**
     * The value for the warner field.
     * @var        int
     */
    protected $warner;

    /**
     * The value for the summit field.
     * @var        int
     */
    protected $summit;

    /**
     * The value for the mount field.
     * @var        int
     */
    protected $mount;

    /**
     * The value for the fantastic field.
     * @var        int
     */
    protected $fantastic;

    /**
     * The value for the boiling field.
     * @var        int
     */
    protected $boiling;

    /**
     * The value for the devil field.
     * @var        int
     */
    protected $devil;

    /**
     * The value for the juniper field.
     * @var        int
     */
    protected $juniper;

    /**
     * The value for the terminal field.
     * @var        int
     */
    protected $terminal;

    /**
     * The value for the snag field.
     * @var        int
     */
    protected $snag;

    /**
     * The value for the cliff field.
     * @var        int
     */
    protected $cliff;

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
     * Get the [name] column value.
     *
     * @return int
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [accountid] column value.
     *
     * @return string
     */
    public function getAccountid()
    {

        return $this->accountid;
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
     * Get the [tweet] column value.
     *
     * @return string
     */
    public function getTweet()
    {

        return $this->tweet;
    }

    /**
     * Get the [url] column value.
     *
     * @return string
     */
    public function getUrl()
    {

        return $this->url;
    }

    /**
     * Get the [bumpass] column value.
     *
     * @return int
     */
    public function getBumpass()
    {

        return $this->bumpass;
    }

    /**
     * Get the [manzanita] column value.
     *
     * @return int
     */
    public function getManzanita()
    {

        return $this->manzanita;
    }

    /**
     * Get the [visitor] column value.
     *
     * @return int
     */
    public function getVisitor()
    {

        return $this->visitor;
    }

    /**
     * Get the [sulphur] column value.
     *
     * @return int
     */
    public function getSulphur()
    {

        return $this->sulphur;
    }

    /**
     * Get the [king] column value.
     *
     * @return int
     */
    public function getKing()
    {

        return $this->king;
    }

    /**
     * Get the [southwest] column value.
     *
     * @return int
     */
    public function getSouthwest()
    {

        return $this->southwest;
    }

    /**
     * Get the [warner] column value.
     *
     * @return int
     */
    public function getWarner()
    {

        return $this->warner;
    }

    /**
     * Get the [summit] column value.
     *
     * @return int
     */
    public function getSummit()
    {

        return $this->summit;
    }

    /**
     * Get the [mount] column value.
     *
     * @return int
     */
    public function getMount()
    {

        return $this->mount;
    }

    /**
     * Get the [fantastic] column value.
     *
     * @return int
     */
    public function getFantastic()
    {

        return $this->fantastic;
    }

    /**
     * Get the [boiling] column value.
     *
     * @return int
     */
    public function getBoiling()
    {

        return $this->boiling;
    }

    /**
     * Get the [devil] column value.
     *
     * @return int
     */
    public function getDevil()
    {

        return $this->devil;
    }

    /**
     * Get the [juniper] column value.
     *
     * @return int
     */
    public function getJuniper()
    {

        return $this->juniper;
    }

    /**
     * Get the [terminal] column value.
     *
     * @return int
     */
    public function getTerminal()
    {

        return $this->terminal;
    }

    /**
     * Get the [snag] column value.
     *
     * @return int
     */
    public function getSnag()
    {

        return $this->snag;
    }

    /**
     * Get the [cliff] column value.
     *
     * @return int
     */
    public function getCliff()
    {

        return $this->cliff;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = TwitterPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = TwitterPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [accountid] column.
     *
     * @param  string $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setAccountid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->accountid !== $v) {
            $this->accountid = $v;
            $this->modifiedColumns[] = TwitterPeer::ACCOUNTID;
        }


        return $this;
    } // setAccountid()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Twitter The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = TwitterPeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [tweet] column.
     *
     * @param  string $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setTweet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tweet !== $v) {
            $this->tweet = $v;
            $this->modifiedColumns[] = TwitterPeer::TWEET;
        }


        return $this;
    } // setTweet()

    /**
     * Set the value of [url] column.
     *
     * @param  string $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = TwitterPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [bumpass] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setBumpass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bumpass !== $v) {
            $this->bumpass = $v;
            $this->modifiedColumns[] = TwitterPeer::BUMPASS;
        }


        return $this;
    } // setBumpass()

    /**
     * Set the value of [manzanita] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setManzanita($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->manzanita !== $v) {
            $this->manzanita = $v;
            $this->modifiedColumns[] = TwitterPeer::MANZANITA;
        }


        return $this;
    } // setManzanita()

    /**
     * Set the value of [visitor] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setVisitor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->visitor !== $v) {
            $this->visitor = $v;
            $this->modifiedColumns[] = TwitterPeer::VISITOR;
        }


        return $this;
    } // setVisitor()

    /**
     * Set the value of [sulphur] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setSulphur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sulphur !== $v) {
            $this->sulphur = $v;
            $this->modifiedColumns[] = TwitterPeer::SULPHUR;
        }


        return $this;
    } // setSulphur()

    /**
     * Set the value of [king] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setKing($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->king !== $v) {
            $this->king = $v;
            $this->modifiedColumns[] = TwitterPeer::KING;
        }


        return $this;
    } // setKing()

    /**
     * Set the value of [southwest] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setSouthwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southwest !== $v) {
            $this->southwest = $v;
            $this->modifiedColumns[] = TwitterPeer::SOUTHWEST;
        }


        return $this;
    } // setSouthwest()

    /**
     * Set the value of [warner] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setWarner($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->warner !== $v) {
            $this->warner = $v;
            $this->modifiedColumns[] = TwitterPeer::WARNER;
        }


        return $this;
    } // setWarner()

    /**
     * Set the value of [summit] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setSummit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->summit !== $v) {
            $this->summit = $v;
            $this->modifiedColumns[] = TwitterPeer::SUMMIT;
        }


        return $this;
    } // setSummit()

    /**
     * Set the value of [mount] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setMount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mount !== $v) {
            $this->mount = $v;
            $this->modifiedColumns[] = TwitterPeer::MOUNT;
        }


        return $this;
    } // setMount()

    /**
     * Set the value of [fantastic] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setFantastic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fantastic !== $v) {
            $this->fantastic = $v;
            $this->modifiedColumns[] = TwitterPeer::FANTASTIC;
        }


        return $this;
    } // setFantastic()

    /**
     * Set the value of [boiling] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setBoiling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boiling !== $v) {
            $this->boiling = $v;
            $this->modifiedColumns[] = TwitterPeer::BOILING;
        }


        return $this;
    } // setBoiling()

    /**
     * Set the value of [devil] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setDevil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->devil !== $v) {
            $this->devil = $v;
            $this->modifiedColumns[] = TwitterPeer::DEVIL;
        }


        return $this;
    } // setDevil()

    /**
     * Set the value of [juniper] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setJuniper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->juniper !== $v) {
            $this->juniper = $v;
            $this->modifiedColumns[] = TwitterPeer::JUNIPER;
        }


        return $this;
    } // setJuniper()

    /**
     * Set the value of [terminal] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setTerminal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->terminal !== $v) {
            $this->terminal = $v;
            $this->modifiedColumns[] = TwitterPeer::TERMINAL;
        }


        return $this;
    } // setTerminal()

    /**
     * Set the value of [snag] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setSnag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->snag !== $v) {
            $this->snag = $v;
            $this->modifiedColumns[] = TwitterPeer::SNAG;
        }


        return $this;
    } // setSnag()

    /**
     * Set the value of [cliff] column.
     *
     * @param  int $v new value
     * @return Twitter The current object (for fluent API support)
     */
    public function setCliff($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cliff !== $v) {
            $this->cliff = $v;
            $this->modifiedColumns[] = TwitterPeer::CLIFF;
        }


        return $this;
    } // setCliff()

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
            $this->name = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->accountid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->tweet = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->url = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->bumpass = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->manzanita = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->visitor = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->sulphur = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->king = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->southwest = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->warner = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->summit = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->mount = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->fantastic = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->boiling = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->devil = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->juniper = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->terminal = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->snag = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->cliff = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = TwitterPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Twitter object", $e);
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
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TwitterPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TwitterQuery::create()
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
            $con = Propel::getConnection(TwitterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TwitterPeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TwitterPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(TwitterPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(TwitterPeer::ACCOUNTID)) {
            $modifiedColumns[':p' . $index++]  = '`accountID`';
        }
        if ($this->isColumnModified(TwitterPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(TwitterPeer::TWEET)) {
            $modifiedColumns[':p' . $index++]  = '`tweet`';
        }
        if ($this->isColumnModified(TwitterPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`url`';
        }
        if ($this->isColumnModified(TwitterPeer::BUMPASS)) {
            $modifiedColumns[':p' . $index++]  = '`bumpass`';
        }
        if ($this->isColumnModified(TwitterPeer::MANZANITA)) {
            $modifiedColumns[':p' . $index++]  = '`manzanita`';
        }
        if ($this->isColumnModified(TwitterPeer::VISITOR)) {
            $modifiedColumns[':p' . $index++]  = '`visitor`';
        }
        if ($this->isColumnModified(TwitterPeer::SULPHUR)) {
            $modifiedColumns[':p' . $index++]  = '`sulphur`';
        }
        if ($this->isColumnModified(TwitterPeer::KING)) {
            $modifiedColumns[':p' . $index++]  = '`king`';
        }
        if ($this->isColumnModified(TwitterPeer::SOUTHWEST)) {
            $modifiedColumns[':p' . $index++]  = '`southwest`';
        }
        if ($this->isColumnModified(TwitterPeer::WARNER)) {
            $modifiedColumns[':p' . $index++]  = '`warner`';
        }
        if ($this->isColumnModified(TwitterPeer::SUMMIT)) {
            $modifiedColumns[':p' . $index++]  = '`summit`';
        }
        if ($this->isColumnModified(TwitterPeer::MOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`mount`';
        }
        if ($this->isColumnModified(TwitterPeer::FANTASTIC)) {
            $modifiedColumns[':p' . $index++]  = '`fantastic`';
        }
        if ($this->isColumnModified(TwitterPeer::BOILING)) {
            $modifiedColumns[':p' . $index++]  = '`boiling`';
        }
        if ($this->isColumnModified(TwitterPeer::DEVIL)) {
            $modifiedColumns[':p' . $index++]  = '`devil`';
        }
        if ($this->isColumnModified(TwitterPeer::JUNIPER)) {
            $modifiedColumns[':p' . $index++]  = '`juniper`';
        }
        if ($this->isColumnModified(TwitterPeer::TERMINAL)) {
            $modifiedColumns[':p' . $index++]  = '`terminal`';
        }
        if ($this->isColumnModified(TwitterPeer::SNAG)) {
            $modifiedColumns[':p' . $index++]  = '`snag`';
        }
        if ($this->isColumnModified(TwitterPeer::CLIFF)) {
            $modifiedColumns[':p' . $index++]  = '`cliff`';
        }

        $sql = sprintf(
            'INSERT INTO `TWITTER` (%s) VALUES (%s)',
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
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_INT);
                        break;
                    case '`accountID`':
                        $stmt->bindValue($identifier, $this->accountid, PDO::PARAM_STR);
                        break;
                    case '`date`':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`tweet`':
                        $stmt->bindValue($identifier, $this->tweet, PDO::PARAM_STR);
                        break;
                    case '`url`':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`bumpass`':
                        $stmt->bindValue($identifier, $this->bumpass, PDO::PARAM_INT);
                        break;
                    case '`manzanita`':
                        $stmt->bindValue($identifier, $this->manzanita, PDO::PARAM_INT);
                        break;
                    case '`visitor`':
                        $stmt->bindValue($identifier, $this->visitor, PDO::PARAM_INT);
                        break;
                    case '`sulphur`':
                        $stmt->bindValue($identifier, $this->sulphur, PDO::PARAM_INT);
                        break;
                    case '`king`':
                        $stmt->bindValue($identifier, $this->king, PDO::PARAM_INT);
                        break;
                    case '`southwest`':
                        $stmt->bindValue($identifier, $this->southwest, PDO::PARAM_INT);
                        break;
                    case '`warner`':
                        $stmt->bindValue($identifier, $this->warner, PDO::PARAM_INT);
                        break;
                    case '`summit`':
                        $stmt->bindValue($identifier, $this->summit, PDO::PARAM_INT);
                        break;
                    case '`mount`':
                        $stmt->bindValue($identifier, $this->mount, PDO::PARAM_INT);
                        break;
                    case '`fantastic`':
                        $stmt->bindValue($identifier, $this->fantastic, PDO::PARAM_INT);
                        break;
                    case '`boiling`':
                        $stmt->bindValue($identifier, $this->boiling, PDO::PARAM_INT);
                        break;
                    case '`devil`':
                        $stmt->bindValue($identifier, $this->devil, PDO::PARAM_INT);
                        break;
                    case '`juniper`':
                        $stmt->bindValue($identifier, $this->juniper, PDO::PARAM_INT);
                        break;
                    case '`terminal`':
                        $stmt->bindValue($identifier, $this->terminal, PDO::PARAM_INT);
                        break;
                    case '`snag`':
                        $stmt->bindValue($identifier, $this->snag, PDO::PARAM_INT);
                        break;
                    case '`cliff`':
                        $stmt->bindValue($identifier, $this->cliff, PDO::PARAM_INT);
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


            if (($retval = TwitterPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TwitterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
                break;
            case 2:
                return $this->getAccountid();
                break;
            case 3:
                return $this->getDate();
                break;
            case 4:
                return $this->getTweet();
                break;
            case 5:
                return $this->getUrl();
                break;
            case 6:
                return $this->getBumpass();
                break;
            case 7:
                return $this->getManzanita();
                break;
            case 8:
                return $this->getVisitor();
                break;
            case 9:
                return $this->getSulphur();
                break;
            case 10:
                return $this->getKing();
                break;
            case 11:
                return $this->getSouthwest();
                break;
            case 12:
                return $this->getWarner();
                break;
            case 13:
                return $this->getSummit();
                break;
            case 14:
                return $this->getMount();
                break;
            case 15:
                return $this->getFantastic();
                break;
            case 16:
                return $this->getBoiling();
                break;
            case 17:
                return $this->getDevil();
                break;
            case 18:
                return $this->getJuniper();
                break;
            case 19:
                return $this->getTerminal();
                break;
            case 20:
                return $this->getSnag();
                break;
            case 21:
                return $this->getCliff();
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
        if (isset($alreadyDumpedObjects['Twitter'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Twitter'][$this->getPrimaryKey()] = true;
        $keys = TwitterPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getAccountid(),
            $keys[3] => $this->getDate(),
            $keys[4] => $this->getTweet(),
            $keys[5] => $this->getUrl(),
            $keys[6] => $this->getBumpass(),
            $keys[7] => $this->getManzanita(),
            $keys[8] => $this->getVisitor(),
            $keys[9] => $this->getSulphur(),
            $keys[10] => $this->getKing(),
            $keys[11] => $this->getSouthwest(),
            $keys[12] => $this->getWarner(),
            $keys[13] => $this->getSummit(),
            $keys[14] => $this->getMount(),
            $keys[15] => $this->getFantastic(),
            $keys[16] => $this->getBoiling(),
            $keys[17] => $this->getDevil(),
            $keys[18] => $this->getJuniper(),
            $keys[19] => $this->getTerminal(),
            $keys[20] => $this->getSnag(),
            $keys[21] => $this->getCliff(),
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
        $pos = TwitterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
                break;
            case 2:
                $this->setAccountid($value);
                break;
            case 3:
                $this->setDate($value);
                break;
            case 4:
                $this->setTweet($value);
                break;
            case 5:
                $this->setUrl($value);
                break;
            case 6:
                $this->setBumpass($value);
                break;
            case 7:
                $this->setManzanita($value);
                break;
            case 8:
                $this->setVisitor($value);
                break;
            case 9:
                $this->setSulphur($value);
                break;
            case 10:
                $this->setKing($value);
                break;
            case 11:
                $this->setSouthwest($value);
                break;
            case 12:
                $this->setWarner($value);
                break;
            case 13:
                $this->setSummit($value);
                break;
            case 14:
                $this->setMount($value);
                break;
            case 15:
                $this->setFantastic($value);
                break;
            case 16:
                $this->setBoiling($value);
                break;
            case 17:
                $this->setDevil($value);
                break;
            case 18:
                $this->setJuniper($value);
                break;
            case 19:
                $this->setTerminal($value);
                break;
            case 20:
                $this->setSnag($value);
                break;
            case 21:
                $this->setCliff($value);
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
        $keys = TwitterPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAccountid($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDate($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTweet($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUrl($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setBumpass($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setManzanita($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVisitor($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSulphur($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setKing($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSouthwest($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setWarner($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSummit($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMount($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFantastic($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setBoiling($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDevil($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setJuniper($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTerminal($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSnag($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setCliff($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TwitterPeer::DATABASE_NAME);

        if ($this->isColumnModified(TwitterPeer::ID)) $criteria->add(TwitterPeer::ID, $this->id);
        if ($this->isColumnModified(TwitterPeer::NAME)) $criteria->add(TwitterPeer::NAME, $this->name);
        if ($this->isColumnModified(TwitterPeer::ACCOUNTID)) $criteria->add(TwitterPeer::ACCOUNTID, $this->accountid);
        if ($this->isColumnModified(TwitterPeer::DATE)) $criteria->add(TwitterPeer::DATE, $this->date);
        if ($this->isColumnModified(TwitterPeer::TWEET)) $criteria->add(TwitterPeer::TWEET, $this->tweet);
        if ($this->isColumnModified(TwitterPeer::URL)) $criteria->add(TwitterPeer::URL, $this->url);
        if ($this->isColumnModified(TwitterPeer::BUMPASS)) $criteria->add(TwitterPeer::BUMPASS, $this->bumpass);
        if ($this->isColumnModified(TwitterPeer::MANZANITA)) $criteria->add(TwitterPeer::MANZANITA, $this->manzanita);
        if ($this->isColumnModified(TwitterPeer::VISITOR)) $criteria->add(TwitterPeer::VISITOR, $this->visitor);
        if ($this->isColumnModified(TwitterPeer::SULPHUR)) $criteria->add(TwitterPeer::SULPHUR, $this->sulphur);
        if ($this->isColumnModified(TwitterPeer::KING)) $criteria->add(TwitterPeer::KING, $this->king);
        if ($this->isColumnModified(TwitterPeer::SOUTHWEST)) $criteria->add(TwitterPeer::SOUTHWEST, $this->southwest);
        if ($this->isColumnModified(TwitterPeer::WARNER)) $criteria->add(TwitterPeer::WARNER, $this->warner);
        if ($this->isColumnModified(TwitterPeer::SUMMIT)) $criteria->add(TwitterPeer::SUMMIT, $this->summit);
        if ($this->isColumnModified(TwitterPeer::MOUNT)) $criteria->add(TwitterPeer::MOUNT, $this->mount);
        if ($this->isColumnModified(TwitterPeer::FANTASTIC)) $criteria->add(TwitterPeer::FANTASTIC, $this->fantastic);
        if ($this->isColumnModified(TwitterPeer::BOILING)) $criteria->add(TwitterPeer::BOILING, $this->boiling);
        if ($this->isColumnModified(TwitterPeer::DEVIL)) $criteria->add(TwitterPeer::DEVIL, $this->devil);
        if ($this->isColumnModified(TwitterPeer::JUNIPER)) $criteria->add(TwitterPeer::JUNIPER, $this->juniper);
        if ($this->isColumnModified(TwitterPeer::TERMINAL)) $criteria->add(TwitterPeer::TERMINAL, $this->terminal);
        if ($this->isColumnModified(TwitterPeer::SNAG)) $criteria->add(TwitterPeer::SNAG, $this->snag);
        if ($this->isColumnModified(TwitterPeer::CLIFF)) $criteria->add(TwitterPeer::CLIFF, $this->cliff);

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
        $criteria = new Criteria(TwitterPeer::DATABASE_NAME);
        $criteria->add(TwitterPeer::ID, $this->id);

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
     * @param object $copyObj An object of Twitter (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setAccountid($this->getAccountid());
        $copyObj->setDate($this->getDate());
        $copyObj->setTweet($this->getTweet());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setBumpass($this->getBumpass());
        $copyObj->setManzanita($this->getManzanita());
        $copyObj->setVisitor($this->getVisitor());
        $copyObj->setSulphur($this->getSulphur());
        $copyObj->setKing($this->getKing());
        $copyObj->setSouthwest($this->getSouthwest());
        $copyObj->setWarner($this->getWarner());
        $copyObj->setSummit($this->getSummit());
        $copyObj->setMount($this->getMount());
        $copyObj->setFantastic($this->getFantastic());
        $copyObj->setBoiling($this->getBoiling());
        $copyObj->setDevil($this->getDevil());
        $copyObj->setJuniper($this->getJuniper());
        $copyObj->setTerminal($this->getTerminal());
        $copyObj->setSnag($this->getSnag());
        $copyObj->setCliff($this->getCliff());
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
     * @return Twitter Clone of current object.
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
     * @return TwitterPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TwitterPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->accountid = null;
        $this->date = null;
        $this->tweet = null;
        $this->url = null;
        $this->bumpass = null;
        $this->manzanita = null;
        $this->visitor = null;
        $this->sulphur = null;
        $this->king = null;
        $this->southwest = null;
        $this->warner = null;
        $this->summit = null;
        $this->mount = null;
        $this->fantastic = null;
        $this->boiling = null;
        $this->devil = null;
        $this->juniper = null;
        $this->terminal = null;
        $this->snag = null;
        $this->cliff = null;
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
        return (string) $this->exportTo(TwitterPeer::DEFAULT_STRING_FORMAT);
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
