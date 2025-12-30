function validation(){
   var UserName = document.getElementById('fname').value
   var UserSalary = document.getElementById('sal').value

   if (UserName != ''){
    var fntest = /^ [a-z A-Z]{100}$/
    if (fntest.test(UserName)){
        alert(UserName)
    }
   }
   else{
    alert('Name is invalid')
   }

   if (UserSalary != ''){
    var fntest = /^ [0-9]{1,1000000}$/
    if (fntest.test(UserSalary)){
        alert(UserSalary)
    }
   }
   else{
    alert('Salary is invalid')
   }

}