function validate() {
    var firstName = document.getElementById('fname').value
    if (firstName != '') {
        firstNameRegex = /^[a-zA-Z]{1,1000}$/
        var testFirstName = firstNameRegex.test(firstName)
    }
    else {
        alert('Please enter your first name')
        return false
    }

    var lastName = document.getElementById('lname').value
    if (lastName != '') {
        lastNameRegex = /^[a-zA-Z]{1,1000}$/
        var testLastName = firstNameRegex.test(lastName)
    }
    else {
        alert('Please enter your last name')
        return false
    }

    var gender = document.querySelector('input[name = "gender"]:checked')
    if (!gender) {
        alert('Please mark your gender')
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

    var contact = document.getElementById('contact').value
    if (contact != '') {
        contactRegex = /^[a-zA-Z0-9]{11}$/
        var testContactNumber = contactRegex.test(contact)
    }
    else {
        alert("Please enter your Number or Email")
    }

    var password = document.getElementById('password').value
    if (password != '') {
        passRegex = /^[a-zA-Z0-9]{1,100}$/
        var testPassRegex = passRegex.test(password)
    }
    else {
        alert('Please enter your password')
        return false
    }
}