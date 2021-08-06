function get(id)
	{
		return document.getElementById(id);
	}

	function validate()
	{
		//alert("OK");
		refresh();
		
		if(get("ename").value == "")
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
		//get("err_p_image").innerHTML = "";
	}