<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Data
 * @method \App\Model\Entity\Data[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index() {
        $products = $this->paginate($this->Products);
        $this->set(compact('products')); 
    }
    /**
     * View method
     *
     * @param string|null $id Products id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id) {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('product'));
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $product = $this->Products->newEntity();
        if($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again'));
        }
        $this->set(compact('product'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */
    public function edit($id = null) {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if($this->request->is(['patch','put','post'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if($this->Products->save($product)) {
                $this->Flash->success(__('The Product has been updated'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Sorry the product could not be saved. Please try again'));
        }
        $this->set(compact('product'));
    }

}