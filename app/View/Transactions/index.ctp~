<h1>Users transactions</h1>
<?php echo $this->Html->link( 'Add Transaction', array( 'action' => 'add')); ?>
<table class="table">
    <tr>
        <th>Id</th>
        <th>User id</th>
        <th>Value</th>
		<th>Created time</th>
		<th>Category</th>
		<th>Payment type</th>
		<th>Actions</th>
		
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($transactions as $transaction): ?>
    <?php $table_row = 	"<tr>
        <td>". $transaction['Transaction']['id']. "</td>
	<td>". $transaction['Transaction']['user_id']. "</td>
        <td>". $transaction['Transaction']['value']. "</td>
        <td>". $transaction['Transaction']['created']. "</td>
        <td>". $transaction['Transaction']['category']. "</td>
	<td>". $transaction['Transaction']['payment_type']. "</td>
		<td>" . $this->Form->postLink('Delete', array('action' => 'delete', $transaction['Transaction']['id']), array('confirm' => 'Are you sure?')) .
		$this->Html->link('Edit', array('action' => 'edit', $transaction['Transaction']['id'])).
		"</td>
</tr>";?>
	<?php echo $this->Html->link($transaction['Transaction']['user_id'], array('controller' => 'transactions', 'action' =>'view', $transaction['Transaction']['id'])); ?>

	<?php endforeach; ?>
	<?php unset($transaction); ?>
</table>
