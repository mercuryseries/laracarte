$(function(){
	$('.hide-by-default').children('div').hide();

	$('.slider-arrow').on('click', function(e){
		e.preventDefault();

		var $fieldset = $(this).closest('fieldset');
		var $icon = $fieldset.find('span > i');
		var $iconClass = $icon.attr('class');

		if($iconClass === 'fa fa-chevron-up'){
			$icon.removeClass('fa fa-chevron-up');
			$icon.addClass('fa fa-chevron-down');
		} else {
			$icon.removeClass('fa fa-chevron-down');
			$icon.addClass('fa fa-chevron-up');
		}

		$fieldset.children('div').slideToggle();
	})
})