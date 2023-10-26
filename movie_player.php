<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DooMovie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Navbar -->
    <?php include 'components/navBarTop.php' ?>

    <!-- Movie player -->
    <div class="container-fluid text-center my-5 pt-lg-2" style="color:whitesmoke;">
        <div class="row">
            <div class="col-12 p-0">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/6ZfuNTqbHE8?si=6teHNhPU4bbjY0hd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/6ZfuNTqbHE8?si=TV_NHxL8s_OxjjXy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container-fluid px-lg-5 my-5" style="color:whitesmoke">
        <div class="row mb-4">
            <div class="col-12 col-md-9 col-lg-10 mb-4">
                <p class="text-center text-md-start text-capitalize fs-4 m-0">Avengers Infinity War (2018) มหาสงครามล้างจักรวาล</p>
            </div>
            <div class="col-12 col-md-3 col-lg-2 mb-2">
                <button class="btn btn-sm btn-secondary" style="width: 100%;">
                    <p class="fs-6 m-0">แจ้งปัญหา</p>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-0 col-md-5 col-lg-3 d-none d-md-flex justify-content-center mb-4">
                <img src="assets/Movie_Poster.jpg" alt="" style="width: 85%;">
            </div>
            <div class="col-12 col-md-7 col-lg-4 mb-4">
                <p class="fs-6 fw-bold my-1">ปี 2018 2 ชม. 29 นาที</p> <!-- ดึง API IDMb -->
                <p class="fs-6 fw-bold my-1">เสียง : ไทย</p>
                <p class="fs-6 fw-bold my-1">ประเภทหนัง :
                    <?php for ($i = 0; $i < 10; $i++) { ?>
                        <a class="link-genre" style="color: whitesmoke;" href="movie_list.php?genra_id=<?= $i + 1 ?>">Genre</a>
                    <?php } ?>
                </p>
                <p class="fs-6 fw-bold my-1">Tag :
                    <?php for ($i = 0; $i < 10; $i++) { ?>
                        <a class="btn btn-secondary btn-sm my-1" href="movie_list.php?genra_id=<?= $i + 1 ?>">Genre</a>
                    <?php } ?>
                </p>
            </div>
            <div class="col-12 col-md-12 col-lg-5">
                <p class="fs-5 fw-bold">เรื่องย่อ</p>
                <p class="fs-6">ในขณะที่เหล่าอเวนเจอร์สและพันธมิตรยังคงปกป้องโลกจากภัยคุกคามที่ใหญ่เกินกว่าที่ฮีโร่คนใดคนหนึ่งจะรับมือ Avengers 3 Infinity War ได้จึงเกิดอันตรายใหม่จากเงามืดของจักรวาลนั่นคือธานอส เป้าหมายของเขาคือการรวบรวม Infinity Stones ทั้งหกชิ้นสิ่งประดิษฐ์ที่มีพลังเหนือจินตนาการและใช้มันเพื่อทำลายเจตจำนงที่บิดเบี้ยวของเขาต่อความเป็นจริงทั้งหมด ทุกสิ่งที่เหล่าอเวนเจอร์ต่อสู้เพื่อแย่งชิงมาจนถึงขณะนี้ชะตากรรมของโลกและการดำรงอยู่ไม่เคยมีความแน่นอนมากขึ้น เอเวนเจอร์ส ภาค 3</p>
            </div>
        </div>
    </div>

    <!-- Suggestion -->
    <div class="container-fluid px-lg-5 pb-3 my-5">
        <hr class="my-4" style="color:whitesmoke">
        <h5 data-aos="fade-right" data-aos-duration="1000" style="color:whitesmoke">Suggestion</h5>
        <br>
        <div class="swiper suggestionSwiper pb-2" data-aos="fade-up" data-aos-duration="1000">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < 30; $i++) { ?>
                    <div class="card border border-0 overlay swiper-slide" style="width: 100%;">
                        <a href="movie_player.php?movie_id=<?= $i + 1 ?>">
                            <img src="assets/Movie_Poster.jpg" class="card-img-top" alt="" style="width: 100%;">
                            <div class="position-absolute bottom-0 start-50 translate-middle-x text-linear-gradient" style="width:100%; height:30%">
                                <p class="text-break text-center text-capitalize lh-sm text-overflow mt-0 mt-md-2 mt-lg-3 mb-0 px-2" style="color:whitesmoke;">Avengers: Infinity War (2018) อเวนเจอร์ส: มหาสงครามล้างจักรวาล</p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next text-light d-none d-lg-inline">
                <i class="fa fa-chevron-right position-absolute top-50 start-50 translate-middle" aria-hidden="true"></i>
            </div>
            <div class="swiper-button-prev text-light d-none d-lg-inline">
                <i class="fa fa-chevron-left position-absolute top-50 start-50 translate-middle" aria-hidden="true"></i>
            </div>
            <div class="swiper-scrollbar bg-secondary position-absolute top-100 start-50 translate-middle d-block d-lg-none"></div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- NavBar Bottom -->
    <?php include 'components/navBarBottom.php'; ?>

    <!-- Search bar -->
    <?php include 'components/searchBar.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        AOS.init();
    </script>


    <!-- Function -->
    <script src="function/navBarScroll.js"></script>
    <script src="function/searchBar.js"></script>
    <script src="function/swiper.js"></script>

</body>

</html>