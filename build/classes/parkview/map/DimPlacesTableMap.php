<?php



/**
 * This class defines the structure of the 'DIM_PLACES' table.
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
class DimPlacesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.DimPlacesTableMap';

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
        $this->setName('DIM_PLACES');
        $this->setPhpName('DimPlaces');
        $this->setClassname('DimPlaces');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('row_id', 'RowId', 'INTEGER', true, null, null);
        $this->addColumn('place', 'Place', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FactSnsdata', 'FactSnsdata', RelationMap::ONE_TO_MANY, array('row_id' => 'places_row_id', ), null, null, 'FactSnsdatas');
    } // buildRelations()

} // DimPlacesTableMap
