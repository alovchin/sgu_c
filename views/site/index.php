<?php
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Студенческая конференция 2015</h1>
        <p class="lead">Для подачи заявки необходимо заполнить небольшую форму</p>
        <p>
            <?= Html::a('Подать заявку на участие', ['/site/application'], ['class' => 'btn btn-lg btn-success']) ?>
        </p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Общая информация</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Правила участия</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Список тем</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Подробнее &raquo;</a></p>
            </div>
        </div>
    </div>
</div>
