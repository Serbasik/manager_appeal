<?php

/* @var $this yii\web\View */

$this->title = 'Система управления обращениями граждан';

?>
<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">
            Страница управления обращениями
        </h1>


    </div>
    <div id="page-inner">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-action">
                        <b>Обращение </b>
                    </div>
                    <div class="card-image">
                        <ul class="collection">

                                <li class="collection-item avatar">
                                        <i class="material-icons circle green">insert_chart</i>
                                        <span class="title">Обращение № <?= $app['id']?></span>
                                        <div class="card-content">
                                            <p><?= $app['text']?></p>

                                            <div class="clearBoth"><br></div>

                                        </div>
                                    <p><?php for ($n = count($key_words)-1; $n >= 0; $n --):?>
                                        <span class="badge" data-badge-caption="<?= $key_words[$n];?>" style="float: left; color: black">&nbsp;</span>
                                        <?php endfor;?>
                                    </p><div class="clearBoth"><br><br>
                                <?php //debug($key_words);?>
                                    <?php if(!empty($result)):?>
                                    <h3>Возможные варианты ответа на обращение:</h3>
                                    <?php endif;?>
                                    <?php if(empty($result)):?>
                                        <h3>Это нетиповое обращение!</h3>
                                    <?php endif;?>
                                    </li>

                        </ul>
                        <div class="card-content">
                            <ul class="collapsible" data-collapsible="accordion">
                                <?php if(!empty($result)):?>
                                <?php for($n = 0; $n < count($result); $n ++):?>
                                <li>
                                    <div class="collapsible-header"><i class="material-icons"></i><?=$n+1?>. <?=$result[$n]['name']?></div>
                                    <div class="collapsible-body"><p><?=$result[$n]['resp1']?></p>
                                        <a href="/site/confirm" class="waves-effect waves-light btn" style="margin: 0 0 10px 10px">Подтвердить</a>
                                        <a class="waves-effect waves-light btn orange" style="margin: 0 0 10px 10px">Редактировать ответ</a>
                                    </div>

                                </li>
                                <?php endfor;?>
                                <?php endif;?>
                            </ul>

                        </div>
                    </div>
                </div>

                <footer><p><a href="#">Dreamwave</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->


