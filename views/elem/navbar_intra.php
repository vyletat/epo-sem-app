<nav class="navbar navbar-dark fixed-top sticky-top  bg-dark">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Valprojekt</a>
    <ul class="navbar-nav px-3">
        <li  class="nav-item">
            <i class="fas fa-user-tie"></i>
            <!-- Vypise login usera -->
            <?php echo $login->getUserInfo();?>
        </li>
        <li class="nav-item text-nowrap">
            <form method="POST">
                <button name="logout" type="submit">Sign out</button>
            </form>
        </li>
    </ul>
</nav>

<?php
if (isset($_POST['logout'])) {
    $login->logout();
}
?>
