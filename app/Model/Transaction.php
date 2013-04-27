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
	
	$finded = $this->field('id', array('id' => $transaction, 'user_id' => $user));
    $this->Session->setFlash($$finded. 'h1');
	
	return $finded  === $transaction;
}
}
?>