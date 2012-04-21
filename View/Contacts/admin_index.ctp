<div class="contacts index">
	<h2><?php echo __('Contacts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('contact_type_id');?></th>
			<th><?php echo $this->Paginator->sort('info');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact['Contact']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contact['ContactType']['name'], array('controller' => 'contact_types', 'action' => 'view', $contact['ContactType']['id'])); ?>
		</td>
		<td><?php echo h($contact['Contact']['info']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['created']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), '/admin/contacts/view/'.$contact['Contact']['id']); ?>
			<?php echo $this->Html->link(__('Edit'), '/admin/contacts/edit/'.$contact['Contact']['id']); ?>
			<?php echo $this->Form->postLink(__('Delete'), '/admin/contacts/delete/'.$contact['Contact']['id'], null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Contact'), '/admin/contacts/add'); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Types'), '/admin/contact_types'); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Type'), '/admin/contact_types/add'); ?> </li>
	</ul>
</div>
