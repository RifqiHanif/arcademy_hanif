<?php include "koneksi.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Programmer</title>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  <a class="navbar-brand" href="#">HANIF</a>  
</nav>


<div class="container">

	<div class="row" style="margin-top:40px;">

		<div class="col-md-12 justify-content-center">
			<h3>Tambah User</h3>
		</div>

		<div class="col-md-12">
			<form class="form-inline" action="user.php" method="post">
			  <div class="form-group mb-2">
			    <label for="user" class="sr-only">Tambah User</label>
			    <input type="text" class="form-control" id="user" name="user" placeholder="Tambah User">
			  </div>
			  <button type="submit" class="btn btn-primary mx-sm-3 mb-2">Submit</button>
			</form>
		</div>
		
	</div>

	<div class="row justify-content-start" style="margin-top:10px;">
		<div class="col-md-8">
			<div class="table-responsive">
				<table class="table table-bordered">
				  <tbody>
				  	<?php
				  		$sqlgetuser = "SELECT * FROM tabel_users";
				  		$result = $conn->query($sqlgetuser);
				  		if ($result->num_rows > 0) :
				  			while ($row = $result->fetch_assoc()) :
				  	?>
				    <tr>
				      <td style="width: 50%"><?= $row['name'] ?></td>
				      <td rowspan="2" class="align-middle ">
				      	<form class="form-inline" action="skill.php" method="post">
								  <div class="form-group mb-2">
								    <label for="user" class="sr-only">Tambah Skill</label>
								    <input type="text" class="form-control" id="skill" name="skill" placeholder="Tambah Skill">
								    <input type="hidden" class="form-control" name="user_id" value="<?= $row['id'] ?>" placeholder="Tambah User">
								  </div>
								  <button type="submit" class="btn btn-primary mx-sm-3 mb-2">Submit</button>
								</form>
				      </td>
				    </tr>
				    <tr>
				      <td>
				      	<?php
						  		$sqlgetskill = "SELECT name FROM tabel_skills WHERE user_id = ".$row['id'];
						  		$resultskill = $conn->query($sqlgetskill);
						  		if ($resultskill->num_rows > 0) {
						  			while ($rowskill = $resultskill->fetch_assoc()) {
						  				echo $rowskill['name'].',';
						  			}
						  		}else{
						  			echo "Belum Punya Skill";
						  		}
						  	?>
				      </td>
				    </tr>
				  <?php endwhile; ?>
				  <?php else : ?>
				  	<tr>
				  		<td>Tidak Ada Data</td>
				  	</tr>
				  <?php endif; ?>
				  </tbody>
				</table>
			</div>
		</div>
		
	</div>

</div>			

<script type="text/javascript" src="asset/jquery.js" />
<script type="text/javascript" src="asset/bootstrap/bootstrap.js" />
</body>
</html>											