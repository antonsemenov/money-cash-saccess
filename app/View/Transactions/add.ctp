<h1>Add Transaction</h1>
<?php

echo $this->Form->create('Transaction');

?>
<fieldset>
<div class="row-fluid">
	<div class="span6">
	<?php 
		echo $this->Form->input('value'); 
		echo $this->Form->input('category');
	?>
	</div>
	<div class="span6">
	<?php 
		echo $this->Form->input('Transaction.Tag', array('label'=>'Tags', 'type'=>'select', 'multiple'=>true));
		echo $this->Form->input('payment_type');		
	?>
	</div>
	<?php echo $this->Form->input('created');?>
</div>
</fieldset>
<?php
echo $this->Form->end('Save Transaction');
?>

