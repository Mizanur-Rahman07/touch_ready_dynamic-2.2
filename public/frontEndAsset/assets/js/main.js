$(document).ready(function(){
    $('#qty_input').prop('disabled', true);
    $('#plus-btn').click(function(){
    	$('#qty_input').val(parseInt($('#qty_input').val()) + 1 );
    	    });
        $('#minus-btn').click(function(){
    	$('#qty_input').val(parseInt($('#qty_input').val()) - 1 );
    	if ($('#qty_input').val() == 0) {
			$('#qty_input').val(1);
		}

    	    });
 });

 

// for country auto select  ---------
	 // Fetch data from the JSON file containing country names and codes
	 $.getJSON('https://raw.githubusercontent.com/lukes/ISO-3166-Countries-with-Regional-Codes/master/all/all.json', function (data) {
		 // Iterate through each country in the JSON data
		 $.each(data, function (key, value) {
			 // Append an option for each country to the select element
			 $('#countrySelect').append('<option value="' + key + '">' + value.name + '</option>');
		 });
	 });
// for country auto select  -------------
