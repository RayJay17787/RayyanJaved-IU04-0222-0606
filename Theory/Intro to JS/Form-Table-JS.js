function addDetail() {
    var first_name = document.getElementById('first_name').value
    var last_name = document.getElementById('last_name').value
    var contact = document.getElementById('contact_number').value
    var email = document.getElementById('email').value
    var address = document.getElementById('address').value

    var table = document.getElementById('input_table')
    var newRow = table.insertRow(table.rows.length)

    newRow.insertCell(0).innerHTML = first_name
    newRow.insertCell(1).innerHTML = last_name
    newRow.insertCell(2).innerHTML = contact
    newRow.insertCell(3).innerHTML = email
    newRow.insertCell(4).innerHTML = address

    DeleteAllInputs();
}

function DeleteAllInputs() {
    document.getElementById('first_name').value = ''
    document.getElementById('last_name').value = ''
    document.getElementById('contact_number').value = ''
    document.getElementById('email').value = ''
    document.getElementById('address').value = ''
}