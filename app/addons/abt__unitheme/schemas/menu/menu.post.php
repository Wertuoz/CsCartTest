<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2018   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and  accept   *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
if (!defined('BOOTSTRAP')) {die('Access denied');}
use Tygh\Registry;
$schema['central']['ab__addons']['items']['abt__unitheme'] = array(
'attrs' => array('class'=>'is-addon'),
'href' => 'abt__ut.help',
'position' => 2,
'subitems' => array(
'abt__ut.settings' => array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'abt__ut.settings',
'position' => 20
),
'abt__ut.microdata' => array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'abt__ut.microdata',
'position' => 30
),
'abt__ut.help' => array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'abt__ut.help',
'position' => 60
),
'abt__ut.demo_data' => array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'abt__ut.demo_data',
'position' => 100
),
),
);
$schema['central']['products']['items']['abt__ut_buy_together.generate'] = array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'abt__ut_buy_together.generate',
'position' => 700,
);
$schema['central']['products']['items']['abt__ut_buy_together.manage'] = array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'abt__ut_buy_together.manage',
'position' => 800,
);
return $schema;
