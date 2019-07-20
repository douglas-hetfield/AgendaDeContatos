<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TelefonesPessoas Controller
 *
 * @property \App\Model\Table\TelefonesPessoasTable $TelefonesPessoas
 *
 * @method \App\Model\Entity\TelefonesPessoa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TelefonesPessoasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pessoas']
        ];
        $telefonesPessoas = $this->paginate($this->TelefonesPessoas);

        $this->set(compact('telefonesPessoas'));
    }

    /**
     * View method
     *
     * @param string|null $id Telefones Pessoa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telefonesPessoa = $this->TelefonesPessoas->get($id, [
            'contain' => ['Pessoas']
        ]);

        $this->set('telefonesPessoa', $telefonesPessoa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telefonesPessoa = $this->TelefonesPessoas->newEntity();
        if ($this->request->is('post')) {
            $telefonesPessoa = $this->TelefonesPessoas->patchEntity($telefonesPessoa, $this->request->getData());
            if ($this->TelefonesPessoas->save($telefonesPessoa)) {
                $this->Flash->success(__('Número adicionado com sucesso!'));

                return $this->redirect(['action' => 'view', 'controller' => 'pessoas',$telefonesPessoa->pessoa_id]);
            }
            $this->Flash->error(__('Erro: Este numero não pode ser salvo. Tente novamente!'));
        }
        $pessoas = $this->TelefonesPessoas->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('telefonesPessoa', 'pessoas'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Telefones Pessoa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telefonesPessoa = $this->TelefonesPessoas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefonesPessoa = $this->TelefonesPessoas->patchEntity($telefonesPessoa, $this->request->getData());
            if ($this->TelefonesPessoas->save($telefonesPessoa)) {
                $this->Flash->success(__('The telefones pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The telefones pessoa could not be saved. Please, try again.'));
        }
        $pessoas = $this->TelefonesPessoas->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('telefonesPessoa', 'pessoas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefones Pessoa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telefonesPessoa = $this->TelefonesPessoas->get($id);
        if ($this->TelefonesPessoas->delete($telefonesPessoa)) {
            $this->Flash->success(__('Número deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Erro: o número não pode ser deletado. Tente novamente!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
