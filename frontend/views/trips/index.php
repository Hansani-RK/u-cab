 <?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TripsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trips-index">

  <html><head>
  <link rel="stylesheet" type="text/css" href="css/ch.css">
  </head>
  <body>


    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <table>
      <tr>
        <td width = "950">
          <p>
              <?= Html::a('Create Trips', ['create'], ['class' => 'btn btn-success']) ?>
          </p>
        </td>
        <td>
          <?php

          $gridColumns = [
              'id',
              'from_date',
              'to_date',
              'customer_name',
          ];

          // Renders a export dropdown menu
          echo ExportMenu::widget([
              'dataProvider' => $dataProvider,
              'columns' => $gridColumns,
              'dropdownOptions' => [
             'label' => 'Export All',
             'class' => 'btn btn-secondary'
         ],
          ]);

       ?>
        </td>
      </tr>
    </table>
<br>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn'],

          //  'id',
            'from_date',
            'to_date',
            'customer_name',
            'customer_address',
            'customer_phone',
            'pickup_address',
            'distance',
            'trip_price',
            'vehicle_id',
            'status',
            'created_at',
            //'updated_at',

        ],
    ]); ?>
  </body>
  </html>
</div>
