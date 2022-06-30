<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>ID</th>
<th>LibraryName</th>
<th>FeedbackType</th>
<th>Feedback_EnquiryOn</th>
<th>title</th>
<th>Fname</th>
<th>Lname</th>
<th>email</th>
<th>contact</th>
<th>LibrarianName</th>
<th>BookName</th>
<th>FeedBack</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "survey");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID,LibraryName,FeedbackType,Feedback_EnquiryOn,title,Fname,Lname,email,contact,LibrarianName,BookName,FeedBack FROM booksurvey";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["LibraryName"] . "</td><td>"
. $row["FeedbackType"]. "</td><td>". $row["Feedback_EnquiryOn"]. "</td><td>". $row["title"]. "</td><td>". $row["Fname"]. "</td><td>". $row["Lname"]. "</td><td>". $row["email"]. "</td><td>". $row["contact"]. "</td><td>". $row["LibrarianName"]. "</td><td>". $row["BookName"]. "</td><td>". $row["FeedBack"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>