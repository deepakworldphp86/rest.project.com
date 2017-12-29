// JavaScript Document
function checkLogin()
{
		var email_Id = $('#eid').val();
		email_Id = $.trim(email_Id);
		if(email_Id == '')
		{
			alert('Please Enter Your Email-Id.');
			$('#eid').focus();
			return false;
		}
		
		var password = $('#pass').val();
		password = $.trim(password);
		if(password == '')
		{
			alert('Please Enter Your Password.');
			$('#pass').focus();
			return false;
		}
}