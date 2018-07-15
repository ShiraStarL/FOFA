<?php
	include('server/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton|Barlow" rel="stylesheet">
    <link rel="stylesheet" href="includes/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
	<script src="includes/main.js"> </script>
		<title>FOFA</title>
</head>
<body>
	<div id="wrapper">
		  <nav id="meniu">
		  		<a href=# id="burger1" onclick="myFunction()"></a>
             	   <ul>
                        <li>
                        	<a href="index.php">Events</a>
                        </li>
                        <li>
                        	<a href=#>Search event</a>
                        </li>
                        <li>
                        	<a href="my_games.php">My events</a>
                        </li>
                        <li>
                        	<a href="create-game.php">Create event</a>
                        </li>
                        <li>
                        	<a href="create-turmanet.html">Create tournament</a>
                        </li>
                        <li>
                        	<a href="notification.html">Notifications</a>
                        </li>
                        <li>
                        	<a href="log_in.html">Log out</a>
                        </li>
			</ul>
		</nav>
		<main class = "bg_image">
			<section id="fofa">
				<a href=# id="burger" onclick="myFunction()"></a>
				
				<img id="profile_in">
				<span id="user" class="user_name"></span>
				
				<h1>Events</h1>
			</section>
			<section id="eventsPlace">
					<?php
		                    $query2 = "SELECT * FROM tb_data_215";
		                    $result = mysqli_query($connection, $query2);
		                	if(!$result) {
		                    	die('DB QUERY FAILED.');
		                	}
							$i = 0;
		            	    //GET: get data again
			                while($row = mysqli_fetch_assoc($result)){
			                	 //result are in an associative array. keys are cols names 
			                    echo "<a class='event' id='".$i."'>".
									 "<p class='_description'>". $row['description']."</p>".
									 "<p class='_date'>". $row['date']. "</p>".
									 "<p class='_approve'> aprrove: 11p </p>".
									 "<p class='_location'>" .$row['street'] ."</p>".
									 "<p class='_join'>+ Join</p>";
									 $i++;
		                	}    
		                 	//release returned data
		  					  mysqli_free_result($result);
						
						    //close DB connection
						    mysqli_close($connection);
				  ?>
			</section>
			<section id="detailsDiv">
				<section id="partic" class="det">
					<p>Approve Arrival 11/50 </p>
				</section>
				<section id="timeAndDate" class="det">
					<p>22 May 16:00 </p>
				</section>
				<section id="loc" class="det">
					<p>"Brener" high-school </p>
				</section>
				<section id="phone" class="det">
					<p>03-1234567 </p>
				</section>
				<img src="images/brener school.PNG">
				<button type="button" class="btn btn-light">join</button>
			</section>
    	</main>
	</div>
</body>
</html>