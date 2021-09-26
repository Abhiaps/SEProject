<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="goToDean()">Dean Block</button>
    <button onclick="goToStudent()">Student/Parent Block</button>
    <button onclick="goToFaculty()">Faculty Block</button>
    <button onclick="goToAdmin()">Admin Block</button>


    <script>
        function goToDean() {
            window.location.href = "/codeigniterFirstProject/index.php/Home/dean";
        }
        function goToStudent() {
            window.location.href = "/codeigniterFirstProject/index.php/Home/student";
        }
        function goToFaculty() {
            window.location.href = "/codeigniterFirstProject/index.php/Home/faculty";
        }
        function goToAdmin() {
            window.location.href = "/codeigniterFirstProject/index.php/Home/admin";
        }
    </script>
</body>
</html>