<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
		<h1><?php echo $status;?></h1>
		<table>
			<tr>
                <th>Name</th>
                <th>Admission No</th>
				<th>CGPA</th>
				<th>SGPA</th>
				<th>Email</th>
				<th>Phone No</th>
				<th>course</th>
				<th>branch</th>
				<th>year of admission</th>
			</tr>
       
			<?php 
                foreach($data as $result)
				{
			?>
			<tr>
                <td><?php echo $result->NAME;?></td>
                <td><?php echo $result->admn_no;?></td>
				<td><?php echo $result->cgpa;?></td>
				<td><?php echo $result->gpa;?></td>
				<td><?php echo $result->present_email;?></td>
				<td><?php echo $result->phn_no;?></td>
				<td><?php echo $result->course;?></td>
				<td><?php echo $result->branch;?></td>
				<td><?php echo $result->year_of_admission;?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>
</html>