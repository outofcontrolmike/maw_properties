<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Listing Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $slug
 * @property int $mls_number
 * @property int $beds
 * @property string $baths
 * @property int $living_sqft
 * @property string $price
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string|null $regards
 * @property bool|null $listed
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 */
class Listing extends Entity
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
        'user_id' => true,
        'slug' => true,
        'mls_number' => true,
        'beds' => true,
        'baths' => true,
        'living_sqft' => true,
        'price' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'zip_code' => true,
        'regards' => true,
        'listed' => true,
        'created' => true,
        'modified' => true,
    ];
}
