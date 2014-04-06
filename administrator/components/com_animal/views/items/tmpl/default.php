<form action="<?php echo JRoute::_('index.php'); ?>"
	method="post"
	name="adminForm"
	id="adminForm">
	<div>
		<div class="pull-right">
			<?php echo $this->pagination->getLimitBox(); ?>
		</div>
		<div class="clearfix"></div>
	</div>
	<table class="table table-bordered">
		<thead>
		<tr>
			<th><?php echo JHtml::_('grid.checkall'); ?></th>
			<th>id</th>
			<th>name</th>
			<th>species</th>
			<th>size</th>
			<th>age</th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<td colspan="3">
				<?php echo $this->pagination->getListFooter(); ?>
			</td>
		</tr>
		</tfoot>
		<tbody>
		<?php foreach ($this->items as $i => $item): ?>
			<tr>
				<td>
					<?php echo JHtml::_('grid.id', $i, $item->id); ?>
				</td>
				<td>
					<a href="<?php echo JRoute::_('index.php?option=com_animal&task=item.edit&id=' . $item->id); ?>">
					<?php echo $item->id; ?>
					</a>
				</td>
				<td>
					<?php echo $item->name; ?>
				</td>
				<td>
					<?php echo $item->species; ?>
				</td>
				<td>
					<?php echo $item->size; ?>
				</td>
				<td>
					<?php echo $item->age; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<input type="hidden" name="option" value="com_blog"/>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="task" value=""/>
	<?php echo JHtml::_('form.token'); ?>
</form>