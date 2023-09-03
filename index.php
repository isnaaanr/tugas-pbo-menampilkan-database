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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62969761faada80019c4386c&product=inline-share-buttons' async='async'></script>
    <link rel="icon" href="https://smknegeri40-jkt.sch.id/wp-content/uploads/2023/07/Logo_SMK_Negeri_40_Jakarta-150x150.png" sizes="32x32" />
    <link rel="icon" href="https://smknegeri40-jkt.sch.id/wp-content/uploads/2023/07/Logo_SMK_Negeri_40_Jakarta.png" sizes="192x192" />
    <title>Tugas PBO</title>
</head>

<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg shadow-sm bg-body-tertiary fixed-top">
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
<!-- akhir navbar -->

    <!-- Banner -->
    <div class="banner-container d-flex justify-content-center">
        <figure>
            <figcaption>
                <h3 class="text-white" id="element">
                </h3>
            </figcaption>
        </figure>
    </div>

    <div class="container" id="jurusan">
        <h1 class="text-center text-center mb-5 mt-3">Jurusan</h1>
        <div class="row text-center justify-content-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="false" data-aos-anchor-placement="top-center">

            <?php
            $sql = "select * from t_jurusan";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

                <div class="card-all col-md-4 col-xl-4 mb-3">
                    <div class="card" style="width: 18rem;">
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

    <!-- Cards -->
    <div class="container" id="kelas">
        <button title="Back To Top" class="btnScrollToTop bg-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg>
        </button>
        <h1 class="text-center text-center mb-5 mt-3">Kelas</h1>
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

   
        <div class="container" id="guru">
            <h1 class="text-center text-center mb-5 mt-3">Guru</h1>
            <div class="row text-center justify-content-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="false" data-aos-anchor-placement="top-center">

                <?php
                $sql = "select * from t_guru";
                $row = $db->getALL($sql);
                foreach ($row as $value) :
                ?>

                    <div class="card-all col-md-4 col-xl-6 mb-5">
                        <div class="card" style="width: 18rem;">
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

            <div class="container" id="siswa">
                <h1 class="text-center text-center mb-5 mt-3">Siswa</h1>
                <div class="row text-center justify-content-center">

                    <?php
                    // Menggunakan PDO untuk menghubungkan ke database
                    $db = new PDO("mysql:host=localhost;dbname=sekolah", "root", "");

                    // Kueri SQL dengan JOIN untuk mengambil data siswa, nama kelas, dan nama jurusan
                    $sql = "SELECT t_siswa.f_nama, t_kelas.f_nama AS f_idkelas, t_jurusan.f_nama AS f_idjurusan
                        FROM t_siswa
                        INNER JOIN t_kelas ON t_siswa.f_idkelas = t_kelas.f_idkelas
                        INNER JOIN t_jurusan ON t_siswa.f_idjurusan = t_jurusan.f_idjurusan";

                    $result = $db->query($sql);

                    foreach ($result as $row) :
                    ?>

                        <div class="card-all col-md-4 col-xl-6 mb-5" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card" style="width: 18rem;">
                                <img src="img/siswa/<?php echo $row['f_nama']; ?>.jpg" class="card-img-top" alt="Siswa">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">
                                        <?php echo $row['f_nama']; ?>
                                    </h5>
                                    <span>Kelas: <?php echo $row['f_idkelas']; ?></span>
                                    <p>Jurusan: <?php echo $row['f_idjurusan']; ?></p>
                                </div>
                            </div>
                        </div>

                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,160L34.3,160C68.6,160,137,160,206,165.3C274.3,171,343,181,411,192C480,203,549,213,617,218.7C685.7,224,754,224,823,213.3C891.4,203,960,181,1029,154.7C1097.1,128,1166,96,1234,85.3C1302.9,75,1371,85,1406,90.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    <footer class="text-dark text-center mt-25" style="background: #273036;">
        <p>
            <a href="https://instagram.com/isnansrsy?utm_source=qr&igshid=ZDc4ODBmNjlmNQ%3D%3D"</a>
            &copy; Created by Isnanisa
        </p>
    </footer>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        var typed = new Typed('#element', {
            strings: [''],
            typeSpeed: 50,
            showCursor: false, // Sembunyikan kursor
            loop: true // Ulangi animasi
        });
        const btnScrollToTop = document.querySelector(".btnScrollToTop");

        btnScrollToTop.addEventListener("click", function() {
            window.scrollTo(0, 0);
        });
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                btnScrollToTop.classList.add("active");
            } else {
                btnScrollToTop.classList.remove("active");
            }
        })
        AOS.init();
    </script>
    <!-- Akhir Cards -->
</body>

</html>