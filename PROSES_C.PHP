<?php 
include 'KONEKSI.PHP';
if (isset($_POST['proses'])){
    if($_POST['proses']= "add"){

        $customerNumber = $_POST['customerNumber'];
        $customerName = $_POST['customerName'];
        $contactLastName = $_POST['contactLastName'];
        $contactFirstName = $_POST['contactFirstName'];
        $phone = $_POST['phone'];
        $addressLine1 = $_POST['addressLine1'];
        $addressLine2 = $_POST['addressLine2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postalCode = $_POST['postalCode'];
        $country = $_POST['country'];
        $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
        $creditLimit = $_POST['creditLimit'];

        $query = "INSERT INTO customers VALUES('$customerNumber','$customerName','$contactLastName',
        '$contactFirstName','$phone','$addressLine1','$addressLine2','$city','$state',
        '$postalCode','$country','$salesRepEmployeeNumber','$creditLimit')";
        $sql = mysqli_query($con, $query);

        if($sql){
            echo "Data berhasil ditambahkan <a href='CUSTOMERS.PHP'>[Home]</a>";
        }else{
            echo $query;
        }
        
    }
}

?>