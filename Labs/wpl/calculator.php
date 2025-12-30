<?php
$operation = $_POST['operation'];
if($operation == 'add')
{
    echo $_POST['value1'] + $_POST['value2'];
}
elseif($operation == 'sub')
{
    echo $_POST['value1'] - $_POST['value2'];
}
elseif($operation == 'mul')
{
    echo $_POST['value1'] * $_POST['value2'];
}
elseif($operation == 'div')
{
    echo $_POST['value1'] / $_POST['value2'];
}
?>