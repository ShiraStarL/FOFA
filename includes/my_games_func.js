var postId;

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
	$("#eventsPlace a").click(function(event) {
					postId = event.target.id;
					$("#myGames").hide();
					$( "#eventDet" ).show();
						//add details for approve
					$("#partic p").append($("#"+postId+" ._approve").text() );
					$("#timeAndDate p").append($("#"+postId+" ._date").text() );
					$("#loc p").append($("#"+postId+" ._location").text());
					$("#phone p").append("0544881157");
					initMap();
	});
	
});

$(function() {
	$("#confirm").click(function() {
				$("#eventDet").hide();
				$( "#myGames" ).show();
	});
});
$(function() {
	$("#update").click(function() {
				$("#eventDet").hide();
				$( "#updateEventForm" ).show();
				$("#dateTime").val($("#"+postId+" ._date").text() );
				$("#desc").val($("#"+postId+" ._description").text() );

	});
});
$(function() {
	$("#delete").click(function() {
		var pID = postId+1;	
		var dataString = 'post_id='+pID;
		$.ajax({
					type: "POST",
					url: "server/delete_sql.php",
					data: dataString,
					cache: true,
					success: function(){
						$("#eventDet").hide();
						$( "#myGames" ).show();
						$(postId).hide();
						//add details for approve
				}  
		});
	});
});

$(function() {
			$("#updateEventForm").submit(function() {
				var desc = $("#desc").val();
				var dateTime = $("#dateTime").val();
				var street = $( "#street option:selected" ).text();
				var city = $( "#city option:selected" ).text();
				var country = $( "#country option:selected" ).text();
				var part = $( "#part option:selected" ).text();
				var phoneNum = $("#phoneNum").val();
				var pID = postId+1;
				var dataString ='post_id='+pID+ '&desc=' + desc + '&dateTime=' + dateTime+'&street='+street+'&city='+city+'&country='+country+'&part='+part+'&phoneNum='+phoneNum;//if desc is empty it will send empty string	
				$.ajax({
					type: "POST",
					url: "server/update_sql.php",
					data: dataString,
					cache: true,
					success: function(){
						$("#updateEventForm").hide();
						$( "#eventDet" ).show();
						//add details for approve
						$("#partic p").text("0/"+part);
						$("#timeAndDate p").text(dateTime);
						$("#loc p").text(country+", "+city+", "+street);
						$("#phone p").text(phoneNum);
						initMap();
					}  
				});
				return false;
			});
		});
