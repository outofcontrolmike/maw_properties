<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ListingsFixture
 */
class ListingsFixture extends TestFixture
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
                'user_id' => 1,
                'slug' => 'Lorem ipsum dolor sit amet',
                'mls_number' => 1,
                'beds' => 1,
                'baths' => 1.5,
                'living_sqft' => 1,
                'price' => 1.5,
                'address' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'zip_code' => 'Lorem ipsum dolor ',
                'regards' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'listed' => 1,
                'created' => '2025-08-23 15:58:55',
                'modified' => '2025-08-23 15:58:55',
            ],
        ];
        parent::init();
    }
}
