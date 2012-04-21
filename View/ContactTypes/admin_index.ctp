<div class="contactTypes index">
	<h2><?php echo __('Contact Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($contactTypes as $contactType): ?>
	<tr>
		<td><?php echo h($contactType['ContactType']['id']); ?>&nbsp;</td>
		<td><?php echo h($contactType['ContactType']['name']); ?>&nbsp;</td>
		<td><?php echo h($contactType['ContactType']['created']); ?>&nbsp;</td>
		<td><?php echo h($contactType['ContactType']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactType['ContactType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactType['ContactType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactType['ContactType']['id']), null, __('Are you sure you want to delete # %s?', $contactType['ContactType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contact Type'), '/admin/contact_types/add'); ?></li>
		<li><?php echo $this->Html->link(__('List Contacts'), '/admin/contacts'); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), '/admin/contacts/add'); ?> </li>
	</ul>
</div>
