<?php
namespace App\Test\TestCase\Controller\Gateau;

use App\Controller\Gateau\OrdersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Gateau\OrdersController Test Case
 */
class OrdersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orders',
        'app.list_materials',
        'app.users',
        'app.permissions',
        'app.grades',
        'app.roles',
        'app.availabilities',
        'app.barrack_users',
        'app.event_teams',
        'app.team_users',
        'app.materials',
        'app.users_materials',
        'app.vehicles',
        'app.type_vehicles',
        'app.model_vehicles',
        'app.event_vehicles',
        'app.users_vehicles',
        'app.providers',
        'app.orders_providers'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}