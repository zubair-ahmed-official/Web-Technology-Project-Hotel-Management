	function get(id)
	{
		return document.getElementById(id);
	}
	
	function validate()
	{
		refresh();
		

		if(get("name").value == "")
		{
		hasError = true;
		get("err_name").innerHTML = "<span style='color: red;'> Category Name required.</span>";
		}
		
		
		if(get("price").value == "")
		{
		hasError = true;
		get("err_price").innerHTML = "<span style='color: red;'>  Category price required.</span>";
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
		
		
		
		
		 /* if(get("c_id").selectedIndex == 0)
		{
		hasError = true;
		get("err_c_id").innerHTML = "<span style='color: red;'>  Category required.</span>";
		}  */
		
		
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		
		get("err_name").innerHTML = "";
		get("err_price").innerHTML = "";
		get("err_qty").innerHTML = "";
		get("err_description").innerHTML = "";
		//get("c_id").innerHTML = "";
	}