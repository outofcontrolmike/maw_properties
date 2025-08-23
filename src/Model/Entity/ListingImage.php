<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ListingImage Entity
 *
 * @property int $id
 * @property int|null $listing_id
 * @property string|null $image_path
 *
 * @property \App\Model\Entity\Listing $listing
 */
class ListingImage extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'listing_id' => true,
        'image_path' => true,
        'listing' => true,
    ];
}
