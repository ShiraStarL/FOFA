
function initMap() {
      	var options = {
      		center: {lat: 32.062974, lng: 34.795917},
			zoom: 13
		};
        
		var map = new google.maps.Map(document.getElementById('map'), options);

        var marker = new google.maps.Marker({
      	position: {lat:32.1782, lng:34.9076},
      	map:map
      	});
}

$(function() {
			$("#createGame").submit(function() {
				var desc = $("#desc").val();
				var dateTime = $("#dateTime").val();
				var street = $( "#street option:selected" ).text();
				var city = $( "#city option:selected" ).text();
				var country = $( "#country option:selected" ).text();
				var part = $( "#part option:selected" ).text();
				var phoneNum = $("#phoneNum").val();

				var dataString = 'desc=' + desc + '&dateTime=' + dateTime+'&street='+street+'&city='+city+'&country='+country+'&part='+part+'&phoneNum='+phoneNum;//if desc is empty it will send empty string	
				
				$.ajax({
					type: "POST",
					url: "server/create_game_in_db.php",
					data: dataString,
					cache: true,
					success: function(){
						$("#createGameForm").hide();
						$( "#eventDet" ).show();
						//add details for approve
						$("#partic p").append("0/"+part);
						$("#timeAndDate p").append(dateTime);
						$("#loc p").append(country+", "+city+", "+street);
						$("#phone p").append(phoneNum);
						initMap();
					}  
				});
				return false;
			});
		});
		
$(function() {
	$("#confirm").click(function() {
					window.location.replace("index.php");
	});
	
});