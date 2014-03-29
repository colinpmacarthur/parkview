<?php



/**
 * This class defines the structure of the 'PARKS' table.
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
class ParksTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.ParksTableMap';

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
        $this->setName('PARKS');
        $this->setPhpName('Parks');
        $this->setClassname('Parks');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addColumn('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('NAME', 'Name', 'VARCHAR', true, 45, null);
        $this->addPrimaryKey('NPID', 'Npid', 'VARCHAR', true, 4, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ParksTableMap
