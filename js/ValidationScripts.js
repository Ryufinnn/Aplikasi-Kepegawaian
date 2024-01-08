
function validateString(e, testChars)
{
	return keyStrokeTest(eventTest(e), testChars);
}

function eventTest(e)
{
	if (window.event)
		return window.event.keyCode;
	else if (e)
		return e.which;
	else
		return null;
}

function keyStrokeTest(key, testChars)
{
	var keychar;
	
	keychar = String.fromCharCode(key);

	// control keys except enter which is key 13
	if ((key==null) || (key==0) || (key==8) ||	(key==9) || (key==27))
		return true;

	// test against valid characters
	else if (((testChars).indexOf(keychar) > -1))
		return true;

	else
		return false;
}

function alphaNumeric(e)
{
	return validateString(e, "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789")
}

function alphaNumericAndSeparator(e)
{
	return validateString(e, "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789,/- ")
}

function alphaOnly(e)
{
	return validateString(e, "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz")
}

function alphaOnlyPlusSpace(e)
{
	return validateString(e, "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz ")
}

function charactersOnly(e)
{
	return validateString(e, "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.'- ")
}

function numbersOnly(e, dec)
{
	if (dec)
		return validateString(e, "0123456789.");
	else
		return validateString(e, "0123456789");
		window.alert('maaf');
}

function IgnoreEnter(event)
{
	if ((event.which && event.which == 13) || (event.keyCode && event.keyCode == 13))
		return false;
	else
		return true;
}

function validateDate(source, arguments)
{
	//return true;
	if (isDate(arguments.Value))
		arguments.IsValid=true;
	else
		arguments.IsValid=false;
}

function isDate(dateString)
{
	if ((dateString.length != 5) && dateString.length != 7)
		return false;
	/*
	var theDate=new Date();

	day = dateString.substring(0,2);
	month = dateString.substring(2,5);

	if (dateString.length == 5)
		year = theDate.getYear();
	else
		year = "20" + dateString.substring(5,7);
		
	if (!isInteger(day))
		return false;

	if (!((day > 0) && (day <32)))
		return false;
	*/		

	return true;
}

/*
Purpose: return true if the date is valid, false otherwise

Arguments:	day integer representing day of month
			month integer representing month of year
			year integer representing year

Variables: dteDate - date object
*/
function isValidDate(day,month,year)
{
	var dteDate;

	//set up a Date object based on the day, month and year arguments
	//javascript months start at 0 (0-11 instead of 1-12)
	//dteDate=new Date(year,month,day);
	dteDate=new Date(day + " " + month + " " + year);

	alert(dteDate.toString());

	/*
	Javascript Dates are a little too forgiving and will change the date to a reasonable guess if it's invalid. We'll use this to our advantage by creating the date object and then comparing it to the details we put it. If the Date object is different, then it must have been an invalid date to start with...
	*/

	return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
}

/*
function isDigit(num) 
{
	if (num.length>1)
		return false;

	var string="1234567890";

	if (string.indexOf(num)!=-1)
		return true;

	return false;
}

function isInteger(val)
{
	//if (isBlank(val))
	//	return false;

	for(var i=0;i<val.length;i++)
	{
		if(!isDigit(val.charAt(i)))
			return false;
	}	
	return true;
}

function isNumeric(val)
{
	return(parseFloat(val,10)==(val*1));
}
*/




