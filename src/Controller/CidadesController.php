<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cidade Controller
 *
 * @property \App\Model\Table\CidadeTable $Cidade
 *
 * @method \App\Model\Entity\Cidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CidadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Estados']
        ];
        $cidades = $this->paginate($this->Cidades);

        $this->set(compact('cidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cidade = $this->Cidades->get($id, [
            'contain' => ['Estados', 'Bairros']
        ]);

        $this->set('cidade', $cidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cidade = $this->Cidades->newEntity();
        if ($this->request->is('post')) {
            $cidade = $this->Cidades->patchEntity($cidade, $this->request->getData());
            if ($this->Cidades->save($cidade)) {
                $this->Flash->success(__('Cidade salva com sucesso!'));

                return $this->redirect(['action' => 'add', 'controller' => 'bairros']);
            }
            $this->Flash->error(__('Erro: Cidade não pode ser salvo. Tente novamente!'));
        }
        $estados = $this->Cidades->Estados->find('list', ['limit' => 200]);
        $this->set(compact('cidade', 'estados'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cidade = $this->Cidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cidade = $this->Cidades->patchEntity($cidade, $this->request->getData());
            if ($this->Cidades->save($cidade)) {
                $this->Flash->success(__('Cidade salva com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro: Cidade não pode ser salva. Tente novamente!'));
        }
        $estados = $this->Cidades->Estados->find('list', ['limit' => 200]);
        $this->set(compact('cidade', 'estados'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cidade = $this->Cidade->get($id);
        if ($this->Cidade->delete($cidade)) {
            $this->Flash->success(__('The cidade has been deleted.'));
        } else {
            $this->Flash->error(__('The cidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
