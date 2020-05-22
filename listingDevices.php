<?php
require_once("connect.php");

// $servername = "localhost";
// $username = "vuax16";
// $password = "1145715";
// $db = "vuax16";
//
// $conn = connect($servername, $username, $password, $db);
$query="select * from devices";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	<meta charse="utf-8">
	<meta name ="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Required meta tags -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<header>
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
				<div class="container">
					<a class="navbar-brand" href="#">CTS Computer Inventory</a>
					<div class ="navbar-nav ml-sm-auto">
						<div class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 				data-toggle="dropdown">Devices</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="listingDevices.php">List</a>
								<a class="dropdown-item" href="userform.html">Add Device</a>
								<a class="dropdown-item" href="retireddevices.php">Retired Device</a>
								<a class="dropdown-item" href="#">Cancel</a>
								</div>
							</div>	
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 						data-toggle="dropdown">Log Out</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="loginform.html">Log Out</a>
										<a class="dropdown-item" href="#">Cancel</a>
										</div>
										</div>
										<div class="dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Manager Only</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="usertable.php">For Users</a>
												<a class="dropdown-item" href="loginform.html">Login as Manager</a>
												<a class="dropdown-item">Cancel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	
	<h1 style="text-align:center"> Devices Data </h1>
	
	<h3 style="text-align:center; border-weight: 0px;">Record</h3>
	
	<table align="center" border="1px" style="text-align:center;">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tag</th>
				<th>Model</th>
				<th>Type</th>
				<th>Date</th>
				<th>Provider</th>
				<th>Expiration</th>
				<th>Retired</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Assign To</th>
			<tr>
		</thead>
		<tbody>
		<?php
			while ($row = mysqli_fetch_assoc($result)) 
			{
				$deviceID = $row['ID'];
				$Tag = $row['Tag'];
				$Model = $row['Model'];
				$Type =$row['Type'];
				$Date =$row['Date'];
				$Provider = $row['Provider'];
				$Expiration = $row['Expiration'];
				$Retire = $row['Retire'];
				$assign = $row['Assign'];
		?>
				
				<tr>
					<td><?php echo $deviceID?></td>
					<td><?php echo $Tag?></td>
					<td><?php echo $Model?></td>
					<td><?php echo $Type?></td>
					<td><?php echo $Date?></td>
					<td><?php echo $Provider?></td>
					<td><?php echo $Expiration?></td>
					<td><?php echo $Retire?></td>
					<td><a href = "edit.php?GetdID=<?php echo $deviceID ?>">Edit</a></td>
					<td><a href = "delete.php?DeleteID=<?php echo $deviceID ?>">Delete</a></td>
					<td><p><?php echo $assign?></p><a href = "assign.php?GetdID=<?php echo $deviceID ?>">Change</a></td>
				</tr>
				<?php
				
			}
				?>
		</tbody>
	</table>
</body>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>

					
				<!-- </tr>
				// echo '<tr>';
// 					echo '<td>'.$row['Tag'].'</td>';
// 					echo '<td>'.$row['Model'].'</td>';
// 					echo '<td>'.$row['Type'].'</td>';
// 					echo '<td>'.$row['Date'].'</td>';
// 					echo '<td>'.$row['Provider'].'</td>';
// 					echo '<td>'.$row['Expiration'].'</td>';
// 					echo '<td>'.$row['Retire'].'</td>';
					// echo '<td><a href = "#">''"Edit"''</a></td>';
	// 				echo '<td><a href = "#">''"Delete"''</a></td>';
				// echo '</tr>';
			}
		?> -->