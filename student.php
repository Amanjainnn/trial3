<html>
    <head>
        <style>
            body{
                background-color: black;
                color: white;
            }
            #header{
                font-size: 55px;
                
            }
            div{
                border-color: white;
                border-style: dotted;
            }
            table{
                align-content: center;
            }
            td{
                padding:5px;
                align-content: center;
            }
        </style>
        <title>Welcome</title>
    </head>
    <body>
        <div id="header">WELCOME</div>
        <br>
        <div id="pdetails">
       <?php
        $host="localhost";
        
        $username = "root";
        $password = "";
        $db_name="project_manager"; 
        $connection=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
        $id=$_GET['id'];
        
        $query="Select * from pgroup where gid='$id' ";
        $result=mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)) {
        echo "Project Id:  " .$id."<br>Project Name:   ".$row["ptitle"]."<br>Description:   ".$row["pdesc"];
        }
            
        ?>
            
        </div>
        <div id="mem_name">
            
        <center>Members:</center>
        <?php
            $query="Select * from student where gid='$id'";
            $result=mysqli_query($connection,$query);
            echo "<table >";
            echo "<tr>";
            echo "<th>SNo</th><th>Roll No</th><th>Name</th><th>Section</th>";
            echo "</tr>";
            $i=1;
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
        echo "<td>$i</td><td>".$row["sid"]."</td><td>".$row["sname"]."</td><td>".$row["class"]."</td>";
        echo "<br>";
            $i++;
        }   
            ?>
        </div>
    
    </body>
</html>