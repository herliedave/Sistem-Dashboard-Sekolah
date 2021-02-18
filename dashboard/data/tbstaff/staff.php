<?php
session_start();
require '../../koneksi.php';
?>

<h1 class="h3 mb-5 text-gray-800">Tabel Staff</h1>
	
<form action="" method="post" class="form-data" id="form-data">  
	<input type="hidden" id="id" name="">
	<div class="row">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Kode Staff</label>
				<input type="text" name="kode" id="kode" class="form-control">
			</div>
		</div>

        <div class="col-sm-3">
        	<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" id="nama" class="form-control">
			</div>
        </div>

        <div class="col-sm-3">
        	<div class="form-group">
				<label>Status</label><br>
				<input type="text" name="status" id="status" class="form-control">
			</div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Pelajaran</label><br>
                <input type="text" name="pelajaran" id="pelajaran" class="form-control">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label>Jam Mengajar</label><br>
                <input type="text" name="jam" id="jam" class="form-control">
            </div>
        </div>
	</div>
	
	<div class="form-group">
		<button type="button" name="simpan" id="simpan" class="btn btn-primary" value="save" onclick="saveStaff()">
			<i class="fa fa-save"></i> Save
		</button>
	
		<button type="button" name="clear" id="clear" class="btn btn-warning" onclick="clearStaff()">
			<i class="fa fa-trash"></i> Clear
		</button>
	</div>

    <div id="insert">
    	<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Staff Sekolah</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Pelajaran</th>
                                <th>Jam Mengajar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Pelajaran</th>
                                <th>Jam Mengajar</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                                $query = mysqli_query($conn, "SELECT * FROM tbstaff");
                            ?>

                            <?php while ( $result = mysqli_fetch_assoc($query) ) : ?>
                                <?php 
                                    $kode = $result['kode'];
                                    $nama = $result['nama'];
                                    $status = $result['status'];
                                    $pelajaran = $result['pelajaran'];
                                    $jam = $result['jam'];
                                ?>
                                <tr>
                                    <td><?= $kode ?></td>
                                    <td><?= $nama ?></td>
                                    <td><?= $status ?></td>
                                    <td><?= $pelajaran ?></td>
                                    <td><?= $jam ?></td>
                                    <td>
                                        <button type="button" id="edit" name="ubah" class="btn btn-success btn-sm w-100" onclick="editStaff(<?= "'$kode','$nama','$status','$pelajaran','$jam'"; ?>)"> <i class="fa fa-edit"></i> Edit </button>

                                        <button type="button" id="delete" name="hapus" class="btn btn-danger btn-sm w-100 mt-1" onclick="deleteStaff('<?= $kode ?>')"> <i class="fa fa-trash"></i> Hapus </button>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>

