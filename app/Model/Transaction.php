<?php
class Transaction extends AppModel {
    public $validate = array(
        'value' => array(
            'rule' => 'notEmpty'
        ),
        'payment_type' => array(
            'rule' => 'notEmpty'
        ),
    );
	
	public function isOwnedBy($transaction, $user) {
	
	return !($this->field('id', array('id' => $transaction, 'user_id' => $user)) === $transaction);
}
}
?>