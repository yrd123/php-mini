
  function validatelogin()
  {
    if( document.loginForm.emailId.value == "" ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Email ID Cannot be Blank***";
      document.loginForm.emailId.focus() ;
      return false;
    }
    if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.loginForm.emailId.value)){
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Invalid Email Address***";
      document.loginForm.emailId.focus() ;
      return false;
    }
    if( document.loginForm.password.value == "" ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Password Cannot be Blank***";
      document.loginForm.password.focus() ;
      return false;
    }
    return true;
  }

  function validatesignup(){
    var letters = /^[A-Za-z]+$/;

    if( document.regForm.fullName.value == "" ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Name cannot be Blank***";
      document.regForm.fullName.focus() ;
      return false;
    }
    if( !/^[A-Za-z\s]+$/.test(document.regForm.fullName.value) ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Name can only Contain Alphabets and Space***";
      document.regForm.fullName.focus() ;
      return false;
    }
    if( document.regForm.emailId.value == "" ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Email ID Cannot be Blank***";
      document.regForm.emailId.focus() ;
      return false;
    }
    if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.regForm.emailId.value)){
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Invalid Email Address***";
      document.regForm.emailId.focus() ;
      return false;
    }
    if( document.regForm.age.value == "" ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Age Cannot be Blank***";
      document.regForm.age.focus() ;
      return false;
    }
    if( document.regForm.contactNumber.value == "" ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Mobile Number Cannot be Blank***";
      document.regForm.contactNumber.focus() ;
      return false;
    }
    if( document.regForm.contactNumber.value.length != 10 ){
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Mobile Number Must be 10 Digits***";
      document.regForm.contactNumber.focus() ;
      return false;
    }
    if( document.regForm.gender.value == "-1" ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Please Select Gender***";
      document.regForm.gender.focus() ;
      return false;
    }
    
    if( document.regForm.password.value == "" ) {
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Password Cannot be Blank***";
      document.regForm.password.focus() ;
      return false;
    }
    if( document.regForm.password.value.length<6 ){
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Password Too Short***";
      document.regForm.password.focus() ;
      return false;
    }
    if( document.regForm.password.value != document.regForm.confirmPassword.value ){
      document.getElementById('warning-message').classList.remove("invisible");
      document.getElementById('warning-message').innerHTML = "***Password and Confirm Password Fields Do Not Match***";
      document.regForm.confirmPassword.focus() ;
      return false;
    }
    

return true;
}
