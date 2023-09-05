<?php
require_once('dbcontroller.php');
$db = new dbController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62969761faada80019c4386c&product=inline-share-buttons' async='async'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tampilan Database</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top" style="background-color: #c1ccd4; height: 64px;" data-aos="fade-down" data-aos-duration="1000">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMKN 40 JAKARTA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#Jurusan">Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Kelas">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Guru">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Siswa">Siswa</a>
        </li>
      </ul>
        </div>
        </div>
        </nav>
        <hr style="position: relative; bottom: 10px;">
    </div>
    <!-- Akhir Navbar -->

    <!-- card jurusan -->
    <div class="container" id="Jurusan">
        <h1 class="text-center text-center mb-5 mt-3">Jurusan</h1>
        <div class="row text-center justify-content-center">

            <?php
            $sql = "select * from t_jurusan";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

                <div class="card-all col-md-4 col-xl-4 mb-3">
                    <div class="card" style="width: 18rem;" data-aos="zoom-in-up" data-aos-duration="1000">
                        <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Jurusan">
                        <div class="card-body">
                            <h5 class="card-title text-dark">

                                <?php echo $value['f_nama']; ?>

                            </h5>
                            <p class="card-text" style="font-size: 14px;">
                                <?php echo $value['f_deskripsi']; ?>
                            </p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            <?php
            endforeach
            ?>
        </div>
        <!-- akhir card jurusan -->

        <!-- Card kelas -->
    <div class="container" id="Kelas">
        <h1 class="text-center text-center mb-5 mt-70">Kelas</h1>
        <div class="row text-center justify-content-center">

            <?php
            $sql = "select * from t_kelas";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

                <div class="card-all col-md-4 col-xl-4 mb-5" data-aos="flip-right" data-aos-duration="1000">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Kelas">
                        <div class="card-body">
                            <h5 class="card-title text-dark">

                                <?php echo $value['f_nama']; ?>

                            </h5>
                        </div>
                    </div>
                </div>

            <?php
            endforeach
            ?>
        </div>
    </div>
    <!-- akhir card kelas -->

        <!-- card guru -->
        <div class="container" id="Guru">
            <h1 class="text-center text-center mb-5 mt-3">Guru</h1>
            <div class="row text-center justify-content-center">

                <?php
                $sql = "select * from t_guru";
                $row = $db->getALL($sql);
                foreach ($row as $value) :
                ?>

                    <div class="card-all col-md-4 col-xl-6 mb-5">
                        <div class="card" style="width: 18rem;" data-aos="zoom-out-down" data-aos-duration="1000">
                            <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Guru">
                            <div class="card-body">
                                <h5 class="card-title text-dark">

                                    <?php echo $value['f_nama']; ?>

                                </h5>
                            </div>
                        </div>
                    </div>

                <?php
                endforeach
                ?>
            </div>
        </div>
    </div>
            <!-- akhir card guru -->

<!-- tabel siswa -->
<div class="container" id="Siswa">
  <div class="text-center text-center mb-5 mt-3"><h1>Siswa</h1>
  <div class="row justify-content-center">
  <div class="col-8">
  <div class="table table-primary table table-success table-striped">

<table class="table">
  <head>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jurusan</th>
    </tr>
  </head>
     </body>

  <?php
  $i=1;
  $sql = "SELECT f_nama, f_idkelas, f_idjurusan FROM t_siswa";

  $row = $db->getALL($sql);
  foreach ($row as $siswa) :
  ?>

    <tr>
      <th scope="row">
      <?php echo $i++; ?>
      </th>
      <td>

        <?php echo $siswa['f_nama']; ?>

      </td>
      <td><?php echo $siswa['f_idkelas']; ?></td>
      <td><?php echo $siswa['f_idjurusan']; ?></td>
    </tr>

    <?php endforeach ?>
  </body>
</table>
  </div>
  </div>
  </div>
</div>
  </div>
    <!-- akhir tabel siswa -->


    <footer class="text-white text-center mt-25">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00000" fill-opacity="1" d="M0,160L40,154.7C80,149,160,139,240,149.3C320,160,400,192,480,213.3C560,235,640,245,720,234.7C800,224,880,192,960,186.7C1040,181,1120,203,1200,181.3C1280,160,1360,96,1400,64L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        <p class="bg-black">
        &copy;CopyRight Created by <a href="https://instagram.com/isnansrsy?utm_source=qr&igshid=ZDc4ODBmNjlmNQ%3D%3D" target="_blank" class="text-white text-decoration-none fw-bold">Isnanisa</a>
        </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>