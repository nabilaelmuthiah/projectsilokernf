<!doctype html>
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
    <link rel="shortcut icon" type="image/icon" href="../image/s.png"/>
  </head>

  <body>
    <br>
    <div class="container-fluid">
      <h2 align="center">SISTEM INFORMASI LOWONGAN KERJA </h2><br>
    </div>

    <br>
      <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card center"><br>
            <h3 align="center">
            Welcome Back!
            </h3><br>
            </div></div>
            <div class="col-md-4"></div>
          </div>
      </div><br>
      <div class="container">
<div class="row">
            <div class="col-md-4">
              <div class="card text-center">
              <div class="jumbotron">
						<br><br><br><br><h3>
						SILOKER NF
						</h3>
						<p>
							 Selamat datang di Website Siloker NF! <br> Website kami menyediakan berbagai lowongan pekerjaan untuk kamu.
						</p><br><br><br><br><br><br>
					</div>
              </div>
            </div>
            <div class="col-md-4">
                <form class="user" method="POST" action="<?=base_url()?>index.php/login/aksi_login">
                <fieldset class="border border-4 p-3  shadow p-3 mb-5 bg-white rounded ">
                                      
                                        <br><div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Username Anda" name="username">
                                        </div><br>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div><br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label><br><br>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                                                            </form><br><br><br>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                            </div></fieldset>
                            <div class="col-md-4">
                           
                                </div>
                              </div>
                            </div>
                          </div></div>
                          <br>


      <?php $this->load->view('include/footer') ?>
</body>
</html>