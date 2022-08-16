<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="h4 font-weight-bold">
            Settings Management
        </h2>
     <?php $__env->endSlot(); ?>
    <br><br>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route("save-settings")); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-3">
                                <label for="<?php echo e($setting->setting_name); ?>" class="form-label"><?php echo e($setting->setting_name); ?></label>
                                <?php switch($setting->setting_type):
                                    case ("text"): ?>
                                        <input type="text" id="<?php echo e($setting->setting_name); ?>" name="<?php echo e($setting->setting_name); ?>" value="<?php echo e($setting->setting_value); ?>" class="form-control"/>
                                        <?php break; ?>
                                    <?php case ("textarea"): ?>
                                        <textarea id="<?php echo e($setting->setting_name); ?>" class="form-control" rows="4" name="<?php echo e($setting->setting_name); ?>"><?php echo e($setting->setting_value); ?></textarea>
                                        <?php break; ?>
                                    <?php default: ?>
                                        
                                <?php endswitch; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn"><img src = "https://freepngimg.com/download/save_button/25512-4-save-button-clipart.png" width="55px" height="35px"></button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
        <div class ="col-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2852.212319292057!2d26.13073725111303!3d44.367230013880324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fe0ee5799895%3A0x45d8f7576de2294c!2sBulevardul%20Metalurgiei%2C%20Bucure%C8%99ti!5e0!3m2!1sro!2sro!4v1653469225196!5m2!1sro!2sro" width="500" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
<br><br>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\INNA\resources\views/pages/setting/index.blade.php ENDPATH**/ ?>