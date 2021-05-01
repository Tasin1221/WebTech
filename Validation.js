function get(id){
		return document.getElementById(id);
	}


	function validatePass(s) {
   		 hasUpper = false;
    	 hasLower = false;
    for (var i = 0; i < s.length; i++) {
        if (s[i] == s[i].toUpperCase()) {
            hasUpper = true;
        }
        else {
            hasUpper = hasUpper;
        }
        if (s[i] == s[i].toLowerCase()) {
            hasLower = true;
        }
        else {
            hasLower = hasLower;
        }
    }
    if (hasLower == false || hasUpper == false) {
        return false;
    }
    else 	{
        return true;
    	}
	}

	function ValidateEmail(email){
		var pos_at = email.indexOf("@");
    	var pos_dot = email.indexOf(".", pos_at + 1);
		if (pos_dot > pos_at) {
			return true;
		}
		return false;

	}

	function validate(){
		var uname = get("uname");
		var email = get("email");
		var pass = get("password");
		
		var hasError = false;

		if (uname.value == "") {
			get("err_uname").innerHTML = "UserName required";
			hasError = true;
		}else if (uname.value.length < 6){
			get("err_uname").innerHTML = "UserName needs at least 6 letter";
			hasError = true;
		}


		if (pass.value == "") {
			get("err_pass").innerHTML = "Password required";
			hasError = true;
		}else if (!validatePass(pass.value)) {

       			 document.getElementById("err_pass").innerHTML = "*Password must contain upper and lower characters";
     			 hasError = true;
   		 }

		if (email.value == "") {
			get("err_email").innerHTML = "Email required";
		}else if(!ValidateEmail(email.value)){
			get("err_email").innerHTML = "Email isn't right format";
		}

		

		function refresh(){ 

		get("err_email").innerHTML = "";
		get("err_uname").innerHTML = "";
		get("err_pass").innerHTML = "";
		}



		

	return !hasError;