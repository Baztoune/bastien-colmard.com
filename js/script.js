/* Author: 

*/
$(document).ready(function(){
	$('#categorySelector').hide();
	$('#extendedDesc a').hide();
	
	$('#gimmeMore').click(function(e){
		$(e.target).hide();
		$('#categorySelector').show();
		
		$('#extendedDesc a').show(1000);
	});
	

	

});

