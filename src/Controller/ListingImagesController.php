<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ListingImages Controller
 *
 * @property \App\Model\Table\ListingImagesTable $ListingImages
 */
class ListingImagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->ListingImages->find()
            ->contain(['Listings']);
        $listingImages = $this->paginate($query);

        $this->set(compact('listingImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Listing Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listingImage = $this->ListingImages->get($id, contain: ['Listings']);
        $this->set(compact('listingImage'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listingImage = $this->ListingImages->newEmptyEntity();
        if ($this->request->is('post')) {
            $listingImage = $this->ListingImages->patchEntity($listingImage, $this->request->getData());
            if ($this->ListingImages->save($listingImage)) {
                $this->Flash->success(__('The listing image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing image could not be saved. Please, try again.'));
        }
        $listings = $this->ListingImages->Listings->find('list', limit: 200)->all();
        $this->set(compact('listingImage', 'listings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listing Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listingImage = $this->ListingImages->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listingImage = $this->ListingImages->patchEntity($listingImage, $this->request->getData());
            if ($this->ListingImages->save($listingImage)) {
                $this->Flash->success(__('The listing image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing image could not be saved. Please, try again.'));
        }
        $listings = $this->ListingImages->Listings->find('list', limit: 200)->all();
        $this->set(compact('listingImage', 'listings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listing Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listingImage = $this->ListingImages->get($id);
        if ($this->ListingImages->delete($listingImage)) {
            $this->Flash->success(__('The listing image has been deleted.'));
        } else {
            $this->Flash->error(__('The listing image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
