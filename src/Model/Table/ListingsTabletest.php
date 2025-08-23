<?php
// src/Model/Table/ListingsTable.php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class ListingsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->addBehavior('Timestamp');
    }
}