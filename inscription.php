<?php
include 'includes/Header_Index.php';
include 'includes/cache_disable.php';
?>    

<div class="register-container">
    <div class="register-form-container">
        <form action="">
            <label for="username">Username : </label>
            <br>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="email">Your email</label>
            <br>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Your Password</label>
            <br>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="confirm-password">Confirm your password</label>
            <br>
            <input type="password" id="confirm-password" name="confirm-password">
            <br>
            <label for="area">Enter your delivery's area</label>
            <br>
            <input type="text" required id="area">
            <br>
            <fieldset class="register-fieldset">
                <legend>Select a vehicle</legend>
                <div>
                <input type="radio" id="bicycle" name="vehicle" value="bicycle">
                <label for="bicycle">Bicycle</label>
                </div>
                <div>
                <input type="radio" id="cars" name="vehicle" value="cars">
                <label for="cars">Cars</label>
                </div>
                <div>
                <input type="radio" id="motorcycle" name="vehicle" value="motorcycle">
                <label for="motorcycle">Motorcycle</label>
                </div>
                <div>
                <input type="radio" id="electric-scooter" name="vehicle" value="electric-scooter">
                <label for="electric-scooter">Electric-Scooter</label>
                </div>
            </fieldset>
            <br>
            <input class="register-btn"type="button" action="" value="Register">
        </form>
    </div>
    <div class="uber-link-container">

    </div>
</div>