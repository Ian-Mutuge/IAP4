<!DOCTYPE html>
<html>
<head>
    <style>


p{
    margin-left: 500px;
}


</style>
<title>Your profile</title>
</head>
<body>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 <div>
<h1>Student Profile</h1>   <br>

                   
              
<p>Student No:  <?php echo e(Auth::user()->id); ?> </p>
<p>Student name: <?php echo e(Auth::user()->name); ?></p>
<p>Mobile Phone No: <?php echo e(Auth::user()->phonenumber); ?></p>
<p>Email address: <?php echo e(Auth::user()->email); ?></p>
<p>Course_id:<?php echo e(Auth::user()->course_id); ?></p>
<p>Course_name:<?php echo e(Auth::user()->course_name); ?></p>

 </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\NewIAPproject\Student management\–-prefer-dist\resources\views/Studentprofile.blade.php ENDPATH**/ ?>