function checkemail(){
    var email = document.getElementById('email');
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
      if (!filter.test(email.value)) {
      alert('Please provide a valid email address');
      return false;
   }
  }
  function checkname(){
    var name = document.getElementById('aname').value;
    if (name.length>30){
        alert('your name should have less than 30 characters');
        return false;
    }
  }
  function checkoccupation(){
    var occ = document.getElementById('os').value;
    if (occ.length>20){
        alert('your occupation should have less than 20 characters');
        return false;
    }
  }