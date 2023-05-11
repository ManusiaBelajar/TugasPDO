<?php 
include 'KONEKSI.PHP';
if (isset($_POST['proses'])){
    if($_POST['proses']= "add"){

        $productCode = $_POST['productCode'];
        $productName = $_POST['productName'];
        $productLine = $_POST['productLine'];
        $productScale = $_POST['productScale'];
        $productVendor = $_POST['productVendor'];
        $productDescription = $_POST['productDescription'];
        $quantityInStock = $_POST['quantityInStock'];
        $buyPrice = $_POST['buyPrice'];
        $MSRP = $_POST['MSRP'];

        $query = "INSERT INTO products VALUES('$productCode','$productName','$productLine','$productScale',
        '$productVendor','$productDescription','$quantityInStock','$buyPrice','$MSRP')";
        $sql = mysqli_query($con, $query);

        if($sql){
            echo "Data berhasil ditambahkan <a href='PRODUCT.PHP'>[Home]</a>";
        }else{
            echo $query;
        }
        
    }
}

?>