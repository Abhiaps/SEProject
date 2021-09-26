<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo $Name;
    echo "<br>";
    echo $Branch;
    echo "<br>";?>

    <input placeholder="Session Year" type="text" id="sessionyr" />
    <br>
    <input placeholder="Session" type="text" id="session" />
    <br>

    <button onclick="deficientStudents('')">Deficient Student List In Your Branch</button>
    <script>
        var val;
        function deficientStudents(){
            branch="phy";
            sessionyr=document.getElementById("sessionyr").value;
            session=document.getElementById("session").value;
            window.location.href = "/codeigniterFirstProject/index.php/Home/deficientStudents?branch="+branch+"&sessionyr="+sessionyr+"&session="+session;
        }
    </script>
</body>
</html>