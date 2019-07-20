<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BairroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BairroTable Test Case
 */
class BairroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BairroTable
     */
    public $Bairro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bairro',
        'app.Cidades',
        'app.Endereco'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bairro') ? [] : ['className' => BairroTable::class];
        $this->Bairro = TableRegistry::getTableLocator()->get('Bairro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bairro);

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
