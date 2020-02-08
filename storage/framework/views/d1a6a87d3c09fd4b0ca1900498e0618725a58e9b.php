<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Homepage of the bugtracker app</title>
         <!-- Favicon -->
        <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
        <link href="/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <!-- CSS Files -->
        <link href="/assets/css/argon-dashboard.css?v=1.1.1" rel="stylesheet" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height bg-gradient-primary">
            <div class="content">
                <div class="home-title">
                    Welcome to Ivry,<br> a bugtracker app
                    <i class="fas fa-bug fa-3x text-pink bug-icon"></i>
                </div>

                <div class="alert alert-secondary alert-dismissible fade show" role="alert" id="description">
                    <span class="alert-inner--icon"><i class="fas fa-star text-yellow"></i></span>
                    <span class="alert-inner--text">Ivry is a project management app that allows you to create new projects,<br> report issues and manage everything through a dashboard.<br> To try the app please login or register below! </span>
                    </button>
                </div>
                <div class="authentication">


                <?php if(Route::has('login')): ?>
                <div class="links">
                    <?php if(auth()->guard()->check()): ?>
                   <?php if(Session::get('status')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-inner--text"><?php echo e(Session::get('status')); ?></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                        <a href="<?php echo e(url('/dashboard')); ?>">
                        <button type="button" class="btn btn-info btn-lg">
                                <i class="ni ni-curved-next"></i> Go to your dashboard
                            </button>
                            </a>
                    <?php else: ?>
                       
                       <a href="<?php echo e(route('login')); ?>">
                            <button type="button" class="btn btn-default btn-lg">
                                <img class="auth-icons" src="/assets/img/icons/common/login.svg"> Login
                            </button>
                        </a>

                        <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>">
                            <button type="button" class="btn btn-secondary btn-lg">
                                <img class="auth-icons" src="/assets/img/icons/common/notes.svg"> Register</button>
                        </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>



            
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\laragon\www\bugtracker\resources\views/home.blade.php ENDPATH**/ ?>