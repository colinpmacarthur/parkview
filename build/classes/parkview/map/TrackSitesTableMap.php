<?php



/**
 * This class defines the structure of the 'TRACK_SITES' table.
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
class TrackSitesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'parkview.map.TrackSitesTableMap';

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
        $this->setName('TRACK_SITES');
        $this->setPhpName('TrackSites');
        $this->setClassname('TrackSites');
        $this->setPackage('parkview');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('site_id', 'SiteId', 'INTEGER', true, null, null);
        $this->addColumn('recID', 'Recid', 'INTEGER', true, null, null);
        $this->addColumn('place', 'Place', 'VARCHAR', true, 45, null);
        $this->addForeignKey('sns_id', 'SnsId', 'INTEGER', 'SOCIALNETS', 'sns_id', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Socialnets', 'Socialnets', RelationMap::MANY_TO_ONE, array('sns_id' => 'sns_id', ), null, null);
        $this->addRelation('FactSnsdata', 'FactSnsdata', RelationMap::ONE_TO_MANY, array('site_id' => 'site_id', ), null, null, 'FactSnsdatas');
    } // buildRelations()

} // TrackSitesTableMap
