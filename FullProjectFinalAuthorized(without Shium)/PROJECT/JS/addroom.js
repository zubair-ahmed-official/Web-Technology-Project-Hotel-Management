	function get(id)
	{
		return document.getElementById(id);
	}
	/* function validatePlates()
	{
		var plates = document.getElementsByName("c_id");
		var flag =false;
		for(var i=0;i<c_id.length;i++){
			if(plates[i].selectedIndex > 0){
			
				return true;
			}
		}
		return flag;
	} */
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
		/* if(!validatePlates())
		{
		hasError = true;
		//var errs = document.getElementsByName("")
		get("err_c_id").innerHTML = "<h3 style='color: red;'>  Checkin Time required.</h3>";
		}   */
		
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		
		get("err_room_no").innerHTML = "";
		//get("c_id").innerHTML = "";
	}