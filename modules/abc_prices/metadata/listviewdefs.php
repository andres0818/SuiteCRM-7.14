<?php
$module_name = 'abc_prices';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'VALOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VALOR',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
