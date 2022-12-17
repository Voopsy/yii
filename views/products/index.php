<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

?>
<h1 class="my-3">Каталог</h1>
    <div class="d-flex justify-content-between flex-wrap my-3">
        <?php foreach ($product as $item): ?>
            <div class="card">
                <img src="images/<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="<?= Url::toRoute(['products/view', 'id' => $item['id']]) ?>"
                           class="text-dark text-decoration-none">
                            <?= $item['name'] ?>
                        </a>
                    </h3>
                    <p class="card-text">
                        <?= $item['price'] ?> руб.
                    </p>
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <div class="d-grid gap-2">
                            <a href="<?= Url::toRoute(['products/add', 'id' => $item['id']]) ?>"
                               class="btn btn-success">Добавить
                                в корзину</a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>