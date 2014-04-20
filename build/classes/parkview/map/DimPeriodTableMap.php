<?php



/**
 * This class defines the structure of the 'DIM_PERIOD' table.
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
class DimPeriodTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.DimPeriodTableMap';

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
        $this->setName('DIM_PERIOD');
        $this->setPhpName('DimPeriod');
        $this->setClassname('DimPeriod');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('date_id', 'DateId', 'INTEGER', true, null, null);
        $this->addColumn('creation_date', 'CreationDate', 'DATE', true, null, null);
        $this->addColumn('year', 'Year', 'INTEGER', true, 4, null);
        $this->addColumn('quarter', 'Quarter', 'INTEGER', true, null, null);
        $this->addColumn('month', 'Month', 'INTEGER', true, null, null);
        $this->addColumn('day', 'Day', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FactSnsdata', 'FactSnsdata', RelationMap::ONE_TO_MANY, array('date_id' => 'date_id', ), null, null, 'FactSnsdatas');
    } // buildRelations()

} // DimPeriodTableMap
