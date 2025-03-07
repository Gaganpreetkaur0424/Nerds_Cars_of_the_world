<?php
require('../requires/mysqli_connect.php');  
$query = "SELECT * FROM `tblvehicles` ";
$result = mysqli_query($dbc, $query); 

$join ="SELECT v.id as vid,v.VehiclesBrand as brand_id , b.id as bid ,v.Vprofile as img1 , v.VehiclesTitle as title , b.BrandName as carbrand, v.VehiclesOverview as vehicle_overview , v.PricePerDay as price, 
v.ModelYear as model FROM tblvehicles v INNER JOIN tblbrands b ON v.VehiclesBrand = b.id ";
$result1 = mysqli_query($dbc, $join); 


?>


<!DOCTYPE html>
<html lang="en">

<?php require('header.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <?php require('sidebar.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row align-items-center mb-2">
                        <div class="col-sm-6">
                            <h1>CAR DETAILS</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Car details are displayed here. Admin has all the rights to edit or delete any data.</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" >
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Vehicle's Title</th>
                                                <th>Vehicle's Brand</th>
                                                <th>Vehicle's Detail</th>
                                                <th>Price Per Day</th>
                                                <th>Model Year</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
while($rows = mysqli_fetch_array($result1)){
  $id = $rows['vid'];

?>
                                            <tr>
                                                <td> <a target="_blank"
                                                        href="../assets/images/<?php echo $rows['carbrand']."/".$rows['img1'];  ?>"><img
                                                            src='../assets/images/<?php echo $rows['carbrand']."/".$rows['img1'];  ?>'
                                                            width="100" height="100"> </a></td>
                                                <td><?php echo $rows['title']; ?></td>
                                                <td><?php echo $rows['brand_id']; ?></td>
                                                <td><?php echo $rows['vehicle_overview']; ?></td>
                                                <td><?php echo $rows['price']; ?></td>
                                                <td><?php echo $rows['model']; ?></td>
                                                <td> <a href="edit_car.php?id=<?php echo $id ; ?>"> Edit</a></td>
                                                <!-- <td> <button> <span class="trash"
                                                            data-id="<?php echo $rows['vid']; ?>">delete</span>
                                                    </button></td> -->
                                                <td><a href="delete.php?id=<?php echo $rows["vid"]; ?>"
                                                        title='Delete Record'>delete</a></td>
                                            </tr>
                                            <?php
}
                                            ?>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require('footer.php'); ?>
        <!-- Page specific script -->

        <script>


        </script>
</body>

</html>