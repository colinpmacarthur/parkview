<?php



/**
 * This class defines the structure of the 'TRIP_ADVISOR' table.
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
class TripAdvisorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.TripAdvisorTableMap';

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
        $this->setName('TRIP_ADVISOR');
        $this->setPhpName('TripAdvisor');
        $this->setClassname('TripAdvisor');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('pageURL', 'Pageurl', 'VARCHAR', false, 500, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 45, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 45, null);
        $this->addColumn('state', 'State', 'VARCHAR', false, 45, null);
        $this->addColumn('date', 'Date', 'DATE', true, null, null);
        $this->addColumn('comment', 'Comment', 'VARCHAR', false, 700, null);
        $this->addColumn('rating', 'Rating', 'INTEGER', false, null, null);
        $this->addColumn('bumpass', 'Bumpass', 'INTEGER', false, null, null);
        $this->addColumn('manzanita', 'Manzanita', 'INTEGER', false, null, null);
        $this->addColumn('visitor', 'Visitor', 'INTEGER', false, null, null);
        $this->addColumn('sulphur', 'Sulphur', 'INTEGER', false, null, null);
        $this->addColumn('king', 'King', 'INTEGER', false, null, null);
        $this->addColumn('southwest', 'Southwest', 'INTEGER', false, null, null);
        $this->addColumn('warner', 'Warner', 'INTEGER', false, null, null);
        $this->addColumn('summit', 'Summit', 'INTEGER', false, null, null);
        $this->addColumn('mount', 'Mount', 'INTEGER', false, null, null);
        $this->addColumn('fantastic', 'Fantastic', 'INTEGER', false, null, null);
        $this->addColumn('boiling', 'Boiling', 'INTEGER', false, null, null);
        $this->addColumn('devil', 'Devil', 'INTEGER', false, null, null);
        $this->addColumn('juniper', 'Juniper', 'INTEGER', false, null, null);
        $this->addColumn('terminal', 'Terminal', 'INTEGER', false, null, null);
        $this->addColumn('snag', 'Snag', 'INTEGER', false, null, null);
        $this->addColumn('cliff', 'Cliff', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TripAdvisorTableMap
