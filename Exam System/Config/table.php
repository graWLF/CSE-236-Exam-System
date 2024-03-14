

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Ctable</title>
</head>
    <body class="sb-nav-fixed">
    <div class="card mb-4">
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
                                        <th>Students</th>
                                        <th>Exams</th>
                                            
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr>
                                        <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                        ?>

                                            <td><?php echo $row['ID']; ?></td>
                                            <td><?php echo $row['NAME']; ?></td>
                                            <td><?php echo $row['NumofStudents']; ?></td>
                                            <td><?php echo $row['NumofExams']; ?></td>

                                        </tr>
                                        <?php
                                        }
                                            
                                        ?>
                                            
                                        
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
    
    </body>
</html>