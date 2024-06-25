<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>

<?= GridView::widget([
    'dataProvider' => new \yii\data\ArrayDataProvider([
        'allModels' => $users,
    ]),
    'columns' => [
        'id',
        'firstName',
        'lastName',
        [
            'label' => 'ФИО',
            'value' => function ($users) {
                return $users['firstName'] . ' ' . $users['lastName'];
            },
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'view' => function ($url, $users) {
                    return Html::a('View', ['user/view', 'id' => $users['id']], ['class' => 'btn btn-primary']);
                },
                'update' => function ($url, $users) {
                    return Html::a('Update', ['user/update', 'id' => $users['id']], ['class' => 'btn mx-2 btn-warning']);
                },
                'delete' => function ($url, $users) {
                    return Html::a('Delete', ['user/delete', 'id' => $users['id']], [
                        'class' => 'btn btn-danger',
                        'data' => ['method' => 'post'],
                    ]);
                },
            ],
        ],
    ],
]); ?>