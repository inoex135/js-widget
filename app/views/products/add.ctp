<div class="products form">
<?php echo $this->Form->create('Product',array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('product_name');
		echo $this->Form->input('company_name');
		echo $this->Form->input('url');
		echo $this->Form->input('price');
		echo $this->Form->input('description');
		echo $this->Form->input('image',array('label'=>'Product Image','type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index'));?></li>
	</ul>
</div>
