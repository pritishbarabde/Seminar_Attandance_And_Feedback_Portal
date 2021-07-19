<?php
    $clgid = $_POST['clgid'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $sname = $_POST['sname'];
    $rno = $_POST['rno'];
    $email = $_POST['email'];
    $pno = $_POST['pno'];   
    $doe = $_POST['doe']; 
    $year = $_POST['year'];
    $lokb = $_POST['lokb'];
    $loe = $_POST['loe'];
    $loke = $_POST['loke'];
    $loc = $_POST['loc'];
    $fed = $_POST['fed'];
    $sug = $_POST['sug'];
    $rat = $_POST['rat'];
    $yn = $_POST['yn'];

    $conn = new mysqli('localhost','root','','specialguest');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into specialform(clgid,fname,mname,sname,rno,email,pno,doe,year,lokb,loe,loke,loc,fed,sug,rat,yn)
                                values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssssssssss",$clgid,$fname,$mname,$sname,$rno,$email,$pno,$doe,$year,$lokb,$loe,$loke,$loc,$fed,$sug,$rat,$yn);
        $stmt->execute();
        echo "Form Submitted Succesfully...";
        $stmt->close();
        $conn->close();

    }
?>