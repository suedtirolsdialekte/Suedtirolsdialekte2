
function hideText(text, self) {
	if(self.value == text){
		self.value = '';
		self.style.color = "#666";
		//document.getElementById('search').style.width = '7em';
	}
}

function showText(text, self) {
	if(self.value == ''){
		self.value = text;
		self.style.color = "#666";
		//document.getElementById('search').style.width = '2.8em';
	}
}

function hidePassText(text, self) {
	if(self.value == text){
		self.value = '';
		self.style.color = "#666";
		self.setAttribute('type','password');
		//document.getElementById('search').style.width = '7em';
	}
}

function showPassText(text, self) {
	if(self.value == ''){
		self.value = text;
		self.style.color = "#666";
		self.setAttribute('type','normal');
		//document.getElementById('search').style.width = '2.8em';
	}
}