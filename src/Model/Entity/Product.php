<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Data Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property decimal $price
 * @property string $image
 * @property int $stock
*/
class Product extends Entity
{
    /**
     * @var array<string, bool> 
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'price' => true,
        'image' => true,
        'stock' => true,
    ];
}