<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillsTable Test Case
 */
class BillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BillsTable
     */
    public $Bills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bills',
        'app.events',
        'app.cities',
        'app.barracks',
        'app.barrack_users',
        'app.users',
        'app.permissions',
        'app.grades',
        'app.roles',
        'app.availabilities',
        'app.borrowed_materials',
        'app.materials',
        'app.material_types',
        'app.user_materials',
        'app.vehicles',
        'app.type_vehicles',
        'app.model_vehicles',
        'app.borrowed_vehicles',
        'app.event_vehicles',
        'app.users_vehicles',
        'app.event_teams',
        'app.teams',
        'app.team_users',
        'app.team_chieves',
        'app.orders',
        'app.providers',
        'app.supplies',
        'app.order_supplies',
        'app.providers_supplies',
        'app.operations',
        'app.operation_activities',
        'app.operation_environments',
        'app.operation_delays',
        'app.operation_types',
        'app.operation_recommendations',
        'app.organizations',
        'app.formations',
        'app.teachers',
        'app.event_types',
        'app.creators',
        'app.responsibles',
        'app.event_equipments',
        'app.equipment'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bills') ? [] : ['className' => 'App\Model\Table\BillsTable'];
        $this->Bills = TableRegistry::get('Bills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bills);

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
}
