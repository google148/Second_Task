<h1>This is all list of tables</h1>
 
<table border="1">
<tr>
    <td>id</td>
    <td>name</td>
    <td>gender</td>
    <td>phone</td>
    <td>email</td>
    <td>address</td>
    <td>nationality</td>
</tr>

<?php

//this code is working fine
// this will show the table list of Lectures table


// $conn = mysqli_connect("localhost","root","","ether");
// if($conn->connect_error){
//     die ("connection failed:".$conn->connect_error);
// }

// $sql = "SELECT id, name, gender, phone, email, address, nationality from  lectures";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr><td>". $row["id"]."</td><td>". $row["name"]. "</td><td>". $row["gender"]."</td><td>". $row["phone"]."</td><td>". $row["email"]."</td><td>". $row["address"]."</td><td>". $row["nationality"]. "</td></tr>";
//     }
//     echo "</table>";
// }
// else {
//     echo " o result";
// }
// $conn->close();

// ?>

@foreach($lectures as $lecture )
<tr>
    <td>{{$lecture['id']}}</td>
    <td>{{$lecture['name']}}</td>
    <td>{{$lecture['gender']}}</td>
    <td>{{$lecture['phone']}}</td>
    <td>{{$lecture['email']}}</td>
    <td>{{$lecture['address']}}</td>
    <td>{{$lecture['nationality']}}</td>
</tr>
@endforeach



</table>



 <span>
    {{$lectures -> links()}}
</span>
<style>.w-5{
    display: none; --}}
}</style>


<button type="submit" class="btn btn-primary" ><a href="export"> data in excelSheet</button>
 