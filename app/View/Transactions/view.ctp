<h1><?php echo h($transaction['Transactions']['value']); ?></h1>

<p><small>Created: <?php echo $transaction['Transaction']['created'] ?></small></p>

<p><?php echo $transaction['Transaction']['category']; ?></p>

<p><?php echo $transaction['Transaction']['payment_type']; ?></p>