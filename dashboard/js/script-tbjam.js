function loadJam() {
	var url = "data/tbjam/data.php";
	var xhttp;

	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			data = this.responseText;
			document.getElementById("insert").innerHTML = data;
		}
	};
	xhttp.open("GET", url, true);
	xhttp.send();
}

function saveJam() {
	var id = document.getElementById('id').value;
	var range_jam = document.getElementById('range_jam').value;
	var cmd = document.getElementById('simpan').value;


	var url = "data/tbjam/func.php?range_jam="+range_jam+"&no="+id+"&cmd="+cmd;
	var xhttp;

	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			data = this.responseText;
			alert(data);
			loadJam();
		}
	};

	xhttp.open("GET", url, true);
	xhttp.send();

	document.getElementById('range_jam').value = "";
	document.getElementById('simpan').value = "save";
}

function deleteJam(no){
	var url = "data/tbjam/delete.php?no="+no;
	var xhttp;


	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			loadTbjam();
		}
	};

	xhttp.open("GET", url, true);
	xhttp.send();
	loadJam();
}

function editJam(range_jam, no) {
	document.getElementById('id').value = no
	document.getElementById('range_jam').value = range_jam;
	document.getElementById('simpan').value = "update";
}	


function clearJam() {
	loadTbjam();
}
