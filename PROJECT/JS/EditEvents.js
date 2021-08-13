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
		get("err_name").innerHTML = "<span style='color: red;'> Event Name required.</span>";
		}
		
		
		if(get("description").value == "")
		{
		hasError = true;
		get("err_description").innerHTML = "<span style='color: red;'>  Description required.</span>";
		}
		
		if(get("time").value == "")
		{
		hasError = true;
		get("err_time").innerHTML = "<span style='color: red;'>  Time required.</span>";
		}
		
		if(get("avl").value == "")
		{
		hasError = true;
		get("err_avl").innerHTML = "<span style='color: red;'>  Availability required.</span>";
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
		get("err_description").innerHTML = "";
		get("err_time").innerHTML = "";
		get("err_avl").innerHTML = "";
		
		//get("c_id").innerHTML = "";
	}