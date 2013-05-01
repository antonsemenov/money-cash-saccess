<h1>Users transactions</h1>
<?php echo $this->Html->link( 'Add Transaction', array( 'action' => 'add')); ?>
<?php echo $this->Html->link( 'Positive', array( 'action' => 'positive')); ?>
<div class="row-fluid">
<div class="span8">
<table class="table">
    <tr>
        <th>User id</th>
        <th>Value</th>
	<th>Created time</th>
	<th>Category</th>
	<th>Tags</th>
	<th>Actions</th>
			
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($transactions as $transaction): ?>
    <tr>
	<td><?php echo  $transaction['Transaction']['user_id']; ?></td>
        <td><?php echo  $transaction['Transaction']['value']; ?></td>
        <td><?php echo  $transaction['Transaction']['created']; ?></td>
        <td><?php echo  $transaction['Transaction']['category']; ?></td>	
	<td>
	<?php foreach ($transaction['Tag'] as $tag){
		echo $tag['label']. ' ' ; 
	} ?>
			
	<td>	
	<?php
	echo $this->Html->link('Info', array('controller' => 'transactions', 'action' =>'view', $transaction['Transaction']['id']));
	echo ' ';	
	echo $this->Form->postLink('Delete', array('action' => 'delete', $transaction['Transaction']['id']), array('confirm' => 'Are you sure?'));
	echo ' ';
	echo $this->Html->link('Edit', array('action' => 'edit', $transaction['Transaction']['id'])); ?>
	</td>
    </tr>
	<?php endforeach; ?>
	<?php unset($transaction); ?>
</table>
</div>
<div class="span4">
Result
</div>
</div>
