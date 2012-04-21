<div class="contacts view">
<h2><?php  echo __('Contact');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['ContactType']['name'], array('controller' => 'contact_types', 'action' => 'view', $contact['ContactType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Info'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), '/admin/contacts/edit/'.$contact['Contact']['id']); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), '/admin/contacts/delete/'.$contact['Contact']['id'], null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), '/admin/contacts'); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), '/admin/contacts/add'); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Types'), '/admin/contact_types'); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Type'), '/admin/contact_types/add'); ?> </li>
	</ul>
</div>
