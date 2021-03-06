<?php

namespace GW2Spidy\DB\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'gem_to_gold_rate' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.gw2spidy.map
 */
class GemToGoldRateTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'gw2spidy.map.GemToGoldRateTableMap';

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
        $this->setName('gem_to_gold_rate');
        $this->setPhpName('GemToGoldRate');
        $this->setClassname('GW2Spidy\\DB\\GemToGoldRate');
        $this->setPackage('gw2spidy');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('RATE_DATETIME', 'RateDatetime', 'TIMESTAMP', true, null, null);
        $this->addColumn('RATE', 'Rate', 'INTEGER', true, null, null);
        $this->addColumn('VOLUME', 'Volume', 'BIGINT', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // GemToGoldRateTableMap
