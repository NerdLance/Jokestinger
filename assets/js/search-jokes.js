$(document).ready(function(){
	$('button.close-alert').on('click', function(){
        $(this).parent().fadeOut(300);
    });
});