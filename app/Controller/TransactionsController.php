<?php
class TransactionsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('transactions', $this->Transaction->find('all'));
    }
	
	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid еransaction'));
        }

        $transaction = $this->Transaction->findById($id);
        if (!$transaction) {
            throw new NotFoundException(__('Invalid transaction'));
        }
        $this->set('transaction', $transaction);
    }
	
	public function add() {
        if ($this->request->is('transaction')) {
            $this->Transaction->create();
            if ($this->Transaction->save($this->request->data)) {
                $this->Session->setFlash('Your transaction has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your transaction.');
            }
        }
    }
}   
?>