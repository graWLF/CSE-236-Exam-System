<?php
    require_once('config/db.php');
    $query = "select * from courses";
    $result = mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Teacher Main Page</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
</head>
    <body class="sb-nav-fixed">
    <div class="card mb-5">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Classes
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Instructor</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                            <?php
                                            while($row = mysqli_fetch_assoc($result)){

                                            
                                            ?>
                                            <tr>
                                                    <td><?php echo $row['PK'];?></td>
                                                    <td><?php echo $row['Name'];?></td>
                                                    <td><?php echo $row['Code'];?></td>
                                                    <td><?php echo $row['InstructorFK'];?></td>
                                                    </tr>
                                            <?php
                                            }?>

                                            
                                            
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
    </body>
</html>