<h1>Add Transaction</h1>
<?php
echo $this->Form->create('Transaction');
?>
<fieldset>
<?php
echo $this->Form->input('value');
echo $this->Form->input('created');
echo $this->Form->input('category');
echo $this->Form->input('Transaction.Tag', array('label'=>'At least one Tag', 'type'=>'select', 'multiple'=>true));
echo $this->Form->input('payment_type');

?>
</fieldset>
<?php
echo $this->Form->end('Save Transaction');
?>
<div class="well">dddd</div>