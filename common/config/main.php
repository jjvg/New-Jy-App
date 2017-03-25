<?php
use kartik\datecontrol\Module;
use kartik\widgets\DatePicker;
use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
        'datatables/dataTables.bootstrap.min.js',
                // more plugin Js here
    ];
    public $css = [
        'datatables/dataTables.bootstrap.css',
        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
return
[
  'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
  'bootstrap' => ['debug'],
   'bootstrap' => ['gii'],
  'modules' =>
  [
    'admin' =>
    [
      'class' => 'mdm\admin\Module',
    ],
    'gii' =>
     [
          'class' => 'yii\gii\Module',

     ],

      'debug' =>
    [
      'class' => 'yii\debug\Module',
    ],

      'datecontrol' =>
       [
          'class' => 'kartik\datecontrol\Module',

          // format settings for displaying each date attribute
            'displaySettings' =>
            [
               Module::FORMAT_DATE => 'dd-MM-yyyy',
               Module::FORMAT_TIME => 'hh:mm:ss a',
               Module::FORMAT_DATETIME => 'dd-mm-yyyy hh:mm:ss a',
           ],

          // format settings for saving each date attribute
          'saveSettings' =>
          [
        Module::FORMAT_DATE => 'yyyy-MM-dd', // saves as unix timestamp
        Module::FORMAT_TIME => 'php:H:i:s',
        Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
          ],



              // automatically use kartik\widgets for each of the above formats
              'autoWidget' => true,
              'autoWidgetSettings' => [
        Module::FORMAT_DATE => ['type'=>2, 'pluginOptions'=>['autoclose'=>true]], // example
        Module::FORMAT_DATETIME => [], // setup if needed
        Module::FORMAT_TIME => [], // setup if needed
    ],
          'widgetSettings' => [
              Module::FORMAT_DATE => [
            'class' => 'yii\jui\DatePicker', // example
            'options' => [
                'dateFormat' => 'php:d-M-Y',
                'options' => ['class'=>'form-control'],
                      ]
                    ]
                  ]
          ],



 ],


'components' =>
[
      'cache' =>
        [
          'class' => 'yii\caching\FileCache',
        ],
        'user' =>
          [
            //'class' => 'mdm\admin\models\User',
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' =>['admin/user/login'],
          ],
          'mailer' =>
           [
            'class' => 'yii\swiftmailer\Mailer',
           ],
          
    'assetManager' => [
        'bundles' => [

           // 'dmstr\web\AdminLteAsset' => [
             //  'skin' => 'skin-black',
           //],
        ],
    ],




    ],
];
