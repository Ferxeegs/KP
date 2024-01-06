<script src="/vendor/jquery/jquery.slim.min.js"></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"
></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cardElements = document.querySelectorAll(
      ".align-items-center.card"
    );

    cardElements.forEach(function (card) {
      card.addEventListener("click", function () {
        const targetPage = this.getAttribute("data-target");
        window.location.href = targetPage;
      });
    });
  });

  const navEl = document.querySelector(".navbar");
  window.addEventListener("scroll", () => {
    if (window.scrollY >= 56) {
      navEl.classList.add("navbar-scrolled");
    } else if (window.scrollY < 56) {
      navEl.classList.remove("navbar-scrolled");
    }
  });

  document
    .querySelectorAll('.navbar-nav a[href^="#"]')
    .forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href").substring(1);
        const targetElement = document.getElementById(targetId);

        window.scrollTo({
          top: targetElement.offsetTop - navEl.clientHeight, // Adjusted for navbar height
          behavior: "smooth",
        });
      });
    });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cardElements = document.querySelectorAll(
      ".align-items-center.card"
    );

    cardElements.forEach(function (card) {
      card.addEventListener("click", function () {
        const background = this.dataset.background;
        const title = this.dataset.title;
        const subtitle = this.dataset.subtitle;
        const description = this.dataset.description;
        const targetPage = this.dataset.target;

        // Additional information for Tempat Wisata and Paket Harga
        const tempatWisata = [
          "Destination1",
          "Destination2",
          "Destination3",
        ]; // Replace with your actual data
        const harga = "Rp 250.000"; // Replace with your actual data

        localStorage.setItem(
          "selectedPackage",
          JSON.stringify({
            background,
            title,
            subtitle,
            description,
            tempatWisata,
            harga,
          })
        );

        window.location.href = targetPage;
      });
    });
  });
</script>