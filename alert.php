<?php
    function alert($type, $msg){
        $boot_class = ($type == "success") ? "alert-success" : "alert-danger";
        echo <<<alert
            <div class="alert boot_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
        // echo "<script>alert('$msg');</script>";
    }
?>