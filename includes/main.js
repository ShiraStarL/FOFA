function myFunction(){
    var menu = document.getElementById("meniu");
    if(menu.style.zIndex == "-1"){
        menu.style.zIndex = "1";
    }
    else{
        menu.style.zIndex = "-1";
    }
}

$(document).ready(function(){
	$.getJSON("data/users.json",function(data){
      
        for(var user of data.user){
            console.log(data);
            var fofa=$("#fofa");
                document.getElementById("user").innerHTML = user.full_name;
               var x= $("#profile_in");
               x.attr('src',user.image);
            }

		});
});



