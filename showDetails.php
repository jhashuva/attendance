<?php
$connection = mysqli_connect("localhost","root","");
if($connection){
echo "Connected to mysql successfully";
$db=mysqli_select_db($connection,"attendance");
if($db){
echo "Successfully selected mydb";
}else{
echo "Unable to select mydb";
}
}else{
echo "unable to connect";
}

$sql = "SELECT * FROM mvcts";
if($result=mysqli_query($connection,$sql)){
	if(mysqli_num_rows($result) > 0){
        echo "<table border='1 px'>";
            echo "<tr>";
            	echo "<th>	DATE	</th>";
                echo "<th>	17B81A0503	</th>";
				echo "<th>	 17B81A0506	</th>";
				echo "<th>	17B81A0508	</th>";
				echo "<th>	17B81A0510	</th>";
				echo "<th>	17B81A0513	</th>";
				echo "<th>	17B81A0514	</th>";
				echo "<th>	17B81A0518	</th>";
				echo "<th>	17B81A0519	</th>";
				echo "<th>	17B81A0520	</th>";
				echo "<th>	17B81A0522	</th>";
				echo "<th>	17B81A0523	</th>";
				echo "<th>	17B81A0525	</th>";
				echo "<th>	17B81A0526	</th>";
				echo "<th>	17B81A0528	</th>";
				echo "<th>	17B81A0529	</th>";
				echo "<th>	17B81A0530	</th>";
				echo "<th>	17B81A0539	</th>";
				echo "<th>	17B81A0546	</th>";
				echo "<th>	17B81A0549	</th>";
				echo "<th>	17B81A0551	</th>";
				echo "<th>	17B81A0553	</th>";
				echo "<th>	17B81A0556	</th>";
				echo "<th>	17B81A0557	</th>";
				echo "<th>	17B81A0558	</th>";
				echo "<th>	16B81A0557	</th>";
				echo "<th>	17B81A0562	</th>";
				echo "<th>	17B81A0563	</th>";
				echo "<th>	17B81A0564	</th>";
				echo "<th>	17B81A0567	</th>";
				echo "<th>	17B81A0571	</th>";
				echo "<th>	17B81A0572	</th>";
				echo "<th>	17B81A0574	</th>";
				echo "<th>	17B81A0575	</th>";
				echo "<th>	17B81A0577	</th>";
				echo "<th>	17B81A0581	</th>";
				echo "<th>	17B81A0582	</th>";
				echo "<th>	17B81A0583	</th>";
				echo "<th>	17B81A0584	</th>";
				echo "<th>	17B81A0585	</th>";
				echo "<th>	17B81A0586	</th>";
				echo "<th>	17B81A0588	</th>";
				echo "<th>	17B81A0589	</th>";
				echo "<th>	17B81A0590	</th>";
				echo "<th>	17B81A0592	</th>";
				echo "<th>	17B81A0593	</th>";
				echo "<th>	17B81A0595	</th>";
				echo "<th>	17B81A0596	</th>";
				echo "<th>	17B81A0598	</th>";
				echo "<th>	17B81A05A1	</th>";
				echo "<th>	17B81A05A2	</th>";
				echo "<th>	17B81A05A5	</th>";
				echo "<th>	17B81A05A6	</th>";
				echo "<th>	17B81A05A8	</th>";
				echo "<th>	17B81A05A9	</th>";
				echo "<th>	17B81A05B1	</th>";
				echo "<th>	17B81A05B2	</th>";
				echo "<th>	17B81A05B5	</th>";
				echo "<th>	17B81A05B6	</th>";
				echo "<th>	17B81A05B7	</th>";
				echo "<th>	17B81A05B9	</th>";

            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<th>" .$row['date']."</th>";    
			echo "<td>" . $row['17B81A0503'] . "</td>";
			echo "<td>" . $row['17B81A0506'] . "</td>";
			echo "<td>" . $row['17B81A0508'] . "</td>";
			echo "<td>" . $row['17B81A0510'] . "</td>";
			echo "<td>" . $row['17B81A0513'] . "</td>";
			echo "<td>" . $row['17B81A0514'] . "</td>";
			echo "<td>" . $row['17B81A0518'] . "</td>";
			echo "<td>" . $row['17B81A0519'] . "</td>";
			echo "<td>" . $row['17B81A0520'] . "</td>";
			echo "<td>" . $row['17B81A0522'] . "</td>";
			echo "<td>" . $row['17B81A0523'] . "</td>";
			echo "<td>" . $row['17B81A0525'] . "</td>";
			echo "<td>" . $row['17B81A0526'] . "</td>";
			echo "<td>" . $row['17B81A0528'] . "</td>";
			echo "<td>" . $row['17B81A0529'] . "</td>";
			echo "<td>" . $row['17B81A0530'] . "</td>";
			echo "<td>" . $row['17B81A0539'] . "</td>";
			echo "<td>" . $row['17B81A0546'] . "</td>";
			echo "<td>" . $row['17B81A0549'] . "</td>";
			echo "<td>" . $row['17B81A0551'] . "</td>";
			echo "<td>" . $row['17B81A0553'] . "</td>";
			echo "<td>" . $row['17B81A0556'] . "</td>";
			echo "<td>" . $row['17B81A0557'] . "</td>";
			echo "<td>" . $row['17B81A0558'] . "</td>";
			echo "<td>" . $row['16B81A0557'] . "</td>";
			echo "<td>" . $row['17B81A0562'] . "</td>";
			echo "<td>" . $row['17B81A0563'] . "</td>";
			echo "<td>" . $row['17B81A0564'] . "</td>";
			echo "<td>" . $row['17B81A0567'] . "</td>";
			echo "<td>" . $row['17B81A0571'] . "</td>";
			echo "<td>" . $row['17B81A0572'] . "</td>";
			echo "<td>" . $row['17B81A0574'] . "</td>";
			echo "<td>" . $row['17B81A0575'] . "</td>";
			echo "<td>" . $row['17B81A0577'] . "</td>";
			echo "<td>" . $row['17B81A0581'] . "</td>";
			echo "<td>" . $row['17B81A0582'] . "</td>";
			echo "<td>" . $row['17B81A0583'] . "</td>";
			echo "<td>" . $row['17B81A0584'] . "</td>";
			echo "<td>" . $row['17B81A0585'] . "</td>";
			echo "<td>" . $row['17B81A0586'] . "</td>";
			echo "<td>" . $row['17B81A0588'] . "</td>";
			echo "<td>" . $row['17B81A0589'] . "</td>";
			echo "<td>" . $row['17B81A0590'] . "</td>";
			echo "<td>" . $row['17B81A0592'] . "</td>";
			echo "<td>" . $row['17B81A0593'] . "</td>";
			echo "<td>" . $row['17B81A0595'] . "</td>";
			echo "<td>" . $row['17B81A0596'] . "</td>";
			echo "<td>" . $row['17B81A0598'] . "</td>";
			echo "<td>" . $row['17B81A05A1'] . "</td>";
			echo "<td>" . $row['17B81A05A2'] . "</td>";
			echo "<td>" . $row['17B81A05A5'] . "</td>";
			echo "<td>" . $row['17B81A05A6'] . "</td>";
			echo "<td>" . $row['17B81A05A8'] . "</td>";
			echo "<td>" . $row['17B81A05A9'] . "</td>";
			echo "<td>" . $row['17B81A05B1'] . "</td>";
			echo "<td>" . $row['17B81A05B2'] . "</td>";
			echo "<td>" . $row['17B81A05B5'] . "</td>";
			echo "<td>" . $row['17B81A05B6'] . "</td>";
			echo "<td>" . $row['17B81A05B7'] . "</td>";
			echo "<td>" . $row['17B81A05B9'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($connection);
?>