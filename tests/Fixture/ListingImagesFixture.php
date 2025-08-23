<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ListingImagesFixture
 */
class ListingImagesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'listing_id' => 1,
                'image_path' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
