<?php



/**
 * This class defines the structure of the 'DIM_COMMENTS' table.
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
class DimCommentsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.DimCommentsTableMap';

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
        $this->setName('DIM_COMMENTS');
        $this->setPhpName('DimComments');
        $this->setClassname('DimComments');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('comment_id', 'CommentId', 'INTEGER', true, null, null);
        $this->addColumn('comment', 'Comment', 'LONGVARCHAR', false, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 150, null);
        $this->addColumn('link', 'Link', 'VARCHAR', false, 100, null);
        $this->addColumn('spread', 'Spread', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FactSnsdata', 'FactSnsdata', RelationMap::ONE_TO_MANY, array('comment_id' => 'comment_id', ), null, null, 'FactSnsdatas');
    } // buildRelations()

} // DimCommentsTableMap
