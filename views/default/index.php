<?php

$this->params['breadcrumbs'][] = [
    'label' => \yii\helpers\Inflector::humanize($this->context->module->id),
    'url'   => ['/playground']
];

?>
<div class="playground-default-index">
    <h1>Playground</h1>

    <div class="row">
        <div class="col-sm-6">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Modules</div>
                <div class="panel-body">
                    <p>Modules are configured in the Bootstrap class.</p>
                </div>

                <!-- List group -->
                <ul class="list-group">
                    <!--<li class="list-group-item"><?= \yii\helpers\Html::a('Sakila', ['/sakila']) ?> - Giiant Demo CRUDs
                    </li>-->
                    <li class="list-group-item"><?= \yii\helpers\Html::a('Packaii', ['/packaii']) ?> - Package Browser
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-sm-6">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Components</div>
                <div class="panel-body">
                    <p>Component usage via PHP namespace.</p>
                </div>

                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item"><?= \yii\helpers\Html::a('2amigos', ['/playground/dos-amigos']) ?> -
                        Widgets
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
