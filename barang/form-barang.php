<?php
session_start();
if (!isset($_SESSION['ssLoginPOS'])) {
  header("location: ../auth/login.php");
  exit();
}

require '../config/config.php';
require '../config/functions.php';
// require '../module/mode-barang.php';

$title = 'Tambah barang | Market PPLG';
require '../template/header.php';
require '../template/navbar.php';
require '../template/sidebar.php';

if (isset($_POST['simpan'])) {
  if (insert($_POST) > 0) {
    echo "<script>alert('barang baru berhasil diregistrasi')</script>";
  }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Barang</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= $main_url ?>dashboard.php">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= $main_url ?>barang/data-barang.php">barang</a></li>
            <li class="breadcrumb-item active">Add barang</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus fa-sm"></i> Add barang</h3>
            <button type="submit" name="simpan" class="btn btn-primary btn-sm float-right"><i class="fas fa-save"></i>
              Simpan</button>
            <button type="reset" class="btn btn-danger btn-sm float-right mr-1"><i class="fas fa-times"></i>
              Reset</button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8 mb-3">
                <div class="form-group">
                  <label for="Kode">Kode</label>
                  <input type="text" name=""kode id="barangname" class="form-control" placeholder="Masukan Kode"
                    autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="Barcode">Barcode</label>
                  <input type="text" name="barcode" id="fullname" class="form-control"
                    placeholder="Masukan Barcode" autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="nama_barang">Nama Barang</label>
                  <input type="text" name="nama_barang" id="password" class="form-control"
                    placeholder="Masukan Nama Barang" autofocus autocomplete="off" required>
                </div>
                <!-- <div class="form-group">
                  <label for="password">Konfirmasi </label>
                  <input type="password" name="password2" id="password2" class="form-control"
                    placeholder="Masukan Kembali Password" autofocus autocomplete="off" required>
                </div> -->
                <div class="form-group">
                  <label for="Satuan">Satuan</label>
                  <select name="satuan" id="level" class="form-control" required>
                    <option value="">-- Level --</option>
                    <option value="1">Administrator</option>
                    <option value="2">Manager</option>
                    <option value="3">Kasir</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="HargaBeli">Harga Beli</label>
                  <input type="number" name="harga_beli" id="harga_beli" class="form-control"
                    placeholder="Masukan Harga Beli" autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="HargaJual">Harga Jual</label>
                  <input type="number" name="harga_jual" id="harga_jual" class="form-control"
                    placeholder="Masukan harga jual" autofocus autocomplete="off" required>
                </div>
                 <div class="form-group">
                  <label for="stock_minimal">Stock Minimal</label>
                  <input type="number" name="stock_minimal" id="stock_minimal" class="form-control"
                    placeholder="Masukan stock minimal" autofocus autocomplete="off" required>
                </div>
              </div>
              <div class="col-lg-4 text-center">
                <img src="<?= $main_url ?>assets/image/box.png" class="profile-barang-img  mb-3 " style= "width: 40%;" alt="User">
                <input type="file" ="image" class="form-control">
                <span class="text-sm">Type file gambar JPG | PNG | GIF</span><br>
                <span class="text-sm">Width = Height</span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
<?php require '../template/footer.php'; ?>