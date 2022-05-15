<select id="faculty">
    <option value="">Select Faculty</option>

    @foreach ($name as $list)
        <option value="{{$list->id}}"> 
            {{$list->name}}</option>

    @endforeach
</select>

<select id="name">
    <option value="">Teacher Name</option>
</select>

<select id="name">
    <option value="">Student Name</option>
</select>

{{-- <select id="faculty">
    <option value="">Select Faculty</option>
</select> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    jQuery(document).ready(function() {
        jQuery('#faculty').change(function(){
            let fid=jQuery(this).val();
            jQuery.ajax({
                url: '/getName',
                type:'post',
                data:'fid='+fid+
                '&_token={{csrf_token()}}',
                success:function(result){
                    jQuery('#name').html(result) 
                }
            });
        });
    
    });

</script>