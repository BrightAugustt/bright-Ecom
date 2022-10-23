<?php
include("../controllers/customer_controller.php");

// Collecting form data
// GET is used by default so define the type of method
// POST is used for secure information transmission.
if(isset($_POST["login"])){


    // Variable to capture the name value for each user input.
    $customer_email = $_POST["cemail"];
    $customer_pass = $_POST["cpass"];
    $login =loginCustomer_ctr($customer_email);

        if($login != false){
            if (password_verify($customer_pass,$login['customer_pass']) ){

                      
                       $_SESSION['id']= $login['customer_pass'];
                         // redirect to login
                            header('Location:../index.php');
            }
            else{
                session_start();
$_SESSION['error']='Invalid credentials';
                header('Location:login.php');
            }
                    }
                    else{
                        session_start();
$_SESSION['error']='Invalid credentials';
                        header('Location:login.php');
                    }
        


    }




    // // Check if email exist in the database
    // if ($login){
    //     if($login != false){
    //         // if (password_verify($customer_pass,loginCustomer_ctr($customer_pass)['customer_pass']) ){

    //         //             echo "hi";
            
    //         //             echo "<script>alert('Login Successful')</script>";
    //         //              // redirect to login
    //         //                 header('Location:../index.php');
                
    //         //         }else{
    //         //             echo "<script>alert('Invalid Credentials')</script>";
    //         //         }
    //     }


    // // collect the password entered by the user and compare with what is in the database
    //     if (password_verify($customer_pass,loginCustomer_ctr($customer_pass)['customer_pass']) ){

    //         echo "hi";

    //         echo "<script>alert('Login Successful')</script>";
    //          // redirect to login
    //             header('Location:../index.php');
    
    //     }else{
    //         echo "<script>alert('Invalid Credentials')</script>";
    //     }

    // }


// }

?>