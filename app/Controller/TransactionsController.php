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

        $еransaction = $this->Transaction->findById($id);
        if (!$еransaction) {
            throw new NotFoundException(__('Invalid transaction'));
        }
        $this->set('transaction', $transaction);
    }
}   
?>