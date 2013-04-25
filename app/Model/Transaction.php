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

}
?>