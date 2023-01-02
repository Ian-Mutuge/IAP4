<head>
    <style>
  body {
  background-color: mintcream;
}

h2 {
  
  text-align: center;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
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
   <h2> Class Attendance</h2>

    <table style="width:50%" class="center">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
<th>Unit name</th>
<th>Hours_present </th>
<th>Hours_absent</th>
<th>Percentage</th>
</tr>

<tr>
    <td><?php echo e($i->name); ?></td>
    <td><?php echo e($i->hours_present); ?></td>
    <td><?php echo e($i->hours_absent); ?></td>
    <td>(<?php echo e($i->hours_present); ?>/<?php echo e($i->hours_present); ?>*100)</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>   <?php /**PATH C:\xampp\htdocs\NewIAPproject\Student management\–-prefer-dist\resources\views/Attendanceview.blade.php ENDPATH**/ ?>