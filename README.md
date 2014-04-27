Yii2 Playground
===============

Prefab installation of Yii 2 extension demos

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist schmunk42/yii2-playground "*"
```

or add

```
"schmunk42/yii2-playground": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply open the module default controller, eg. `http://localhost/app/web/index.php?r=playground`

All modules, components, widgets, etc... are registered automatically if needed in the module's `Bootstrap::bootstrap()` method.
