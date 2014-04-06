<?php
$filterSearch = $this->state->get('filter.search');
$orderCol = $this->state->get('list.ordering');
$orderDir = $this->state->get('list.direction');
?>

<form action="<?php echo JRoute::_('index.php'); ?>"
	method="post"
	name="adminForm"
	id="adminForm">
	<div class="pull-left">
	<div class="btn-group">
		<input type="text" value="<?php echo $filterSearch; ?>" name="filter_search"
			placeholder="<?php echo JText::_('JSEARCH_FILTER'); ?>" />
	</div>

	<div class="input-prepend input-append">
		<button type="submit" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_SUBMIT'); ?>">
			<i class="icon-search"></i>
		</button>
		<button id="btn-clear-filters" type="button" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_CLEAR'); ?>">
			<i class="icon-remove"></i>
		</button>
	</div>
	</div>
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
			<th><?php echo JHtml::_('grid.sort', 'id', 'a.id', $orderDir, $orderCol); ?></th>
			<th><?php echo JHtml::_('grid.sort', 'name', 'a.name', $orderDir, $orderCol); ?></th>
			<th><?php echo JHtml::_('grid.sort', 'species', 'a.species', $orderDir, $orderCol); ?></th>
			<th><?php echo JHtml::_('grid.sort', 'size', 'a.size', $orderDir, $orderCol); ?></th>
			<th><?php echo JHtml::_('grid.sort', 'age', 'a.age', $orderDir, $orderCol); ?></th>
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
	<input type="hidden" name="option" value="com_animal"/>
	<input type="hidden" name="boxchecked" value="0" />
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="filter_order" value="<?php echo $orderCol; ?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $orderDir; ?>" />
	<?php echo JHtml::_('form.token'); ?>
</form>

<script type="text/javascript">
	(function ($) {
		$(document).ready(function () {
			$('#btn-clear-filters').click(function () {
				$('input[name="filter_search"]').val('');

				this.form.submit();
			});
		});
	})(jQuery);
</script>