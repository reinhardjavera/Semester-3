<?php
include('database.php');

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Crud Operation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h3><b>SIMPLE STUDENT DATABASE</b></h3>
        <br>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-plus"></i> Add New Student
        </button>
        <hr>
        <table class="table table-bordered table-striped table-hover" id="myTable">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No.</th>
                    <th class="text-center" scope="col">Name</th>
                    <th class="text-center" scope="col">Student ID.</th>
                    <th class="text-center" scope="col">Prodi</th>
                    <th class="text-center" scope="col">View</th>
                    <th class="text-center" scope="col">Edit</th>
                    <th class="text-center" scope="col">Delete</th>
                </tr>
            </thead>

            <?php

            $get_data = "SELECT * FROM mahasiswa order by 1 desc";
            $run_data = mysqli_query($con, $get_data);
            $i = 0;
            while ($row = mysqli_fetch_array($run_data)) {
                $sl = ++$i;
                $id = $row['id'];
                $user_card = $row['user_card'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $prodi = $row['prodi'];

                $image = $row['image'];

                echo "

				<tr>
				<td class='text-center'>$sl</td>
				<td class='text-left'>$first_name   $last_name</td>
				<td class='text-left'>$user_card</td>
				<td class='text-left'>$prodi</td>
			
				<td class='text-center'>
					<span>
					    <a href='#' class='btn btn-success mr-3 profile' data-toggle='modal' data-target='#view$id' title='Prfile'><i class='fa fa-address-card-o' aria-hidden='true'></i></a>
					</span>
					
				</td>

				<td class='text-center'>
					<span>
					    <a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>
					</span>
				</td>

				<td class='text-center'>
					<span>
						<a href='#' class='btn btn-danger deleteuser' title='Delete'>
						    <i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>
        		";
            }

            ?>

        </table>
        <form method="post" action="export.php">
            <input type="submit" name="export" class="btn btn-success" value="Export Data" />
        </form>
    </div>


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            //Modal content
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Add New Student</h4>
                </div>
                <div class="modal-body">
                    <form action="add.php" method="POST" enctype="multipart/form-data">

                        //This is test for New Card Activate Form
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Student Id.</label>
                                <input type="text" class="form-control" name="card_no" placeholder="Enter 12-digit Student ID." maxlength="12" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Prodi</label>
                                <input type="text" class="form-control" name="user_prodi" placeholder="Enter Prodi" maxlength="20" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="user_first_name" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="user_last_name" placeholder="Enter Last Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>


                        <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <?php

    $get_data = "SELECT * FROM mahasiswa";
    $run_data = mysqli_query($con, $get_data);

    while ($row = mysqli_fetch_array($run_data)) {
        $id = $row['id'];
        echo "

<div id='$id' class='modal fade' role='dialog'>
    <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Are you want to sure??</h4>
    </div>
        <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
    </div>

    </div>

    </div>
</div>


	";
    }
    ?>


    <?php

    //Profile modal start
    $get_data = "SELECT * FROM mahasiswa";
    $run_data = mysqli_query($con, $get_data);

    while ($row = mysqli_fetch_array($run_data)) {
        $id = $row['id'];
        $card = $row['user_card'];
        $name = $row['first_name'];
        $name2 = $row['last_name'];
        $user_prodi = $row['prodi'];
        $time = $row['uploaded'];

        $image = $row['image'];
        echo "

		<div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
		<div class='modal-dialog'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLabel'>Profile <i class='fa fa-user-circle-o' aria-hidden='true'></i></h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			<div class='modal-body'>
			<div class='container' id='profile'> 
				<div class='row'>
					<div class='col-sm-4 col-md-2'>
						<img src='upload_images/$image' alt='' style='width: 150px; height: 150px;' ><br>
						Uploaded : $time
					</div>
					<div class='col-sm-3 col-md-6'>
						<h3 class='text-primary'>$name $name2</h3>
						<h3 class='text-primary'>Student ID : $card</h3>
						<h3 class='text-primary'>Prodi : $user_prodi</h3>
						<p class='text-secondary'>
						</div>
						
						<br />
						</p>
						<!-- Split button -->
					</div>
				</div>

			</div>   
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
			</div>
			</form>
			</div>
		</div>
		</div> 


    ";
    }



    ?>


    <?php

    $get_data = "SELECT * FROM mahasiswa";
    $run_data = mysqli_query($con, $get_data);

    while ($row = mysqli_fetch_array($run_data)) {
        $id = $row['id'];
        $card = $row['user_card'];
        $name = $row['first_name'];
        $name2 = $row['last_name'];
        $user_prodi = $row['prodi'];
        $time = $row['uploaded'];
        $image = $row['image'];
        echo "

<div id='edit$id' class='modal fade' role='dialog'>
    <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
        <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
            <h4 class='modal-title text-center'>Edit your Data</h4> 
    </div>

    <div class='modal-body'>
        <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='inputEmail4'>Student Id.</label>
		<input type='text' class='form-control' name='card_no' placeholder='Enter 12-digit Student Id.' maxlength='12' value='$card' required>
		</div>
		<div class='form-group col-md-6'>
		<label for='inputPassword4'>Prodi</label>
		<input type='phone' class='form-control' name='user_prodi' placeholder='Enter Prodi' maxlength='20' value='$user_prodi' required>
		</div>
		</div>
		
		
		<div class='form-row'>
		<div class='form-group col-md-6'>
		<label for='firstname'>First Name</label>
		<input type='text' class='form-control' name='user_first_name' placeholder='Enter First Name' value='$name'>
		</div>
		<div class='form-group col-md-6'>
		<label for='lastname'>Last Name</label>
		<input type='text' class='form-control' name='user_last_name' placeholder='Enter Last Name' value='$name2'>
		</div>
		</div>
        
        <div class='form-group'>
            <label>Image</label>
            <input type='file' name='image' class='form-control'>
                <img src = 'upload_images/$image' style='width:50px; height:50px'>
        </div>



		<div class='modal-footer'>
			<input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
			<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		</div>


        </form>
    </div>

    </div>

    </div>
</div>


	";
    }


    ?>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

        });
    </script>

</body>

</html>