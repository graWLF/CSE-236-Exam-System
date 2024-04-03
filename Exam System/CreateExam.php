<?php
 include("config/db.php");
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
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="Teacher.html">Akdeniz University</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-right me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Student.html">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Classes
                                <div class="sb-sidenav-collapse-arrow"></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">CSE124</a>
                                    <a class="nav-link" href="#">CSE236</a>
                                    <a class="nav-link" href="#">CSE346</a>
                                    <a class="nav-link" href="#">CSE444</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"></i></div>
                                Class Table
                            </a>

                            <div class="sb-sidenav-menu-heading">Quizzes</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"></i></div>
                                Create Quiz
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"></i></div>
                                Coming Quizzes
                            </a>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"></div>
                                Completed Quizzes
                            </a>
                            
                        
                               
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Teacher
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Create Exam</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        
                        
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="chooseClass">Choose Class:</label>
                        <select class="form-select" id="chooseClass">
                            <option value="">Choose Class:</option>
                            <option value="CSE124">CSE124 - Veri Yapıları ve Algoritmalar</option>
                            <option value="CSE236">CSE236 - Bilgisayar Mimarisi</option>
                            <option value="CSE346">CSE346 - İşletim Sistemleri</option>
                            <option value="CSE444">CSE444 - Yapay Zeka</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="examType">Enter type:</label>
                        <select class="form-select" id="examType" name="examType">
                            <option value="">Enter type:</option>
                            <option value="midterm">Midterm</option>
                            <option value="final">Final</option>
                            <option value="quiz">Quiz</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="grade">Enter Grade (Grade cannot bigger than 100 and Final must be least 40):</label>
                        <input type="text" id="gra-de" name="grade"><br><br>
                    </div>
                    <div>
                    <label for="examDate">Date:</label>
                    <input type="date" id="exam-Date" name="examDate">
                    </div>
                    <hr>
                    <input type="submit" value="Create" name="create">
                    
                    <hr>
                    <?php
                    //if(isset($_POST["create"])){
                        $sorgu = "INSERT INTO exam(date, type, coursefk,grade) VALUES('".$_POST["examDate"]."', 'midterm', 3, 15);";
                        $con -> query($sorgu);
                        //}
                    ?>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
       
    </body>
</html>
