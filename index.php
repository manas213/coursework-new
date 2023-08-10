<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restful Retreat</title>
        <link rel="stylesheet" href="css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <?php require('inc/header.php');?>

        <!-- carousel -->
        <div id="hero-carousel" class="carousel slide">
            <div class="carousel-indicators" >
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="images/1.jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/2.jpg" class="d-block w-100 c-img" alt="...">
                </div>
                <div class="carousel-item c-item">
                    <img src="images/3.jpg" class="d-block w-100 c-img" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- check availability form -->
        <div class="container availability-form" >
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h4 class="mb-4">Check Booking Availability</h4>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-In</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Adult</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight: 500;">Children</label>
                                <select class="form-select shadow-none">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn btn-info shadow-none">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Our rooms -->
        <div class="container" id="rooms">
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font" >Rooms & Rates</h2>
            <div class="rooms-section">
                <div class="rooms">
                    <div class="rooms-img">
                        <img src="images/room1.avif">
                    </div>
                    <div class="rooms-features">
                        <h5><span>Simple Room</span></h5>
                        <div class="room-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h6><span>Rs. 800</span></h6>
                        <button class="book-btn">Book Now</button>    
                    </div>
                </div>
                <div class="rooms">
                    <div class="rooms-img">
                        <img src="images/room2.avif" style="height: 213.84px;">
                    </div>
                    <div class="rooms-features">
                        <h5><span>Deluxe Room</span></h5>
                        <div class="room-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h6><span>Rs. 1000</span></h6>
                        <button class="book-btn">Book Now</button>
                    </div>    
                </div>
                <div class="rooms">
                    <div class="rooms-img">
                        <img src="images/room3.avif">
                    </div>
                    <div class="rooms-features">
                        <h5><span>Luxury Room</span></h5>
                        <div class="room-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h6><span>Rs.2500</span></h6>
                        <button class="book-btn">Book Now</button>
                    </div>    
                </div>
                <div class="rooms">
                    <div class="rooms-img">
                        <img src="images/room1.avif">
                    </div>
                    <div class="rooms-features">
                        <h5><span>Double Room</span></h5>
                        <div class="room-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h6><span>Rs. 950</span></h6>
                        <button class="book-btn">Book Now</button>
                    </div>    
                </div>
            </div>
            <div class="center-btn">
                <button class="rooms-btn">
                    <a href="rooms.php">More rooms>></a>
                </button>
            </div>
        </div>
       
        <!-- Our Facilities -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font" id="facilities">Our Facilities</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="faccs col-lg-2 col-md-3 text-center rounded shadow py-4 my-3">
                    <img src="images/wifi.svg" alt="">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="faccs col-lg-2 col-md-3 text-center rounded shadow py-4 my-3">
                    <img src="images/pool.svg">
                    <h5 class="mt-3">Swimming Pool</h5>
                </div>
                <div class="faccs col-lg-2 col-md-3 text-center rounded shadow py-4 my-3">
                    <img src="images/spa.svg">
                    <h5 class="mt-3">Spa & Massage</h5>
                </div>
                <div class="faccs col-lg-2 col-md-3 text-center rounded shadow py-4 my-3">
                    <img src="images/sauna.svg">
                    <h5 class="mt-3">Sauna</h5>
                </div>
                <div class="faccs col-lg-2 col-md-3 text-center rounded shadow py-4 my-3">
                    <img src="images/fun.svg">
                    <h5 class="mt-3">Fun & Games</h5>
                </div>
            </div>
        </div>

        <!-- Contact Us --> 
        <section class="contact" id="contact">
            <div class=" contact-row">
                <div class="contact-form">
                    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Get in Touch</h2>
                        <form>  
                            <input type="text" id="formName" class="form-control form-control-lg mb-2" placeholder="Name">
                            <input type="email" id="formEmail" class="form-control form-control-lg mb-2" placeholder="E-mail">
                            <textarea id="formMessage" class="form-control form-control-lg mb-3" rows="5" placeholder="Message"></textarea>
                            <div class="text-center">
                                <button type="submit" class="contact-btn" tabIndex="-1">Send message</button>
                            </div>
                        </form>
                </div>

                <div class="map">
                    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Find Us</h2>
                    <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56543.829684715616!2d85.2830457511591!3d27.65580104418238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb178514f97739%3A0xeb1f6e5c822e62ab!2sBhaisepati%2C%20Karyabinayak!5e0!3m2!1sen!2snp!4v1688491451898!5m2!1sen!2snp" height="350" width="700" loading="lazy"></iframe>
                </div>
                    
            </div>

                 
        </section>
                    
        <!-- Footer -->
        <?php require('inc/footer.php');?>
        <?php require('inc/modals.php');?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>    
    </body>
</html>