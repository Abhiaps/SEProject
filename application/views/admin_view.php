<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin</h1>
    <input placeholder="Name" type="text" id="NAME" />
    <br>
    <input placeholder="Department" type="text" id="dept" />
    <br>
    <input placeholder="Course" type="text" id="course" />
    <br>
    <input placeholder="Branch" type="text" id="branch" />
    <br>
    <input placeholder="Admission No" type="text" id="admn_no" />
    <br>
    <input placeholder="Session Year" type="text" id="session_yr" />
    <br>
    <input placeholder="Session" type="text" id="session" />
    <br>
    <input placeholder="Semester" type="text" id="sem" />
    <br>
    <input placeholder="Actual Published On" type="text" id="actual_published_on" />
    <br>
    <input placeholder="CGPA" type="text" id="cgpa" />
    <br>
    <input placeholder="GPA" type="text" id="gpa" />
    <br>
    <input placeholder="Semester PassFail Status" type="text" id="senester_passfail_status" />
    <br>
    <input placeholder="Academic Status" type="text" id="academic_status" />
    <br>
    <input placeholder="Prio" type="text" id="prio" />
    <br>
    <input placeholder="Modified By" type="text" id="modified_by" />
    <br>
    <input placeholder="Remark 1" type="text" id="remark1" />
    <br>
    <input placeholder="Remark 2" type="text" id="remark2" />
    <br>
    <button onclick="addStudent()">Add Student To Deficient List</button>
    <button onclick=deleteStudent()>Delete Student From Deficient List</button>
    <script>
        function addStudent(){
            var data={
                NAME:document.getElementById("NAME").value,
                dept:document.getElementById("dept").value,
                course:document.getElementById("course").value,
                branch:document.getElementById("branch").value,
                admn_no:document.getElementById("admn_no").value,
                session_yr:document.getElementById("session_yr").value,
                session:document.getElementById("session").value,
                sem:document.getElementById("sem").value,
                actual_published_on:document.getElementById("actual_published_on").value,
                cgpa:document.getElementById("cgpa").value,
                gpa:document.getElementById("gpa").value,
                senester_passfail_status:document.getElementById("senester_passfail_status").value,
                academic_status:document.getElementById("academic_status").value,
                prio:document.getElementById("prio").value,
                modified_by:document.getElementById("modified_by").value,
                remark1:document.getElementById("remark1").value,
                remark2:document.getElementById("remark2").value,
            };
            window.location.href = "/codeigniterFirstProject/index.php/Home/add?data="+encodeURIComponent(JSON.stringify(data));
        }
        function deleteStudent(){
            var data={
                NAME:document.getElementById("NAME").value,
                dept:document.getElementById("dept").value,
                course:document.getElementById("course").value,
                branch:document.getElementById("branch").value,
                admn_no:document.getElementById("admn_no").value,
                session_yr:document.getElementById("session_yr").value,
                session:document.getElementById("session").value,
                sem:document.getElementById("sem").value,
                actual_published_on:document.getElementById("actual_published_on").value,
                cgpa:document.getElementById("cgpa").value,
                gpa:document.getElementById("gpa").value,
                senester_passfail_status:document.getElementById("senester_passfail_status").value,
                academic_status:document.getElementById("academic_status").value,
                prio:document.getElementById("prio").value,
                modified_by:document.getElementById("modified_by").value,
                remark1:document.getElementById("remark1").value,
                remark2:document.getElementById("remark2").value,
            };
            window.location.href = "/codeigniterFirstProject/index.php/Home/delete?data="+encodeURIComponent(JSON.stringify(data));
        }
    </script>
</body>
</html>