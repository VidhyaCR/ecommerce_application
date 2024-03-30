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
*/
class Category extends Entity
{
    /**
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
    ];
}