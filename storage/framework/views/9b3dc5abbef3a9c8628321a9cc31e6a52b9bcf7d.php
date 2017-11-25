<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="panel panel-default">
                <img class="logo" src="<?php echo e(asset('images/logo.png')); ?>">

                <div class="panel-heading">Bienvenue,</div>

                <div class="panel-body">
                    <p>Vous êtes sur l'espace membre de la Fourmilière.</p>
                    <p>En vous inscrivant, vous pourrez participer aux commandes groupées ainsi qu’à la vie de l’association.</p>
                    <p>Pour l’année 2017, la cotisation a été fixé à 15€ par foyer.<br />
Si vous le souhaitez, vous pouvez augmenter ce montant pour soutenir nos actions et faciliter le développement de l’association.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Vous avez déja un compte ?</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                    
                        <?php echo $__env->make('auth._loginform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Vous n'avez pas de compte ?</div>

                <div class="panel-body">
                    <a class="btn btn-primary" href="/register" role="button">Créez un compte</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>