<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="homepage.css">

	<title>AdminHub</title>
</head>
<body>
<style>
        .logo {
            margin-top: 20px; 
            margin-bottom: 20px; 
			width: 40px;
			height: auto;
        }
		.logo-text {
            font-size: 20px; /* Adjust the font size value as per your preference */
        }
    </style>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
		<img src="Port_City_International_University_Logo.png" alt="Logo" class="logo">			<span class="logo-text">PCIU ELITE</span>
			
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="homepage.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="member.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Members</span>
				</a>
			</li>
			<li>
				<a href="event.php">
					<i class='bx bxs-notification' ></i>
					<span class="text">Event</span>
				</a>
			</li>
            <li>
				<a href="faculty.php">
					<i class='bx bxs-user-detail' ></i>
					<span class="text">Facalty</span>
				</a>
			</li>
			
            
		
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link">Categories</a> -->
			<form  method="POST" action="search.php">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					

				</div>
			</form>
			
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
		</nav>
		
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>20</h3>
						<p>Members</p>
					</span>
					<!--  -->
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>10</h3>
						<p>Facalty</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>5</h3>
						<p>Event</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Membership</h3>
					
				
						
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Join Date</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							$sname = "localhost";
							$uname = "root";
							$password = "";
							$db_name = "my_db";

							$con = new mysqli($sname, $uname, $password, $db_name);

							if ($con->connect_error) {
								die("Connection failed: " . $con->connect_error);
							}

							$query = "SELECT * FROM collect_data";
							$result = $con->query($query);

							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $row['name'] . "</td>";
									
									echo "<td>" . $row['date'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='9'>No records found</td></tr>";
							}

							$con->close();
							?>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Event</h3>
						<!-- <i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i> -->
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th> Date</th>
								
							</tr>
						</thead>
						<tbody>
						
						</tbody>
						</table>
					
					
				</div>


			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script>
        document.getElementById("searchForm").addEventListener("submit", function(e) {
            e.preventDefault();
            let searchInput = document.getElementById("searchInput").value.toLowerCase();
            let rows = document.getElementsByClassName("data-row");

            for (let i = 0; i < rows.length; i++) {
                let username = rows[i].getElementsByTagName("p")[0].innerText.toLowerCase();
                if (username.includes(searchInput)) {
                    rows[i].style.display = "table-row";
                } else {
                    rows[i].style.display = "none";
                }
            }
        });
    </script>

	<script src="homepage.js"></script>
</body>
</html>