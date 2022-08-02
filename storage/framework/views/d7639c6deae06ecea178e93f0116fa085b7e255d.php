<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>الخبراء</title>
  <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  
  <style>


body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type=text] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type=password] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
#cars {
    width :100%;
    text-align :center ;
}

</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <form class="form-signin" action="<?php echo e(url('addconop')); ?>"  method="post" >
    <?php echo e(csrf_field()); ?>      
      <h2 class="form-signin-heading">
          <center>
      اضافة وجهة دولية  </h2>
     
</center>
      <input type="text" class="form-control" style="text-align : center ;" name="name" placeholder="اسم الوجهة " required="" autofocus="" />
      
</br>
<center>
<label class="mlabel" for="cars">اختر العمليات المتاحة  </label>
</center>
</br>
<select name="cars[]" id="cars" multiple>

<?php $__currentLoopData = $pr2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($pr2->mainid); ?>" ><?php echo e($pr2->opname); ?> </option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</br>
</br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">اضافة</button>   
    </form>
  </div>
<!-- partial -->
  
</body>
</html>
<?php /**PATH /Users/a1/Desktop/this copy 4/resources/views/createcon.blade.php ENDPATH**/ ?>