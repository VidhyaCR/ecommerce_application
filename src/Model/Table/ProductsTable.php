<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
    */
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('products');
        $this->setDisplayField('name,description');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');
        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');
        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');
        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyString('image');
        $validator
            ->integer('stock')
            ->requirePresence('stock', 'create')
            ->notEmptyString('stock');
            
        return $validator;
    }
}