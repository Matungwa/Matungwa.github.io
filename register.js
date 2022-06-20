function checkemail(){
  var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    return false;
 }
}
function checkpsw(){
  var pw = document.getElementById("psw").value;
  var upperCaseLetters = /[A-Z]/g;
  var numbers = /[0-9]/g;
  var lowerCaseLetters = /[a-z]/g; 
  var specialcharacters= / /g;  
  if(pw == "") {  
     alert('please fill in the password');  
     return alert;  
  } 
  if(!(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/).test(psw.value)){
    alert('password should contain special characters');
    return false;
    }   
   if(!upperCaseLetters.test(psw.value)){
   alert('password should contain uppercase letters');
   return false;
   }  

   if(!lowerCaseLetters.test(psw.value)){
    alert('password should contain lowercase letters');
    return false;
    } 

    if(!numbers.test(psw.value)){
      alert('password should contain numbers');
      return false;
      } 

  if(pw.length < 8) {  
     alert('more than 8 characters required');
     return alert;  
  }  
}