<?php



/**
 * This class defines the structure of the 'sites' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.parkview.map
 */
class SitesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.SitesTableMap';

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
        $this->setName('sites');
        $this->setPhpName('Sites');
        $this->setClassname('Sites');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('idsites', 'Idsites', 'INTEGER', true, null, null);
        $this->addColumn('sitename', 'Sitename', 'VARCHAR', false, 45, null);
        $this->addColumn('latitude', 'Latitude', 'DOUBLE', false, null, null);
        $this->addColumn('longitude', 'Longitude', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // SitesTableMap
