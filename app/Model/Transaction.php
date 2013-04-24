<?php
class Transaction extends AppModel {
    public $validate = array(
        'title' => array(
            'value' => 'notEmpty'
        ),
        'body' => array(
            'payment_type' => 'notEmpty'
        )
    );

}
?>