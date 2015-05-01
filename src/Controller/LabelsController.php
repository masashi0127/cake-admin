<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LabelsController Controller
 *
 * @property \App\Model\Table\LabelsControllerTable $LabelsController
 */
class LabelsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->render('index');
    }

    /**
     * View method
     *
     * @param string|null $id Labels Controller id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $labelsController = $this->LabelsController->get($id, [
            'contain' => []
        ]);
        $this->set('labelsController', $labelsController);
        $this->set('_serialize', ['labelsController']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $labelsController = $this->LabelsController->patchEntity($labelsController, $this->request->data);
            if ($this->LabelsController->save($labelsController)) {
                $this->Flash->success('The labels controller has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The labels controller could not be saved. Please, try again.');
            }
        }
        $this->render('add');
    }

    /**
     * Edit method
     *
     * @param string|null $id Labels Controller id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $labelsController = $this->LabelsController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $labelsController = $this->LabelsController->patchEntity($labelsController, $this->request->data);
            if ($this->LabelsController->save($labelsController)) {
                $this->Flash->success('The labels controller has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The labels controller could not be saved. Please, try again.');
            }
        }
        $this->set(compact('labelsController'));
        $this->set('_serialize', ['labelsController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Labels Controller id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $labelsController = $this->LabelsController->get($id);
        if ($this->LabelsController->delete($labelsController)) {
            $this->Flash->success('The labels controller has been deleted.');
        } else {
            $this->Flash->error('The labels controller could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
