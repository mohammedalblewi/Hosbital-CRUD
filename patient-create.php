<?php

session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-5">

            <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                        
                            <div class="mb-3">   
                            <label>Patient Name</label>
                            <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">   
                            <label>Patient Email</label>
                            <input type="email" name="email" class="form-control">
                            </div>


                            <div class="mb-3">   
                            <label>Patient Phone</label>
                            <input type="text" name="phone" class="form-control">
                            </div>


                            <div class="mb-3">   
                            <label>Patient Address</label>
                            <input type="text" name="address" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_patient" class="btn btn-primary">Save Patient</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>