function validate(){
    var Name = document.getElementById('name').value
        if (Name != '') {
            NameRegex = /^[a-zA-Z]{1,1000}$/
            var testName = NameRegex.test(Name)
        }
        else {
            alert('Please enter your first name')
            return false
        }

    var UserName = document.getElementsById('username').value
        if (UserName != '') {
            UserNameRegex = /^[a-zA-Z]{1,1000}$/
            var testUserName = UserNameRegex.test(UserName)
        }
        else {
            alert('Please enter your username')
            return false
        }

    var day = document.getElementById('day');
    var month = document.getElementById('month');
    var year = document.getElementById('year');
    if (day.value === '') {
        alert('Please enter your day in DOB');
        return false;
    }
    if (month.value === '') {
        alert('Please enter your month in DOB');
        return false;
    }
    if (year.value === '') {
        alert('Please enter your year in DOB');
        return false;
    }
}