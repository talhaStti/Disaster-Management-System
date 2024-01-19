function search () {
	var x = new XMLHttpRequest();
	
	x.onreadystatechange=function() {
		if (x.readyState==4 && x.status==200) {
			var data = x.response;
			var resp;
			for (var i = 0; i < data.length; i++) {
				if (resp == undefined) {
					resp = data[i]['word'] + "<img class=\"resimg\" src=\"" + data[i]['src'] + "\"><br>";	
				}
				else {
					resp += data[i]['word'] + "<img class=\"resimg\" src=\"" + data[i]['src'] + "\"><br>";
				}
			}
			document.getElementById("result").innerHTML=resp;
		}
	}

	var q = document.getElementById('q').value;
	x.open("GET", "search.php?q="+q, true);
	x.setRequestHeader('Cache-Control', 'no-cache');
	x.responseType = "json"
	x.send();

}