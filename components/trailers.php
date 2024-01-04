<div class="container" id="movie_trailers" style="display: none;">
    <div
        class="movie-trailers d-flex justify-content-start align-items-start justify-content-lg-center align-items-lg-center">
        <div id="trailers_bg" class="movie-trailers-bg d-none d-lg-block"></div>
        <div class="movie-trailers-content overflow-auto">

            <!-- Trailer -->
            <div class="text-center mb-4 position-relative">
                <div class="position-absolute top-0 end-0 z-2">
                    <button id="close_trailer" class="btn border border-0" style="color: #dc3444"><i class="fa fa-times"
                            aria-hidden="true"></i></button>
                </div>
                <iframe class="d-none d-lg-inline position-absolute top-50 start-50 translate-middle z-1" width="560px"
                    height="315px" src="https://www.youtube.com/embed/6ZfuNTqbHE8?si=pc-8abK9QR6H6Oi3"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <div class="img-gradient position-absolute z-0"></div>
                <div class="d-inline">
                    <img src="assets/Poster_1.jpg" class="d-block w-100" alt="Poster_1">
                </div>
            </div>

            <!-- Content -->
            <div class="mx-5">
                <div class="row mb-3">
                    <div class="col-12 col-lg-10 mb-3 mb-lg-0">
                        <p class="text-center text-lg-start text-capitalize fs-4 m-0">Avengers Infinity War (2018)
                            มหาสงครามล้างจักรวาล</p>
                    </div>
                    <div class="col-12 col-lg-2">
                        <a href="movie_player.php?movie_id=#" class="btn btn-secondary"><i class="fa fa-play fa-lg"></i>
                            ดูหนัง</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 mb-4">
                        <p class="fs-6 fw-bold my-1">ปี 2018 2 ชม. 29 นาที</p> <!-- ดึง API IDMb -->
                        <p class="fs-6 fw-bold my-1">เสียง : ไทย</p>
                        <p class="fs-6 fw-bold my-1">ประเภทหนัง :
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <a class="link-genre" style="color: whitesmoke;"
                                    href="movie_list.php?genra_id=<?= $i + 1 ?>">Genre</a>
                            <?php } ?>
                        </p>
                        <p class="fs-6 fw-bold my-1">Tag :
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <a class="btn btn-secondary btn-sm my-1"
                                    href="movie_list.php?genra_id=<?= $i + 1 ?>">Genre</a>
                            <?php } ?>
                        </p>
                    </div>
                    <div class="col-12 col-lg-8">
                        <p class="fs-5 fw-bold">เรื่องย่อ</p>
                        <p class="fs-6">
                            ในขณะที่เหล่าอเวนเจอร์สและพันธมิตรยังคงปกป้องโลกจากภัยคุกคามที่ใหญ่เกินกว่าที่ฮีโร่คนใดคนหนึ่งจะรับมือ
                            Avengers 3 Infinity War ได้จึงเกิดอันตรายใหม่จากเงามืดของจักรวาลนั่นคือธานอส
                            เป้าหมายของเขาคือการรวบรวม Infinity Stones
                            ทั้งหกชิ้นสิ่งประดิษฐ์ที่มีพลังเหนือจินตนาการและใช้มันเพื่อทำลายเจตจำนงที่บิดเบี้ยวของเขาต่อความเป็นจริงทั้งหมด
                            ทุกสิ่งที่เหล่าอเวนเจอร์ต่อสู้เพื่อแย่งชิงมาจนถึงขณะนี้ชะตากรรมของโลกและการดำรงอยู่ไม่เคยมีความแน่นอนมากขึ้น
                            เอเวนเจอร์ส ภาค 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>