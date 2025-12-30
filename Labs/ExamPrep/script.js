var userId = document.getElementById('userID').value
var UserName = document.getElementById('userName').value
var userEmail = document.getElementById('userEmail').value
var mark1 = document.getElementById('mark_1').value
var mark2 = document.getElementById('mark_2').value
var mark3 = document.getElementById('mark_3').value

function addDetail() {

    var table = document.getElementById('input_table')
    var newRow = table.insertRow(table.rows.length)

    totalMark = parseFloat(mark1) + parseFloat(mark2) + parseFloat(mark3)

    totalPerc = (totalMark / 75) * 100

    newRow.insertCell(0).innerHTML = userId
    newRow.insertCell(1).innerHTML = UserName
    newRow.insertCell(2).innerHTML = userEmail
    newRow.insertCell(3).innerHTML = mark1
    newRow.insertCell(4).innerHTML = mark2
    newRow.insertCell(5).innerHTML = mark3
    newRow.insertCell(6).innerHTML = totalPerc

    validate()

    setTimeout(() => {
        del_all_row()
    }, 15)

    return false
}

function del_all_row(){
    document.getElementById('userID').value = ''
    document.getElementById('userName').value = ''
    document.getElementById('userEmail').value = ''
    document.getElementById('mark_1').value = ''
    document.getElementById('mark_2').value = ''
    document.getElementById('mark_3').value = ''
}

function validate(){
    const textRegex = /^[a-zA-Z]{1,1000}$/
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
    const numRegex = /^[0-9]{1,25}$/

    if (userId != ''){
        var testId = numRegex.test(userId)
    }
    else{
        alert('Please enter ID')
        console.log('ID not entered')
    }

    if(UserName != ''){
        var testName = textRegex.test(UserName)
    }
    else{
        alert('Please enter your name')
        console.log('Name not entered')
    }

    if(userEmail != ''){
        var testEmail = emailRegex.test(userEmail)
    }
    else{
        alert('Please enter your email')
        console.log('Email not entered')
    }

    if(mark1 != ''){
        var testMark1 = numRegex.test(mark1)
    }
    else{
        alert('Please enter your first mark')
        console.log('Mark 1 not entered')
    }

    if(mark2 != ''){
        var testMark2 = numRegex.test(mark2)
    }
    else{
        alert('Please enter your second mark')
        console.log('Mark 2 not entered')
    }

    if(mark3 != ''){
        var testMark3 = numRegex.test(mark3)
    }
    else{
        alert('Please enter your third mark')
        console.log('Mark 3 not entered')
    }

}