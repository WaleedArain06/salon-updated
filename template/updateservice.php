
<?php 
session_start();
if(isset($_SESSION['role']) && $_SESSION['role']=="admin"){
  include("./pages/samples/header.php");
  include("./database/connection.php");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <?php 
require "./database/connection.php";

if($_GET['id']){

$id=$_GET['id'];

$query="SELECT * FROM `services` WHERE `service_id`=$id;";
$result=mysqli_query($connection, $query);

if($result){
   
if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){

$name= $row['service_name']; 
$price= $row['price']; 


?>
<div class="container">
    <form action="updated.php" method="post" class="form-group">

    
    <h1 class="text-center">Update your services</h1>
                      <div class="form-group">
                      <input class="form-control my-3 px-auto" type="hidden" name="id" id=""  value="<?php echo $id ?>">
                        <label for="exampleInputUsername1">SERVICE</label>
                        <input class="form-control my-3 px-auto" type="text" name="service_name" id=""  value="<?php echo $name ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">PRICE</label>
                        <input class="form-control my-3 px-auto" type="number" name="price" id=""  value="<?php echo $price ?>">
                      </div>
                      <input class="form-control my-3 px-auto btn btn-success" type="submit" name="Update" id="" value="Update">
                      <button class="btn btn-dark">Cancel</button>
                    </form>




</div>


<?php 
    }
}

}else{
    echo "record not found";
}

   
}
else{
    echo "id not found";
}


?>
                          
                          
                          
                        
                     
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php 
}else{
    header("location: ./pages/samples/login.php");
}
?>