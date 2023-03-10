<?php
$songs = [
    '',
    'longme.jpg',
    'vetmua.jpg',
    'phoipha.jpg',
    'quehuong.jpg',
    'datnuoc.jpg',
    'hardrock.jpg',
    'TheUnforgiven.jpg',
    'noitinhyeubatdau.jpg',
    'loveme.jpg',
    'stronger.jpg',
    'csmt.jpg',
    'cayvagio.jpg',
    'nguoithay.jpg',
];
// if(isset($_GET['id'])){
//     echo "<h2 style='color:red'>{$_GET['id']}</h2>";
// }
require './includes/database-connection.php';

// Functions
$sql = "SELECT baiviet.ma_bviet , baiviet.ten_bhat , theloai.ten_tloai , baiviet.tomtat , tacgia.ten_tgia 
                FROM baiviet 
                INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai 
                INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia 
                WHERE baiviet.ma_bviet = {$_GET['id']}"; // SQL
$statement = $pdo->query($sql);
$content = $statement->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
        <div class="container-fluid">
            <div class="my-logo">
                <a class="navbar-brand" href="#">
                    <img src="images/logo2.png" alt="" class="img-fluid">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Trang ch???</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">????ng nh???p</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="N???i dung c???n t??m" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">T??m</button>
                </form>
            </div>
        </div>
    </nav>

</header>
<main class="container mt-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">C???M NH???N V??? B??I H??T</h3> -->
    <!-- Day la phan demo front-end -->
    <!--    <div class="row mb-5">-->
    <!--        <div class="col-sm-4">-->
    <!--            <img src="images/songs/cayvagio.jpg" class="img-fluid" alt="...">-->
    <!--        </div>-->
    <!--        <div class="col-sm-8">-->
    <!--            <h5 class="card-title mb-2">-->
    <!--                <a href="" class="text-decoration-none">C??y v?? gi??</a>-->
    <!--            </h5>-->
    <!--            <p class="card-text"><span class=" fw-bold">B??i h??t: </span>C??y v?? gi??</p>-->
    <!--            <p class="card-text"><span class=" fw-bold">Th??? lo???i: </span>Nh???c tr??? t??nh</p>-->
    <!--            <p class="card-text"><span class=" fw-bold">T??m t???t: </span>Em v?? anh, hai ?????a quen nhau th???t t??nh c???. L???i h??t c???a anh t??? b??i h??t ???C??y v?? gi????? ???? l??m t??m h???n em xao ?????ng. Nh??ng s??? th???t ph?? ph??ng r???ng em ch??a bao gi??? n??i cho anh bi???t nh???ng suy ngh?? t???n s??u trong tim m??nh. B???i v?? em nh??t nh??t, em kh??ng d??m ?????i m???t v???i th???c t??? kh???c nghi???t, hay th???c ra em kh??ng d??m ?????i di???n v???i ch??nh m??nh.</p>-->
    <!--            <p class="card-text"><span class=" fw-bold">N???i dung: </span>Em v?? anh, hai ?????a quen nhau th???t t??nh c???. L???i h??t c???a anh t??? b??i h??t ???C??y v?? gi????? ???? l??m t??m h???n em xao ?????ng. Nh??ng s??? th???t ph?? ph??ng r???ng em ch??a bao gi??? n??i cho anh bi???t nh???ng suy ngh?? t???n s??u trong tim m??nh. B???i v?? em nh??t nh??t, em kh??ng d??m ?????i m???t v???i th???c t??? kh???c nghi???t, hay th???c ra em kh??ng d??m ?????i di???n v???i ch??nh m??nh.</p>-->
    <!--            <p class="card-text"><span class=" fw-bold">T??c gi???: </span>Nguy???n V??n Gi???</p>-->
    <!---->
    <!--        </div>-->
    <!--    </div>-->
    <div class="row mb-5">
        <div class="col-sm-4">
            <img src="./images/songs/<?= $songs[$_GET['id']] ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-sm-8">
            <h5 class="card-title mb-2">
                <a href="" class="text-decoration-none"> <?= $content['ten_bhat'] ?></a>
            </h5>
            <p class="card-text"><span class=" fw-bold">B??i h??t: </span><?= $content['ten_bhat']; ?></p>
            <p class="card-text"><span class=" fw-bold">Th??? lo???i: </span><?= $content['ten_tloai']; ?></p>
            <p class="card-text"><span class=" fw-bold">T??m t???t: </span><?= $content['tomtat']; ?></p>
            <p class="card-text"><span class=" fw-bold">N???i dung: </span><?= $content['tomtat'] ?></p>
            <p class="card-text"><span class=" fw-bold">T??c gi???: </span><?= $content['ten_tgia'] ?></p>

        </div>
    </div>
</main>
<?php include './layout/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
