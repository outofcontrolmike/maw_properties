<?php
// src/Model/Entity/Listing.php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Listing extends Entity
{
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
        'user' => true,
        'tags' => true,
    ];
}