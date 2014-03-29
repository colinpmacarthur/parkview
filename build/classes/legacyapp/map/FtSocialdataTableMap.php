<?php



/**
 * This class defines the structure of the 'ft_socialdata' table.
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
class FtSocialdataTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.FtSocialdataTableMap';

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
        $this->setName('ft_socialdata');
        $this->setPhpName('FtSocialdata');
        $this->setClassname('FtSocialdata');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addForeignKey('timeid', 'Timeid', 'INTEGER', 'dim_time', 'timeid', false, null, null);
        $this->addForeignKey('locationid', 'Locationid', 'INTEGER', 'dim_location', 'locationID', false, null, null);
        $this->addForeignKey('userid', 'Userid', 'INTEGER', 'dim_userinfo', 'userid', false, null, null);
        $this->addColumn('rating', 'Rating', 'INTEGER', false, null, null);
        $this->addColumn('createddate', 'Createddate', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('DimLocation', 'DimLocation', RelationMap::MANY_TO_ONE, array('locationid' => 'locationID', ), null, null);
        $this->addRelation('DimTime', 'DimTime', RelationMap::MANY_TO_ONE, array('timeid' => 'timeid', ), null, null);
        $this->addRelation('DimUserinfo', 'DimUserinfo', RelationMap::MANY_TO_ONE, array('userid' => 'userid', ), null, null);
    } // buildRelations()

} // FtSocialdataTableMap
