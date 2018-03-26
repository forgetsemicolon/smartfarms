<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="c.css">
        <title>Crop Rotation</title>
        <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    column-width: 100px;
}

td, th {
    border: 2px solid #dddddd;
    text-align: left;
    padding: 4px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    </head>
    <body>
        <div class="accomodation-section">
        <h1><center>Crop Rotation</center></h1>
        </div>
        <div>
        <form name = "ss" >
            <button name="potato" value="potato"  type = "submit" img = "images/builtwithwwb12.png">Potato</button>
            <button name="onion" value="onion" type = "submit" >Onion</button>
            <button name="beans" value="beans" type = "submit" >Beans</button>
            <button name="cabbage" value="cabbage" type = "submit" >Cabbage</button>
        </form>
        </div>

        </body>
</html>
         

    
<?php
          
               if(isset($_GET['potato']))
               {
                    $db = mysqli_connect("localhost","root","","crop_rotation");
                    $potatoQuery = "SELECT * FROM year1 WHERE Crop_id = 1";    
                    $response=mysqli_query($db,$potatoQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $ncrop = $row["Next_crop"];
                        $stype = $row["Soil_type"];
                        $ptype = $row['Plant_type'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Next_crop</td>
<td>".$ncrop."</td>

</tr>
<tr>
<td>Soil_type</td>
<td>".$stype."</td>

</tr>
<tr>
<td>Plant_type</td>
<td>".$ptype."</td>

</tr>

</table>
<br>
";                  

                   }    
            }
            


           if(isset($_GET['onion']))
               {
                    $db = mysqli_connect("localhost","root","","crop_rotation");
                    $onionQuery = "SELECT * FROM year1 WHERE Crop_id = 2";
                    $response=mysqli_query($db,$onionQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $ncrop = $row["Next_crop"];
                        $stype = $row["Soil_type"];
                        $ptype = $row['Plant_type'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Next_crop</td>
<td>".$ncrop."</td>

</tr>
<tr>
<td>Soil_type</td>
<td>".$stype."</td>

</tr>
<tr>
<td>Plant_type</td>
<td>".$ptype."</td>

</tr>

</table>
<br>
";                  

                   }    
            }
            

            


            if(isset($_GET['beans']))
               {
                    $db = mysqli_connect("localhost","root","","crop_rotation");
                    $beansQuery = "SELECT * FROM year1 WHERE Crop_id = 3";
                    $response=mysqli_query($db,$beansQuery);
                    while ($row=mysqli_fetch_array($response))
                    {
                        $ncrop = $row["Next_crop"];
                        $stype = $row["Soil_type"];
                        $ptype = $row['Plant_type'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Next_crop</td>
<td>".$ncrop."</td>

</tr>
<tr>
<td>Soil_type</td>
<td>".$stype."</td>

</tr>
<tr>
<td>Plant_type</td>
<td>".$ptype."</td>

</tr>

</table>
<br>
";                  

                   }    
            }
            
                
            


            if(isset($_GET['cabbage']))
               {
                    $db = mysqli_connect("localhost","root","","crop_rotation");
                    $cabbageQuery = "SELECT * FROM year1 WHERE Crop_id = 4";
                    $response=mysqli_query($db,$cabbageQuery);
                    while ($row = mysqli_fetch_assoc($response))
                    {
                        $ncrop = $row["Next_crop"];
                        $stype = $row["Soil_type"];
                        $ptype = $row['Plant_type'];

echo "
<table>
<tr>
<th>Fields</th>
<th>Values</th>

</tr>
<tr>
<td>Next_crop</td>
<td>".$ncrop."</td>

</tr>
<tr>
<td>Soil_type</td>
<td>".$stype."</td>

</tr>
<tr>
<td>Plant_type</td>
<td>".$ptype."</td>

</tr>

</table>
<br>
";                  

                   }    
            }
            


           
    ?>



        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
   