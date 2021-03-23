function loadKelas() {
	var url = "data/tbkelas/data.php";
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

function saveKelas() {
	var id = document.getElementById('id').value;
	var nama = document.getElementById('nama').value;
	var kapasitas = document.getElementById('kapasitas').value;
	var cmd = document.getElementById('simpan').value;


	var url = "data/tbkelas/func.php?nama="+nama+"&kapasitas="+kapasitas+"&no="+id+"&cmd="+cmd;
	var xhttp;

	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			data = this.responseText;
			alert(data);
			loadKelas();
		}
	};

	xhttp.open("GET", url, true);
	xhttp.send();

	document.getElementById('nama').value = "";
	document.getElementById('kapasitas').value = "";
	document.getElementById('simpan').value = "save";
}

function deleteKelas(no){
	var url = "data/tbkelas/delete.php?no="+no;
	var xhttp;


	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			loadTbkelas();
		}
	};

	xhttp.open("GET", url, true);
	xhttp.send();
	loadKelas();
}

function editKelas(nama, kapasitas, no) {
	document.getElementById('id').value = no
	document.getElementById('nama').value = nama;
	document.getElementById('kapasitas').value = kapasitas;
	document.getElementById('simpan').value = "update";
}	


function clearKelas() {
	loadTbkelas();
}
