const toggleButton = document.getElementById("toggle-button");
const closeButton = document.getElementById("close-button");
const searchBar = document.getElementById("search-bar");
const searchBg = document.getElementById("search-bg");

toggleButton.addEventListener("click", () => {
  toggleButton.style.display = "none";
  closeButton.style.display = "block";
  searchBar.style.display = "block";
});

closeButton.addEventListener("click", () => {
  toggleButton.style.display = "block";
  closeButton.style.display = "none";
  searchBar.style.display = "none";
});

searchBg.addEventListener("click", () => {
  searchBar.style.display = "none";
});

// toggleButton.addEventListener("click", () => {
//   if (searchBar.style.display === "none" || searchBar.style.display === "") {
//     toggleButton.style.display = "none";
//     closeButton.style.display = "block";
//     searchBar.style.display = "block";
//   } else {
//     toggleButton.style.display = "block";
//     closeButton.style.display = "none";
//     searchBar.style.display = "none";
//   }
// });

// closeButton.addEventListener("click", () => {
//   if (searchBar.style.display === "none" || searchBar.style.display === "") {
//     toggleButton.style.display = "none";
//     closeButton.style.display = "block";
//     searchBar.style.display = "block";
//   } else {
//     toggleButton.style.display = "block";
//     closeButton.style.display = "none";
//     searchBar.style.display = "none";
//   }
// });
