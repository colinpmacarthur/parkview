<?php



/**
 * This class defines the structure of the 'dim_location' table.
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
class DimLocationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.DimLocationTableMap';

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
        $this->setName('dim_location');
        $this->setPhpName('DimLocation');
        $this->setClassname('DimLocation');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('city', 'City', 'VARCHAR', false, 30, null);
        $this->addColumn('state', 'State', 'VARCHAR', true, 2, null);
        $this->addColumn('recid', 'Recid', 'VARCHAR', true, 40, null);
        $this->addPrimaryKey('locationID', 'Locationid', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FtSocialdata', 'FtSocialdata', RelationMap::ONE_TO_MANY, array('locationID' => 'locationid', ), null, null, 'FtSocialdatas');
    } // buildRelations()

} // DimLocationTableMap
