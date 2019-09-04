<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wpoetsdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Wpoets Test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Titillium+Web:200,300,400,600,700,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">

      <div class="row">
        <div class="col-12 col-md-12 text-center heading">
          <h1>DelphianLogic in Action</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
        </div>
      </div>  

      <div class="row">
        <div class="col-12 col-lg-3">
          
          <div class="tabs_col">
            <ul class="tabs">

              <?php
                $sql = "SELECT tab_id, tab_title, tab_icon FROM tabname_tbl";
                $result = $conn->query($sql);
                $cntMain = 1;
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      if($cntMain == 1) {
                        echo '<li rel="tab'.$cntMain.'"  class="active" ><img src="images/'. $row["tab_icon"].'" />'. $row["tab_title"].'</li>';
                      }else{
                        echo '<li rel="tab'.$cntMain.'" ><img src="images/'. $row["tab_icon"].'" />'. $row["tab_title"].'</li>';
                      }
                      $cntMain++;
                    }
                } else {
                    echo "0 results";
                }
              ?>

              <!-- <li class="active" rel="tab1"><img src="images/DL-learning.svg" /> Learning</li>
              <li rel="tab2"><img src="images/DL-technology.svg" /> Technology</li>
              <li rel="tab3"><img src="images/DL-communication.svg" /> Communication</li> -->
            </ul>
          </div>

        </div>
        <div class="col-12 col-lg-9">
          
          <div class="tabs_details_col">
            <div class="tab_container">
              
              <?php
                $sql = "SELECT tab_id, tab_title, tab_icon FROM tabname_tbl";
                $result = $conn->query($sql);
                $cnt = 1;
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
              ?>
              <h3 class="d_active tab_drawer_heading" rel="tab<?php echo $cnt; ?>"><img src="images/<?php echo $row["tab_icon"]; ?>" /><?php echo $row["tab_title"]; ?></h3>
              <div id="tab<?php echo $cnt; ?>" class="tab_content">

                <div id="tab<?php echo $cnt; ?>carousel" class="carousel slide carousel-fade" data-ride="carousel">
                  <?php
                    $sql1 = "SELECT tabslider_id, tabslider_title, tabslider_caption, tabslider_link, tabslider_img, tab_id FROM tabslider_tbl where tab_id = ".$row["tab_id"];
                    $result1 = $conn->query($sql1);
                    if ($result1->num_rows > 0) {
                  ?>
                  <ol class="carousel-indicators">
                    <?php  $cnt1 = 0; while($row1 = $result1->fetch_assoc()) { ?>
                    <li data-target="#tab<?php echo $cnt; ?>carousel" data-slide-to="<?php echo $cnt1; ?>" <?php if($cnt1 == 0){ ?> class="active" <?php } ?>></li>
                    <?php $cnt1++; } ?>
                  </ol>
                  <div class="carousel-inner">
                    <?php  
                    $sqlInner = "SELECT tabslider_id, tabslider_title, tabslider_caption, tabslider_link, tabslider_img, tab_id FROM tabslider_tbl where tab_id = ".$row["tab_id"];
                    $resultInner = $conn->query($sqlInner);
                    $cnt2 = 1; while($rowInner = $resultInner->fetch_assoc()) {
                     ?>
                    <div class="carousel-item <?php if($cnt2 == 1){ ?> active <?php } ?>">
                      <div class="row">
                        <div class="col-12 col-lg-6">
                          <div class="tab-carousel-text">
                            <p><?php echo $rowInner["tabslider_title"]; ?></p>
                            <h2><?php echo $rowInner["tabslider_caption"]; ?></h2>
                            <a href="#">Learn More</a>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="tab-carousel-img" style="background-image: url(images/<?php echo $rowInner["tabslider_img"]; ?>);"></div>
                        </div>
                      </div>
                    </div>
                    <?php $cnt2++; } ?>

                  </div>
                <?php } ?>
                </div>

                
              </div>
              <!-- #tab1 -->
              <?php
              $cnt++;
                }
                }
              ?>
              

            </div>
          </div>

        </div>
        
      </div>
    </div>

<?php
$conn->close();
?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="js/allscript.js"></script>
  </body>
</html>