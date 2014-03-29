<?php



/**
 * This class defines the structure of the 'dim_userinfo' table.
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
class DimUserinfoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'legacyapp.map.DimUserinfoTableMap';

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
        $this->setName('dim_userinfo');
        $this->setPhpName('DimUserinfo');
        $this->setClassname('DimUserinfo');
        $this->setPackage('legacyapp');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('yuserid', 'Yuserid', 'VARCHAR', true, 25, null);
        $this->addColumn('avatar', 'Avatar', 'LONGVARCHAR', false, null, null);
        $this->addColumn('username', 'Username', 'VARCHAR', true, 30, null);
        $this->addColumn('badge', 'Badge', 'VARCHAR', true, 10, null);
        $this->addColumn('friendcount', 'Friendcount', 'INTEGER', true, null, null);
        $this->addColumn('reviewComment', 'Reviewcomment', 'LONGVARCHAR', false, null, null);
        $this->addColumn('reviewCount', 'Reviewcount', 'INTEGER', true, 5, null);
        $this->addColumn('ucomment', 'Ucomment', 'INTEGER', true, 5, null);
        $this->addColumn('fcomment', 'Fcomment', 'INTEGER', true, 5, null);
        $this->addColumn('ccomment', 'Ccomment', 'INTEGER', true, 5, null);
        $this->addPrimaryKey('userid', 'Userid', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('FtSocialdata', 'FtSocialdata', RelationMap::ONE_TO_MANY, array('userid' => 'userid', ), null, null, 'FtSocialdatas');
    } // buildRelations()

} // DimUserinfoTableMap
