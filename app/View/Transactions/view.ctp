<?php
if (!Configure::read('debug')):
throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<h2><?php echo __d('cake_dev', 'Release Notes for CakePHP %s.', Configure::version()); ?></h2>
<?php
if (Configure::read('debug') > 0):
Debugger::checkSecurityKeys();
endif;
?>

<h1><?php echo $transaction['Transaction']['id']; ?></h1>
hello
<dl class="dl-horizontal">
	<dt>Value</dt>
	<dd><?php echo $transaction['Transaction']['value']; ?></dd>
	<dt>Created</dt>
	<dd><?php echo $transaction['Transaction']['created']; ?></dd>
	<dt>Category</dt>
	<dd><?php echo $transaction['Transaction']['category']; ?></dd>
	<dt>Payment type</dt>
	<dd><?php echo $transaction['Transaction']['payment_type']; ?></dd>
</dl>
