<?php



/**
 * This class defines the structure of the 'dim_time' table.
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
class DimTimeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.DimTimeTableMap';

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
        $this->setName('dim_time');
        $this->setPhpName('DimTime');
        $this->setClassname('DimTime');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('day', 'Day', 'INTEGER', true, 2, null);
        $this->addColumn('month', 'Month', 'INTEGER', true, 12, null);
        $this->addColumn('year', 'Year', 'INTEGER', true, 4, null);
        $this->addColumn('recid', 'Recid', 'VARCHAR', true, 40, null);
        $this->addPrimaryKey('timeid', 'Timeid', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FtSocialdata', 'FtSocialdata', RelationMap::ONE_TO_MANY, array('timeid' => 'timeid', ), null, null, 'FtSocialdatas');
    } // buildRelations()

} // DimTimeTableMap
