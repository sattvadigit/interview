<?php
// Вывод результатов
$dataProvider=new CActiveDataProvider('Results',
    array(
        'pagination'=>array(
            'pageSize'=>10000
        )
    )
);

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'template'=>'{items}',
    'itemView'=>'_template',   // refers to the partial view named '_post'
));