<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListingImagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListingImagesTable Test Case
 */
class ListingImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListingImagesTable
     */
    protected $ListingImages;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.ListingImages',
        'app.Listings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ListingImages') ? [] : ['className' => ListingImagesTable::class];
        $this->ListingImages = $this->getTableLocator()->get('ListingImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ListingImages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ListingImagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ListingImagesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
