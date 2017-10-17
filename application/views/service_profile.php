<div class="main">
    <div class="row addService">
        <div class="col-lg-12 col-md-12">
            <a href="<?php echo base_url('mts/del_service/'.$service_id); ?>"><button>Delete Service</button></a>
            <button id="edit-button">Edit Service</button>
            <form id="addServiceForm" class="customform">
                <div class="col-md-12">
                    <h1 class="text-info">Service Details</h1></div>
                <!--<div class="col-lg-3 col-lg-offset-0 col-md-3"><i class="fa fa-user serviceIcon"></i></div>-->
                <div class="col-md-9">
                    <div id="errors"></div><?php echo validation_errors(); ?>
                    <input class="form-control" type="text" placeholder="Enter Service Name" name="svc_name" value="<?=$svc_name?>" disabled>
                    <input class="form-control" type="text" placeholder="Service Description" id="desc" name="svc_desc" value="<?=$svc_desc?>" disabled>
                </div>
                
                <div class="col-md-9">
                    <input class="form-control" type="text" placeholder="Duration (mins)" name="duration" value="<?=$duration?>" disabled>
                    <input class="form-control" type="text" placeholder="Price" name="price" value="<?=$price?>" disabled>
                    <!--<input class="form-control" type="submit" value="Submit">-->    

                    <h1 class="text-info">Service Provider</h1>
                    <div class="checkbox">
                        <label><input id="all_staff" type="checkbox" disabled />All Staff</label>
                    </div>
                    <?php 
                        foreach($staffRecord as $s){
                            echo '<div class="checkbox">';
                            if(in_array($s['staff_id'], $service_provider)){
                                echo '<label><input type="checkbox" name="staff[]" value="'.$s['staff_id'].'" checked disabled/>'.$s['first_name'].' '.$s['last_name'].'</label>';
                            }
                            else
                                echo '<label><input type="checkbox" name="staff[]" value="'.$s['staff_id'].'" disabled/>'.$s['first_name'].' '.$s['last_name'].'</label>';
                            echo '</div>';
                        }
                    ?>

                    <!--<button class="form-control">Submit</button>-->
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#all_staff').click(function(){
        if($(this).prop('checked') == true){
            $('input[name="staff[]"]').prop('checked',true);
        }
        else{
            $('input[name="staff[]"]').prop('checked',false);
        }
    });
});
</script>
<script>
$(document).ready(function(){
    $('input[name="staff[]"]').click(function(){
        if($('input[name="staff[]"]:checked').length == $('input[name="staff[]"]').length){
            $('input[type="checkbox"').prop('checked',true);
        }
        else
            $('#all_staff').prop('checked',false);
    });
});
</script>
<script>
$(document).ready(function(){
    if($('input[name="staff[]"]:checked').length == $('input[name="staff[]"]').length){
        $('input[type="checkbox"').prop('checked',true);
    }
});
</script>
<script>
$(document).ready(function(){
    $('#edit-button').click(function(){
        $('input').prop('disabled',false);
        $('form').append('<button id="submit-button" class="form-control">Submit</button>');
        $('form').append('<button id="cancel-button" class="form-control">Cancel</button>');
    });
});
</script>
<script>
$(document).on('click','#cancel-button',function(event){
    event.preventDefault();
    location.reload();
});
</script>
<script>
$(document).on('click','#submit-button',function(event){
    event.preventDefault();
    formData = $('#addServiceForm').serialize();
    $.ajax({
        url: "<?php echo base_url('mts/update_service/'.$service_id); ?>",
        data: formData,
        type: "POST",
        async: false,
        
        success: function(data){
            if(data=='success'){
                location.reload();
            }
            else
                $('#errors').html(data);
        }
    });
});
</script>
</body>
</html>