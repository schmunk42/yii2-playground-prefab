<?php
/**
 * @var yii\web\View $this
 */

$this->title = '2amigos';
$this->params['breadcrumbs'][] = [
    'label' => \yii\helpers\Inflector::humanize($this->context->module->id),
    'url'   => ['/playground']
];
$this->params['breadcrumbs'][] = $this->title;

?>
<h1>2amigos
    <small>Widgets</small>
</h1>

<h2>
    ChartJs
</h2>
<p>
    <?=
    dosamigos\chartjs\Chart::widget(
        [
            'type'    => 'Line',
            'options' => [
                'height' => 400,
                'width'  => 400
            ],
            'data'    => [
                'labels'   => ["January", "February", "March", "April", "May", "June", "July"],
                'datasets' => [
                    [
                        'fillColor'        => "rgba(220,220,220,0.5)",
                        'strokeColor'      => "rgba(220,220,220,1)",
                        'pointColor'       => "rgba(220,220,220,1)",
                        'pointStrokeColor' => "#fff",
                        'data'             => [65, 59, 90, 81, 56, 55, 40]
                    ],
                    [
                        'fillColor'        => "rgba(151,187,205,0.5)",
                        'strokeColor'      => "rgba(151,187,205,1)",
                        'pointColor'       => "rgba(151,187,205,1)",
                        'pointStrokeColor' => "#fff",
                        'data'             => [28, 48, 40, 19, 96, 27, 100]
                    ]
                ]
            ]
        ]
    );
    ?>
</p>

<h2>
    CKeditor
</h2>
<p>
    <?php dosamigos\ckeditor\CKEditorInline::begin(['preset' => 'basic']); ?>
    This text can be edited now :)
    <?php dosamigos\ckeditor\CKEditorInline::end(); ?>
</p>