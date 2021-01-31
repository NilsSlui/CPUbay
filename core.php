<?php
    function GetCpu(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "cpubay";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT id, brand, name,cores,threads, score FROM processors";
    
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            print("<tr>
                <td>".$row['id']."</td>
                <td class='text-info'><img src='./img/".$row['brand'].".png'> ".$row['brand']."</td> 
                <td class='text-info'>" . $row['name']. "</td>
                <td>".$row['cores']."</td>
                <td>".$row['threads']."</td>
                <td><b>".$row['score']."</b></td>
            </tr>");
        }
        } else {
            echo "0 results";
        }
        $conn->close();
    }
?>