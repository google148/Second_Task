<select id="faculty">
    <option value="">Select Faculty</option>

    @foreach ($name as $list)
        <option value="{{$list->id}}"> 
            {{$list->name}}</option>

    @endforeach
</select>

<select id="lectures_name">
    <option value="">Teacher Name</option>
 
</select>

<select id="students_name">
    <option value="">Student Name</option>
</select>

{{-- <select id="faculty">
    <option value="">Select Faculty</option>
</select> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    jQuery(document).ready(function() {
        jQuery('#faculty').change(function(){ // if the faculty is change then following operation will perform
            jQuery('#students_name').html('<option value="">Student Name</option>') ; // this will make empty field if the fasulty is change student name field will empty

            let fid=jQuery(this).val();
            jQuery.ajax({
                url: '/getName',
                type:'post',
                data:'fid='+fid+
                '&_token={{csrf_token()}}',
                success:function(result){
                    jQuery('#lectures_name').html(result) // this is the resukt of column field which is called name on lectures table
                }
            });
        });

        jQuery('#lectures_name').change(function(){
            let lid=jQuery(this).val();
            jQuery.ajax({
                url: '/getStudentName',
                type:'post',
                data:'lid='+lid+
                '&_token={{csrf_token()}}',
                success:function(result){
                    jQuery('#students_name').html(result) 
                }
            });
        });
    
    });

</script>