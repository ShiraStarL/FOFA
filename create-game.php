<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	    <link href="https://fonts.googleapis.com/css?family=Anton|Barlow" rel="stylesheet">
	    <link rel="stylesheet" href="includes/style1.css">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
		<script src="includes/create_game_func.js"></script>
			<title>Create game</title>
	</head>
	<body>
		<div id="wrapper">
			<main>
				<div id="createGameForm">
					<section id="fofa">
		        		<a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
						<h1>Create game</h1>
		            </section><br>
		            <div class="topnav">
		                    <a class="active" href="#">Game</a>
		                    <a href="create-turmanet.html">Tourmanet</a>
		                  </div> 
		            <form method="post" id="createGame" action="">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Description</label>
							<textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
		                </div>
						<section id="time">
							<p>Date&Time</p> 
							<i class="fa fa-calendar" aria-hidden="true"></i>
							<input type="text" id="dateTime">
		                </section>
		                <section id="date">
							<p>Location</p> 
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</section>
						<h5>Street</h5>
						<select name="street" id="street">
							  <option value="Ben Yehuda">Ben Yehuda</option>
							  <option value="Dizengoff">Dizengoff</option>
							  <option value="Rothschild">Rothschild</option>
						</select>
						<h5>City</h5>
						<select name="city" id="city">
							  <option value="Tel Aviv-Yafo">Tel Aviv-Yafo</option>
						</select>
						<h5>Country</h5>
						<select name="country" id="country">
							  <option value="Israel">Israel</option>
						</select>
						<div class="row">
							<div class="input-field col s6 ">
								<label class="active">Number of participants</label><br>
								<select name="part" id="part">
									  <option value="9">9</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
								</select>
								</div>
						</div><br>
						<h5>Phone number</h5>
						<input type="text" id="phoneNum" name="phoneNum">
		                <section id="aprrove"></section> <button type="submit" class="btn btn-primary">Create game</button></section>
					</form>
				</div>


				<div id="eventDet">
					<section id="fofa">
						<a href="create-game.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
						<h1>Confirm</h1>
					</section>
					<section id="detailsDiv1">
						<section id="partic" class="det">
							<p></p>
						</section>
						<section id="timeAndDate" class="det">
							<p> </p>
						</section>
						<section id="loc" class="det">
							<p></p>
						</section>
						<section id="phone" class="det">
							<p> </p>
						</section>
						<section id="map"></section>
						<button type="button" class="btn btn-light" id="confirm" onclick="location.href='index.php'">confirm</button>
					</section>
				</div>
	    	</main>
	    </div>
	   	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHtzDjkErd4xgtFWQPUsW38BUpNe5haks&callback=initMap" async defer></script>
	</body>
</html>