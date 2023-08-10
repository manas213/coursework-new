<nav class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand h-font" href="index.php">Restful Retreat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-menus">
                    <a class="nav-link active me-2" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item nav-menus">
                    <a class="nav-link me-2" href="#rooms">Rooms</a>
                </li>
                <li class="nav-item nav-menus">
                    <a class="nav-link me-2" href="#facilities">Facilities</a>
                </li>
                <li class="nav-item nav-menus">
                    <a class="nav-link me-2" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item nav-menus">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
            <div class="d-flex">

                
                <button type="button" class="btn btn-outline-dark me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll("nav a");
        navLinks.forEach(link => {
            link.addEventListener("click", function(event) {
                event.preventDefault();
                const targetId = link.getAttribute("href");
                document.querySelector(targetId).scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
    });
</script> -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll("nav a");
        navLinks.forEach(link => {
            const targetId = link.getAttribute("href");
            if (targetId.startsWith("#")) {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    document.querySelector(targetId).scrollIntoView({
                        behavior: "smooth"
                    });
                });
            }
        });
    });
</script>



