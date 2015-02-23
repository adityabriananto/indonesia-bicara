<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-view">

    <p>
        <?= Html::a('<span class=\'fa fa-list\'></span> List Topic', ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('<span class=\'fa fa-plus\'></span> Create Topic', ['create'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class=\'fa fa-edit\'></span> Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<span class=\'fa fa-trash-o\'></span> Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'admin_id',
                'value' => $model->admin->name,
            ],
            'title',
            'description:html',
            'create_date',
            'update_date',
        ],
    ]) ?>

</div>
