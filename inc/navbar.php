<?php
    $errorMessage = array();
?>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://www.101domain.com/images/flags/large/SITE.png" alt="" width="30" height="24" class="d-inline-block align-text-top">

            <?php
            if(isset($_SESSION['userID'])) {
                echo "
                        <div class='dropdown'>
                          <a class='btn btn-secondary dropdown-toggle' style='padding: 3px 2rem 3px 2rem' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
                            " . $_SESSION['firstname'] . "
                          </a>
                            <ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                                <li><a class='dropdown-item text-danger' href='./inc/logout.php'>Logout</a></li>
                                <li><a class='dropdown-item text-primary btn disabled' href='dashboard.php'>Dashboard</a></li>   
                            </ul>
                        </div>
                ";
            }
            else{
                echo "
                            <p>
                            <a  id='registerButton' class='btn btn-outline-success' >Register</a>
                            <button type='button' class='btn btn-outline-primary' disabled>Login</button>
                            </p>
                        ";
            }?>
        </a>
    </div>
</nav> 
<?php
if (isset($_SESSION['Verificated'])) {
    if ($_SESSION['Verificated'] == 'guide') {
        echo "
        <div style='text-align: center'>
        <p>
            <small class='border border-bottom' style='border-bottom-color: red'>
                Your account isn't verificated, please click here for verify it.
            </small>
            <form method='POST' action = './verify.php'>
            <input type='submit'  class='btn btn-outline-success' value = 'Verify Attempts: " . $_SESSION['tokenCount'] . ".'>
            </form>
            </p>
        </div>
        ";
    }
    else{
        echo "
        <div style='text-align: center'>
        <p>
            <small class='border border-bottom' style='border-bottom-color: green'>
                Your account verified.
            </small>
        </div>";
    }
}
?>