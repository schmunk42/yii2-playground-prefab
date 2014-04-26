<?php

namespace schmunk42\playground;

use yii\base\BootstrapInterface;
use yii\base\Application;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->setModule(
            'sakila',
            [
                'class' => 'schmunk42\sakila\Module',
            ]
        );
        $app->setModule(
            'packaii',
            [
                'class' => 'schmunk42\packaii\Module',
            ]
        );        
    }
}
