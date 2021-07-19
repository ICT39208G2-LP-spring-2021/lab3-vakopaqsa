<?php
    $err_personalNumber = "";
    $err_password = "";
    $err_lastname = "";
    $err_firstname = "";
    $err_email = "";

?>
<div id="registerForm" class="container w-75 m-auto visually-hidden" style="text-align: center">
    <form class="container w-25 mt-5 border rounded border-3 border-dark bg-secondary" method="post">
        <div class="mb-3" style="text-align: center">
            <?php //echo "<b>$err_firstname</b>" ?>
            <label class="form-label">Firstname</label>
            <input type="text" name="firstname" class="form-control" placeholder="Firstname">
        </div>
        <div class="mb-3" style="text-align: center">
            <?php //echo "<b>$err_lastname </b>"?>
            <label class="form-label">Lastname</label>
            <input type="text" name="lastname" class="form-control" placeholder="Lastname">
        </div>
        <div class="mb-3" style="text-align: center">
            <?php //echo "<b>$err_email </b>"?>
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3" style="text-align: center">
            <?php //echo "<b>$err_personalNumber </b>" ?>
            <label class="form-label">Personal Number</label>
            <input type="text" name="personalnumber" class="form-control" placeholder="Personal Number">
        </div>
        <div class="mb-3" style="text-align: center">
            <?php //echo "<b>$err_password </b>" ?>
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div style="text-align: center">
            <p>
                <button id="registerSubmit" type="submit" class="btn btn-primary">Submit</button>
            </p>
        </div>
    </form>
</div>