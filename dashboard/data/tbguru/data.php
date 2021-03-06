<?php
session_start();
require '../../koneksi.php';
?>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Guru Sekolah</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Pelajaran</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        $query = mysqli_query($conn, "SELECT * FROM tbguru");
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
                            <td><?= $pelajaran ?></td>
                            <td>
                                <button type="button" id="edit" name="ubah" class="btn btn-success btn-sm w-100" onclick="editGuru(<?= "'$kode','$nama','$status','$pelajaran','$jam'"; ?>)"> <i class="fa fa-edit"></i> Edit </button>

                                <button type="button" id="delete" name="hapus" class="btn btn-danger btn-sm w-100 mt-1" onclick="deleteGuru('<?= $kode ?>')"> <i class="fa fa-trash"></i> Hapus </button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

           