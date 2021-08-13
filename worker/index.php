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
                <div class="card shadow mb-4">
                <?php
                    if(!$_GET['do'])
                    {
                        include 'inc/pending.php';
                    }
                    elseif($_GET['do'] == 'view')
                    {
                        include 'inc/view.php';
                    }
                    elseif ($_GET['do']== 'Accept')
                    {
                        include 'func/accept.php';
                    }
                    elseif ($_GET['do']=='Reject')
                    {
                        include 'func/reject.php';
                    }
                ?>
                </div>
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
?>
