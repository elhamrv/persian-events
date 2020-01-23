<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

$cities = \Yii::$app->view->params['cities'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="body-back">
<?php $this->beginBody() ?>

    <div class="wrap">
    	
    <nav class="navbar navbar-expand-lg navbar-back navbar-light ">
      <a class="navbar-brand" href="<?php echo Yii::getAlias("@web")?>/site/index"><img src="<?php echo Yii::getAlias("@web")?>/web/images/pe4.png" width="80" height="40" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alle Events
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">shab yalda</a>
              <a class="dropdown-item" href="#">4shanbe sori</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alle Orte
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <?php 
             foreach ($cities as $city) {
                 $id=$city->id;
                 $name=$city->name;
            
            ?>
              <a class="dropdown-item" href="#"><?php echo $name;?></a>
            <?php 
            }
            ?>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav float-right">
        <form class="form-inline my-2 my-lg-0 ">
          <input style=" width:400px; " class="form-control mr-sm-2" type="search"  placeholder="Search..." aria-label="Search">
          <button class=" my-sm-0 btn-search" type="submit"><img src="<?php echo Yii::getAlias("@web")?>/web/images/icons/search.png" width="30" height="30" ></button>
        </form>
        
        <li class="nav-item active ">
            <a class="nav-link" href="#">sprache <span class="sr-only">(current)</span></a>
        </li>
        </ul>
        
      </div>
    </nav>
        <div class="container">
        	<?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
           <a class="" href="<?php echo Yii::getAlias("@web")?>/site/about">About<img src="<?php echo Yii::getAlias("@web")?>/web/images/icons/search.png" width="30" height="30" ></a>
       </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
