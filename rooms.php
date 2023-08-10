<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Rooms</title>
        <link rel="stylesheet" href="css/rooms.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
        <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php require('inc/header.php');?>
    <div class='container rooms-page-wrapper'>
        <div class="row rooms-page gx-5">
            <div class="col-lg-3 col-md-12 col-12 filter-container">
                <h4>Filters</h4>
                <div class="filters">
                    <div class="check_in_out">
                        <h5>Check In</h5>
                        <input type="date" id="check-in"> 
                        <h5>Check Out</h5>
                        <input type="date" id="check-out">
                    </div>
                    <div class="features">
                        <h5>Features</h5>
                        <input type="checkbox" id="internet">
                        <label for="internet">Internet</label>
                        <input type="checkbox" id="hot">
                        <label for="hot">Hot Water</label><br>
                        <input type="checkbox" id="air-conditioner">
                        <label for="air-conditioner">Air Conditioner</label>
                        <input type="checkbox" id="television">
                        <label for="television">Telivision</label><br>
                        <input type="checkbox" id="balcony">
                        <label for="balcony">Balcony View</label>
                        <input type="checkbox" id="multi-baths">
                        <label for="multi-baths">Multiple Bathrooms</label>
                    </div>
                    <div class="guests">
                        <h5>Guests</h5>
                        Adult
                        <select id="adults-select">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        Children
                        <select id="children-select">
                            <option value="0">None</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div> 
                    <button class="btn btn-warning">Search</button>
                </div>
            </div>
            <div class='col-lg-8 col-md-12 col-12'>
                <div class="row rooms-container">
                    <div class="col-lg-5 col-md-4 rooms">
                        <img src="images/room2.avif">
                    </div>
                    <div class="col-lg-5 col-md-4 room-type">
                        <h5><strong>Single Room</strong> </h5>
                        <h6><strong>Features</strong></h6>
                        <div class="room-type-inside">
                            <span>Internet</span>
                            <span>Hot Water</span>
                        </div>
                        <h6><strong>Guests</strong></h6>
                        <div class="room-type-inside"> 
                            <span>1 Adult</span>
                            <span>1 Children</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 room-book ">
                        <span><strong>200 price</strong></span>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book now</button>
                    </div>
                </div>

                <div class="row rooms-container">
                    <div class="col-lg-5 col-md-4 rooms">
                        <img src="images/room2.avif">
                    </div>
                    <div class="col-lg-5 col-md-4 room-type">
                        <h5><strong>Double Room</strong> </h5>
                        <h6><strong>Features</strong></h6>
                        <div class="room-type-inside">
                            <span>Internet</span>
                            <span>Hot Water</span>
                            <span>Air Conditioner</span>
                        </div>
                        <h6><strong>Guests</strong></h6>
                        <div class="room-type-inside"> 
                            <span>2 Adult</span>
                            <span>1 Children</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 room-book ">
                        <span><strong>200 price</strong></span>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book now</button>
                    </div>
                </div>

                <div class="row rooms-container">
                    <div class="col-lg-5 col-md-4 rooms">
                        <img src="images/room2.avif">
                    </div>
                    <div class="col-lg-5 col-md-4 room-type">
                        <h5><strong>Family Room</strong> </h5>
                        <h6><strong>Features</strong></h6>
                        <div class="room-type-inside">
                            <span>Internet</span>
                            <span>Air Conditioner</span>
                            <span>Television</span>
                            <span>Multiple Bathrooms</span>
                        </div>
                        <h6><strong>Guests</strong></h6>
                        <div class="room-type-inside"> 
                            <span>2 Adult</span>
                            <span>3 Children</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 room-book ">
                        <span><strong>200 price</strong></span>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book now</button>
                    </div>
                </div>
                <div class="row rooms-container">
                    <div class="col-lg-5 col-md-4 rooms">
                        <img src="images/room2.avif">
                    </div>
                    <div class="col-lg-5 col-md-4 room-type">
                        <h5><strong>Luxury Room</strong> </h5>
                        <h6><strong>Features</strong></h6>
                        <div class="room-type-inside">
                            <span>Internet</span>
                            <span>Hot Water</span>
                            <span>Air Conditioner</span>
                            <span>Balcony View</span>
                        </div>
                        <h6><strong>Guests</strong></h6>
                        <div class="room-type-inside"> 
                            <span>3 Adults</span>
                            <span>1 Children</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 room-book ">
                        <span><strong>200 price</strong></span>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require('inc/footer.php');?>
    <?php require('inc/modals.php');?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchBtn = document.querySelector(".btn-warning");
            searchBtn.addEventListener("click", searchRooms);
        });

        function searchRooms() {
            const checkInDate = document.getElementById("check-in").value;
            const checkOutDate = document.getElementById("check-out").value;
            const internet = document.getElementById("internet").checked;
            const hotWater = document.getElementById("hot").checked;
            const airConditioner = document.getElementById("air-conditioner").checked;
            const television = document.getElementById("television").checked;
            const multiBaths = document.getElementById("multi-baths").checked;
            const balcony = document.getElementById("balcony").checked;
            const adultsSelect = document.getElementById("adults-select");
            const childrenSelect = document.getElementById("children-select");
            const selectedAdults = adultsSelect.value;
            const selectedChildren = childrenSelect.value;

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "filter-rooms.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Parse the JSON data received from the server
                        const filteredRooms = JSON.parse(xhr.responseText);

                        // Generate the HTML for the filtered room items
                        let filteredRoomHTML = "";
                        filteredRooms.forEach((room) => {
                            // Create HTML for each room based on the received data
                                filteredRoomHTML += `
                                    <div class="col-lg-5 col-md-4 rooms room-item">
                                    <!-- Room content based on the received data -->
                                    </div>
                                `;
                        });

                        // Update the container element with the new filtered room items
                        const roomContainer = document.querySelector(".rooms-container");
                        roomContainer.innerHTML = filteredRoomHTML;
                    } 
                    else {
                       
                    }
                }
            };

            // Prepare data to be sent in the AJAX request
            const data = new URLSearchParams({
                check_in_date: checkInDate,
                check_out_date: checkOutDate,
                internet: internet,
                hot_water: hotWater,
                air_conditioner: airConditioner,
                // Add other filter criteria as needed...
            });

            // Send the AJAX request
            xhr.send(data);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>