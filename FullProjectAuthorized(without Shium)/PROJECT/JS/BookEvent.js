function get(id)
	{
		return document.getElementById(id);
	}

	function validate()
	{
		//alert("OK");
		refresh();
		
		if(get("ename").selectedIndex == 0)
		{
		hasError = true;
		get("err_ename").innerHTML = "<span style='color: red;'>  Event Name required.</span>";
		}
		
		if(get("cname").value == "")
		{
		hasError = true;
		get("err_cname").innerHTML = "<span style='color: red;'>  Customer Name required.</span>";
		}
		
		if(get("cid").value == "")
		{
		hasError = true;
		get("err_cid").innerHTML = "<span style='color: red;'>  Customer ID required.</span>";
		}
		
		if(get("members").value == "")
		{
		hasError = true;
		get("err_members").innerHTML = "<span style='color: red;'>  Number of Members required.</span>";
		}

		if(get("phone").value == "")
		{
		hasError = true;
		get("err_phone").innerHTML = "<span style='color: red;'>  Phone Number required.</span>";
		}
		
		else if(get("phone").value.length > 0)
		{
			if(get("phone").value.length != 11)
			{
			hasError = true;
			get("err_phone").innerHTML = "<span style='color: red;'>  Invalid Phone Number.</span>";
			}
		}
		
		if(get("email").value == "")
		{
		hasError = true;
		get("err_email").innerHTML = "<span style='color: red;'>  Email required.</span>";
		}
		else if(get("email").value.includes("@") && get("email").value.includes(".")  == false)
		{
		hasError = true;
		get("err_email").innerHTML = "<span style='color: red;'>  Invalid Email.</span>";
		}
		
		
		if(get("clink").value == "")
		{
		hasError = true;
		get("err_clink").innerHTML = "<span style='color: red;'>  Customer Link required.</span>";
		}
		
		/* if(get("p_image").value == "")
		{
		hasError = true;
		get("err_p_image").innerHTML = "<span style='color: red;'>Checkin Time required.</span>";
		} */
		
		
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		
		get("err_ename").innerHTML = "";
		get("err_cname").innerHTML = "";
		get("err_cid").innerHTML = "";
		get("err_members").innerHTML = "";
		get("err_phone").innerHTML = "";
		get("err_email").innerHTML = "";
		get("err_clink").innerHTML = "";
		//get("err_p_image").innerHTML = "";
	}