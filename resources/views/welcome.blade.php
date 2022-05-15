<h1>This is our welcome page</h1>

{{-- // add this below line on php tag --}}
{{-- //include "config.php"; --}}


<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "ether"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

    <script type="text/javascript">
        $(document).ready(function(){

            // $("#sel_faculty").change(function(){
            //     var facultyid = $(this).val();

            //     $.ajax({
            //         url: 'getLectures',
            //         type: 'post',
            //         data: {faculty:facultyid},
            //         dataType: 'json',
            //         success:function(response){

            //             var len = response.length;

            //             $("#sel_lecture").empty();
            //             for( var i = 0; i<len; i++){
            //                 var id = response[i]['id'];
            //                 var name = response[i]['name'];

            //                 $("#sel_lecture").append("<option value='"+id+"'>"+name+"</option>");

            //             }
            //         }
            //     });
            // });

            jQuery('#').change(function(){

                
            })

        });
    </script>
</head>
<body>

	<div>Faculties </div>
       
<select id="sel_faculty">
   <option value="0">- Select -</option>
   <?php 
   // Fetch faculty
   $sql_faculty = "SELECT * FROM faculties";
   $faculty_data = mysqli_query($con,$sql_faculty);
   while($row = mysqli_fetch_assoc($faculty_data) ){
      $facultyid = $row['id'];
      $name = $row['name'];
      
      // Option
      echo "<option value='".$facultyid."' >".$name."</option>";
   }
   ?>
</select>
<div class="clear"></div>

<div>lectures_name </div>
<select id="sel_lecture">
   <option value="0">- Select -</option>
</select>
	
</body>
</html>

