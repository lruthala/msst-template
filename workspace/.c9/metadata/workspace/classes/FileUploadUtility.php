{"filter":false,"title":"FileUploadUtility.php","tooltip":"/classes/FileUploadUtility.php","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":47,"column":0},"action":"remove","lines":["<?php","","/*"," * To change this template, choose Tools | Templates"," * and open the template in the editor."," */","","//include '../config/Locations.php';","","/**"," * Description of FileUploadUtility"," *"," * @author miracle"," */","class FileUploadUtility {","    //put your code here","    ","   function fileMove($fileRef,$rootPath){","       ","      // $rootPath = JOB_ATTACHMENT_LOCATION;","       $errors= array();","    $file_name = $fileRef['name'];","    $file_size =$fileRef['size'];","    $file_tmp =$fileRef['tmp_name'];","    $file_type=$fileRef['type'];   ","    $file_ext=strtolower(end(explode('.',$fileRef['name'])));","    $extensions = array(\"doc\",\"pdf\",\"txt\",\"docx\",\"rtf\"); \t\t","    if(in_array($file_ext,$extensions )=== false){","     return \"<font color=red size=2px>extension not allowed, please choose a doc or pdf or txt file.</font>\";","    }","   // echo 'filesize-->'.$file_size;","    if($file_size > 2097152){","    return 'File size must be excately 2 MB';","    }\t\t\t\t","    if(empty($errors)===true){","          move_uploaded_file($file_tmp,$rootPath.$file_name);","        return \"Success\";","        ","    }else{","       // print_r($errors);","       return $errors; ","    }","       ","   }","}","","?>",""]},{"start":{"row":0,"column":0},"end":{"row":54,"column":7},"action":"insert","lines":["<?php","","/*"," * To change this template, choose Tools | Templates"," * and open the template in the editor."," */","","//include '../config/Locations.php';","","/**"," * Description of FileUploadUtility"," *"," * @author miracle"," */","class FileUploadUtility {","    //put your code here","    ","   function fileMove($fileRef,$rootPath){","       ","      // $rootPath = JOB_ATTACHMENT_LOCATION;","       $errors= array();","    $file_name = $fileRef['name'];","    $file_size =$fileRef['size'];","    $file_tmp =$fileRef['tmp_name'];","    $file_type=$fileRef['type'];   ","    $file_ext=strtolower(end(explode('.',$fileRef['name'])));","    $extensions = array(\"doc\",\"pdf\",\"txt\",\"docx\",\"rtf\");        ","    if(in_array($file_ext,$extensions )=== false){","     return \"<font color=red size=2px>extension not allowed, please choose a doc or pdf or txt file.</font>\";","    }","   // echo 'filesize-->'.$file_size;","    if($file_size > 2097152){","    return 'File size must be excately 2 MB';","    }               ","    if(empty($errors)===true){","          move_uploaded_file($file_tmp,$rootPath.$file_name);","        return \"Success\";","        ","    }else{","       // print_r($errors);","       return $errors; ","    }","       ","   }","}","","?>","<!DOCTYPE html>","<html>","    <head>","        <title></title>","    </head>","    <body>","    </body>","</html>"]}]}]]},"ace":{"folds":[],"scrolltop":378.25,"scrollleft":0,"selection":{"start":{"row":54,"column":7},"end":{"row":54,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":26,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1426506460136,"hash":"e599a96b8f1b200a8d0ffeb2864a8446ea28cfdd"}