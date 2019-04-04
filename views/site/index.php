<?php

/* @var $this yii\web\View */
/* @var $books array */
/* @var $tour_slides array */
/* @var $testimonials array */
/* @var $news app\models\News[] */
/* @var $extensions \app\models\Extension[] */
/* @var $tutorials \app\models\Wiki[] */

use yii\helpers\Url;

?>
<?= $this->render('partials/index/_jumbo') ?>

<?= $this->render('partials/index/_featurepoints') ?>

<?= $this->render('partials/index/_news', ['news' => $news]) ?>

<?= $this->render('partials/index/_booksvideos', ['books' => $books]) ?>

<div class="container content-separator">
    <div class="row">
        <div class="col-md-4">
            <?= $this->render('partials/index/_testimonials', ['testimonials' => $testimonials]) ?>
            <div class="row padded-row">
                <a href="http://yiipowered.com/en" class="btn btn-front btn-block">See more projects using Yii</a>
            </div>
        </div>
        <div class="col-md-4">
            <?= $this->render('partials/index/_tutorials', ['tutorials' => $tutorials]) ?>
            <div class="row padded-row">
                <a href="<?= Url::to(['wiki/index']) ?>" class="btn btn-front btn-block">See all tutorials</a>
            </div>
        </div>
        <div class="col-md-4">
            <?= $this->render('partials/index/_extensions', ['extensions' => $extensions]) ?>
            <div class="row padded-row">
                <a href="<?= Url::to(['extension/index']) ?>" class="btn btn-front btn-block">See all extensions</a>
            </div>
        </div>
    </div>
</div>
