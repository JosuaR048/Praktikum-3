<?php
$nama_barang = array("Tepung", "Kacang", "Deterjen", "Telur", "Beras","Bensin");
$nomor = array(1, 2, 3, 4, 5, 6);
$berat = array(2, 3, 2, 0.5, 10, 1);
$stok = array(30, 50, 10, 20, 5, 0);
?>

<!DOCTYPE html>
<html style="background-color:#ffffff;">

<body>

<center><h2 style="Color:#000000">Warung Sayur Pak Joy </h2></center>

   <center> <table class="father" border='1' style="border-radius:0px;"> </center>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Berat(Kg)</th>
            <th>Berat(g)</th>
            <th>Berat(mg)</th>
            <th>Berat(liter)</th>
            <th>Stok</th>
        </tr>
        <?php for ($i=0; $i < 6; $i++) { ?>
        <?php $color;
        if ($stok[$i] == 0) {
        $color = "style='background-color: red;'";
        }else{
        $color = "style='background-color: #ffffff;'";
        } ?>        
        <tr>
            <td> <?php echo $nomor[$i]; ?> </td>
            <td> <?php echo $nama_barang[$i]; ?> </td>
            <td> <?php echo $berat[$i]; ?> </td>
            <td> <?php echo $berat[$i] * 1000; ?> </td>
            <td> <?php echo $berat[$i] * 1000000; ?> </td>
            <td> <?php if ($nama_barang[$i] == "Bensin" || $nama_barang[$i]=="Deterjen" || "Beras"){
            echo $berat[$i];
            }
            else {
                echo "-";
            }?>
            <td <?= $color ?>><?php if ($stok[$i] == 0 ){
            echo "kosong";
            }
            else {
                echo $stok[$i];
            }?>
            </td>
        </tr>
        <?php } ?>   


    </table>

</body>
</html> 