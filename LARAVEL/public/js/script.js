//navbar
const navMenu = document.querySelector(".nav");
const navToggle = document.querySelector(".nav__toggle");
const layer = document.querySelector(".layer");
const header = document.querySelector(".header");

navToggle.addEventListener("click", (e) => {
  e.preventDefault();
  navToggle.classList.toggle("nav__toggle--active");

  if (navToggle.classList.contains("nav__toggle--active")) {
    navMenu.classList.add("nav--active");
    layer.classList.add("layer--active");
    document.body.style.overflowY = "hidden";
  } else {
    navMenu.classList.remove("nav--active");
    layer.classList.remove("layer--active");
    document.body.style.overflowY = "auto";
  }

  e.stopPropagation();
});

window.addEventListener("scroll", () => {
  const position = window.pageYOffset;
  if (position > 85) {
    header.classList.add("header--active");
  } else {
    header.classList.remove("header--active");
  }
});
//end navbar

//blog
$(document).ready(function () {
  $(".filter-item").click(function () {
    const value = $(this).attr("data-filter");
    if (value == "all") {
      $(".post-box").show("1000");
    } else {
      $(".post-box")
        .not("." + value)
        .hide("1000");
      $(".post-box")
        .filter("." + value)
        .show("1000");
    }
  });
  // Add active Btn
  $(".filter-item").click(function () {
    $(this).addClass("active-filter").siblings().removeClass("active-filter");
  });
});

// Favorite
const data_artikel = []
const keystorage = "DataArtikel"
const AddFavArticle = document.querySelector('#favoritedButton');

const generateDataArticle= (id, CategoryName, title, date, article) => {
  return {
    id, 
    CategoryName, 
    title, 
    date, 
    article
  };
};

function saveData() {
    const parsed = JSON.stringify(data_artikel);
    localStorage.setItem(keystorage, parsed);
}

AddFavArticle.addEventListener('click', function () {
    const idArticle = document.getElementById("IdKategori");
    const CategoryName = document.getElementById("NamaKategori");
    const title = document.getElementById("titleArticle").value;
    const date = document.getElementById("DateArtikel").value;
    const article = document.getElementById("IsiArtikel");
 
    const newBook = generateDataArticle(idArticle, CategoryName, title, date, article);
    data_artikel.unshift(newBook);
 
    saveData();
    alert("Berhasil, Artikel ditambahkan ke Favorite");
});
