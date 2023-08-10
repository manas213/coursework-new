<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="userLogin.php" method="POST">
                <div class="modal-header d-flex align-items-center">
                    <i class="bi bi-person-circle fs-4 me-2"></i> <h1 class="modal-title fs-5">User Login</h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <?php
                        // if (isset($_SESSION['login_error'])) {
                        //     echo '<div class="alert alert-danger" role="alert">' . $_SESSION['login_error'] . '</div>';
                        //     unset($_SESSION['login_error']);
                        // }
                    ?> -->
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none" name="uemail">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" name="upasswd">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-dark shadow-none" name="userLogin">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </form>

            <div style='text-align: center'>
                <span>Don't have an acccount?<a href="#registerModal" data-bs-toggle="modal" data-bs-target="#registerModal">Create one</a>.</span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div id="alertContainer"></div>
            <form 
            action="register.php" 
            method="POST" 
            enctype="multipart/form-data">
                <div class="modal-header d-flex align-items-center">
                <i class="bi bi-person-lines-fill fs-4 me-2"></i> <h1 class="modal-title fs-5">User Registration</h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <span class="badge text-bg-light mb-3 text-wrap">
                    Note: Your details must match your ID that will be required during check-in
                </span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none" name="name" required>
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none" name="email" required>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control shadow-none" name="phn" required>
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">ID</label>
                            <input type="file" class="form-control shadow-none" name="image" required>
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label">Address</label>
                            <textarea class="form-control shadow-none" rows="1" name="address" required></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control shadow-none" name="country" required>
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control shadow-none" name="dob" required>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" name="passwd" required>
                        </div>
                        <div class="col-md-6 p-0">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control shadow-none" name="cpasswd" required>
                        </div>
                    </div>
                    <div class="text-center">
                    <button type="submit" id="registerBtn" class="btn btn-dark shadow-none" name="register">Register</button>
                    </div>
                </div>
                    <div class="mb-3">
                </div>
            </form>
            <div>
                <span>Already have an acccount? <a href="#registerModal" data-bs-toggle="modal" data-bs-target="#loginModal">Log in</a>.</span>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById("registerBtn").addEventListener("click", function () {
        var form = document.getElementById("registerForm");
        var formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            var alertContainer = document.getElementById("alertContainer");
            alertContainer.innerHTML = result;
        })
        .catch(error => {
            console.error('Error:', error);
            var alertContainer = document.getElementById("alertContainer");
            alertContainer.innerHTML = '<div class="alert alert-danger">Form submission failed</div>';
        });
    });
</script>