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
	
	$this->Session->setFlash($transaction);
	$finded = $this->field('id', array('id' => $transaction, 'user_id' => $user));
    
	
	return $finded  === $transaction;
}
}
?>