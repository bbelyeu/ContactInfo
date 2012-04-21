<div class="contactTypes view">
<h2><?php  echo __('Contact Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactType['ContactType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contactType['ContactType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contactType['ContactType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contactType['ContactType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact Type'), '/admin/contact_types/edit/'.$contactType['ContactType']['id']); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Type'), '/admin/contact_types/delete/'.$contactType['ContactType']['id'], null, __('Are you sure you want to delete # %s?', $contactType['ContactType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Types'), '/admin/contact_types'); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Type'), '/admin/contact_types/add'); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), '/admin/contacts'); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), '/admin/contacts/add'); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contacts');?></h3>
	<?php if (!empty($contactType['Contact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact Type Id'); ?></th>
		<th><?php echo __('Info'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contactType['Contact'] as $contact): ?>
		<tr>
			<td><?php echo $contact['id'];?></td>
			<td><?php echo $contact['contact_type_id'];?></td>
			<td><?php echo $contact['info'];?></td>
			<td><?php echo $contact['created'];?></td>
			<td><?php echo $contact['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
