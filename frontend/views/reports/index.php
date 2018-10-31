<?php
/* @var $this yii\web\View */
?>
<h1>reports/index</h1>

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Trips;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\datetime\DateTimePicker;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\data\ActiveDataProvider;
use kartik\select2\Select2;


$gridColumns = [
    ['class' => 'yii\grid\SerialColumn'],
    'id',
    'from_date',
    'to_date',
    'customer_name',
    ['class' => 'yii\grid\ActionColumn'],
];

// Renders a export dropdown menu
echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns
]);

// You can choose to render your own GridView separately
echo \kartik\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns
]);
