<?php 
    session_start();
    require 'dbcon.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD APPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container mt-5">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patients Details
                            <a href="patient-create.php" class="btn btn-primary float-end">Add Patients</a>
                        </h4>
                    </div>
                    <div class="card-body">

                      <table class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Patient Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                                $query = "SELECT * FROM patients";
                                $query_run = mysqli_query($con , $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $patient)
                                    {
                                      
                                      ?>
                                        <tr>
                                           <td><?= $patient['id']; ?></td>
                                           <td><?= $patient['name']; ?></td>
                                           <td><?= $patient['email']; ?></td>
                                           <td><?= $patient['phone']; ?></td>
                                           <td><?= $patient['address']; ?></td>
                                           <td>
                                            <a href="patient-view.php?id=<?= $patient['id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="patient-edit.php?id=<?= $patient['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                       
                                            <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_patient" value="<?= $patient['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                           </td>
                                        </tr>

                                      <?php

                                    }
                                }
                                else
                                {
                                  echo "<h5> No Record Found </h5>";
                                }
                          ?>
                          
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>