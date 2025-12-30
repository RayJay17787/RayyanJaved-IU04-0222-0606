function validate(){
    var Mobile = document.getElementById('mobile').value
        if (Name != '') {
            firstNameRegex = /^[a-zA-Z]{1,1000}$/
            var testMobile = firstNameRegex.test(Mobile)
        }
        else {
            alert('Please enter your first name')
            return false
        }
    var Password = document.getElementById('password').value
        if (Name != '') {
            firstNameRegex = /^[a-zA-Z]{1,1000}$/
            var testPassword = firstNameRegex.test(Password)
        }
        else {
            alert('Please enter your first name')
            return false
        }
    var Name = document.getElementById('name').value
        if (Name != '') {
            firstNameRegex = /^[a-zA-Z]{1,1000}$/
            var testName = firstNameRegex.test(Name)
        }
        else {
            alert('Please enter your first name')
            return false
        }
    var UserName = document.getElementById('username').value
        if (Name != '') {
            firstNameRegex = /^[a-zA-Z]{1,1000}$/
            var testUserName = firstNameRegex.test(UserName)
        }
        else {
            alert('Please enter your first name')
            return false
        }
}