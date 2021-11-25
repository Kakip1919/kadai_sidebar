<?php
require "./kadai/Smarty/Smarty.class.php";
require_once "./models/rokuyo_logic.php";
$smarty = new Smarty();

$put_date = new Put_Date();
ini_set('display_errors', "0");
$convert_year_data = $put_date->convert_year_date();
$convert_month_date = $put_date->convert_month_date();
$convert_day_date = $put_date->convert_day_date();
$json_csv = $put_date->json_csv($convert_year_data, $convert_month_date, $convert_day_date);
$validation_check = $put_date->validation_check();
$date = $put_date->date();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->assign('json_csv', $json_csv);
$smarty->assign('validation', $validation_check);
$smarty->assign('date', $date);
$smarty->display('index.tpl');
