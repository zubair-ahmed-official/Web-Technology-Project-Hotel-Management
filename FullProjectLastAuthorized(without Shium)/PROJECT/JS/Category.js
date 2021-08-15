function get(id)
	{
		return document.getElementById(id);
	}

	function validate()
	{
		//alert("OK");
		refresh();
		
		if(get("name").value == "")
		{
		hasError = true;
		get("err_name").innerHTML = "<span style='color: red;'>  Customer Name required.</span>";
		}
		
		if(get("price").value == "")
		{
		hasError = true;
		get("err_price").innerHTML = "<span style='color: red;'>  Price required.</span>";
		}
		
		if(get("qty").value == "")
		{
		hasError = true;
		get("err_qty").innerHTML = "<span style='color: red;'>  Number of Beds required.</span>";
		}

		if(get("description").value == "")
		{
		hasError = true;
		get("err_description").innerHTML = "<span style='color: red;'>  Description required.</span>";
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
		
		get("err_name").innerHTML = "";
		get("err_price").innerHTML = "";
		get("err_qty").innerHTML = "";
		get("err_description").innerHTML = "";
		//get("err_p_image").innerHTML = "";
	}