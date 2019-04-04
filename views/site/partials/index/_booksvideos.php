<?php
/* @var $books array */
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="books-videos">
    <div class="container content-separator">
        <div class="row">
            <div class="col-md-12">
                <div class="dashed-heading-front-books">
                    <span>Books about Yii</span>
                </div>
            </div>
        </div>
        <?= $this->render('/site/partials/_books.php', ['books' => $books]) ?>
        <div class="row see-all">
            <a href="<?= Url::to(['site/books']) ?>" class="btn btn-front btn-block">See all books</a>
        </div>
    </div>
</div>
