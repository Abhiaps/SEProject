<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<input placeholder="Session Year" type="text" id="sessionyr" />
<br>
<input placeholder="Session" type="text" id="session" />
<br>
<button onclick="allStudents('dualdegree','4')">All UG Data</button>
<br>
<button onclick="AcademicProbation('UG','4')">UG Academic Probation</button>
<br>
<button onclick="Warning('UG','4')">UG Warning</button>
<br>
<button onclick="Terminated('UG','4')">UG Terminated</button>
<br>
<button onclick="allStudents('m.tech','5')">All PG Data</button>
<br>
<button onclick="AcademicProbation('PG','5')">PG Academic Probation</button>
<br>
<button onclick="Warning('PG','5')">PG Warning</button>
<br>
<button onclick="Terminated('PG','5')">PG Terminated</button>
   
<script>

        function allStudents(course,courseLowest){
            sessionyr=document.getElementById("sessionyr").value;
            session=document.getElementById("session").value;
            window.location.href = "/codeigniterFirstProject/index.php/Home/allstudents?course="+course+"&courseLowest="+courseLowest+"&sessionyr="+sessionyr+"&session="+session;
        }
        function AcademicProbation(course,courseLowest){
            sessionyr=document.getElementById("sessionyr").value;
            session=document.getElementById("session").value;
            window.location.href = "/codeigniterFirstProject/index.php/Home/ap?course="+course+"&courseLowest="+courseLowest+"&sessionyr="+sessionyr+"&session="+session;
        }
        function Warning(course,courseLowest){
            sessionyr=document.getElementById("sessionyr").value;
            session=document.getElementById("session").value;
            window.location.href = "/codeigniterFirstProject/index.php/Home/warning?course="+course+"&courseLowest="+courseLowest+"&sessionyr="+sessionyr+"&session="+session;
        }
        function Terminated(course,courseLowest){
            sessionyr=document.getElementById("sessionyr").value;
            session=document.getElementById("session").value;
            window.location.href = "/codeigniterFirstProject/index.php/Home/terminated?course="+course+"&courseLowest="+courseLowest+"&sessionyr="+sessionyr+"&session="+session;
        }
</script>
</body>
</html>