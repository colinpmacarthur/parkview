<?php



/**
 * This class defines the structure of the 'SOCIALNETS' table.
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
class SocialnetsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.SocialnetsTableMap';

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
        $this->setName('SOCIALNETS');
        $this->setPhpName('Socialnets');
        $this->setClassname('Socialnets');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('sns_id', 'SnsId', 'INTEGER', true, null, null);
        $this->addColumn('sns', 'Sns', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TrackSites', 'TrackSites', RelationMap::ONE_TO_MANY, array('sns_id' => 'sns_id', ), null, null, 'TrackSitess');
    } // buildRelations()

} // SocialnetsTableMap
