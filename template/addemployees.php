<?php 
session_start();
if(isset($_SESSION['role']) && $_SESSION['role']=="admin"){
  include("./pages/samples/header.php");
  require "./database/connection.php";
  if(isset($_POST['Add'])){

    $name= $_POST['employee_name'];
    $Schedule= $_POST['Schedule'];
    $role= $_POST['role'];
    $salary= $_POST['salary'];
   
   
   $query="INSERT INTO `employees`( `employee_name`, `WorkSchedule`,`role`,`salary`) VALUES ('$name','$Schedule','$role','$salary')";
   
   
   $result=mysqli_query($connection ,$query);
   
   if($result){
   
   echo '<script>alert("Record inserted Succesfully")
   window.location.href="employee.php"
   </script>';
   
   }
   else{
      
       echo '<script>alert("Failed to a insert Record")
       window.location.href="employee.php"
       </script>';
       
       }
   }
   

?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
              <div class="col-lg-12 ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ADD EMPLOYEES</h4>
                    <form  method="post" class="form-group">

                  <div class="form-group">
                  <!-- <input class="form-control my-3 px-auto" type="hidden" name="id" id=""  > -->
                    <label for="employee_name">EMPLOYEE-NAME</label>
                    <input class="form-control my-3 px-auto" type="text" name="employee_name" id="">
                  </div>
                  <div class="form-group">
                    <label for="Schedule">Schedule</label>
                    <input class="form-control my-3 px-auto" type="text" name="Schedule" id="" >
                  </div>
                  <div class="form-group">
                    <label for="role">role</label>
                    <input class="form-control my-3 px-auto" type="text" name="role" id="" >
                  </div>
                  <div class="form-group">
                    <label for="salary">salary</label>
                    <input class="form-control my-3 px-auto" type="number" name="salary" id="" >
                  </div>
                  <input class="form-control my-3 px-auto btn btn-success" type="submit" name="Add" id="" value="Add">
                  <button class="btn btn-dark">Cancel</button>
                </form>
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
