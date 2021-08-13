<?php
    session_start();
    if(isset($_SESSION['login_worker']))
    {
        include 'tpl/header.php';
        include 'tpl/sidebar.php';
        include 'tpl/navbar.php';
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
                <?php
                    include 'inc/profile.php';
                ?>
        </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

<?php
        include 'tpl/footer.php';
    }
    if (isset($_SESSION['login_user']))
    {
      include 'tpl/header.php';
      //include 'tpl/sidebar.php';
      include 'tpl/navbar1.php';
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
            <?php
                include 'inc/profile.php';
            ?>
    </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php
    include 'tpl/footer.php';
}
else
{
    header("Location: ../login.php");
}
