<?php
$conn = mysqli_connect("localhost", "root", "", "stop ragging"); //database connection  
//hostname, username, password, database name  
if ($conn) {
    echo "Connection successfully";
} else {
    echo "Error";
}
//check database connect or not  
$query = "select * from information";
$connect = mysqli_query($conn, $query);
$num = mysqli_num_rows($connect); //check in database any data have or not  
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Display in Table Format</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            min-height: 100vh;
            background-color: #5d6d7d;
        }

        .container {
            max-width: 900px;
            margin: 100px auto;
            width: 100%;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table th {
            background-color: red;
            color: #fff;
            padding: 10px;
        }

        table td {
            padding: 12px;
            color: #fff;
            font-size: 1em;
            text-align: center;
        }

        table tr:nth-child(odd) {
            background-color: #797676;
        }
    </style>
</head>

<body>
    <div class="container">
       <a href="../Homepage/index.php">go to Homepage</a><br><br>
        <table border="1">
            <tr>
                <!-- <th>post no<th> -->
                <th>vname</th>
                <th>vroll</th>
                <th>vseries</th>
                <th>vdept</th>
                <th>vemail</th>
                <th>university</th>
                <th>rag_date</th>
                <th>rag_time</th>
                <th>rag_place</th>
                <th>sname</th>
                <th>sroll</th>
                <th>sseries</th>
                <th>sdept</th>
                <th>smobile</th>
                <th>sfb</th>
                <th>description</th>

            </tr>
            <?php
            if ($num > 0) {
                while ($data = mysqli_fetch_assoc($connect)) {
                    echo "  
                               <tr>  
                                
                               <td>" . $data['vname'] . "</td>  
                               <td>" . $data['vroll'] . "</td>  
                               <td>" . $data['vseries'] . "</td>  
                               <td>" . $data['vdept'] . "</td>  
                               <td>" . $data['vemail'] . "</td>  
                               <td>" . $data['university'] . "</td>  
                               <td>" . $data['rag_date'] . "</td>  
                               <td>" . $data['rag_time'] . "</td>  
                               <td>" . $data['rag_place'] . "</td>  
                               <td>" . $data['sname'] . "</td>  
                               <td>" . $data['sroll'] . "</td>  
                               <td>" . $data['sseries'] . "</td>  
                               <td>" . $data['sdept'] . "</td>  
                               <td>" . $data['smobile'] . "</td>  
                               <td>" . $data['sfb'] . "</td>  
                               <td>" . $data['description'] . "</td>  
                               </tr>  
                          ";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>