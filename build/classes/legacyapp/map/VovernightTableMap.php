<?php



/**
 * This class defines the structure of the 'VOVERNIGHT' table.
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
class VovernightTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.VovernightTableMap';

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
        $this->setName('VOVERNIGHT');
        $this->setPhpName('Vovernight');
        $this->setClassname('Vovernight');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('PARKID', 'Parkid', 'VARCHAR', true, 4, null);
        $this->addColumn('NP', 'Np', 'VARCHAR', true, 45, null);
        $this->addColumn('MONTH', 'Month', 'INTEGER', false, null, null);
        $this->addColumn('YEAR', 'Year', 'INTEGER', false, 4, null);
        $this->addColumn('STAYTYPE', 'Staytype', 'VARCHAR', false, 45, null);
        $this->addColumn('VISITOR', 'Visitor', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // VovernightTableMap
