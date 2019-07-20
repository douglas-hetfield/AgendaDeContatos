<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bairro Controller
 *
 * @property \App\Model\Table\BairroTable $Bairro
 *
 * @method \App\Model\Entity\Bairro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BairrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cidades']
        ];
        $bairros = $this->paginate($this->Bairros);

        $this->set(compact('bairros'));
    }

    /**
     * View method
     *
     * @param string|null $id Bairro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bairro = $this->Bairros->get($id, [
            'contain' => ['Cidades', 'Enderecos']
        ]);

        $this->set('bairros', $bairro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bairro = $this->Bairros->newEntity();
        if ($this->request->is('post')) {
            $bairro = $this->Bairros->patchEntity($bairro, $this->request->getData());
            if ($this->Bairros->save($bairro)) {
                $this->Flash->success(__('Bairro salvo com sucesso!'));

                return $this->redirect(['action' => 'add', 'controller' => 'enderecos']);
            }
            $this->Flash->error(__('Erro: Bairro não pode ser salvo. Tente novamente!'));
        }
        $cidades = $this->Bairros->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('bairro', 'cidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bairro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bairro = $this->Bairros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bairro = $this->Bairros->patchEntity($bairro, $this->request->getData());
            if ($this->Bairros->save($bairro)) {
                $this->Flash->success(__('Bairro salvo com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro: bairro não pode ser editado, Tente novamente.'));
        }
        $cidades = $this->Bairros->Cidades->find('list', ['limit' => 200]);
        $this->set(compact('bairro', 'cidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bairro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bairro = $this->Bairros->get($id);
        if ($this->Bairros->delete($bairro)) {
            $this->Flash->success(__('bairro deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Erro: Bairro não pode ser deletado. Tente novamente!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
