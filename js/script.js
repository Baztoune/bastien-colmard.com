/* Author: 

*/

$(document).ready(function(){
	$('#categorySelector').hide();
	$('#extendedDesc').hide();
	
	$('#gimmeMore').click(function(e){
		$(e.target).hide();
		$('#categorySelector').show();
		
		$('#webItemsContainer').quicksand($('#extendedDesc a'));
	});

	$('#extendedDesc a').each(function(i){
		$(this).attr('data-id',i);
	});
	
	$("#categorySelector li").click(function(elm){
		$('#webItemsContainer').quicksand(
			$('#extendedDesc').clone()
				.find('a[data-tags~="' + $(elm.target).attr('data-id')+ '"]')
		);
	})
});

