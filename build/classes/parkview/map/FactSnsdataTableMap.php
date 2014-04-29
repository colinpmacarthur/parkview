<?php



/**
 * This class defines the structure of the 'FACT_SNSDATA' table.
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
class FactSnsdataTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.FactSnsdataTableMap';

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
        $this->setName('FACT_SNSDATA');
        $this->setPhpName('FactSnsdata');
        $this->setClassname('FactSnsdata');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('row_id', 'UserId', 'INTEGER', 'DIM_USER', 'row_id', true, null, null);
        $this->addForeignKey('comment_id', 'CommentId', 'INTEGER', 'DIM_COMMENTS', 'comment_id', true, null, null);
        $this->addForeignKey('date_id', 'DateId', 'INTEGER', 'DIM_PERIOD', 'date_id', true, null, null);
        $this->addForeignKey('places_row_id', 'PlacesRowId', 'INTEGER', 'DIM_PLACES', 'row_id', true, null, null);
        $this->addColumn('sentiment', 'Sentiment', 'DOUBLE', false, null, null);
        $this->addColumn('rating', 'Rating', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('DimComments', 'DimComments', RelationMap::MANY_TO_ONE, array('comment_id' => 'comment_id', ), null, null);
        $this->addRelation('DimPeriod', 'DimPeriod', RelationMap::MANY_TO_ONE, array('date_id' => 'date_id', ), null, null);
        $this->addRelation('DimUser', 'DimUser', RelationMap::MANY_TO_ONE, array('row_id' => 'row_id', ), null, null);
        $this->addRelation('DimPlaces', 'DimPlaces', RelationMap::MANY_TO_ONE, array('places_row_id' => 'row_id', ), null, null);
    } // buildRelations()

} // FactSnsdataTableMap
