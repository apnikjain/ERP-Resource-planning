<?php
include ('db.php');
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    
	<title > Study Materials </title>
	<link rel = "stylesheet " type = "text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #575757;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>
<br><br><br><br>
<?php
		$a=$_SESSION['sub'];
		$b=$_SESSION['tec'];
		$result=mysqli_query($con, "select * from materials where subject='$a' and teacher='$b'");
		echo'<table class="col-12 col-md-6 offset-md-3" align:"center">
				<tr>
					<th align="center">Topic name</th>
					<th align="center" style="width:auto !important;">Download</th>
				</tr>';

			while($row=mysqli_fetch_row($result))
			{	
				echo '  <tr>
							<td align="center">'.$row[1].'</td>
							<td align="center" style="width:auto !important;"><a href="./uploads/'.$row[0].'_'.$row[2].'_'.$row[1].'.pdf" class="btn btn-primary" download="'.$row[0].'_'.$row[1].'.pdf">	Download</a></td>
						</tr>';}
			echo '</table>';
	
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>