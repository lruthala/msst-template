{"filter":false,"title":"EmployeeDetails.php","tooltip":"/classes/EmployeeDetails.php","ace":{"folds":[],"scrolltop":420,"scrollleft":0,"selection":{"start":{"row":107,"column":7},"end":{"row":107,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":28,"state":"php-start","mode":"ace/mode/php"}},"hash":"de994a02f9b2ff265a183337c926a8c64d913569","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":100,"column":0},"action":"remove","lines":["<?php","","  $resultMessage = \"\";","if(isset($_POST['btnSubmit'])){","require '../config/DbController.php';","$conn = new DbController();","try{","    $conn->connectToDatabase();","if(! get_magic_quotes_gpc() )","{$rfirstname = addslashes ($_POST['firstname']);","    $rlastname = addslashes ($_POST['lastname']);","    $rorganization = addslashes ($_POST['organization']);","    $rdesignation = addslashes ($_POST['designation']);","    $remail = addslashes ($_POST['email']);","    $rphone = addslashes ($_POST['phone']);","    $remployeeName = addslashes ($_POST['employeeName']);","    $remployeeId = addslashes ($_POST['employeeId']);","    $rlocation = addslashes ($_POST['location']);","    //$remployeePeriod = addslashes ($_POST['employeePeriod']);","    $rempDesignation = addslashes ($_POST['empDesignation']);","    $rdepartment = addslashes ($_POST['department']);","    //$rreasonsToLeave = addslashes ($_POST['reasonsToLeave']);","    $rstartDate = addslashes ($_POST['startDate']);","    $rendDate = addslashes ($_POST['endDate']);","    ","}","else","{","    $rfirstname = $_POST['firstname'];","    $rlastname = $_POST['lastname'];","    $rorganization = $_POST['organization'];","    $rdesignation = $_POST['designation'];","    $remail = $_POST['email'];","    $rphone = $_POST['phone'];","    $remployeeName = $_POST['employeeName'];","    $remployeeId = $_POST['employeeId'];","    $rlocation = $_POST['location'];","   // $remployeePeriod = $_POST['employeePeriod'];","    $rempDesignation = $_POST['empDesignation'];","    $rdepartment = $_POST['department'];","    $rstartDate = $_POST['startDate'];","    $rendDate = $_POST['endDate'];","   // $rreasonsToLeave = $_POST['reasonsToLeave'];","}","//$originalstdate = $rstartDate;","$rstartDate = date(\"y-m-d\", strtotime($rstartDate));","$rendDate = date(\"y-m-d\", strtotime($rendDate));","$rflag = 1;","$conn->selectDatabase();","//$sql = \"insert into tblContactus(Fname,Lname,Organization,Designation,WorkPhone,City,Country,Description,\".","       // \"Email,flag) values('$rfname','$rlname','$rorganization','$rdesignation','$rphone','$rcity','$rcountry',\".","      //  \"'$rdescription','$remail','$rflag')\";","","$sql = \"insert into tblEmpVerfication(FirstName,LastName,Organization,Designation,EmailId,Phone,EmployeeName,EmployeeId,EmploymentLocation,EmployeeDesignation,Department,EmploymentStarted,EmploymentEnded\".","        \") values('$rfirstname','$rlastname','$rorganization','$rdesignation','$remail','$rphone','$remployeeName',\".","        \"'$remployeeId','$rlocation','$rempDesignation','$rdepartment',CAST('\". $rstartDate .\"' AS DATE),CAST('\". $rendDate .\"' AS DATE))\";","echo $sql; ","//CAST('\". $date .\"' AS DATE))\"","//$selectQuery = \"select * from tblContactus contactus where contactus.Email='$remail' and contactus.WorkPhone='$rphone'\";","$selectQuery = \"select * from tblEmpVerfication where Email='$remail' and Phone='$rphone'\";","$selectresponce = mysql_query($selectQuery);","if(mysql_num_rows($selectresponce)>0){","            $resultMessage = '<font color=red size=2px>'.$remail.' is already exists</font>';","            $conn->closeConnection(); // closing the connection","}else{","    ","            if(!mysql_query($sql)){","             $resultMessage= \"<font color=red size=2px>Data insertion failed..Please try again later\\n</font>\";","            $conn->closeConnection(); // closing the connection","            }else{","                ","                 require '../classes/MailManager.php';","                $mailmanager = new MailManager();","              //  $mailmanager->sendContactForm($rfname, $rlname, $remail, $rorganization, $rdesignation, $rphone, $rcity, $rcountry, $rdescription);","                 $mailmanager->sendEmployeeVerificationDetails($rfirstname,$rlastname,$rorganization,$rdesignation,$remail,$rphone,$remployeeName,$remployeeId,$rlocation,$rempDesignation,$rdepartment);","           // $resultMessage= \"<font color=green size=2px>We have recived your deatils, Our team will contact you.\\n</font>\"; ","            // echo'<script> window.location=\"../thank-you.php\"; </script> ';","                   header('Location: ../thank-you.php'); ","            $conn->closeConnection(); // closing the connection","            }","        }","        ","        ","","}","  catch(Exception $exc){","       // Fb::log(\"log message\");","         //$resultMessage= $exc->getTraceAsString();","      $exc->getMessage();","        // $resultMessage= $exc->getMessage();","          $resultMessage=\"<font color=red size=2px>\".$exc.'</font>'.","         ","                  //$resultMessage= \"We have an internal error,Please try later.\";","                    $conn->closeConnection(); // closing the connection","                   ","    }","","}","","?>",""],"id":1},{"start":{"row":0,"column":0},"end":{"row":107,"column":7},"action":"insert","lines":["<?php","","  $resultMessage = \"\";","if(isset($_POST['btnSubmit'])){","require '../config/DbController.php';","$conn = new DbController();","try{","    $conn->connectToDatabase();","if(! get_magic_quotes_gpc() )","{$rfirstname = addslashes ($_POST['firstname']);","    $rlastname = addslashes ($_POST['lastname']);","    $rorganization = addslashes ($_POST['organization']);","    $rdesignation = addslashes ($_POST['designation']);","    $remail = addslashes ($_POST['email']);","    $rphone = addslashes ($_POST['phone']);","    $remployeeName = addslashes ($_POST['employeeName']);","    $remployeeId = addslashes ($_POST['employeeId']);","    $rlocation = addslashes ($_POST['location']);","    //$remployeePeriod = addslashes ($_POST['employeePeriod']);","    $rempDesignation = addslashes ($_POST['empDesignation']);","    $rdepartment = addslashes ($_POST['department']);","    //$rreasonsToLeave = addslashes ($_POST['reasonsToLeave']);","    $rstartDate = addslashes ($_POST['startDate']);","    $rendDate = addslashes ($_POST['endDate']);","    ","}","else","{","    $rfirstname = $_POST['firstname'];","    $rlastname = $_POST['lastname'];","    $rorganization = $_POST['organization'];","    $rdesignation = $_POST['designation'];","    $remail = $_POST['email'];","    $rphone = $_POST['phone'];","    $remployeeName = $_POST['employeeName'];","    $remployeeId = $_POST['employeeId'];","    $rlocation = $_POST['location'];","   // $remployeePeriod = $_POST['employeePeriod'];","    $rempDesignation = $_POST['empDesignation'];","    $rdepartment = $_POST['department'];","    $rstartDate = $_POST['startDate'];","    $rendDate = $_POST['endDate'];","   // $rreasonsToLeave = $_POST['reasonsToLeave'];","}","//$originalstdate = $rstartDate;","$rstartDate = date(\"y-m-d\", strtotime($rstartDate));","$rendDate = date(\"y-m-d\", strtotime($rendDate));","$rflag = 1;","$conn->selectDatabase();","//$sql = \"insert into tblContactus(Fname,Lname,Organization,Designation,WorkPhone,City,Country,Description,\".","       // \"Email,flag) values('$rfname','$rlname','$rorganization','$rdesignation','$rphone','$rcity','$rcountry',\".","      //  \"'$rdescription','$remail','$rflag')\";","","$sql = \"insert into tblEmpVerfication(FirstName,LastName,Organization,Designation,EmailId,Phone,EmployeeName,EmployeeId,EmploymentLocation,EmployeeDesignation,Department,EmploymentStarted,EmploymentEnded\".","        \") values('$rfirstname','$rlastname','$rorganization','$rdesignation','$remail','$rphone','$remployeeName',\".","        \"'$remployeeId','$rlocation','$rempDesignation','$rdepartment',CAST('\". $rstartDate .\"' AS DATE),CAST('\". $rendDate .\"' AS DATE))\";","echo $sql; ","//CAST('\". $date .\"' AS DATE))\"","//$selectQuery = \"select * from tblContactus contactus where contactus.Email='$remail' and contactus.WorkPhone='$rphone'\";","$selectQuery = \"select * from tblEmpVerfication where Email='$remail' and Phone='$rphone'\";","$selectresponce = mysql_query($selectQuery);","if(mysql_num_rows($selectresponce)>0){","            $resultMessage = '<font color=red size=2px>'.$remail.' is already exists</font>';","            $conn->closeConnection(); // closing the connection","}else{","    ","            if(!mysql_query($sql)){","             $resultMessage= \"<font color=red size=2px>Data insertion failed..Please try again later\\n</font>\";","            $conn->closeConnection(); // closing the connection","            }else{","                ","                 require '../classes/MailManager.php';","                $mailmanager = new MailManager();","              //  $mailmanager->sendContactForm($rfname, $rlname, $remail, $rorganization, $rdesignation, $rphone, $rcity, $rcountry, $rdescription);","                 $mailmanager->sendEmployeeVerificationDetails($rfirstname,$rlastname,$rorganization,$rdesignation,$remail,$rphone,$remployeeName,$remployeeId,$rlocation,$rempDesignation,$rdepartment);","           // $resultMessage= \"<font color=green size=2px>We have recived your deatils, Our team will contact you.\\n</font>\"; ","            // echo'<script> window.location=\"../thank-you.php\"; </script> ';","                   header('Location: ../thank-you.php'); ","            $conn->closeConnection(); // closing the connection","            }","        }","        ","        ","","}","  catch(Exception $exc){","       // Fb::log(\"log message\");","         //$resultMessage= $exc->getTraceAsString();","      $exc->getMessage();","        // $resultMessage= $exc->getMessage();","          $resultMessage=\"<font color=red size=2px>\".$exc.'</font>'.","         ","                  //$resultMessage= \"We have an internal error,Please try later.\";","                    $conn->closeConnection(); // closing the connection","                   ","    }","","}","","?>","<!DOCTYPE html>","<html>","    <head>","        <title></title>","    </head>","    <body>","    </body>","</html>"]}]]},"timestamp":1426506475000}