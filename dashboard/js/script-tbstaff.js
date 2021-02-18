function loadStaff() {
	var url = "data/tbstaff/data.php";
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

function saveStaff() {
	var id = document.getElementById('id').value;
	var kode = document.getElementById('kode').value;
	var nama = document.getElementById('nama').value;
	var status = document.getElementById('status').value;
	var pelajaran = document.getElementById('pelajaran').value;
	var jam = document.getElementById('jam').value;
	var cmd = document.getElementById('simpan').value;


	var url = "data/tbstaff/func.php?id="+id+"&kode="+kode+"&nama="+nama+"&pelajaran="+pelajaran+"&jam="+jam+"&status="+status+"&cmd="+cmd;
	var xhttp;

	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			data = this.responseText;
			alert(data);
			loadStaff();
		}
	};

	xhttp.open("GET", url, true);
	xhttp.send();

  	document.getElementById('kode').value = "";
	document.getElementById('nama').value = "";
	document.getElementById('pelajaran').value = "";
	document.getElementById('status').value = "";
	document.getElementById('jam').value = "";
	document.getElementById('simpan').value = "save";
}

function deleteStaff(id){
	var url = "data/tbstaff/delete.php?kode="+id;
	var xhttp;


	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			loadTbstaff();
		}
	};

	xhttp.open("GET", url, true);
	xhttp.send();
	loadStaff();
}

function editStaff(kode, nama, status, pelajaran, jam) {
	document.getElementById('id').value = kode;
	document.getElementById('kode').value = kode;
	document.getElementById('nama').value = nama;
	document.getElementById('status').value = status;
	document.getElementById('pelajaran').value = pelajaran;
	document.getElementById('jam').value = jam;
	document.getElementById('simpan').value = "update";
}	


function clearStaff() {
	loadTbstaff();
}
