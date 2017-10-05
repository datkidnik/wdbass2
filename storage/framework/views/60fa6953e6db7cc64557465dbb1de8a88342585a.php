<?php $__env->startSection('content'); ?>
<body>
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">

            </div>
            <div class="col-sm-8 text-left">
                <div class="big help">
                    <h2>welcome</h2>
                </div>
                <br>
                <div>
                    <p>
                        Welcome to the RMIT ITS helpdesk!
                        <br>
                        At RMIT, we're always looking at ways to improve the learning experience for our students.
                        <br>
                        That's why we believe that fixing our students IT issues is a very important priority.
                        <br>
                        If you've got an issue - here's the place to let us know about it.
                    </p>
                </div>
                <br>
                <div class="big help">
                    <h2>frequently asked questions</h2>
                </div>
                <div class="question">
                    <p>how do i submit an issue?</p>
                </div>
                <div class="answer">
                    <p>by filling out the form at the bottom of the home page</p>
                </div>
                <br>
                <div class="question">
                    <p>i get an error when i try to submit an issue?</p>
                </div>
                <div class="answer">
                    <p>please ensure that you fill out all text areas within the form</p>
                </div>
                <br>
                <div class="question">
                    <p>what is an operating system?</p>
                </div>
                <div class="answer">
                    <p>it is the system software that runs on the computer that you have a problem on. eg. Windows 7, OSX</p>
                </div>
                <br>
                <div class="big help">
                            <h2>how can we help?</h2>
                </div>
                <br>
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <p><?php echo e($message); ?></p>
                    </div>
                <?php endif; ?>
                <?php echo Form::model($issue, ['action' => 'IssueController@index']); ?>


                <div class="form-group">
                    <?php echo Form::label('uname', 'Username'); ?>

                    <?php echo Form::text('uname', '', ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('fname', 'Full Name'); ?>

                    <?php echo Form::text('fname', '', ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('emailaddress', 'Email'); ?>

                    <?php echo Form::text('emailaddress', '', ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('os', 'Operating System'); ?>

                    <?php echo Form::text('os', '', ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('complaint', 'Complaint'); ?>

                    <?php echo Form::text('complaint', '', ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('comment', 'Comment'); ?>

                    <?php echo Form::text('comment', '', ['class' => 'form-control']); ?>

                </div>

                <button class="btn btn-success" type="submit">Add the Issue!</button>
                <br>
                <br>
                <br>
                <?php echo Form::close(); ?>

            </div>
            <div class="col-sm-2 sidenav">

            </div>
        </div>
    </div>
    </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>