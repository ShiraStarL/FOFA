var eventAproved, eventDate, eventDescription, eventAddress, eventPhone;

function getEventId(){
	var eventId;
	var aKeyValue = window.location.search.substring(1).split('&');
	eventId = aKeyValue[0].split("=")[1];
	return eventId;
}
function initMap() {
      	var options = {
      		center: {lat: 32.1782, lng: 34.9076},
			zoom: 15
		};
        
		var map = new google.maps.Map(document.getElementById('map'), options);

        var marker = new google.maps.Marker({
      	position: {lat:32.1782, lng:34.9076},
      	map:map
      	});
}

$(document).ready(function(){
	$.getJSON('data/data.json',function (data){
		var eventId = getEventId();
		// search the book by id
		$.each(data.products, function(i,obj){
			if(obj.id == eventId){
				eventAproved=obj.approve;
				eventDate = obj.date;
				eventAddress = obj.address;
				eventPhone = obj.phone;
			}
		});
		$("#partic p").html(eventAproved);
		$("#timeAndDate p").html(eventDate);
		$("#loc p").html(eventAddress);
		$("#phone p").html(eventPhone);
		initMap();
	});
});