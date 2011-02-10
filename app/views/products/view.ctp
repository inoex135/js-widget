<div class="products view">
<h2><?php  __('Product');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['product_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('URL'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['company_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['description']; ?>
			&nbsp;
		</dd>
		<dt>Images</dt>
		<dd>
			<?php foreach($product['files'] as $image):?>
				<div>
				<?php echo $html->image($image);?>
				</div>
			<?php endforeach;?>
		</dd>
		<dt>Add Image</dt>
		<dd>
			<?php echo $this->Form->create('Product',array('type'=>'file','url'=>'/products/add_image'));?>
			<?php echo $this->Form->input('id',array('value'=>$product['Product']['id']));?>
			<?php echo $this->Form->input('image',array('label'=>'Product Image','type'=>'file'));?>
			<?php echo $this->Form->end(__('Submit', true));?>
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product', true), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
