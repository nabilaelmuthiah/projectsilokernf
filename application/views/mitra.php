<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <link rel="stylesheet" href="src/mainstyle.css">
    <title>SILOOKEER NF</title>
    <link rel="shortcut icon" type="image/icon" href="image/s.png"/>
  </head>

  <body>
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
            <li class="nav-item">
             <a class="nav-link" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nurul Fikri</span>
            <img class="img-profile rounded-circle"
                src="image/ava.png" width="50" height="50">
            </a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login/logout')?>">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav><br>
    
          <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card center"><br>
            <h3 align="center">
            Daftar Mitra
            </h3><br>
            </div></div>
            <div class="col-md-4"></div>
          </div>
      </div><br>
        <div class="container-fluid">
        <a href="<?= base_url()?>index.php/mitra/add" class="btn btn-light">add</a><br><br>
      <table class="table align-items-center table-flush table-light">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kontak Person</th>
            <th scope="col">Telpon</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat Web</th>
            <th scope="col">Bidang Usaha</th>
            <th scope="col">Sektor Usaha</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $nomor=1;
          foreach($mitra->result() as $mitra){
        echo'
          <tr>
            <td>'.$nomor.'</td>
            <td>'.$mitra->nama.'</td>
            <td>'.$mitra->alamat.'</td>
            <td>'.$mitra->kontak.'</td>
            <td>'.$mitra->telpon.'</td>
            <td>'.$mitra->email.'</td>
            <td>'.$mitra->web.'</td>
            <td>'.$mitra->bidang_usaha_id.'</td>
            <td>'.$mitra->sektor_usaha_id.'</td>
            <td> <img src="'.base_url().'image/'.$mitra->foto.'"  width="100" height="100"alt=""></td>
            <td><a href="'.base_url().'index.php/mitra/view/'.$mitra->id.'">View</a>
                <a href="'.base_url().'index.php/mitra/edit/'.$mitra->id.'"><i class="far fa-edit">Edit</i></a>
                <a onclick="return confirm(‘Yakin Hapus?’)" href="'.base_url().'index.php/mitra/delete/'.$mitra->id.'">Delete</a></td>
            </tr>';
            $nomor++;
         }?>
        </tbody>
       
      </table>
      <br>
      <br>
    </div>

    <?php $this->load->view('include/footer') ?>
</body>
</html>