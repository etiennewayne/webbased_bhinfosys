

<?php $__env->startSection('content'); ?>
    <boarding-house prop-user='<?php echo json_encode($user, 15, 512) ?>'></boarding-house>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.landowner-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\eshen\Desktop\Github\webbased_bhinfosys\resources\views/landowner/boarding-house.blade.php ENDPATH**/ ?>