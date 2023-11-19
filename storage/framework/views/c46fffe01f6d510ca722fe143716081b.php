<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2>Registration Page</h2>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                <?php endif; ?>
                <form me
                <form method="post" action="<?php echo e(route('registration.post')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <lable class="col-md-4">Name</lable>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                        </div>
                        <?php if($errors->has('name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group row">
                        <lable class="col-md-4">Email</lable>
                        <div class="col-md-8">
                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group row">
                        <lable class="col-md-4">Password</lable>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control" placeholder="Enter your Name">
                        </div>
                        <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <input type="submit" name="submit" class="btn btn-success" value="Submit" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\ChiragsTutorialsLaravel\LoginRegistrationLogout\resources\views/auth/registration.blade.php ENDPATH**/ ?>