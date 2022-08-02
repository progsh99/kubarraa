
    <form class="form-signin" action="<?php echo e(url('addconop')); ?>"  method="post" >
    <?php echo e(csrf_field()); ?> 
<label for="cars">Choose a car:</label>

<select name="cars[]" id="cars" multiple>

<?php $__currentLoopData = $pr2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($pr2->mainid); ?>" ><?php echo e($pr2->opname); ?> </option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<button class="btn btn-lg btn-primary btn-block" type="submit">اضافة</button>  
</form>



<?php

/*
$json = json_decode($pr->operationids, true);

    foreach ($json as $key => $value){
        echo "<a href='$value'> $value </a>" ;
        echo " $value\n";
    };
    */
?>



<?php /**PATH /Users/a1/Desktop/this copy 4/resources/views/selectcon.blade.php ENDPATH**/ ?>