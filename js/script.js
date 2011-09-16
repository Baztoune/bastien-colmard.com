/* Author: 

*/
$(document).ready(function(){
	$('#gimmeMoreSection').hide();
	$('#gimmeMore').click(function(e){
		$(e.target).remove();
		$('#gimmeMoreSection').show(1000);
	});
});






















