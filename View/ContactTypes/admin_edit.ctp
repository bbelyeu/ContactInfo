<div class="contactTypes form">
<?php echo $this->Form->create('ContactType');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Contact Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), '/admin/contact_types/delete/'.$this->Form->value('ContactType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContactType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Types'), '/admin/contact_types');?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), '/admin/contacts'); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), '/admin/contacts/add'); ?> </li>
	</ul>
</div>
