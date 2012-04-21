<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php echo __('Admin Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('contact_type_id');
		echo $this->Form->input('info');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), '/admin/contacts');?></li>
		<li><?php echo $this->Html->link(__('List Contact Types'), '/admin/contact_types'); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Type'), '/admin/contact_types/add'); ?> </li>
	</ul>
</div>
