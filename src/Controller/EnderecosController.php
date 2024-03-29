<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Endereco Controller
 *
 * @property \App\Model\Table\EnderecoTable $Endereco
 *
 * @method \App\Model\Entity\Endereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnderecosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 35,
            'contain' => ['Bairros']
            
        ];
        
        $endereco = $this->paginate($this->Enderecos);
        $enderecos = $this->Enderecos->find()->all();
        $this->set(compact('enderecos', 'bairros'));
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => ['Bairros', 'Pessoas']
        ]);

        $this->set('endereco', $endereco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Enderecos->newEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('Endereco salvo com sucesso!'));

                return $this->redirect(['action' => 'index', 'controller' => 'enderecos']);
            }
            $this->Flash->error(__('Erro: Endereco não pode ser salvo. Tente novamente!'));
        }
        $bairros = $this->Enderecos->Bairros->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'bairros'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->getData());
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('O endereço foi salvo com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro: endereço não pode ser editado!'));
        }
        $bairros = $this->Enderecos->Bairros->find('list', ['limit' => 200]);
        $this->set(compact('endereco', 'bairros'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Enderecos->get($id);
        if ($this->Enderecos->delete($endereco)) {
            $this->Flash->success(__('O endereço foi deletado com sucesso!'));
        } else {
            $this->Flash->error(__('O endereço não pode ser deletado, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
