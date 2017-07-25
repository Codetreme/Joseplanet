<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return [
    'user' => [
        'class' => 'chd7well\user\Module',
        'admins' => ['Josey'],
        'enableConfirmation' => true,
        'enableUnconfirmedLogin' => true,
    ],
    'admin' => [
        'class' => 'mdm\admin\Module',
        'layout' => 'left-menu',
    ],
   
    'dynagrid' => [
        'class' => '\kartik\dynagrid\Module',
    // other module settings
    ],
    'gridview' => [
        'class' => '\kartik\grid\Module'
    // enter optional module parameters below - only if you need to
    // use your own export download action or custom translation
    // message source
    // 'downloadAction' => 'gridview/export/download',
    // 'i18n' => []
    ],
    
    'processmanager' => [

        'class' => 'app\modules\processmanager\ProcessManager',
    ],
];
