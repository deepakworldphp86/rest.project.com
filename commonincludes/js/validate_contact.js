// JavaScript Document
function validate_contact()
{
		var fname = $('#fname').val();
		fname = $.trim(fname);
		if(fname == '')
		{
			alert('Please Enter Your First Name.');
			$('#fname').focus();
			return false;
		}
		
		var lname = $('#lastName').val();
		lname = $.trim(lname);
		if(lname == '')
		{
			alert('Please Enter Your Last Name.');
			$('#lastName').focus();
			return false;
		}
		
		var hno = $('#hno').val();
		hno = $.trim(hno);
		if(hno == '')
		{
			alert('Please Enter Your H.No. & Street No. & Building No.');
			$('#hno').focus();
			return false;
		}
		
		var cntry = $('#country').val();
		cntry = $.trim(cntry);
		if(cntry == '')
		{
			alert('Please Select Your Country.');
			$('#country').focus();
			return false;
		}
		
		var state = $('#state').val();
		state = $.trim(state);
		if(state == '')
		{
			alert('Please Select Your State.');
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
		
		var pcode = $('#pcode').val();
		pcode = $.trim(pcode);
		if(pcode == '')
		{
			alert('Please Enter Your Pincode No.');
			$('#pcode').focus();
			return false;
		}
		
		var qualify = $('#qlist').val();
		qualify = $.trim(qualify);
		if(qualify == '')
		{
			alert('Please Select Your Qualification.');
			$('#qlist').focus();
			return false;
		}
		
		var job = $('#jprofile').val();
		job = $.trim(job);
		if(job == '')
		{
			alert('Please Enter Your Job Profile.');
			$('#jprofile').focus();
			return false;
		}
		
		var mob = $('#mob1').val();
		mob = $.trim(mob);
		if(mob == '')
		{
			alert('Please Enter Your First Mobile No.');
			$('#mob1').focus();
			return false;
		}
		
		var mob1 = $('#mob2').val();
		mob1 = $.trim(mob1);
		if(mob1 == '')
		{
			alert('Please Enter Your Second Mobile No.');
			$('#mob2').focus();
			return false;
		}
		
		var p_num = $('#phone').val();
		p_num = $.trim(p_num);
		if(p_num == '')
		{
			alert('Please Enter Your Phone No.');
			$('#phone').focus();
			return false;
		}
		
		var eid = $('#email_id').val();
		eid = $.trim(eid);
		if(eid == '')
		{
			alert('Please Enter Your Email Id.');
			$('#email_id').focus();
			return false;
		}		
}