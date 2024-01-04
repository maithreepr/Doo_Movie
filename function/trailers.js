for (let i = 0; i < 5; i++) {
  for (let j = 0; j < 30; j++) {
    document
      .getElementById("movie_trailer_id_" + (i + 1) + "_" + (j + 1))
      .addEventListener("click", () => {
        document.getElementById("movie_trailers").style.display = "block";
        document.getElementById("navbar-top").classList.remove("fixed-top");
        document.body.style.overflow = "hidden";
      });
  }
}

document
  .getElementById("close_trailer")
  .addEventListener("click", () => {
    document.getElementById(
      "movie_trailers"
    ).style.display = "none";
    document.getElementById("navbar-top").classList.add("fixed-top");
    document.body.style.overflow = "auto";
  });

document
  .getElementById("trailers_bg")
  .addEventListener("click", () => {
    document.getElementById(
      "movie_trailers"
    ).style.display = "none";
    document.getElementById("navbar-top").classList.add("fixed-top");
    document.body.style.overflow = "auto";
  });
