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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <!-- <div>
            <div class="d-flex justify-content-between mb-3">
                <h5 style="color: white" data-aos="fade-right" data-aos-duration="800">หนัง</h5>
                <a href="#" class="btn btn-dark btn-sm border border-1 border-danger" data-aos="fade-left" data-aos-duration="800"><span style="font-size:smaller">ดูทั้งหมด</span></a>
            </div>
            <div class="row">
                <swiper-container data-aos="fade-top" data-aos-duration="800" class="mySwiper mb-5" navigation="true" space-between="30" slides-per-view="6">
                    <?php for ($i = 0; $i < 12; $i++) { ?>
                        <swiper-slide>
                            <div class="col-2 card" style="width: 100%;">
                                <a href="#">
                                    <img src="assets/Movie_Poster.jpg" class="card-img-top" alt="Thumbnail">
                                    <p class="card-text">Crayon Shin chan Mononoke Ninja Chinpuden (2023) ชินจัง เดอะมูฟวี่ ตอน นินจาคาถาวายุอลเวง</p>
                                </a>
                            </div>
                        </swiper-slide>
                    <?php } ?>
                </swiper-container>
            </div>
        </div> -->
    </div>

    <!-- Ads -->
    <div class="container-fluid mt-5">
        <div class="row border-top border-2 border-danger" style="height: 100%;">
            <div data-aos="fade-right" data-aos-duration="1000" class="col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="py-5">
                    <h3 class="text-center text-md-start text-danger">Lorem ipsum dolor sit amet consectetur.</h3>
                    <p class="text-center text-md-start text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ullam repellendus libero debitis ipsa, culpa quam nobis consequuntur maiores animi?</p>
                </div>
            </div>
        </div>
        <div class="row border-top border-2 border-danger justify-content-end" style="height: 100%;">
            <div data-aos="fade-right" data-aos-duration="1000" class="col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="py-5">
                    <h3 class="text-center text-md-start text-danger">Lorem ipsum dolor sit amet consectetur.</h3>
                    <p class="text-center text-md-start text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut ullam repellendus libero debitis ipsa, culpa quam nobis consequuntur maiores animi?</p>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- Function -->
    <script src="function/navBarScroll.js"></script>
    <!-- <script src="function/searchBar.js"></script> -->
    <script>
        const toggleButton = document.getElementById("toggle-button");
        const closeButton = document.getElementById("close-button");
        const searchBar = document.getElementById("search-bar");
        const searchBg = document.getElementById("search-bg");
        const body = document.body;

        toggleButton.addEventListener("click", () => {
            toggleButton.style.display = "none";
            closeButton.style.display = "block";
            searchBar.style.display = "block";
            body.style.overflow = "hidden";
        });

        closeButton.addEventListener("click", () => {
            toggleButton.style.display = "block";
            closeButton.style.display = "none";
            searchBar.style.display = "none";
            body.style.overflow = "auto";
        });

        searchBg.addEventListener("click", () => {
            toggleButton.style.display = "block";
            closeButton.style.display = "none";
            searchBar.style.display = "none";
            body.style.overflow = "auto";
        });
    </script>
</body>

</html>