   <?php
     error_reporting(0);
     include 'connect.php';     
    
    ?>
    
    

    <div class="container">
        <div class="row">
        <div class="col-md-4">
        <h2>Daliy Income</h2><br>
        <form class="form-group" method="post">
                <div class="form-group">
                    <input type="date" name="h" class="form-control"><br>
                    <input type="submit" name="day" class="form-control" value="Search">
                </div>
            </form>
        </div>
        
        <div class="col-md-4">
        <h2>Monthly Income</h2><br>
            <form class="form-group" method="post">
                <div class="form-group">
                    <select name="month-m" class="form-control">
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select> 
                    <br>
                    <select name="month-y" class="form-control">
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                    </select>
                    <br>
                    <input type="submit" name="month" class="form-control" value="Search">
                    
                </div>
            </form>
        </div>
        <div class="col-md-4">
        <form class="form-group" method="post">
        <h2>Yearly Income</h2><br>
                <div class="form-group">
                    <select name="year-in" class="form-control">
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                    </select>
                    <br>
                    <input type="submit" name="year" class="form-control" value="Search">
                </div>
            </form></div>
        </div>
    </div>
    
                              

    <?php 
   
    if (isset($_POST['day']))
    {
        $d=$_POST['h'];
        $sql="select * from tbl_customizedbook where cbook_date='$d'";
        $i=0;
        $dataPoints = array(
         
     	);
        foreach ($db->query($sql) as $row)
     	{
         $cb_id=$row['cb_id'];
         
         $booking_query="select * from tbl_customizedbook where cb_id='$cb_id'";
         
         foreach ($db->query($booking_query) as $row)
         {
         $chotel_id=$row['chotel_id'];
         $hotel_query="select * from customize_hotel where chotel_id='$chotel_id'";
         
         foreach ($db->query($hotel_query) as $row)
         {
         $chotel_name=$row['chotel_name'];
         $cregion_id=$row['cregion_id'];
         
         array_push($dataPoints,array("label"=> $chotel_name, "y"=> $cregion_id));
         
         
         }
         
         }
     	}

     	echo '<div id="chartContainer" style="height: 370px; width: 100%;"></div>';
     	echo '<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>';
     	echo "<br>";



        foreach ($db->query($sql) as $row)
        {
            $cb_id=$row['cb_id'];
            $i++;
        }
        echo  '<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="border:1px solid black;padding:20px;">';
        echo "<h2>Customized Booking Lists for ",$d,"</h2>";
        echo "<h3>Total booking count =",$i,"</h3>";
        echo '</div>
        <div class="col-md-4"></div>
        </div>';  
       
    }

    if (isset($_POST['month']))
    {
        $m=$_POST['month-m'];
        if ($m=="01") {
            $mname="January";
        }
        elseif ($m=="02") {
            $mname="February";
        }
        elseif ($m=="03") {
            $mname="March";
        }
        elseif ($m=="04") {
            $mname="April";
        }
        elseif ($m=="05") {
            $mname="May";
        }
        elseif ($m=="06") {
            $mname="June";
        }
        elseif ($m=="07") {
            $mname="July";
        }
        elseif ($m=="08") {
            $mname="August";
        }
        elseif ($m=="09") {
            $mname="September";
        }
        elseif ($m=="10") {
            $mname="October";
        }
        elseif ($m=="11") {
            $mname="November";
        }
        elseif ($m=="12") {
            $mname="December";
        }
        else{
            echo "<script>alert('Wrong Input!')</script>";
        }
        $y=$_POST['month-y'];
        $i=0;
        $sql="select * from  tbl_customizedbook where cbook_date>='$y-$m-01' and cbook_date <'$y-$m-31 00:00:00'";
        $dataPoints = array(
         
     	);
        foreach ($db->query($sql) as $row)
     	{
         $cb_id=$row['cb_id'];
         
         $booking_query="select * from tbl_customizedbook where cb_id='$cb_id'";
         
         foreach ($db->query($booking_query) as $row)
         {
         $chotel_id=$row['chotel_id'];
         $hotel_query="select * from customize_hotel where chotel_id='$chotel_id'";
         
         foreach ($db->query($hotel_query) as $row)
         {
         $chotel_name=$row['chotel_name'];
         $cregion_id=$row['cregion_id'];
         array_push($dataPoints,array("label"=> $chotel_name, "y"=> $cregion_id));
         
         
         }
         
         }
     	}

     	echo '<div id="chartContainer" style="height: 370px; width: 100%;"></div>';
     	echo '<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>';
     	echo "<br>";
     	

 		foreach ($db->query($sql) as $row)
        {
            $cb_id=$row['cb_id'];
            $i++;
        }
        echo  '<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="border:1px solid black;padding:20px;">';
        echo "<h2>Customized Booking Lists for ",$mname,",",$y,"</h2>";
        echo "<h3>Total booking count =",$i,"</h3>";
        echo '</div>
        <div class="col-md-4"></div>
        </div>';

        

    }

    if (isset($_POST['year']))
    {
        $d=$_POST['year-in'];
        $y=$d+1;
        $i=0;
        $sql="select * from tbl_customizedbook where cbook_date>='$d-01-01' and cbook_date < '$y+1-01-01 00:00:00'";
        $dataPoints = array(
         
     	);

        foreach ($db->query($sql) as $row)
     	{
         $cb_id=$row['cb_id'];
         
         $booking_query="select * from tbl_customizedbook where cb_id='$cb_id'";
         
         foreach ($db->query($booking_query) as $row)
         {
         $chotel_id=$row['chotel_id'];
         $hotel_query="select * from customize_hotel where chotel_id='$chotel_id'";
         
         foreach ($db->query($hotel_query) as $row)
         {
         $chotel_name=$row['chotel_name'];
         $cregion_id=$row['cregion_id'];
         array_push($dataPoints,array("label"=> $chotel_name, "y"=> $cregion_id));
         
         
         }
         
         }
     	}

     	echo '<div id="chartContainer" style="height: 370px; width: 100%;"></div>';
     	echo '<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>';
     	echo "<br>";

     	 foreach ($db->query($sql) as $row)
        {
            $cb_id=$row['cb_id'];
            $i++;
        }
        echo  '<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="border:1px solid black;padding:20px;">';
        echo "<h2>Customized Booking Lists for ",$d,"</h2>";
        echo "<h3>Total booking count =",$i,"</h3>";
        echo '</div>
        <div class="col-md-4"></div>
        </div>';   
       
    }
    
  


?>
<script type="text/javascript">
    $("#datepicker").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    });
      </script>
    <script>
    window.onload = function () {
         
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            title:{
                text: "Average income by different menu"
            },
            subtitles: [{
                text: ""
            }],
            data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
         
        }
    </script>
            