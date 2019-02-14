/*
  publish.js - Thu Mar  8 20:03:17 CST 2018
  saving articles to the database.
  
  INSERT INTO current_table_state (the_table,current_record,is_public,last_edit_access) VALUES ('cecinestpasunewordpress_archive', 1,0,'2018-03-20');
*/

$(document).ready(function(){
	$("#publish").click(function(evt){
// 		console.log($('article'));
		var db_data = {};

// 		console.log($('article').html());
		db_data[ 'content' ] = $('article').html();
		db_data['title'] = $('article h2').html();
		db_data['article'] = $('article').html();
		
		db_data['current_record'] = $("#current_record").val();
		
		
		$.ajax({
		    url: '/cecinestpasunewordpress/authorized/database_access.php',
		    data :{
		        id: 'publish',
		        data: db_data
		    },
		    type: 'POST',
		    dataType: 'json',
		    success: function(json) {
		        console.log(json);
		    },
		     error: function() {
                alert( "nope" );
                console.log( "Error: " + errorThrown );
                console.log( "Status: " + status );
                console.dir( xhr );
		    }
		});
	});
});