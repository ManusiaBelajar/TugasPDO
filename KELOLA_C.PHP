<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPILAN</title>
</head>
<body>
<h3> Tambah Customer </h3>

<form method="POST" action="PROSES_C.PHP">
    <table> 
        <tr>
            <td width="130">customer Number</td>
            <td><input type="text" name="customerNumber"></td>
        </tr>
        <tr>
            <td>customer Name</td>
            <td><input type="text" name="customerName"></td>
        </tr>
        <tr>
            <td>contact Last Name</td>
            <td><input type="text" name="contactLastName"></td>
        </tr>
        <tr>
            <td>contact First Name</td>
            <td><input type="text" name="contactFirstName"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>addressLine1</td>
            <td><input type="text" name="addressLine1"></td>
        </tr>
        <tr>
            <td>addressLine2</td>
            <td><input type="text" name="addressLine2"></td>
        </tr>
        <tr>
            <td>city</td>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td>state</td>
            <td><input type="text" name="state"></td>
        </tr>
        <tr>
            <td>postalCode</td>
            <td><input type="text" name="postalCode"></td>
        </tr>
        <tr>
            <td>country</td>
            <td><input type="text" name="country"></td>
        </tr>
        <tr>
            <td>salesRepEmployeeNumber</td>
            <td><input type="text" name="salesRepEmployeeNumber"></td>
        </tr>
        <tr>
            <td>credit Limit</td>
            <td><input type="text" name="creditLimit"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
            <a href='CUSTOMERS.PHP'>[home]</a>
        </tr>
    </table>
</form>
</body>
</html>