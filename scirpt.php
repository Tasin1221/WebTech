<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post"  onsubmit="return validate()">
		UserName: <input type="text" name="uname" id="uname"> <span id="err_uname"></span><br>
		Email: <input type="text" name="email" id="email"> <span id="err_email"></span><br>
		Password: <input type="Password" name="" id="password"> <span id="err_pass"></span><br> 
		<input type="submit" name="" value="Register">
	</form>

</body>

<script>
	function get(id){
		return document.getElementById(id);
	}

	function ValidateEmail(email){
		var pos_at = email.indexOf("@");
    	var pos_dot = email.indexOf(".", pos_at + 1);
		if (pos_dot > pos_at) {
			return true;
		}
		return false;

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
    else {
        return true;
    }
}

	function validate(){

		var uname = get("uname");
		var pass = get("password");
		var email = get("email");


		var hasError = false;

		if (email.value == "") {
			get("err_email").innerHTML = "Email required";
		}else if(!ValidateEmail(email.value)){
			get("err_email").innerHTML = "Email isn't right format";
		}

		if (uname.value == "") {
			get("err_uname").innerHTML = "UserName required";
			hasError = true;
		}else if (uname.value.length < 6){
			get("err_uname").innerHTML = "UserName at least 6 letter";
			hasError = true;
		}

		if (pass.value == "") {
			get("err_pass").innerHTML = "Password required";
			hasError = true;
		}else if (!validatePass(pass.value)) {

       			 document.getElementById("err_pass").innerHTML = "*Password must contain upper and lower characters";
     			 hasError = true;
   		 }
		return !hasError;

	}

	function refresh(){
		get("err_email").innerHTML = "";
		get("err_uname").innerHTML = "";
		get("err_pass").innerHTML = "";
	}
</script>


</html>