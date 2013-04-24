<h1>Users transactions</h1>
<table>
    <tr>
        <th>Id</th>
        <th>User id</th>
        <th>Value</th>
		<th>Created time</th>
		<th>Category</th>
		<th>Payment type</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($transactions as $transaction): ?>
    <tr>
        <td><?php echo $transaction['Transaction']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($transaction['Transaction']['user_id'],
array('controller' => 'transactions', 'action' => 'view', $transaction['Transaction']['id'])); ?>
        </td>
        <td><?php echo $transaction['Transaction']['value']; ?></td>
        <td><?php echo $transaction['Transaction']['created']; ?></td>
        <td><?php echo $transaction['Transaction']['category']; ?></td>
		<td><?php echo $transaction['Transaction']['payment_type']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($transaction); ?>
</table>