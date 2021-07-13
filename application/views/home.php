<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
                <a class="nav-link active" href="<?= base_url('home')?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('lowongan')?>">Lowongan Baru</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('mitra')?>">Daftar Mitra</a>
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
        </nav>

      <br><br>
      <div class="container">
      <div class="row">
        <div class="card">
          <div class="card-body"><br>
            <h3 class="card-title text-center">SILOOKEER NF</h3>
            <p class="card-text">Siloker NF atau Sistem Informasi Lowongan Kerja Nurul Fikri adalah suatu website yang dirancang pada bulan Januari 2021 oleh beberapa mahasiswa Sekolah Tinggi Terpadu Teknologi Nurul Fikri untuk menyediakan
              informasi tentang lowongan pekerjaan. </p><br><br>
          </div>
        </div>
      </div><br><br><br>


<div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
                <a href="<?= base_url('home')?>" title="Home" data-toggle="tooltip">
                  <div class="thumbnail" style="text-align:center; padding-top:10px;">
                      <i class="fa fa-home fa-4x"></i>
                    <div class="caption" style="padding:8px 0 0;"><h4 style="font-size:16px;">Home</h4></div>
                </div>
                </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <a href="<?= base_url('lowongan')?>" title="Lowongan Baru" data-toggle="tooltip">
                <div class="thumbnail" style="text-align:center; padding-top:10px;">
                    <i class="fab fa-wpforms fa-4x"></i>
                  <div class="caption" style="padding:8px 0 0;"><h4 style="font-size:16px;">Lowongan Baru</h4></div>
              </div>
              </a>
            </div>
          </div><br><br>
          <div class="col-md-4">
          <div class="card">
          <div class="card-block text-center">
                <a href="<?= base_url('mitra')?>" title="Daftar Mitra" data-toggle="tooltip">
                  <div class="thumbnail" style="text-align:center; padding-top:10px;">
                      <i class="far fa-list-alt fa-4x"></i>
                    <div class="caption" style="padding:8px 0 0;"><h4 style="font-size:16px;">Daftar Mitra</h4></div>
                </div>
                </a>
              </div>
          </div>
        </div>
</div>
         
        <br>
        <br>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
          <div class="card"> 
      <!-- Trigger/Open The Modal -->
      <button id="Btn">&nbsp;  Members  &nbsp;</button>   
      <!-- The Modal -->
      <div id="myModal" class="modal">
       
         <!-- Modal content -->
         <div class="modal-content">
           <div class="modal-header text-center">
             <span class="close">&times;</span>
             <h4>Anggota Kelompok 2 👋🏻</h4>
           </div>
           <div class="modal-body text-center" >
            <p>Fatimatul Azzahra</p>
             <p>Mochamad Alamsyah</p>
             <p>Nabila ElMuthi'ah</p>
             <p>Sayyid Hamzah Azzami</p>
             <p>Sholahudin Alfarisyi</p>
           </div>
           <div class="modal-footer text-center">
             <h5>SILOOKEER NF 2 develop by Mahasiswa STT Nurul Fikri @2021</h5>
           </div>
         </div>
         </div>
      </div>
       </div><br><br>            
          <div class="col-md-4">
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<br><br>
<div class="container">
  <div class="row">
      
</div>
</div>
<div class="container">
<div class="row">
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" alt="Logo Tesla" src="image/tesla.png"  /><br>
                <div class="card-block text-center">
                  <h5 class="card-title">
                    Tesla Buka Lowongan Pekerjaan Pabrik Semi Truck, Minat?
                  </h5>
                  <p class="card-text">
                    Produsen mobil listrik terkemuka asal Amerika Serikat, Tesla Inc, membuka lowongan pekerjaan untuk lini produksi mobil semi truck di Nevada, AS. Kabar itu menunjukkan bahwa Tesla kembali serius untuk pembuatan mobil tipe ini setelah tertunda sejak 2017.
                  </p><br>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" alt="Bank Muamalat" src="image/bank.png"  /><br>
                <div class="card-block text-center">
                  <h5 class="card-title">
                    Bank Muamalat Buka Lowongan Kerja untuk Level Manager, Minat?
                  </h5>
                  <p class="card-text">
                    Bank Muamalat kini membuka lowongan kerja bagi yang berpengalaman. Bank Muamalat Indonesia, merupakan bank umum pertama di Indonesia yang menerapkan prinsip Syariah Islam dalam menjalankan operasionalnya. Bank Muamalat kini membuka lowongan kerja bagi yang berpengalaman.
                  </p><br><br>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" alt="PT Puji Aviation" src="image/puji.jpg" width="400px" /><br>
                <div class="card-block text-center">
                  <h5 class="card-title ">
                    Perusahaan Susi Pudjiastuti Buka Lowongan Kerja buat Semua Jurusan
                  </h5>
                  <p class="card-text">
                    Bagi yang sedang mencari pekerjaan, terbuka lowongan pekerjaan di Maskapai Penerbangan Susi Air. Perusahaan akan menempatkan pekerja yang diterima pada beberapa daerah di seluruh Indonesia.
                  </p><br><br>
                </div>
              </div>
            </div>
          </div></div>
          <br><br>
  

    <script>
            // Get the modal
            let modal = document.getElementById("myModal");
            // Get the button that opens the modal
            let btn = document.getElementById("Btn");
            // Get the <span> element that closes the modal
            let span = document.getElementsByClassName("close")[0];
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
              modal.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
          </script>
  <?php $this->load->view('include/footer') ?>
</body>
</html>