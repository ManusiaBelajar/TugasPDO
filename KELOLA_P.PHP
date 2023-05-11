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

<form method="POST" action="PROSES_P.PHP">
    <table> 
        <tr>
            <td width="130">productCode</td>
            <td><input type="text" name="productCode"></td>
        </tr>
        <tr>
            <td>productName</td>
            <td><input type="text" name="productName"></td>
        </tr>
        <tr>
            <td>productLine</td>
            <td><input type="text" name="productLine"></td>
        </tr>
        <tr>
            <td>productScale</td>
            <td><input type="text" name="productScale"></td>
        </tr>
        <tr>
            <td>productVendor</td>
            <td><input type="text" name="productVendor"></td>
        </tr>
        <tr>
            <td>productDescription</td>
            <td><input type="text" name="productDescription"></td>
        </tr>
        <tr>
            <td>quantityInStock</td>
            <td><input type="text" name="quantityInStock"></td>
        </tr>
        <tr>
            <td>buyPrice</td>
            <td><input type="text" name="buyPrice"></td>
        </tr>
        <tr>
            <td>MSRP</td>
            <td><input type="text" name="MSRP"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
            <a href='PRODUCT.PHP'>[home]</a>
        </tr>
    </table>
</form>
</body>
</html>