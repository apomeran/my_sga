<?php
/* @var $data NfyQueue */
/* @var $index string name of current queue application component */
/* @var $subscriptions NfyDbSubscription[] */
$supportSubscriptions = true;
try {
	$subscriptions = $data->getSubscriptions();
} catch (CException $e) {
	$supportSubscriptions = false;
}
?>

<h3><?php echo CHtml::encode($data->label); ?> <small><?php echo CHtml::link(Yii::t('NfyModule.app','Ver todos los mensajes'), array('messages', 'queue_name'=>$index))?></small></h3>
<?php if ($supportSubscriptions): ?>
<p>
	<?php //echo CHtml::link(Yii::t('NfyModule.app', 'Subscribe'), array('subscribe', 'queue_name'=>$index)); echo '/';?> 
	<?php //echo CHtml::link(Yii::t('NfyModule.app', 'Unsubscribe'), array('unsubscribe', 'queue_name'=>$index)); ?>
</p>
<?php endif; ?>
<?php if (!empty($subscriptions)): ?>
	<p>
		<?php //echo Yii::t('NfyModule.app', 'Canales'); ?>
	</p>
	<ul>
<?php foreach($subscriptions as $subscription): ?>
		
			<?php echo CHtml::link(
				CHtml::encode("Enviar un mensaje"),
				array('messages', 'queue_name'=>$index, 'subscriber_id'=>$subscription->subscriber_id),
				array('title'=>implode("\n",$subscription->categories))
			); 
			break;
			?>
		
<?php endforeach; ?>
	</ul>
<?php endif; ?>
