<h1>Users transactions</h1>
<?php echo $this->Html->link( 'Add Transaction', array( 'action' => 'add')); ?>
<table>
    <tr>
        <th>User id</th>
		<th>Name</th>
		<th>Pass</th>
		<th>Role</th>
		
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['password']; ?></td>
        <td><?php echo $user['User']['role']; ?></td>
	</tr>
    <?php endforeach; ?>
    <?php unset($transaction); ?>
</table>