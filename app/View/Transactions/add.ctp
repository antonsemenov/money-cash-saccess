<h1>Add Transaction</h1>
<?php
echo $this->Form->create('Transaction');
echo $this->Form->input('id');
echo $this->Form->input('user_id');
echo $this->Form->input('value');
echo $this->Form->input('created');
echo $this->Form->input('category');
echo $this->Form->input('payment_type');
echo $this->Form->end('Save Post');
?>