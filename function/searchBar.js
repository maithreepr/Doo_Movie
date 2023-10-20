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
