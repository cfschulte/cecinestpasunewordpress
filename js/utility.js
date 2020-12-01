/************

/cecinestpasunewordpress/js/utility.js - Mon Dec 11 10:17:52 CST 2017
Functions that most things might need.

*************/


function toggleDate( toggledID, dateInputID ) {
		if($(toggledID).is(':checked')) {
			theDate = today();
			$(dateInputID).val(theDate);
		} else {
			$(dateInputID).val('');
		}
	
}

function today_1() {
	var theDate = new Date();
	var day = theDate.getDate();
	var month = theDate.getMonth()+1;
	var year = theDate.getFullYear();
	
	var dateStr = year+'-'+month+'-'+day;
    return dateStr;
}



function today() {
	var d = new Date();

	var month = d.getMonth()+1;
	var day = d.getDate();
	var year = d.getFullYear();

	var output = year + '-' +
		(month<10 ? '0' : '') + month + '-' +
		(day<10 ? '0' : '') + day;
	return output;
}

