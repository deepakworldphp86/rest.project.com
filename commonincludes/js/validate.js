// JavaScript Document
function validate()
{	//alert($('#email').val());
	var eid = $('#email').val();
	eid = $.trim(eid);
	if(eid == '')
	{
		alert('Please Enter Your Email Id.');
		$('#email').focus();
		return false;
	}
	
	var pass = $('#password').val();
	pass = $.trim(pass);
	if(pass == '')
	{
		alert('Please Enter Your Password.');
		$('#password').focus();
		return false;
	}
	
	var cpass = $('#repass').val();
	cpass = $.trim(cpass);
	if(cpass != pass)
	{
		alert('Please Re-Enter Your Password.');
		$('#repass').val('');
		$('#repass').focus();
		return false;		
	}
	
	var fname = $('#firstName').val();
	fname = $.trim(fname);
	if(fname == '')
	{
		alert('Please Enter Your First Name.');
		$('#firstName').focus();
		return false;
	}
	
	var last_name = $('#lastName').val();
	last_name = $.trim(last_name);
	if(last_name == '')
	{
		alert('Please Enter Your Last Name');
		$('#lastName').focus();
		return false;
	}
	
	var h_number = $('#houseNumber').val();
	h_number = $.trim(h_number);
	if(h_number == '')
	{
		alert('Please Enter Your House No. & Street No. & Building No.');
		$('#houseNumber').focus();
		return false;
	}
	
	var country = $('#country').val();
	country = $.trim(country);
	if(country == '')
	{
		alert('Please Select Your Country');
		$('#country').focus();
		return false;
	}
	
	var state = $('#state').val();
	state = $.trim(state);
	if(state == '')
	{
		alert('Please Select Your State');
		$('#state').focus();
		return false;
	}
	
	var city = $('#city').val();
	city = $.trim(city);
	if(city == '')
	{
		alert('Please Enter Your City.');
		$('#city').focus();
		return false;
	}
	
	var p_code = $('#pincode').val();
	p_code = $.trim(p_code);
	if(p_code == '')
	{
		alert('Please Enter Your Pincode.');
		$('#pincode').focus();
		return false;
	}
	
	var phone_number = $('#phoneNumber').val();
	phone_number = $.trim(phone_number);
	if(phone_number == '')
	{
		alert('Please Enter Your Phone Number.');
		$('#phoneNumber').focus();
		return false;
	}
	
	var mobile_num = $('#mobileNumer').val();
	mobile_num = $.trim(mobile_num);
	if(mobile_num == '')
	{
		alert('Please Enter Your Mobile Number.');
		$('#mobileNumer').focus();
		return false;
	}
	
	var qualify = $('#qualification').val();
	qualify = $.trim(qualify);
	if(qualify == '')
	{
		alert('Please Select Your Educational Qualification.');
		$('#qualification').focus();
		return false;
	}
	
	/*var gender = $('#gender').val();
	gender = $.trim(gender);
	if(gender == '')
	{
		alert('Please Select Your Sex.');
		$('gender').focus();
		return false;
	}
	
	var hobb = $('#hobbies').val();
	hobb = $.trim(hobb);
	if(hobb == '')
	{
		alert('Please Select Your Hobbies.');
		$('#hobbies').focus();
		return false;
	}*/
}
