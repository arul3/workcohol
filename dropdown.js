	$('#country a').on('click', function(event) {
    

    var val = $(event.target).attr('data-value');

   $('#country_value').val($(event.target).attr(val));

   alert($(event.target).attr('data-value'));
   
   alert($("#country_value").val());
});



	$('#category a').on('click', function(event) {
    
   $('#category_value').val($(event.target).attr('data-value'));
   alert($(event.target).attr('data-value'));
   alert($("#category_value").val());


});


	$('#state').on('click', function(event) {
    
   $('#state_value').val($(event.target).attr('data-value'));

   alert($(event.target).attr('data-value'));
   alert($("#state_value").val());
});

	
