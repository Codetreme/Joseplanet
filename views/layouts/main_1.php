<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $baseUrl = Url::base();
        ?>


        <!-- CSS StyleSheets -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/css/animate.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/css/slick.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/css/style.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/css/responsive.css">
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/css/ie.css">
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/lib/js/html5.js"></script>
    <![endif]-->


        <!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib/css/skins/default.css">

        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="page-loader">
            <div class="loader-in"></div>
        </div>
        <!-- site preloader end -->

        <div class="pageWrapper">
            <div id="headWrapper" class="clearfix">











                <header id="header">
                    <?php
                    NavBar::begin([
                        'brandLabel' => '<img src="' . $baseUrl . '/lib/img/logo.png" alt="" class="logo">',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar-default navbar-fixed-top scrolled',
                            'role' => 'navigation',
                        ],
                    ]);
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                    ];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => Yii::$app->homeUrl . '/user/registration/register'];
                        $menuItems[] = ['label' => 'Login', 'url' => Yii::$app->homeUrl . '/user/security/login'];
                    } else {

                        $menuItems[] = ['label' => 'Dashboard', 'url' => Yii::$app->homeUrl . '/dashboard/index'];

                        $profile = chd7well\user\models\Profile::find()->where(['user_id' => Yii::$app->user->identity->id])->one();

                        $subMenuItems = [
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => Yii::$app->homeUrl . '/user/security/logout',
                                'linkOptions' => ['data-method' => 'post']
                            ],
                            ['label' => '<i class="fa fa-user"></i>&nbsp;My Profile',
                                'url' => Yii::$app->homeUrl . '/user/settings/profile',
                            ],
                            ['label' => '<i class="fa fa-lock"></i>&nbsp;My Account',
                                'url' => Yii::$app->homeUrl . '/user/settings/account',
                            ],
                        ];

                        if (\Yii::$app->user->can('Admin')) {
                            $subMenuItems[] = ['label' => '<li class="divider"></li>'];
                            $subMenuItems[] = ['label' => '<i class="fa fa-users"></i>&nbsp;User Admin',
                                'url' => Yii::$app->homeUrl . '/user/admin/index',
                            ];
                            $subMenuItems[] = ['label' => '<i class="fa fa-lock"></i>&nbsp;Rights Admin',
                                'url' => Yii::$app->homeUrl . '/rbac/',
                            ];
                        }
                        $menuItems[] = [

                            'items' => $subMenuItems,
                            'label' => '<i class="fa fa-bars"></i>&nbsp; ' . $profile->name . '',
                            'linkOptions' => ['class' => 'dropdown', 'role' => 'button']
                        ];
                    }
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'encodeLabels' => false,
                        'items' => $menuItems,
                    ]);
                    NavBar::end();
                    ?>


                </header>

                <div class="container" style="margin-top: 80px" id="container">
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>



                <footer class="footer" id="footer">
                    <div class="container">
                        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
                        <p class="pull-right"><?= Yii::powered() ?></p>
                    </div>
                </footer>
                <?php
                //
//        $this->registerJs('jQuery.js');
//        $this->registerJsFile('jquery.js', ['position' => \yii\web\View::POS_HEAD]);
                ?>

<!--<script src="<?php echo $baseUrl; ?>/lib/js/jquery-1.11.1.min.js"></script>-->
<!--<script src="<?php echo $baseUrl; ?>/lib/js/bootstrap.min.js"></script>-->
<!--        <script src="<?php echo $baseUrl; ?>/lib/js/slick.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/lib/js/placeholdem.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/lib/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/lib/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>-->
                <script src="<?php echo $baseUrl; ?>/lib/js/waypoints.min.js"></script>
                <script src="<?php echo $baseUrl; ?>/lib/js/scripts_custom.js"></script>
                <script>
                    $(document).ready(function () {
                        appMaster.preLoader();
                    });
                </script>
                <?php $this->endBody() ?>
                <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/custom.css">
                </body>
                </html>
                <?php $this->endPage() ?>
