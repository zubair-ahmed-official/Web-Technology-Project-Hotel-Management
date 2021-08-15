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
		
		/*var classic = document.getElementsByName("hear[]");
		for(var i=0;i<classic.length;i++)
		{
			if(classic[i].checked)
			{
				return true;
			}
		}
		return false;*/
	}
	function validatePlates(){
		var plates = document.getElementsByName("plates[]");
		var flag =false;
		for(var i=0;i<plates.length;i++){
			if(plates[i].selectedIndex > 0){
			
				return true;
			}
		}
		return flag;
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
		else if(get("phone").value.length > 0)
		{
		if(get("phone").value.length != 11)
		{
		hasError = true;
		get("err_phone").innerHTML = "<h3 style='color: red;'> Invalid Phone Number.</h3>";
		}
		}

		if(get("Cid").value == "")
		{
		hasError = true;
		get("err_Cid").innerHTML = "<h3 style='color: red;'>  Customer ID required.</h3>";
		}
		
	     if(!validatePlates())
		{
		hasError = true;
		//var errs = document.getElementsByName("")
		get("err_plates").innerHTML = "<h3 style='color: red;'>  Number of Plates Required.</h3>";
		}  
		
		//document.write("Hello");
		if(validateSchedule() != true)
		{
		hasError = true;
		get("err_hear").innerHTML = "<h3 style='color: red;'>  Select Food and Number of Plates Precisely to order.</h3>";
		}
		
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		get("err_hear").innerHTML = "";
		get("err_RoomNo").innerHTML = "";
		get("err_phone").innerHTML = "";
		get("err_Cid").innerHTML = "";
		get("err_plates").innerHTML = "";
	}