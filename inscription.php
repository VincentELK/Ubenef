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
            <fieldset style="width: 20%;">
                <legend>Select a vehicle</legend>
                <div>
                <input type="radio" id="bicycle" name="Bicycle" value="bicycle">
                <label for="bicycle">Bicycle</label>
                </div>
                <div>
                <input type="radio" id="cars" name="Cars" value="cars">
                <label for="cars">Cars</label>
                </div>
                <div>
                <input type="radio" id="motorcycle" name="Motorcycle" value="motorcycle">
                <label for="motorcycle">Motorcycle</label>
                </div>
                <div>
                <input type="radio" id="electric-scooter" name="Electric-Scooter" value="electric-scooter">
                <label for="bicycle">Electric-Scooter</label>
                </div>
            </fieldset>
            
        </form>
    </div>
    <div class="uber-link-container">

    </div>
</div>