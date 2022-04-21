<?php
require_once("app/bootstrap.php");





if(isset($_POST['add'])){
       $department = $_POST['department'];
       
       if($db->InsertData("INSERT INTO `departments` (`dep_name`) VALUES (?)",["$department"])){
        header("Location: ".URLROOT."departments.php");
            }else{
                echo "failed to save";
            }


        }

// deleting department

if(isset($_GET['dep_id'])){
    $id = $_GET['dep_id'];
   
    if($db->DeletingData("DELETE FROM departments WHERE dep_id=?", ["$id"])){
        header("Location: ".URLROOT."departments.php");
         }else{
             echo "failed to delete";
         }


     }
     if(isset($_POST['add_job'])){
       $title = $_POST['title'];
       $department = $_POST['department'];
       $description = $_POST['description'];

        
       
       if($db->InsertData("INSERT INTO `jobs` (`job_title`,`job_description`,`dep_id`) VALUES (?,?,?)",["$title","$description","$department"])){
        header("Location: ".URLROOT."jobs.php");
            }else{
                echo "failed to save";
            }


        }

// deleting job

if(isset($_GET['job_id'])){
    $id = $_GET['job_id'];
   
    if($db->DeletingData("DELETE FROM jobs WHERE job_id=?", ["$id"])){
        header("Location: ".URLROOT."jobs.php");
         }else{
             echo "failed to delete";
         }
        }


if(isset($_POST['add_employee'])){
       $name = $_POST['name'];
       $marital = $_POST['marital'];
       $dob = $_POST['dob'];
       $position = $_POST['position'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];
       $nid = $_POST['nid'];
       $password = $_POST['password'];
       
       
       if($db->InsertData("INSERT INTO `employees` (names,marital_status,dob,position,email,phone,address,nid,password) VALUES (?,?,?,?,?,?,?,?,?)",["$name","$marital","$dob","$position","$email","$phone","$address","$nid",hash("sha256","$password")])){
        header("Location: ".URLROOT."employees.php");
            }else{
                echo "failed to save";
            }


        }
        

// deleting Employee

if(isset($_GET['employee_id'])){
    $id = $_GET['employee_id'];
   
    if($db->DeletingData("DELETE FROM employees WHERE employee_id=?", ["$id"])){
        header("Location: ".URLROOT."employees.php");
         }else{
             echo "failed to delete";
         }
        }
if(isset($_POST['add_salary'])){
       $job = $_POST['job'];
       $amount = $_POST['amount'];
       
       if($db->InsertData("INSERT INTO `salaries` (`job_id`,`amount`) VALUES (?,?)",["$job","$amount"])){
        header("Location: ".URLROOT."salaries.php");
            }else{
                echo "failed to save";
            }


        }

if(isset($_POST['add_user'])){
       $names = $_POST['fullnames'];
       $phone = $_POST['mobile'];
       $email = $_POST['email'];
       $role = $_POST['role'];
       $password = $_POST['password'];
       
       
       if($db->InsertData("INSERT INTO `users` (`names`,`phone`,`email`,`role`,`password`) VALUES (?,?,?,?,?)",["$names","$phone","$email","$role",hash("sha256","$password")])){
        header("Location: ".URLROOT."users.php");
            }else{
                echo "failed to save";
            }


        }


        ?>




