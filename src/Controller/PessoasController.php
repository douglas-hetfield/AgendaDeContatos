<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Pessoas Controller
 *
 * @property \App\Model\Table\PessoasTable $Pessoas
 *
 * @method \App\Model\Entity\Pessoa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PessoasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Enderecos']
        ];
        $pessoas = $this->paginate($this->Pessoas);

        $this->set(compact('pessoas', 'enderecos'));
        
    }

    /**
     * View method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => ['Enderecos', 'TelefonesPessoas']
        ]);

        $this->set('pessoa', $pessoa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pessoa = $this->Pessoas->newEntity();
        if ($this->request->is('post')) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('Contato salvo com sucesso!'));

                return $this->redirect(['action' => 'add', 'controller' => 'TelefonesPessoas', $pessoa->id]);
            }
            $this->Flash->error(__('Erro: Este contato não pode ser salvo. Tente novamente!'));
        }
        $enderecos = $this->Pessoas->Enderecos->find('list', ['limit' => 200]);
        $this->set(compact('pessoa', 'enderecos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('Contato salvo com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro: Este contato não pode ser editado. Tente novamente!'));
        }
        $enderecos = $this->Pessoas->Enderecos->find('list', ['limit' => 200]);
        $this->set(compact('pessoa', 'enderecos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoa = $this->Pessoas->get($id);
        if ($this->Pessoas->delete($pessoa)) {
            $this->Flash->success(__('Contato deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Erro: Este contato não pode ser deletado. Tente novamente!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
