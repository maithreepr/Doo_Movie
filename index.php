<?php
$movie_list = array("หนังมาใหม่", "อนิเมะ (การ์ตูน) Anime", "ซีรี่ย์", "หนังไทย", "Top 10 ไม่ควรพลาด", "ยังไม่จบ", "สตรีมมิ่ง Streaming", "หนังสยองขวัญ Horror");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DooMovie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>

<body>

    <!-- Navbar Top-->
    <?php include 'components/navBarTop.php'; ?>

    <!-- Show Movie -->
    <?php include 'components/showMovie.php'; ?>

    <!-- Main Content -->
    <div class="container">
        <h4 class="d-flex justify-content-center align-items-center my-5" style="color:whitesmoke">Header Title</h4>
        <div class="mb-4">
            <div class="mb-3">
                <h5 style="color: white" data-aos="fade-right" data-aos-duration="800">แนะนำหนัง</h5>
            </div>
            <div class="swiper suggestionSwiperAutoPlay pb-2" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper-wrapper">
                    <?php for ($j = 0; $j < 30; $j++) { ?>
                        <div class="card border border-0 overlay swiper-slide" style="width: 100%;">
                            <a href="movie_player.php?movie_id=<?= $j + 1 ?>">
                                <img src="assets/Movie_Poster.jpg" class="card-img-top" alt="" style="width: 100%;">
                                <div class="position-absolute bottom-0 start-50 translate-middle-x text-linear-gradient"
                                    style="width:100%; height:30%">
                                    <p class="text-break text-center text-capitalize lh-sm text-overflow mt-0 mt-md-1 mt-lg-3 mb-0 px-2"
                                        style="color:whitesmoke;">Avengers: Infinity War (2018) อเวนเจอร์ส:
                                        มหาสงครามล้างจักรวาล</p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <div class="mb-4">
                <div class="position-relative mb-3">
                    <h5 class="d-inline" style="color: white" data-aos="fade-right" data-aos-duration="800">หนัง</h5>
                    <a href="movie_list.php?genra_id=<?= $i + 1 ?>"
                        class="btn btn-dark btn-sm border border-1 border-danger position-absolute top-50 end-0 translate-middle-y"
                        data-aos="fade-left" data-aos-duration="800"><span style="font-size:smaller">ดูทั้งหมด</span></a>
                </div>
                <div class="swiper suggestionSwiper pb-2" data-aos="fade-up" data-aos-duration="1000">
                    <div class="swiper-wrapper">
                        <?php for ($j = 0; $j < 30; $j++) { ?>
                            <div class="card border border-0 overlay swiper-slide" style="width: 100%;">
                                <a id="movie_trailer_id_<?= $i + 1, '_', $j + 1 ?>"
                                    href="#Avengers_Infinity_War_(2018)_id_<?= $i + 1, '_', $j + 1 ?>">
                                    <img src="assets/Movie_Poster.jpg" class="card-img-top" alt="" style="width: 100%;">
                                    <div class="position-absolute bottom-0 start-50 translate-middle-x text-linear-gradient"
                                        style="width:100%; height:30%">
                                        <p class="text-break text-center text-capitalize lh-sm text-overflow mt-0 mt-md-2 mt-lg-3 mb-0 px-2"
                                            style="color:whitesmoke;">Avengers: Infinity War (2018) อเวนเจอร์ส:
                                            มหาสงครามล้างจักรวาล</p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next text-light d-none d-lg-inline">
                        <i class="fa fa-chevron-right position-absolute top-50 start-50 translate-middle"
                            aria-hidden="true"></i>
                    </div>
                    <div class="swiper-button-prev text-light d-none d-lg-inline">
                        <i class="fa fa-chevron-left position-absolute top-50 start-50 translate-middle"
                            aria-hidden="true"></i>
                    </div>
                    <div
                        class="swiper-scrollbar bg-secondary position-absolute top-100 start-50 translate-middle d-block d-lg-none">
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Ads -->
    <div class="container-fluid mt-5">
        <div class="row border-top border-2 border-danger" style="height: 100%;">
            <div data-aos="fade-right" data-aos-duration="1000"
                class="col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="py-5">
                    <h3 class="text-center text-md-start text-danger">Lorem ipsum dolor sit amet consectetur.</h3>
                    <p class="text-center text-md-start text-light">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Aut ullam repellendus libero debitis ipsa, culpa quam nobis consequuntur maiores animi?
                    </p>
                </div>
            </div>
        </div>
        <div class="row border-top border-2 border-danger justify-content-end" style="height: 100%;">
            <div data-aos="fade-right" data-aos-duration="1000"
                class="col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="py-5">
                    <h3 class="text-center text-md-start text-danger">Lorem ipsum dolor sit amet consectetur.</h3>
                    <p class="text-center text-md-start text-light">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Aut ullam repellendus libero debitis ipsa, culpa quam nobis consequuntur maiores animi?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- NavBar Bottom -->
    <?php include 'components/navBarBottom.php'; ?>

    <!-- Search bar -->
    <?php include 'components/searchBar.php'; ?>

    <!-- Movie trailers -->
    <?php include 'components/trailers.php' ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- Function -->
    <script src="function/navBarScroll.js"></script>
    <script src="function/searchBar.js"></script>
    <script src="function/trailers.js"></script>
    <script src="function/swiper.js"></script>

</body>

</html>