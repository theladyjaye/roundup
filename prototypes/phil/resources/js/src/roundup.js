$(function() {
	$.Window = $(window);
	$.Body = $('body');
	$.Document = $(document);

	$.$sortable = $('.js-sortable');
	$.$draggable = $('.js-draggable');
	$.$droppable = $('.js-droppable');


	// draggable items
	$.$draggable.draggable({
		helper: 'clone',
		connectToSortable: '.js-sortable',
		revert: 'invalid',
		revertDuration: 250,
		revertEasing: 'easeOutBack',
		cursor: 'move'
	}).on('dblclick', function() { // double click items to add
		add_item($(this).clone());
	});

	$.$droppable.droppable({ // droppable area
		accept: '.js-draggable:not(.ui-sortable-helper)',
		drop: function(event, ui) {
			add_item(ui.draggable);
		}
	});

	$.Body.on('click', '.js-delete', delete_item);

	sortable();
});

function add_item($item)
{
	$.$droppable.append($item.toggleClass('js-draggable'));
	sortable();
}

function delete_item(e)
{
	var $target = $(e.target),
		$item = $target.parents('.js-listitem').animate({
			opacity: 0
		}, 500, function() {
			$(this).remove();
		});
}

function sortable()
{
	$.$sortable.sortable({
		axis: 'y',
		scroll: false,
		placeholder: 'placeholder',
		items: '.js-listitem',
		tolerance: 'pointer',
		revert: 'invalid',
		revertDuration: 250,
		revertEasing: 'easeOutBack'
	}).disableSelection();
}