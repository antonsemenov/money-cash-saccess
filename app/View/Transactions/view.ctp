<br>
<h1><?php echo $transaction['Transaction']['id']; ?><</h1>
<dl class="dl-horizontal">
	<dt>Value</dt>
	<dd><?php echo $transaction['Transaction']['value']; ?><</dd>
	<dt>Created</dt>
	<dd><?php echo $transaction['Transaction']['created']; ?></dd>
	<dt>Category</dt>
	<dd><?php echo $transaction['Transaction']['category']; ?></dd>
	<dt>Payment type</dt>
	<dd><?php echo $transaction['Transaction']['payment_type']; ?></dd>
</dl>
<br>
