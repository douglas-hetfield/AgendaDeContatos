<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelefonesPessoasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelefonesPessoasTable Test Case
 */
class TelefonesPessoasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TelefonesPessoasTable
     */
    public $TelefonesPessoas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TelefonesPessoas',
        'app.Pessoas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TelefonesPessoas') ? [] : ['className' => TelefonesPessoasTable::class];
        $this->TelefonesPessoas = TableRegistry::getTableLocator()->get('TelefonesPessoas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TelefonesPessoas);

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
