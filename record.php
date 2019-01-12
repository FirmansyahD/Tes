<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<br>
<?php
require_once "./koneksi.php";
$sql='SELECT * FROM siswa';
$result=mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result)){
        ?>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">alamat</th>
            </tr>  
        </thead>     
<?php
$i=1;
while($row=mysqli_fetch_row($result)){
?>    
<tbody>
    <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row[1];?></td>
    <td><?php echo $row[2];?></td>
    <td><?php echo $row[4];?></td></tr>
</tbody>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>