function get(id)
	{
		return document.getElementById(id);
	}

	function validateSchedule()
	{
		
		var classic = document.querySelector('input[name="hear[]"]:checked');
		
		if (classic == null)
		{
			return false;
		}
		return true;
		
		/*var gym = document.getElementsByName("hear[]");
		for(var i=0;i<gym.length;i++)
		{
			if(gym[i].checked)
			{
				return true;
			}
		}
		return false;*/
	}
	
	function validate()
	{
		refresh();
		
		if(get("RoomNo").value == "")
		{
		hasError = true;
		get("err_RoomNo").innerHTML = "<h3 style='color: red;'>  Room No required.</h3>";
		}
		
		if(get("phone").value == "")
		{
		hasError = true;
		get("err_phone").innerHTML = "<h3 style='color: red;'>  Phone required.</h3>";
		}

		if(get("Cid").value == "")
		{
		hasError = true;
		get("err_Cid").innerHTML = "<h3 style='color: red;'>  Customer ID required.</h3>";
		}
		
		/*if(get("plates").selectedIndex == 0)
		{
		hasError = true;
		get("err_plates").innerHTML = "<h3 style='color: red;'>  Number of Plates Required.</h3>";
		}*/
		
		//document.write("Hello");
		if(validateSchedule() != true)
		{
		hasError = true;
		get("err_hear").innerHTML = "<h3 style='color: red;'>  Select Food and Number of Plates Precisely to order.</h3>";
		}
		
		
		/*if(!get("7am-10am").checked && !get("11am-2pm").checked  && !get("4pm-7pm").checked && !get("7pm-10pm").checked)
		{
		hasError = true;
		get("err_hear").innerHTML = "Select schedule for reserving.";
		}*/
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		get("err_hear").innerHTML = "";
		get("err_RoomNo").innerHTML = "";
		get("err_phone").innerHTML = "";
		get("err_Cid").innerHTML = "";
		//get("err_plates").innerHTML = "";
	}