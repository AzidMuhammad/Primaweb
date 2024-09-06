// Script untuk mengatur bagian Navbar
var navbar = document.querySelector(".navbar"); // Mendapatkan elemen navbar

var scrollPosition = window.pageYOffset; // Mendapatkan posisi scroll awal

var scrollThreshold = 200; // Mendefinisikan jarak scroll minimum untuk memunculkan/menghilangkan navbar

window.addEventListener("scroll", function () {
    // Menambahkan event listener pada event scroll
    var currentScrollPosition = window.pageYOffset; // Mendapatkan posisi scroll saat ini

    var scrollDirection =
        currentScrollPosition > scrollPosition ? "down" : "up"; // Menentukan arah scroll (ke atas atau ke bawah)

    scrollPosition = currentScrollPosition; // Memperbarui posisi scroll

    // Mengubah kelas navbar berdasarkan arah scroll dan jarak scroll threshold
    if (scrollDirection === "down" && scrollPosition > scrollThreshold) {
        navbar.classList.add("hidden");
    } else if (scrollDirection === "up" || scrollPosition <= scrollThreshold) {
        navbar.classList.remove("hidden");
    }
});

var navBar = document.querySelector(".navbar");
      window.onscroll = function() {
        if (window.scrollY > 22) {
          navBar.classList.add("scrolled");
        } else {
          navBar.classList.remove("scrolled");
        }
      };
