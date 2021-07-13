<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <link rel="stylesheet" href="../src/mainstyle.css">
    <title>SILOOKEER NF</title>
    <link rel="shortcut icon" type="image/icon" href="image/s.png"/>
    <style>
      body{
        background: linear-gradient(#ebf4f5,#b5c6e0);
        min-height: 100vh;
        background-attachment: fixed;

      }
    </style>
  </head>

  <body background-colour="#EFEEF0">
    <br>
    <div class="container-fluid">
      <h2 align="center">SISTEM INFORMASI LOWONGAN KERJA </h2><br>
    </div>

    <nav class="navbar navbar-fixed navbar-expand-lg navbar-light" style="background-color: #C4D4ED;"> 
      <div class="container-fluid">   
          <a class="navbar-brand" href="<?= base_url('home')?>">SILOOKEER</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home')?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('lowongan')?>">Lowongan Baru</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('mitra')?>">Daftar Mitra</a>
              </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-right" ></ul>
            <form class="form-inline active-cyan-3 active-cyan-4">
              <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                aria-label="Search">
            </form>
                <a class="nav-link active" aria-current="page" href="<?= base_url('login/login')?>">Logout</a>
            </ul>
          </div>
        </div>
      </nav><br>

      <div class="container">
        <div class="col-md-12">
                <?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
            
              <?php echo form_open_multipart('mitra/save');?>
              <form  action="" method="post">       
              <fieldset class="border border-4 p-3  shadow p-3 mb-5 bg-white rounded ">
                <legend  class="text-center" >Form Tambah Mitra Kerja</legend><br><br>
                  <br>
                  <div class="row mb-4 ml-3">
                    <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_perusahaan" name="nama" required>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="deskripsi_lowongan" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="alamat" rows="2" name="alamat" required></textarea>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="kontak_person" class="col-sm-2 col-form-label ">Kontak Person</label>
                    <div class="col-sm-8">
                      <input class="form-control" type="text" id="cp" name="kontak" required>
                    </div>
                    </div>
                    <div class="row mb-4">
                    <label for="telpon" class="col-sm-2 col-form-label ">Telpon</label>
                    <div class="col-sm-8">
                      <input class="form-control" type="tel" id="telpon" name="telpon" required>
                    </div>
                    </div>
                    <div class="row mb-4">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input class="form-control" type="email" id="email" name="email" required>
                    </div>
                    </div>
                    <div class="row mb-4">
                      <label for="web" class="col-sm-2 col-form-label">Alamat Web</label>
                      <div class="col-sm-8">
                        <input class="form-control" type="text" id="web" name="web" required>
                    </div>
                    </div>
                  <div class="row mb-4">
                    <label for="bidang_pekerjaan" class="col-sm-2 col-form-label">Bidang Pekerjaan</label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example" id="bidang_pekerjaan" name="bidang_usaha_id">
                        <option selected>Pilih Bidang Pekerjaan</option>
                        <option value="1">Teknologi Informasi dan Komunikasi</option>
                        <option value="2">Perbankan</option>
                        <option value="3">Pendidikan</option>
                        <option value="4">Transportasi</option>
                        <option value="5">Industri Nasional</option>
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="sektor_usaha" class="col-sm-2 col-form-label">Sektor Usaha</label>
                    <div class="col-sm-8">
                      <select class="form-select" aria-label="Default select example" id="sektor_usaha" name="sektor_usaha_id">
                        <option selected>Pilih Sektor Usaha</option>
                        <option value="1">Pemerintahan</option>
                        <option value="2">BUMN</option>
                        <option value="3">Swasta</option>
                        <option value="4">Start Up</option>
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-4">
                      <label for="foto" class="col-sm-2 col-form-label" name="foto">Foto</label>
                      <div class="col-sm-8">
                        <input class="form-control" type="file" id="foto" name="foto" required>
                    </div>
                    </div>
                  
                  
                      <div class="row mb-4">
                        <div class="col-sm-10 offset-sm-5">              
                      <button type="submit" class="btn btn-primary" id="submit" onclick="validasi()" >Submit</button>
                      <button type="reset" class="btn btn-danger" id="reset" onclick="reset()">Reset</button>
                    </div>
                  </div>
                </fieldset>
                        <?php echo form_close() ?>
                </div>
                </div>
    


                <?php $this->load->view('include/footer') ?>
                <script>
    function validasi() {
    let nama = document.getElementById("nama_perusahaan").value;
    let bidang = document.getElementById("bidang_pekerjaan").value;
    let alamat = document.getElementById("alamat").value;
    let kontak = document.getElementById("kontak_person").value;
    let telpon = document.getElementById("telpon").value;
		let email = document.getElementById("email").value;
		let web = document.getElementById("web").value;
    let sektor = document.getElementById("sektor_usaha").value;
    let foto = document.getElementById("foto").value;
    

		if (nama != "" && email!="" &&  bidang!="" && alamat!="" && kontak!="" && telpon!="" && web!="" && sektor!="" && foto!="" ) {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
    }
    function reset() {
       document.getElementById("newForm").reset();
    }
</body>
</html>