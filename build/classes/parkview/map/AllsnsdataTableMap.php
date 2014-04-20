<?php



/**
 * This class defines the structure of the 'ALLSNSDATA' table.
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
class AllsnsdataTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.AllsnsdataTableMap';

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
        $this->setName('ALLSNSDATA');
        $this->setPhpName('Allsnsdata');
        $this->setClassname('Allsnsdata');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('row_id', 'RowId', 'INTEGER', true, null, null);
        $this->addColumn('recId', 'Recid', 'INTEGER', true, null, null);
        $this->addColumn('user', 'User', 'VARCHAR', false, 45, null);
        $this->addColumn('link', 'Link', 'VARCHAR', false, 100, null);
        $this->addColumn('sns', 'Sns', 'INTEGER', false, null, null);
        $this->addColumn('date', 'Date', 'DATE', false, null, null);
        $this->addColumn('rating', 'Rating', 'INTEGER', false, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 150, null);
        $this->addColumn('comment', 'Comment', 'LONGVARCHAR', false, null, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 45, null);
        $this->addColumn('state', 'State', 'VARCHAR', false, 45, null);
        $this->addColumn('address', 'Address', 'VARCHAR', false, 45, null);
        $this->addColumn('visbility_count', 'VisbilityCount', 'INTEGER', false, null, null);
        $this->addColumn('sentiment', 'Sentiment', 'DOUBLE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('DimUser', 'DimUser', RelationMap::ONE_TO_MANY, array('row_id' => 'row_id', ), null, null, 'DimUsers');
    } // buildRelations()

} // AllsnsdataTableMap
