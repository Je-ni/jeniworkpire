<?php
//Making a connection to the database
$conn = mysqli_connect('localhost','root','','users');

//checking if connection was succesful and if not, end the page
if(! $conn){
    die('Error Connecting ToDatabase');
}

//Querying the database, learners table to retrieve all the records
$result = mysqli_query($conn, "SELECT * FROM learners");

//checking if the records were found
if($result){
    //Looping through the records to show them onthe page
    //using html table
    echo "<table>
    <tr>
    <th>S/N</th>
    <th>Name</th>
    <th>Username</th>
    </tr>";
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['username']."</td></tr>";
    }
    echo "</table>";
}