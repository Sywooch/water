<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use darkdrim\simplehtmldom\simplehtmldom;

$this->title = 'Parser';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
    
	<?php
        $data = \darkdrim\simplehtmldom\SimpleHTMLDom::file_curl_get_html('http://voda-tomsk.ru/catalog/listing/1.html');
    foreach($data->find('img') as $element) { //выборка всех тегов img на странице
       echo $element->src . '<br>'; // построчный вывод содержания всех найденных атрибутов src
}
       
    $data->clear();
    unset($data);
?>
</div>