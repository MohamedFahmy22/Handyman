<?php
  session_start();
  include 'tpl/header.php';
  include 'tpl/navbar.php';
?>
<!--Page Cover-->
<section class="row page-cover">
    <div class="container">
        <div class="row m0">
            <h2>projects</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Projects</li>
            </ol>
        </div>
    </div>
</section>
<!--project protfolio-->
<section class="row projects-area">
    <div class="container">
        <div class="row project_type1">
          <?php
          $stmt = $coon->prepare("SELECT * FROM work");
          $stmt->execute();
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
          {
            $count = $stmt->rowcount();
            if ($count>0)
            {
              $desc=substr($row['description'],0,7000).'...';
              ?>
              <div class="col-sm-4 project">
                  <div class="item">
                     <img src="images//we_do//<?php echo $row['pic']; ?>" alt="">
                      <div class="inner">
                          <p><?php echo $row['description']; ?></p>
                      </div>
                      <div class="item-txt">
                          <a href="workeres.php?id=<?php echo $row['workID']; ?>"><?php echo $row['name']; ?></a>
                      </div>
                  </div>
              </div>
              <?php
            }
          }
          ?>
        </div>
    </div>
</section>

<?php
  include 'tpl/footer.php';
?>
