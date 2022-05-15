
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
  
    <form action="form" method="POST">
        @csrf  

        {{ csrf_field() }}

        <div class="col-md-6">
          <label for="Lecture'sName" class="form-label" >Lecture'sName *</label>
          <input type="text" class="form-control" id="name" name = "name" value="">
        </div>
        <div class="col-md-6">
          <label for="Lecture'sName" class="form-label" >Faculties_id *</label>
          <input type="text" class="form-control" id="faculty_id" name = "faculty_id" value="">
        </div>
        <div>
            <label for="gender" class="form-lebel" name = "gender" value="" required="">Gender *</label>
            <input type="radio" name="gender" value="male"> Male 
            <input type="radio" name="gender" value="female"> Female 
            <input type="radio" name="gender" value="others"> Others
        </div>
        <label for="phone" class="form-label">Phone *</label>
          <input type="text" class="form-control" id="Phone" name="phone" value="" required="">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email ID</label>
          <input type="email" class="form-control" id="email" name="email" >
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
        </div>
        
        <div class="col-md-6">
          <label for="nationality" class="form-label">Nationality</label>
          <input type="text" class="form-control" name="nationality" id="nationality" >
        </div>
        <div class="col-md-6">
            <label for="dob" class="form-label">DOB</label>
            <input type="date" class="form-control" name="dob" id="dob">
          </div>
        <div class="col-md-4">
          <label for="selectFaculty" class="form-label">Select Faculty</label>
          <select id="faculty">
            <option value="">Select Faculty</option>
          
            @foreach ($name as $list)
                <option value="{{$list->id}}"> 
                    {{$list->name}}</option>
          
            @endforeach
          </select>
        </div>

        
        
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
          
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>


      {{-- <script>
          function validateForm(){
            var lectures_name = document.getElementById("lectures_name").value;
            var Phone = document.getElementById("Phone").value;
            var email = document.getElementById("email").value;
            var inputAddress = document.getElementById("inputAddress").value;
            var dob = document.getElementById("dob").value;
            var gender = document.getElementByName("gender");
            var select = document.getElementById("select").value;

            if(lectures_name==""){
              alert("Lectures Name is required");
              return false;
            }
            elseif(lectures_name.length !== 5){
              alert("Lectures Name should be at least 5 character");
              return false;
            }
            elseif(!(gender[0].checked || gender[1].checked || gender[2].checked)){
              alert("please select your gender");
              return false;
            }
            elseif(Phone.length < 10){
              alert("Phone no must be at least 10 digit long");
              return false;
            }
            elseif(inputAddress==""){
              alert("Address filed  is required");
              return false;
            }
            elseif(email==""){
              alert("email field is required");
              return false;
            }

          
             elseif (select) {
               // value is set to a valid option, so submit form
               return true;
             }
             return true;



          }
      </script> --}}
{{--  --}}
</body>
</html>