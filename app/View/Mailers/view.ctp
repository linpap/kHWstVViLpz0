<div class="emails view">
<h2><?php  echo __('Email');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($email['Email']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($email['User']['id'], array('controller' => 'users', 'action' => 'view', $email['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($email['Email']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($email['Email']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($email['Email']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text Content'); ?></dt>
		<dd>
			<?php echo h($email['Email']['text_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Html Content'); ?></dt>
		<dd>
			<?php echo h($email['Email']['html_content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Email'), array('action' => 'edit', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Email'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
