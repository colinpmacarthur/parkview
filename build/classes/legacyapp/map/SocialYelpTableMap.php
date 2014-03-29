<?php



/**
 * This class defines the structure of the 'SOCIAL_YELP' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.legacyapp.map
 */
class SocialYelpTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.SocialYelpTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('SOCIAL_YELP');
        $this->setPhpName('SocialYelp');
        $this->setClassname('SocialYelp');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('PARKID', 'Parkid', 'VARCHAR', true, 4, null);
        $this->addColumn('YELPUSERID', 'Yelpuserid', 'VARCHAR', false, 100, null);
        $this->addColumn('YELPUSERAVATAR', 'Yelpuseravatar', 'VARCHAR', false, 100, null);
        $this->addColumn('YELPUSERNAME', 'Yelpusername', 'VARCHAR', false, 45, null);
        $this->addColumn('YELPUSERLOCATION', 'Yelpuserlocation', 'VARCHAR', false, 100, null);
        $this->addColumn('BADGE', 'Badge', 'VARCHAR', false, 45, null);
        $this->addColumn('YELPFRIENDSCOUNT', 'Yelpfriendscount', 'INTEGER', false, null, null);
        $this->addColumn('YELPREVIEWCOUNTS', 'Yelpreviewcounts', 'INTEGER', false, null, null);
        $this->addColumn('YELPRATINGVALUE', 'Yelpratingvalue', 'INTEGER', false, null, null);
        $this->addColumn('YELPREVIEWYEAR', 'Yelpreviewyear', 'INTEGER', false, 4, null);
        $this->addColumn('YELPREVIEWMONTH', 'Yelpreviewmonth', 'INTEGER', false, null, null);
        $this->addColumn('YELPREVIEWDAY', 'Yelpreviewday', 'INTEGER', false, null, null);
        $this->addColumn('YELPREVIEWCOMMENT', 'Yelpreviewcomment', 'CLOB', false, null, null);
        $this->addColumn('YELPUSEFULCOMMENT', 'Yelpusefulcomment', 'INTEGER', false, null, null);
        $this->addColumn('YELPFUNNYCOMMENT', 'Yelpfunnycomment', 'INTEGER', false, null, null);
        $this->addColumn('YELPCOOLCOMMENT', 'Yelpcoolcomment', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SocialYelpTableMap
