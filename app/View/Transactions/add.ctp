<h1>Edit Transaction</h1>
<?php
echo $this->Form->create('Transaction');
echo $this->Form->input('value');
echo $this->Form->input('created');
echo $this->Form->input('category');
echo $this->Form->input('Tags.Tag',array('label'=>'At least one Tag', 'type'=>'select', 'multiple'=>true));
echo $this->Form->input('payment_type');
echo $this->Form->end('Save Transaction');
?>