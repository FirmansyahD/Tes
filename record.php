<?php
require_once "./koneksi.php";
$sql='SELECT * FROM siswa';
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)){
        ?>
        <table>
        <tr>
        <td>#</td>
        <td width=100>NIS</td>
        <td witdth=150>Nama</td>
        <td>alamat</td>
        </tr>       
<?php
$i=1;
while($row=mysqli_fetch_row($result)){
?>    
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td><?php echo $row[4];?></td></tr>
<?php $i++;
} ?>
</table>
<?php
}
else{
    echo'data tidak ditemukan';
}
mysqli_close($conn);
}
?>