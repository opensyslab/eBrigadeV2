<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersSuppliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersSuppliesTable Test Case
 */
class OrdersSuppliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersSuppliesTable
     */
    public $OrdersSupplies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orders_supplies',
        'app.orders',
        'app.providers',
        'app.supplies',
        'app.providers_supplies',
        'app.users',
        'app.permissions',
        'app.grades',
        'app.roles',
        'app.availabilities',
        'app.user_materials',
        'app.materials',
        'app.material_types',
        'app.barracks',
        'app.cities',
        'app.events',
        'app.bills',
        'app.formations',
        'app.organizations',
        'app.rescue_plans',
        'app.rescue_plan_activities',
        'app.rescue_plan_environments',
        'app.rescue_plan_delays',
        'app.rescue_plan_types',
        'app.rescue_plan_recommendations',
        'app.events_materials',
        'app.teams',
        'app.events_teams',
        'app.materials_teams',
        'app.teams_users',
        'app.vehicles',
        'app.vehicle_types',
        'app.vehicle_models',
        'app.barracks_vehicles',
        'app.events_vehicles',
        'app.teams_vehicles',
        'app.users_vehicles',
        'app.barracks_materials',
        'app.barracks_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrdersSupplies') ? [] : ['className' => 'App\Model\Table\OrdersSuppliesTable'];
        $this->OrdersSupplies = TableRegistry::get('OrdersSupplies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdersSupplies);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}