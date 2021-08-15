	function get(id)
	{
		return document.getElementById(id);
	}
	
	function validate()
	{
		refresh();
		

		if(get("room_no").value == "")
		{
		hasError = true;
		get("err_room_no").innerHTML = "<span style='color: red;'>  Room No. required.</span>";
		}
		else if(get("room_no").value.length != 4)
		{
		hasError = true;
		get("err_room_no").innerHTML = "<span style='color: red;'>  Room No. length must be 4.</span>";
		}
		
		
		
		 if(get("c_id").selectedIndex == 0)
		{
		hasError = true;
		get("err_c_id").innerHTML = "<span style='color: red;'>  Category required.</span>";
		} 
		
		
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		
		get("err_room_no").innerHTML = "";
		//get("c_id").innerHTML = "";
	}