<div class="<?php echo e($viewClass['form-group'], false); ?>">
    <label class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo e($label, false); ?></label>
    <div class="<?php echo e($viewClass['field'], false); ?>">
        <div class="box box-solid box-default no-margin">
            <!-- /.box-header -->
            <div class="box-body">
                <?php echo $value; ?>&nbsp;
            </div><!-- /.box-body -->
        </div>

        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div><?php /**PATH /var/www/html/db.bslmeiyu.com/laravel/vendor/encore/laravel-admin/src/../resources/views/form/display.blade.php ENDPATH**/ ?>