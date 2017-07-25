<!DOCTYPE html>
<?php

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\Alert;
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Tshepo 500 000 Programme" />
        <meta name="author" content="" />


        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php
        $baseUrl = Url::base();
        $homeUrl = Url::home();
        ?>

        <?php $this->head() ?>

        <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">-->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib2/assets/css/fonts/linecons/css/linecons.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib2/assets/css/fonts/fontawesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib2/assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib2/assets/css/xenon-core.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib2/assets/css/xenon-forms.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib2/assets/css/xenon-components.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib2/assets/css/xenon-skins.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/lib2/assets/css/custom.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/custom.css">
               <!--<script src="<?php echo $baseUrl; ?>/lib2/assets/js/jquery-1.11.1.min.js"></script>-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <?php $this->beginBody() ?>
    <body class="page-body login-page login-light">


        <div class="login-container">

            <div class="row">



                <?= Alert::widget() ?>
                <?= $content ?>



            </div>

        </div>


        <!-- Bottom Scripts -->
        <!--<script src="<?php echo $baseUrl; ?>/lib2/assets/js/bootstrap.min.js"></script>-->
        <script src="<?php echo $baseUrl; ?>/lib2/assets/js/TweenMax.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/lib2/assets/js/resizeable.js"></script>
        <script src="<?php echo $baseUrl; ?>/lib2/assets/js/joinable.js"></script>
        <script src="<?php echo $baseUrl; ?>/lib2/assets/js/xenon-api.js"></script>
        <script src="<?php echo $baseUrl; ?>/lib2/assets/js/xenon-toggles.js"></script>





        <!-- JavaScripts initializations and stuff -->
        <script src="<?php echo $baseUrl; ?>/lib2/assets/js/xenon-custom.js"></script>

        <?php
        ?>
    </body>
    <?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>