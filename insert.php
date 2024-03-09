<?php
    $dbhost='localhost';
    $dbusername='root';
    $dbpass='';
    $dbname='stop ragging';
    
    $mysqli= mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

    if (isset($_POST['submit'])) {
        $vname = $_POST['vname'];
        $vroll = $_POST['vroll'];
        $vseries = $_POST['vseries'];
        $vdept = $_POST['vdept'];
        $vemail = $_POST['vemail'];
        $university= $_POST['university'];
        $rag_date = $_POST['rag_date'];
        $rag_time = $_POST['rag_time'];
        $rag_place = $_POST['rag_place'];
        $sname = $_POST['sname'];
        $sroll = $_POST['sroll'];
        $sseries = $_POST['sseries'];
        $sdept = $_POST['sdept'];
        $smobile = $_POST['smobile'];
        $sfb = $_POST['sfb'];
        $description = $_POST['description'];

        $result = mysqli_query($mysqli, "INSERT INTO information VALUES ('','$vname','$vroll','$vseries','$vdept','$vemail','$university','$rag_date','$rag_time','$rag_place','$sname','$sroll','$sseries','$sdept','$smobile','$sfb','$description')");
       

        if ($result) {
            echo "victim info successfully stored  ";
        } else {
            echo "data submit hoy ni ";
        }
    }
?>