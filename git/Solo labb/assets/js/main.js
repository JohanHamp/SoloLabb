function LogInValidate() {
  var x = document.forms["loginform"]["Password"].value;
  if (x.trim() == ""){
    alert("No Password");
    return false;
  }
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(loginform.Email.value)) {
  return (true)
  }
  alert("Fel Email format!")
  return (false)
}


function RegisterValidate() {
  var x = document.forms["registerform"]["Password"].value;
  if (x.trim() == ""){
    alert("No Password");
    return false;
  }
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(registerform.Email.value)) {
  return (true)
  }
  alert("Fel Email format!")
  return (false)
}
