<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include('Student.php');
        $students = array(); 
        
        $first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$first->status="Freshman";
$students['j123'] = $first;

$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$second->status="Freshman";

$students['a456'] = $second;
$third = new Student();
$third->surname = "Bob";
$third->first_name = "Li";
$third->add_email('home','Li@braniacs.com');
$third->add_email('work1','b_einstein@bcit.ca');
$third->add_email('work2','Li@physics.mit.edu');
$third->add_grade(65);
$third->add_grade(80);
$third->add_grade(60);
$third->status="Freshman";
$students['B666'] = $third;


$fourth = new Student();
$fourth->surname = "Lily";
$fourth->first_name = "wang";
$fourth->add_email('home','wang@1688.com');
$fourth->add_email('work1','a_einstein@bcit.ca');
$fourth->add_email('work2','wang@physics.mit.edu');
$fourth->add_grade(65);
$fourth->add_grade(88);
$fourth->add_grade(76);
$fourth->status="Freshman";
$students['c888'] = $fourth;

foreach($students as $student);
echo $student->toString();
        ?>
    </body>
</html>
