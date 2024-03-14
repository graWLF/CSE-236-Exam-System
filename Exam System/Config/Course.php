
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    class Course{
        //prop
        public $ID;
        public $code;
        public $Name;
        public $credit;
        public $numOfStudents;
        public $numOfExams;
        
        //methods
        function __construct() {
        }

        function get_code(){
            return this-code;
        }

        function get_credit(){
            return this-credit;
        }

        function get_ID(){
            return this-ID;
        }
        function get_Name(){
            return this->name;
        }
        function get_numOfStu(){
            return this->numOfStudents;
        }
        function get_numOfExam(){
            return this->numOfExam;
        }
    }

    
    

   
    $cojson = '[{"ID":"1", "code":"CSE101","Name":"Java Programing", "credit":"4","numOfStudents":"98", "numOfExams":"3"}, 
                {"ID":"2", "code":"CSE124","Name":"Natural Sciences", "credit":"5","numOfStudents":"113", "numOfExams":"4"}, 
                {"ID":"3", "code":"CSE236","Name":"Web Programming", "credit":"6","numOfStudents":"13", "numOfExams":"2"}]';
    $co = json_decode($cojson);
    ?>
</head>
<body>
            <?php

                echo '<table>';
                foreach($co as $result){
                    echo '<tr>';
                        echo '<td>'.$result->ID.'</td>';
                        echo '<td>'.$result->code.'</td>';
                        echo '<td>'.$result->Name.'</td>';
                        echo '<td>'.$result->credit.'</td>';
                        echo '<td>'.$result->numOfStudents.'</td>';
                    echo '</tr>';
                }
                echo '</table>';

            ?>
</body>
</html>