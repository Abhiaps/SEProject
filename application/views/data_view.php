<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>
<body>
	<h1><button> Click To generate and put the data in Deficient Table</button></h1>
<section>
		<h1><?php echo $topic;?></h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
                <th>Name</th>
				<th>Department</th>
				<th>Course</th>
				<th>Branch</th>
                <th>Admission No</th>
				<th>Session Year</th>
				<th>Session</th>
				<th>Semester</th>
				<th>Actual Published On</th>
				<th>CGPA</th>
				<th>SGPA</th>
				<th>Semester Pass/Fail Status</th>

			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
       
			<?php 
                foreach($data as $result)
				{
			?>
			<tr>
                <td><?php echo $result->NAME;?></td>
				<td><?php echo $result->dept;?></td>
				<td><?php echo $result->course;?></td>
				<td><?php echo $result->branch;?></td>
                <td><?php echo $result->admn_no;?></td>
				<td><?php echo $result->session_yr;?></td>
				<td><?php echo $result->session;?></td>
				<td><?php echo $result->semester;?></td>
				<td><?php echo $result->actual_published_on;?></td>
				<td><?php echo $result->cgpa;?></td>
				<td><?php echo $result->gpa;?></td>
				<td><?php echo $result->status;?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
	
</body>
</html>