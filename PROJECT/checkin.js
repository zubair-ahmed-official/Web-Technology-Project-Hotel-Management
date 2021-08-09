function get(id)
	{
		return document.getElementById(id);
	}

	function validate()
	{
		refresh();
		
		if(get("cname").value == "")
		{
		hasError = true;
		get("err_cname").innerHTML = "<span style='color: red;'>Customer Name required.</span>";
		}
		else if(get("cname").value.length > 0)
		{
		if(get("cname").value.length < 5)
		{
		hasError = true;
		get("err_cname").innerHTML = "<span style='color: red;'>Minimum 5 characters.</span>";
		}
		}
		
		
		if(get("cid").value == "")
		{
		hasError = true;
		get("err_cid").innerHTML = "<span style='color: red;'>Customer ID required.</span>";
		}
		
		if(get("phone").value == "")
		{
		hasError = true;
		get("err_phone").innerHTML = "<span style='color: red;'>Phone required.</span>";
		} 
		
		else if(get("phone").value.length > 0)
		{
		if(get("phone").value.length != 11)
		{
		hasError = true;
		get("err_phone").innerHTML = "<span style='color: red;'>Invalid Phone Number.</span>";
		}
		}

		if(get("room_no").value == "")
		{
		hasError = true;
		get("err_room_no").innerHTML = "<span style='color: red;'>Room No. required.</span>";
		}
		
		if(get("btime").value == "")
		{
		hasError = true;
		get("err_btime").innerHTML = "<span style='color: red;'>Checkin Time required.</span>";
		}
		
		if(get("bdays").value == "")
		{
		hasError = true;
		get("err_bdays").innerHTML = "<span style='color: red;'>Checkout Time required.</span>";
		}
		
		if(get("clink").value == "")
		{
		hasError = true;
		get("err_clink").innerHTML = "<span style='color: red;'>Customer account link required.</span>";
		}
		
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		get("err_cname").innerHTML = "";
		get("err_cid").innerHTML = "";
		get("err_phone").innerHTML = "";
		get("err_room_no").innerHTML = "";
		get("err_phone").innerHTML = "";
		get("err_btime").innerHTML = "";
		get("err_bdays").innerHTML = "";
		get("err_clink").innerHTML = "";
	}