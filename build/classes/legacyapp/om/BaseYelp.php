<?php


/**
 * Base class that represents a row from the 'YELP' table.
 *
 *
 *
 * @package    propel.generator.legacyapp.om
 */
abstract class BaseYelp extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'YelpPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        YelpPeer
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
     * The value for the pageurl field.
     * @var        string
     */
    protected $pageurl;

    /**
     * The value for the username field.
     * @var        string
     */
    protected $username;

    /**
     * The value for the address field.
     * @var        string
     */
    protected $address;

    /**
     * The value for the rating field.
     * @var        int
     */
    protected $rating;

    /**
     * The value for the friendscount field.
     * @var        int
     */
    protected $friendscount;

    /**
     * The value for the reviewcount field.
     * @var        int
     */
    protected $reviewcount;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the comment field.
     * @var        string
     */
    protected $comment;

    /**
     * The value for the useful field.
     * @var        int
     */
    protected $useful;

    /**
     * The value for the funny field.
     * @var        int
     */
    protected $funny;

    /**
     * The value for the cool field.
     * @var        int
     */
    protected $cool;

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
     * Get the [pageurl] column value.
     *
     * @return string
     */
    public function getPageurl()
    {

        return $this->pageurl;
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
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {

        return $this->address;
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
     * Get the [friendscount] column value.
     *
     * @return int
     */
    public function getFriendscount()
    {

        return $this->friendscount;
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
     * Get the [comment] column value.
     *
     * @return string
     */
    public function getComment()
    {

        return $this->comment;
    }

    /**
     * Get the [useful] column value.
     *
     * @return int
     */
    public function getUseful()
    {

        return $this->useful;
    }

    /**
     * Get the [funny] column value.
     *
     * @return int
     */
    public function getFunny()
    {

        return $this->funny;
    }

    /**
     * Get the [cool] column value.
     *
     * @return int
     */
    public function getCool()
    {

        return $this->cool;
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
     * @return Yelp The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = YelpPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [pageurl] column.
     *
     * @param  string $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setPageurl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pageurl !== $v) {
            $this->pageurl = $v;
            $this->modifiedColumns[] = YelpPeer::PAGEURL;
        }


        return $this;
    } // setPageurl()

    /**
     * Set the value of [username] column.
     *
     * @param  string $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setUsername($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->username !== $v) {
            $this->username = $v;
            $this->modifiedColumns[] = YelpPeer::USERNAME;
        }


        return $this;
    } // setUsername()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = YelpPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [rating] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setRating($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rating !== $v) {
            $this->rating = $v;
            $this->modifiedColumns[] = YelpPeer::RATING;
        }


        return $this;
    } // setRating()

    /**
     * Set the value of [friendscount] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setFriendscount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->friendscount !== $v) {
            $this->friendscount = $v;
            $this->modifiedColumns[] = YelpPeer::FRIENDSCOUNT;
        }


        return $this;
    } // setFriendscount()

    /**
     * Set the value of [reviewcount] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setReviewcount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reviewcount !== $v) {
            $this->reviewcount = $v;
            $this->modifiedColumns[] = YelpPeer::REVIEWCOUNT;
        }


        return $this;
    } // setReviewcount()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Yelp The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = YelpPeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [comment] column.
     *
     * @param  string $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setComment($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment !== $v) {
            $this->comment = $v;
            $this->modifiedColumns[] = YelpPeer::COMMENT;
        }


        return $this;
    } // setComment()

    /**
     * Set the value of [useful] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setUseful($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->useful !== $v) {
            $this->useful = $v;
            $this->modifiedColumns[] = YelpPeer::USEFUL;
        }


        return $this;
    } // setUseful()

    /**
     * Set the value of [funny] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setFunny($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->funny !== $v) {
            $this->funny = $v;
            $this->modifiedColumns[] = YelpPeer::FUNNY;
        }


        return $this;
    } // setFunny()

    /**
     * Set the value of [cool] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setCool($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cool !== $v) {
            $this->cool = $v;
            $this->modifiedColumns[] = YelpPeer::COOL;
        }


        return $this;
    } // setCool()

    /**
     * Set the value of [bumpass] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setBumpass($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bumpass !== $v) {
            $this->bumpass = $v;
            $this->modifiedColumns[] = YelpPeer::BUMPASS;
        }


        return $this;
    } // setBumpass()

    /**
     * Set the value of [manzanita] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setManzanita($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->manzanita !== $v) {
            $this->manzanita = $v;
            $this->modifiedColumns[] = YelpPeer::MANZANITA;
        }


        return $this;
    } // setManzanita()

    /**
     * Set the value of [visitor] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setVisitor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->visitor !== $v) {
            $this->visitor = $v;
            $this->modifiedColumns[] = YelpPeer::VISITOR;
        }


        return $this;
    } // setVisitor()

    /**
     * Set the value of [sulphur] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setSulphur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sulphur !== $v) {
            $this->sulphur = $v;
            $this->modifiedColumns[] = YelpPeer::SULPHUR;
        }


        return $this;
    } // setSulphur()

    /**
     * Set the value of [king] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setKing($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->king !== $v) {
            $this->king = $v;
            $this->modifiedColumns[] = YelpPeer::KING;
        }


        return $this;
    } // setKing()

    /**
     * Set the value of [southwest] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setSouthwest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->southwest !== $v) {
            $this->southwest = $v;
            $this->modifiedColumns[] = YelpPeer::SOUTHWEST;
        }


        return $this;
    } // setSouthwest()

    /**
     * Set the value of [warner] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setWarner($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->warner !== $v) {
            $this->warner = $v;
            $this->modifiedColumns[] = YelpPeer::WARNER;
        }


        return $this;
    } // setWarner()

    /**
     * Set the value of [summit] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setSummit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->summit !== $v) {
            $this->summit = $v;
            $this->modifiedColumns[] = YelpPeer::SUMMIT;
        }


        return $this;
    } // setSummit()

    /**
     * Set the value of [mount] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setMount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mount !== $v) {
            $this->mount = $v;
            $this->modifiedColumns[] = YelpPeer::MOUNT;
        }


        return $this;
    } // setMount()

    /**
     * Set the value of [fantastic] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setFantastic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fantastic !== $v) {
            $this->fantastic = $v;
            $this->modifiedColumns[] = YelpPeer::FANTASTIC;
        }


        return $this;
    } // setFantastic()

    /**
     * Set the value of [boiling] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setBoiling($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boiling !== $v) {
            $this->boiling = $v;
            $this->modifiedColumns[] = YelpPeer::BOILING;
        }


        return $this;
    } // setBoiling()

    /**
     * Set the value of [devil] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setDevil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->devil !== $v) {
            $this->devil = $v;
            $this->modifiedColumns[] = YelpPeer::DEVIL;
        }


        return $this;
    } // setDevil()

    /**
     * Set the value of [juniper] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setJuniper($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->juniper !== $v) {
            $this->juniper = $v;
            $this->modifiedColumns[] = YelpPeer::JUNIPER;
        }


        return $this;
    } // setJuniper()

    /**
     * Set the value of [terminal] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setTerminal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->terminal !== $v) {
            $this->terminal = $v;
            $this->modifiedColumns[] = YelpPeer::TERMINAL;
        }


        return $this;
    } // setTerminal()

    /**
     * Set the value of [snag] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setSnag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->snag !== $v) {
            $this->snag = $v;
            $this->modifiedColumns[] = YelpPeer::SNAG;
        }


        return $this;
    } // setSnag()

    /**
     * Set the value of [cliff] column.
     *
     * @param  int $v new value
     * @return Yelp The current object (for fluent API support)
     */
    public function setCliff($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cliff !== $v) {
            $this->cliff = $v;
            $this->modifiedColumns[] = YelpPeer::CLIFF;
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
            $this->pageurl = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->username = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->address = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->rating = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->friendscount = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->reviewcount = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->date = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->comment = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->useful = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->funny = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->cool = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->bumpass = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->manzanita = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->visitor = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->sulphur = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->king = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->southwest = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->warner = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->summit = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->mount = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->fantastic = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->boiling = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->devil = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->juniper = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->terminal = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->snag = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->cliff = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 28; // 28 = YelpPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Yelp object", $e);
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
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = YelpPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = YelpQuery::create()
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
            $con = Propel::getConnection(YelpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                YelpPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(YelpPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(YelpPeer::PAGEURL)) {
            $modifiedColumns[':p' . $index++]  = '`pageURL`';
        }
        if ($this->isColumnModified(YelpPeer::USERNAME)) {
            $modifiedColumns[':p' . $index++]  = '`userName`';
        }
        if ($this->isColumnModified(YelpPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = '`address`';
        }
        if ($this->isColumnModified(YelpPeer::RATING)) {
            $modifiedColumns[':p' . $index++]  = '`rating`';
        }
        if ($this->isColumnModified(YelpPeer::FRIENDSCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`friendsCount`';
        }
        if ($this->isColumnModified(YelpPeer::REVIEWCOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`reviewCount`';
        }
        if ($this->isColumnModified(YelpPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(YelpPeer::COMMENT)) {
            $modifiedColumns[':p' . $index++]  = '`comment`';
        }
        if ($this->isColumnModified(YelpPeer::USEFUL)) {
            $modifiedColumns[':p' . $index++]  = '`useful`';
        }
        if ($this->isColumnModified(YelpPeer::FUNNY)) {
            $modifiedColumns[':p' . $index++]  = '`funny`';
        }
        if ($this->isColumnModified(YelpPeer::COOL)) {
            $modifiedColumns[':p' . $index++]  = '`cool`';
        }
        if ($this->isColumnModified(YelpPeer::BUMPASS)) {
            $modifiedColumns[':p' . $index++]  = '`bumpass`';
        }
        if ($this->isColumnModified(YelpPeer::MANZANITA)) {
            $modifiedColumns[':p' . $index++]  = '`manzanita`';
        }
        if ($this->isColumnModified(YelpPeer::VISITOR)) {
            $modifiedColumns[':p' . $index++]  = '`visitor`';
        }
        if ($this->isColumnModified(YelpPeer::SULPHUR)) {
            $modifiedColumns[':p' . $index++]  = '`sulphur`';
        }
        if ($this->isColumnModified(YelpPeer::KING)) {
            $modifiedColumns[':p' . $index++]  = '`king`';
        }
        if ($this->isColumnModified(YelpPeer::SOUTHWEST)) {
            $modifiedColumns[':p' . $index++]  = '`southwest`';
        }
        if ($this->isColumnModified(YelpPeer::WARNER)) {
            $modifiedColumns[':p' . $index++]  = '`warner`';
        }
        if ($this->isColumnModified(YelpPeer::SUMMIT)) {
            $modifiedColumns[':p' . $index++]  = '`summit`';
        }
        if ($this->isColumnModified(YelpPeer::MOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`mount`';
        }
        if ($this->isColumnModified(YelpPeer::FANTASTIC)) {
            $modifiedColumns[':p' . $index++]  = '`fantastic`';
        }
        if ($this->isColumnModified(YelpPeer::BOILING)) {
            $modifiedColumns[':p' . $index++]  = '`boiling`';
        }
        if ($this->isColumnModified(YelpPeer::DEVIL)) {
            $modifiedColumns[':p' . $index++]  = '`devil`';
        }
        if ($this->isColumnModified(YelpPeer::JUNIPER)) {
            $modifiedColumns[':p' . $index++]  = '`juniper`';
        }
        if ($this->isColumnModified(YelpPeer::TERMINAL)) {
            $modifiedColumns[':p' . $index++]  = '`terminal`';
        }
        if ($this->isColumnModified(YelpPeer::SNAG)) {
            $modifiedColumns[':p' . $index++]  = '`snag`';
        }
        if ($this->isColumnModified(YelpPeer::CLIFF)) {
            $modifiedColumns[':p' . $index++]  = '`cliff`';
        }

        $sql = sprintf(
            'INSERT INTO `YELP` (%s) VALUES (%s)',
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
                    case '`pageURL`':
                        $stmt->bindValue($identifier, $this->pageurl, PDO::PARAM_STR);
                        break;
                    case '`userName`':
                        $stmt->bindValue($identifier, $this->username, PDO::PARAM_STR);
                        break;
                    case '`address`':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case '`rating`':
                        $stmt->bindValue($identifier, $this->rating, PDO::PARAM_INT);
                        break;
                    case '`friendsCount`':
                        $stmt->bindValue($identifier, $this->friendscount, PDO::PARAM_INT);
                        break;
                    case '`reviewCount`':
                        $stmt->bindValue($identifier, $this->reviewcount, PDO::PARAM_INT);
                        break;
                    case '`date`':
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`comment`':
                        $stmt->bindValue($identifier, $this->comment, PDO::PARAM_STR);
                        break;
                    case '`useful`':
                        $stmt->bindValue($identifier, $this->useful, PDO::PARAM_INT);
                        break;
                    case '`funny`':
                        $stmt->bindValue($identifier, $this->funny, PDO::PARAM_INT);
                        break;
                    case '`cool`':
                        $stmt->bindValue($identifier, $this->cool, PDO::PARAM_INT);
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


            if (($retval = YelpPeer::doValidate($this, $columns)) !== true) {
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
        $pos = YelpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPageurl();
                break;
            case 2:
                return $this->getUsername();
                break;
            case 3:
                return $this->getAddress();
                break;
            case 4:
                return $this->getRating();
                break;
            case 5:
                return $this->getFriendscount();
                break;
            case 6:
                return $this->getReviewcount();
                break;
            case 7:
                return $this->getDate();
                break;
            case 8:
                return $this->getComment();
                break;
            case 9:
                return $this->getUseful();
                break;
            case 10:
                return $this->getFunny();
                break;
            case 11:
                return $this->getCool();
                break;
            case 12:
                return $this->getBumpass();
                break;
            case 13:
                return $this->getManzanita();
                break;
            case 14:
                return $this->getVisitor();
                break;
            case 15:
                return $this->getSulphur();
                break;
            case 16:
                return $this->getKing();
                break;
            case 17:
                return $this->getSouthwest();
                break;
            case 18:
                return $this->getWarner();
                break;
            case 19:
                return $this->getSummit();
                break;
            case 20:
                return $this->getMount();
                break;
            case 21:
                return $this->getFantastic();
                break;
            case 22:
                return $this->getBoiling();
                break;
            case 23:
                return $this->getDevil();
                break;
            case 24:
                return $this->getJuniper();
                break;
            case 25:
                return $this->getTerminal();
                break;
            case 26:
                return $this->getSnag();
                break;
            case 27:
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
        if (isset($alreadyDumpedObjects['Yelp'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Yelp'][$this->getPrimaryKey()] = true;
        $keys = YelpPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPageurl(),
            $keys[2] => $this->getUsername(),
            $keys[3] => $this->getAddress(),
            $keys[4] => $this->getRating(),
            $keys[5] => $this->getFriendscount(),
            $keys[6] => $this->getReviewcount(),
            $keys[7] => $this->getDate(),
            $keys[8] => $this->getComment(),
            $keys[9] => $this->getUseful(),
            $keys[10] => $this->getFunny(),
            $keys[11] => $this->getCool(),
            $keys[12] => $this->getBumpass(),
            $keys[13] => $this->getManzanita(),
            $keys[14] => $this->getVisitor(),
            $keys[15] => $this->getSulphur(),
            $keys[16] => $this->getKing(),
            $keys[17] => $this->getSouthwest(),
            $keys[18] => $this->getWarner(),
            $keys[19] => $this->getSummit(),
            $keys[20] => $this->getMount(),
            $keys[21] => $this->getFantastic(),
            $keys[22] => $this->getBoiling(),
            $keys[23] => $this->getDevil(),
            $keys[24] => $this->getJuniper(),
            $keys[25] => $this->getTerminal(),
            $keys[26] => $this->getSnag(),
            $keys[27] => $this->getCliff(),
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
        $pos = YelpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPageurl($value);
                break;
            case 2:
                $this->setUsername($value);
                break;
            case 3:
                $this->setAddress($value);
                break;
            case 4:
                $this->setRating($value);
                break;
            case 5:
                $this->setFriendscount($value);
                break;
            case 6:
                $this->setReviewcount($value);
                break;
            case 7:
                $this->setDate($value);
                break;
            case 8:
                $this->setComment($value);
                break;
            case 9:
                $this->setUseful($value);
                break;
            case 10:
                $this->setFunny($value);
                break;
            case 11:
                $this->setCool($value);
                break;
            case 12:
                $this->setBumpass($value);
                break;
            case 13:
                $this->setManzanita($value);
                break;
            case 14:
                $this->setVisitor($value);
                break;
            case 15:
                $this->setSulphur($value);
                break;
            case 16:
                $this->setKing($value);
                break;
            case 17:
                $this->setSouthwest($value);
                break;
            case 18:
                $this->setWarner($value);
                break;
            case 19:
                $this->setSummit($value);
                break;
            case 20:
                $this->setMount($value);
                break;
            case 21:
                $this->setFantastic($value);
                break;
            case 22:
                $this->setBoiling($value);
                break;
            case 23:
                $this->setDevil($value);
                break;
            case 24:
                $this->setJuniper($value);
                break;
            case 25:
                $this->setTerminal($value);
                break;
            case 26:
                $this->setSnag($value);
                break;
            case 27:
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
        $keys = YelpPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPageurl($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUsername($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAddress($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRating($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFriendscount($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setReviewcount($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDate($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setComment($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUseful($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFunny($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCool($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBumpass($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setManzanita($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setVisitor($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSulphur($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setKing($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSouthwest($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setWarner($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSummit($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMount($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setFantastic($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setBoiling($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDevil($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setJuniper($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTerminal($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSnag($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setCliff($arr[$keys[27]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(YelpPeer::DATABASE_NAME);

        if ($this->isColumnModified(YelpPeer::ID)) $criteria->add(YelpPeer::ID, $this->id);
        if ($this->isColumnModified(YelpPeer::PAGEURL)) $criteria->add(YelpPeer::PAGEURL, $this->pageurl);
        if ($this->isColumnModified(YelpPeer::USERNAME)) $criteria->add(YelpPeer::USERNAME, $this->username);
        if ($this->isColumnModified(YelpPeer::ADDRESS)) $criteria->add(YelpPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(YelpPeer::RATING)) $criteria->add(YelpPeer::RATING, $this->rating);
        if ($this->isColumnModified(YelpPeer::FRIENDSCOUNT)) $criteria->add(YelpPeer::FRIENDSCOUNT, $this->friendscount);
        if ($this->isColumnModified(YelpPeer::REVIEWCOUNT)) $criteria->add(YelpPeer::REVIEWCOUNT, $this->reviewcount);
        if ($this->isColumnModified(YelpPeer::DATE)) $criteria->add(YelpPeer::DATE, $this->date);
        if ($this->isColumnModified(YelpPeer::COMMENT)) $criteria->add(YelpPeer::COMMENT, $this->comment);
        if ($this->isColumnModified(YelpPeer::USEFUL)) $criteria->add(YelpPeer::USEFUL, $this->useful);
        if ($this->isColumnModified(YelpPeer::FUNNY)) $criteria->add(YelpPeer::FUNNY, $this->funny);
        if ($this->isColumnModified(YelpPeer::COOL)) $criteria->add(YelpPeer::COOL, $this->cool);
        if ($this->isColumnModified(YelpPeer::BUMPASS)) $criteria->add(YelpPeer::BUMPASS, $this->bumpass);
        if ($this->isColumnModified(YelpPeer::MANZANITA)) $criteria->add(YelpPeer::MANZANITA, $this->manzanita);
        if ($this->isColumnModified(YelpPeer::VISITOR)) $criteria->add(YelpPeer::VISITOR, $this->visitor);
        if ($this->isColumnModified(YelpPeer::SULPHUR)) $criteria->add(YelpPeer::SULPHUR, $this->sulphur);
        if ($this->isColumnModified(YelpPeer::KING)) $criteria->add(YelpPeer::KING, $this->king);
        if ($this->isColumnModified(YelpPeer::SOUTHWEST)) $criteria->add(YelpPeer::SOUTHWEST, $this->southwest);
        if ($this->isColumnModified(YelpPeer::WARNER)) $criteria->add(YelpPeer::WARNER, $this->warner);
        if ($this->isColumnModified(YelpPeer::SUMMIT)) $criteria->add(YelpPeer::SUMMIT, $this->summit);
        if ($this->isColumnModified(YelpPeer::MOUNT)) $criteria->add(YelpPeer::MOUNT, $this->mount);
        if ($this->isColumnModified(YelpPeer::FANTASTIC)) $criteria->add(YelpPeer::FANTASTIC, $this->fantastic);
        if ($this->isColumnModified(YelpPeer::BOILING)) $criteria->add(YelpPeer::BOILING, $this->boiling);
        if ($this->isColumnModified(YelpPeer::DEVIL)) $criteria->add(YelpPeer::DEVIL, $this->devil);
        if ($this->isColumnModified(YelpPeer::JUNIPER)) $criteria->add(YelpPeer::JUNIPER, $this->juniper);
        if ($this->isColumnModified(YelpPeer::TERMINAL)) $criteria->add(YelpPeer::TERMINAL, $this->terminal);
        if ($this->isColumnModified(YelpPeer::SNAG)) $criteria->add(YelpPeer::SNAG, $this->snag);
        if ($this->isColumnModified(YelpPeer::CLIFF)) $criteria->add(YelpPeer::CLIFF, $this->cliff);

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
        $criteria = new Criteria(YelpPeer::DATABASE_NAME);
        $criteria->add(YelpPeer::ID, $this->id);

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
     * @param object $copyObj An object of Yelp (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPageurl($this->getPageurl());
        $copyObj->setUsername($this->getUsername());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setRating($this->getRating());
        $copyObj->setFriendscount($this->getFriendscount());
        $copyObj->setReviewcount($this->getReviewcount());
        $copyObj->setDate($this->getDate());
        $copyObj->setComment($this->getComment());
        $copyObj->setUseful($this->getUseful());
        $copyObj->setFunny($this->getFunny());
        $copyObj->setCool($this->getCool());
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
     * @return Yelp Clone of current object.
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
     * @return YelpPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new YelpPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->pageurl = null;
        $this->username = null;
        $this->address = null;
        $this->rating = null;
        $this->friendscount = null;
        $this->reviewcount = null;
        $this->date = null;
        $this->comment = null;
        $this->useful = null;
        $this->funny = null;
        $this->cool = null;
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
        return (string) $this->exportTo(YelpPeer::DEFAULT_STRING_FORMAT);
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
