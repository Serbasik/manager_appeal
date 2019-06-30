<?php

/* @var $this yii\web\View */

$this->title = 'Система управления обращениями граждан';

?>
<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">
            Личный кабинет специалиста 1 категории Иванова И. И.
        </h1>
        </div>
    <div id="page-inner">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-action">
                        <b>Список обращений</b>
                    </div>
                    <div class="card-image">
                        <ul class="collection">
                            <?php foreach ($appeals as $item):?>
                            <a href="/site/appeal?id=<?=$item['id'];?>"><li class="collection-item avatar">
                                <i class="material-icons circle green">insert_chart</i>
                                    <span class="title">Обращение № <?=$item['id'];?></span> от <code><?=$item['data'];?></code><br><br>
                                    <small>Ф.И.О.: Сидоров С. С.</small><br><br>                                <p>
                                    <?php
                                    $text = explode(" ", strip_tags ($item['text']));

                                    $a = sizeof($text);
                                    $i = 0;
                                    while ( $i!=18 )
                                    {
                                        echo $text[$i] . " ";
                                        $i++;
                                        if ($i == $a)
                                        {
                                            break;
                                        }

                                    }
                                    if (count($text)>18)
                                    {
                                        echo "...";
                                    }
                                    ?>

                                    </p>
                                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li></a>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>

                <footer><p>All right reserved. Template by: <a href="#">Dreamwave</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- Модальное окно -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>