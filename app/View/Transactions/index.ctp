<h1>Users transactions</h1>
<div class="row-fluid">
<div class="span8">

<?php echo $this->Html->link( 'Add New Transaction', array( 'action' => 'add'), array( 'class' => 'pull-right')); ?>
<?php echo $this->Html->link( 'All', array( 'action' => 'index')); ?>
<?php echo $this->Html->link( 'Positive', array( 'action' => 'positive')); ?>
<?php echo $this->Html->link( 'Negative', array( 'action' => 'negative')); ?>

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
	    
	<?php foreach ($transactions as $transaction):?>
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
</table>
</div>
<div class="span4">
Statistic<br>
<?php	$sum_value = 0;	
	foreach ($transactions as $t){
		$sum_value += $t['Transaction']['value'];
		echo '<br /><script type="text/javascript">alert('.$sum_value.');</script>';
	}
	echo '<br /><script type="text/javascript">alert('.$sum_value.');</script>';
	echo 'Value '. $sum_value;

?>
</div>
</div>
