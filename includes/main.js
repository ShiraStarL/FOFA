function myFunction(){
    var menu = document.getElementById("meniu");
    if(menu.style.zIndex == "-1"){
        menu.style.zIndex = "1"
    }
    else{
        menu.style.zIndex = "-1"
    }
}

function insertEvents(){
	var place = document.getElementById("eventsPlace");
	var obj1=[
			["Rishon lezion, today at 19:00","13 May", "approve: 7p","Raanna Mifal Hapayis"],
			["GolBull tournament is back!","1 May", "approve: 7p","Tel Aviv 'GOLBULL'"],
			["Hey freinds! tomorrow at 14:30","29 April", "approve: 16p","Kfar Saba 'Geoliim'"]
		];
	var i,j;

		for(i=0;i<3;i++){
			/*add event*/
			var elem = document.createElement("div");
			elem.classList.add("event");
			elem.id="ob"+i;
			place.appendChild(elem);
		
			/*add description*/
			j=0;
			var desc = document.createElement("p");
			var node = document.createTextNode(obj1[i][j]);
			desc.appendChild(node);
			desc.classList.add("_description");
			elem.appendChild(desc);
			j++;
			/*add date*/
			var date = document.createElement("p");
			var node = document.createTextNode(obj1[i][j]);
			date.appendChild(node);
			date.classList.add("_date");
			elem.appendChild(date);
			j++;
			/*add approve*/
			var app = document.createElement("p");
			var node = document.createTextNode(obj1[i][j]);
			app.appendChild(node);
			app.classList.add("_approve");
			elem.appendChild(app);
			j++;
			/*add location*/
			var loc = document.createElement("p");
			var node = document.createTextNode(obj1[i][j]);
			loc.appendChild(node);
			loc.classList.add("_location");
			elem.appendChild(loc);
			
			/*add join*/
			var join = document.createElement("p");
			var node = document.createTextNode("+Join");
			join.appendChild(node);
			join.classList.add("_join");
			elem.appendChild(join);
		}
}

$(document).ready(function(){
	$.getJSON("data/data.json",function(data){
		$.each(data.products,function(){
			$('#eventsPlace').append(
					'<a class="event" href="eventDetails.html?eventId='+
					this.id + '">' +
					'<p class="_description">'+ this.description +'</p>'+
					'<p class="_date">'+  this.date +'</p>'+
					'<p class="_approve">'+ this.approve +'</p>'+
					'<p class="_location">'+ this.address +'</p>'+
					'<p class="_join">+ Join</p>'+
				'</a>');
		});
	});
});
