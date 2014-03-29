<?php



/**
 * This class defines the structure of the 'ft_Reviews' table.
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
class FtReviewsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.FtReviewsTableMap';

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
        $this->setName('ft_Reviews');
        $this->setPhpName('FtReviews');
        $this->setClassname('FtReviews');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('recordID', 'Recordid', 'VARCHAR', true, 50, null);
        $this->addColumn('date', 'Date', 'DATE', true, null, null);
        $this->addColumn('rating', 'Rating', 'INTEGER', true, null, null);
        $this->addColumn('social', 'Social', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // FtReviewsTableMap
