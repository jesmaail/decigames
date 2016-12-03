function animateEntry(animationType,elementToAnimate,animationSpeed) {
	switch(animationType){
		case 1:
			$(elementToAnimate).css('opacity', 0).slideDown(animationSpeed).animate(
				{ opacity: 1 },
				{ queue: false, duration: animationSpeed + 1000 }
			);
			break;
	}
}

function animateExit(animationType,elementToAnimate,animationSpeed) {
	switch(animationType){
		case 1:
			$(elementToAnimate).css('opacity', 1).slideUp(animationSpeed).animate(
				{ opacity: 0 },
				{ queue: false, duration: animationSpeed }
			);
			break;
	}
}

function gameRedirect(el){
	var text = $(el).attr('id');

	if(pageNotHome()){
		animateExit(1,"#gameWrapper",1000);
		setTimeout(function(){			
			window.location = text + ".php";
		}, 1000);
	}else{
		window.location = text + ".php";
	}	
}

function pageNotHome(){
	var url = window.location.pathname;
	var gamesList = ["asteroid", "ember", "bounce", "dragon", "square", "left"];
	var isNotHome = false;
	for(var i=0; i<gamesList.length; i++){
		if(url.endsWith(gamesList[i] + ".php")){
			return true;
		}
	}
	return false;
}

$(document).ready(function() {
	
	$('#logoButton').click(function(){
		animateExit(1,"#gameWrapper",1000);
		setTimeout(function(){			
			window.location = "index.php";
		}, 1000);
	})

	if(pageNotHome()){
		window.onload = animateEntry(1, "#gameWrapper",1000);
	}
});