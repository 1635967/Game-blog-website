					function validateForm() {

					  if (document.forms["myForm"]["fname"].value == "") {
						alert("First Name must be filled out");
						return false;
					  }else if(validateNameSpace(document.forms["myForm"]["fname"].value) == false){
						alert("No Space in First Name");
						return false;
					  }else if(validateNameNum(document.forms["myForm"]["fname"].value) == false){
						alert("No Numper or special characters in First Name");
						return false;
					  }
					  if (document.forms["myForm"]["lname"].value == "") {
						alert("Last Name must be filled out");
						return false;
					  }else if(validateNameSpace(document.forms["myForm"]["lname"].value) == false){
						alert("No Space in Last Name");
						return false;
					  }else if(validateNameNum(document.forms["myForm"]["lname"].value) == false){
						alert("No Numper or special characters in Last Name");
						return false;
					  }
					  if (document.forms["myForm"]["email"].value == "") {
						alert("Email must be filled out");
						return false;
					  }else if(validateEmail(document.forms["myForm"]["email"].value) == false){
					    alert("invalid Email");
						return false;
					  }
					  if (document.forms["myForm"]["age"].value == "") {
						alert("Age must be filled out");
						return false;
					  }else if(validateOnlyNum(document.forms["myForm"]["age"].value) == false ){
					    alert("invalid age only number ");
						return false;
					  }
					  if (document.forms["myForm"]["gender"].value  == "") {
						alert("Gender must be selected");
						return false;
					  }
					  if (document.forms["myForm"]["phone"].value  == "") {
						alert("Phone must be filled out");
						return false;
					  }else if(validateOnlyNum(document.forms["myForm"]["phone"].value) == false ){
					    alert("invalid phone only number ");
						return false;
					  }
					  if (document.forms["myForm"]["city"].value  == "") {
						alert("City must be filled out");
						return false;
					  }else if(validateNameSpace(document.forms["myForm"]["city"].value) == false){
						alert("No Space in city");
						return false;
					  }else if(validateNameNum(document.forms["myForm"]["city"].value) == false){
						alert("No Numper or special characters in city");
						return false;
					  }
					  if (document.forms["myForm"]["city"].value  == "") {
						alert("City must be filled out");
						return false;
					  }
					  if (document.forms["myForm"]["platform"].value  == "") {
						alert("Platform must be selected");
						return false;
					  }
					  if (document.forms["myForm"]["id"].value  == "") {
						alert("ID must be filled out");
						return false;
					  }


					    var checkboxs=document.getElementsByName("sections");
						var okay=false;
						for(var i=0,l=checkboxs.length;i<l;i++)
						{
							if(checkboxs[i].checked)
							{
								okay=true;
								break;
							}
						}
						if(okay == false){
						alert("at least One of the sections must be check from checkbox");
						return false;
						}



						if (document.forms["myForm"]["feedback"].value == "") {
						alert("feedback must be filled out");
						return false;
					    }
					}

					function validateEmail(email) {
					  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
					  return re.test(email);
					}

					function validateNameSpace(fname) {
					  var re = /^\S{1,}$/;
					  return re.test(fname);
					}

					function validateNameNum(fname) {
					  var re = /^[a-zA-Z]+$/;
					  return re.test(fname);
					}

					function validateNameSpace(lname) {
					  var re = /^\S{1,}$/;
					  return re.test(lname);
					}

					function validateNameNum(lname) {
					  var re = /^[a-zA-Z]+$/;
					  return re.test(lname);
					}

					function validateOnlyNum(age) {
					  var re = /^[0-9]+$/;
					  return re.test(age);
					}

					function validateOnlyNum(phone) {
					  var re = /^[0-9]+$/;
					  return re.test(phone);
					}

					function validateNameSpace(city) {
					  var re = /^\S{1,}$/;
					  return re.test(city);
					}

					function validateNameNum(city) {
					  var re = /^[a-zA-Z]+$/;
					  return re.test(city);
					}
