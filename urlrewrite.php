<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/news/([a-zA-Z0-9_-]+)/#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
