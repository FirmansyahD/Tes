<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    	<div class="row">
    		<div class="col">
    			<br>
		    	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="form-group">
			    <table>
			    <tr>
			    <td>NIS</td>
			    <input type="hidden"name="id_siswa">
			    <td><input class="form-control"type="text"name="nis" size=40aria-describedby="nisHelp"></td>    
			    </tr>
			    <tr>
			    <td>Nama</td>
			    <td><input class="form-control"type="text"name="nama"></td>
			    </tr>
			    <tr>
			    <td>Alamat</td>
			    <td><input type="text"name="alamat"class="form-control" id="alamat" aria-describedby="alamatHelp" ></td>
			    </tr>
			    <tr>
			    <td>Password</td>
			    <td><input class="form-control"aria-describedby="passwordHelp" type="password"name="password"></td>
			    </tr>
			    
			    <tr>
			    <td></td>
			    <td><input type="submit" value="Simpan"class="btn btn-primary"></td>
			    </tr>
			    
			    </table>
			    </form>
    		</div>
    <!-- <br>
    <div class="container">
    	<form method="post" class="form-group" action="<?php $_SERVER['PHP_SELF'];?>">
    		<input type="hidden" name="id_siswa" id="id_siswa">
    		<label for="nis">NIS</label>
    		<input type="text" name="nis" class="form-control" id="nis" aria-describedby="nisHelp" placeholder="Masukkan NIS"><br>
    		<label for="password">Password</label>
			<input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp"placeholder="Password"> <br>
			<label for="alamat">Alamat</label>
			<input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamatHelp" placeholder="Alamat"><br>
			<input type="submit" name="SUBMIT" value="Simpan" class="btn btn-primary"><br>
    	</form>
    </div> -->
    <div class="col">
    	<?php
		require_once "./koneksi.php";
		if(isset($_POST['nis']) && isset($_POST['nama'])){
			$id_siswa=$_POST['id_siswa'];
		    $nis=$_POST['nis'];
		    $nama=$_POST['nama'];
		    $alamat=$_POST['alamat'];
		    $password=$_POST['password'];
		    $sql="INSERT INTO siswa VALUES ('".$id_siswa."','".$nis."','".$nama."','".$alamat."','".$password."')";
		    $result=mysqli_query($conn,$sql);
		    if($result){
		        echo"<script>alert('Berhasil Menambahkan Data')</script>";
		    }
		        else{
		            echo"<script>alert('Gagal Menambahkan Data')</script>";
		            echo mysqli_error($conn);
		        
		    }
		}
		require_once "./record.php";
		?>

		<?php
		if(isset($_POST['logout'])) {
		  //Unset cookies and other things you want to
		  session_destroy();
		  header('Location: index.php'); //Dont forget to redirect
		  exit;
		}
		?>
		<form method="POST" style="float: right;">
		  <input type="submit" name="logout" value="logout" class="btn btn-primary">
		</form>
    </div>
    </div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>