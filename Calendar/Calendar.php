<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calendar</title>
	<!--
	Jennifer McVey U04A

	Objectives: Demonstrate how to manipulate an associative array and a multidimensional array
	
	Files used: calendar.css, flowerL.jpg, flowerR.jpg
	-->
	<link href="calendar.css" rel="stylesheet" type="text/css">	
</head>
<body>

	<h1>May</h1>
	<div id="container">
		<?php
			$specialDates = array
			(
				array("day"=>"3", "title"=>"Dad's Birthday"),
				array("day"=>"5", "title"=>"Cinco de Mayo"),
				array("day"=>"26", "title"=>"Memorial Day"),
				array("day"=>"27", "title"=>"Kit's Birthday"),
				array("day"=>"29", "title"=>"JFK's Birthday")		
			);
				
			echo "<table border='1'>";
			
			//Days of the week as headers of table	
			echo "<tr><th>Sunday</th>
	            <th>Monday</th>
	            <th>Tuesday</th>
	            <th>Wednesday</th>
	            <th>Thursday</th>
	            <th>Friday</th>
	            <th>Saturday</th>
	         <tr>";
			
			//Create grid with 5 rows of seven columns
			$maxR = 5;
			$maxC = 7;
			$date = 1;	
			$tot = 1;		
			
			
			for($row = 1; $row <= $maxR; $row++)
			{
				echo "<tr>";
				for($col = 1; $col <= $maxC; $col++)
				{			
					if ($tot >= 5)  //start on 5th square in to begin month on Thursday
					{
						$calendarDay = "<td class='align'>" . $date . "</td>";  //start numbering the dates of the month
						for ($i=0; $i < count($specialDates); $i++)             // loop through special dates
						{
							if ( $date == $specialDates[$i]["day"] )             //if date (number) matches the day in special dates array, add the title of special date to cell
							{
								$calendarDay = "<td class='align' id='specDate'>" . $date. "<br><br>" . $specialDates[$i]["title"] . "</td>";				
							}						
						}
						echo $calendarDay;                                      //fills in the rest of the squares with the dates
						$date++;
					}				
					else
					{
						echo "<td></td>";			                                //creates empty cells	
					}
					$tot++;                                                    //increments total (counting through table cells)
					
				}
				echo "</tr>";	
			}
			echo "</table>";
		
		?>
	</div>
</body>
</html>