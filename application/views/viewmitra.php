<!DOCTYPE html>
<html lang="en">
<head>
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
              <li class="nav-item ">
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
                    <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <div class="card center"><br>
                            <h3 align="center">
                            Detail Mitra Kerja
                            </h3><br>
                            </div></div>
                            <div class="col-md-4"></div>
                        </div>
                    </div><br

      <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                <fieldset class="border border-4 p-3  shadow p-3 mb-5 bg-white rounded ">
                <div class="container-fluid">

        <h3>Detail Mitra</h3>

   <div class="container">
       <div class="row">
           <div class="col-4">
           <div class="card" style="width: 18rem;">
           <img src="<?=base_url().'/image/'.$mitra->foto?>" width="150" height="100" class="card-img-top " alt="...">
           <div class="card-body">
                   <h5 class="card-title"><?=$mitra->nama?></h5>
               </div>
               </div>
           </div>
           <div class="col-6">
               <table class="table table-bordered">
                   <tbody>
                       <tr>
                           <td class="bg-primary text-white">Nama Perusahaan :</td>
                           <td><?= $mitra->nama?></td>
                       </tr>

                       <tr>
                           <td class="bg-primary text-white">Alamat :</td>
                           <td><?= $mitra->alamat?></td>
                       </tr>

                       <tr>
                           <td class="bg-primary text-white">Kontak Person :</td>
                           <td><?= $mitra->kontak?></td>
                       </tr>

                       <tr>
                           <td class="bg-primary text-white">Telpon :</td>
                           <td><?= $mitra->telpon?></td>
                       </tr>

                       <tr>
                           <td class="bg-primary text-white">Email :</td>
                           <td><?= $mitra->email?></td>
                       </tr>

                       <tr>
                           <td class="bg-primary text-white">Alamat Web :</td>
                           <td><?= $mitra->web?></td>
                       </tr>

                       <tr>
                           <td class="bg-primary text-white">Bidang Usaha :</td>
                           <td><?= $mitra->bidang_usaha_id?></td>
                       </tr>

                       <tr>
                           <td class="bg-primary text-white">Email :</td>
                           <td><?= $mitra->email?></td>
                       </tr>
                       
                       <tr>
                           <td class="bg-primary text-white">Sektor Usaha :</td>
                           <td><?= $mitra->sektor_usaha_id?></td>
                       </tr>
                       
                   </tbody>
               </table>
           </div>
       </div>
   </div>

</div>
<!-- /.container-fluid -->

</div>
    </fieldset>
                </div>
                <!-- /.container-fluid -->

            </div>

      <?php $this->load->view('include/footer') ?>
</body>
</html>