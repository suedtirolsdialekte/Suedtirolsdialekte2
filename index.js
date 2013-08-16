
$(document).ready(function(){
	
	//$("#head").slideUp(1).delay(200).slideDown('slow');
	//$("#head").hide().fadeIn('slow');

	$("#search").focus(function(){
		$("#search").animate({
			width : '10em',
		}, 100);
		if($("#search").val() == "Suche"){
			$("#search").val("");
		}
	});

	$("#search").focusout(function(){
		$("#search").animate({
			width : '6em',
		}, 100);
		if($("#search").val() == ""){
			$("#search").val("Suche");
		}
	});
});

function load(char) {
	switch(char){
		case 'a':
			console.log('a');
			//Get info via ajax
			document.getElementById("body").style.visibility = "visible";
			break;
	}
}

/*
function hideText(text, self) {
	if(self.value == text){
		self.value = '';
		//document.getElementById('search').style.width = '7em';
	}
}

function showText(text, self) {
	if(self.value == ''){
		self.value = text;
		//document.getElementById('search').style.width = '2.8em';
	}
}
*/