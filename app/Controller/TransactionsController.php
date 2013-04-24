<?php
class TransactionsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('transactions', $this->Transaction->find('all'));
    }
}   
?>