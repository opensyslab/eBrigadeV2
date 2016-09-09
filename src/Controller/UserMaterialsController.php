<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;
use Cake\I18n\Time;

/**
 * UserMaterials Controller
 *
 * @property \App\Model\Table\UserMaterialsTable $UserMaterials
 */
class UserMaterialsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Materials']
        ];
        $userMaterials = $this->paginate($this->UserMaterials);

        $this->set(compact('userMaterials'));
        $this->set('_serialize', ['userMaterials']);
    }

    /**
     * View method
     *
     * @param string|null $id User Material id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userMaterial = $this->UserMaterials->get($id, [
            'contain' => ['Users', 'Materials']
        ]);

        $this->set('userMaterial', $userMaterial);
        $this->set('_serialize', ['userMaterial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {

        if ($this->request->is('post')) {
            $userMaterial = $this->UserMaterials->newEntity();
            $userMaterial->user_id = $this->Auth->user('id');
            $userMaterial->material_id = $this->request->data['material_id'];
            $now = Time::now();
            $now->timezone = 'Europe/Paris';
            $now->i18nFormat('yyyy-MM-dd');
            $userMaterial->from_date = $now;
            ($this->request->data['to_date'] != '') ? $userMaterial->to_date = $this->request->data['to_date'] : '';
            $userMaterial->quantity = $this->request->data['quantity'];
            if ($this->UserMaterials->save($userMaterial)) {
                $this->Flash->success(__('The user material has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user material could not be saved. Please, try again.'));
            }
        }
        $this->loadModel('Materials');
        $materials = $this->UserMaterials->Materials->find('list',[
            'contain' => [
                'MaterialTypes',
                'UserMaterials'
            ],
            'fields' => [
                'id' => 'Materials.id',
                'name' => 'MaterialTypes.name'
            ],
            'keyField' => 'id',
            'valueField' => 'name',
            'conditions' => [
                'Materials.barrack_id' => $id
            ]
        ]);
        $this->set('materials',$materials);
    }

    public function stock($id = null)
    {

    }

    /**
     * Edit method
     *
     * @param string|null $id User Material id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userMaterial = $this->UserMaterials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userMaterial = $this->UserMaterials->patchEntity($userMaterial, $this->request->data);
            if ($this->UserMaterials->save($userMaterial)) {
                $this->Flash->success(__('The user material has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user material could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserMaterials->Users->find('list', ['limit' => 200]);
        $materials = $this->UserMaterials->Materials->find('list', ['limit' => 200]);
        $this->set(compact('userMaterial', 'users', 'materials'));
        $this->set('_serialize', ['userMaterial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Material id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userMaterial = $this->UserMaterials->get($id);
        if ($this->UserMaterials->delete($userMaterial)) {
            $this->Flash->success(__('The user material has been deleted.'));
        } else {
            $this->Flash->error(__('The user material could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
