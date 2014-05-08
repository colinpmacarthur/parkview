<?php



/**
 * This class defines the structure of the 'DIM_USER' table.
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
class DimUserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.DimUserTableMap';

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
        $this->setName('DIM_USER');
        $this->setPhpName('DimUser');
        $this->setClassname('DimUser');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('user_id', 'UserId', 'INTEGER', true, null, null);
        $this->addForeignKey('row_id', 'RowId', 'INTEGER', 'ALLSNSDATA', 'row_id', true, null, null);
        $this->addColumn('user', 'User', 'VARCHAR', false, 45, null);
        $this->addColumn('address', 'Address', 'VARCHAR', false, 45, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 45, null);
        $this->addColumn('State', 'State', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Allsnsdata', 'Allsnsdata', RelationMap::MANY_TO_ONE, array('row_id' => 'row_id', ), null, null);
        $this->addRelation('FactSnsdata', 'FactSnsdata', RelationMap::ONE_TO_MANY, array('row_id' => 'row_id', ), null, null, 'FactSnsdatas');
    } // buildRelations()

} // DimUserTableMap
