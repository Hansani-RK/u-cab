<?php

namespace app\controllers;

class ReportsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBookingDetailsReport($from_date = null, $to_date = null ,$status = null,$cancel_by_type = null)
         {
           if(!$from_date && !$to_date){
             $from_date = date('Y-m-01  H:i', strtotime('-1 month'));
             $to_date = date('Y-m-01  H:i');
           }else{
             $to_date =  date('Y-m-d H:i', strtotime($to_date));
             $from_date =  date('Y-m-d H:i', strtotime($from_date));
           }
            $booking = Bookings::find()->where(" (created_at BETWEEN '$from_date' AND '$to_date' )")
                                        ->andWhere('deleted_at IS NULL');
          //  print_r($booking);die();
          if ((int)$status === -6  || (int)$status === 1 || (int)$status === -1 || (int)$status === 2 || (int)$status === 3) {
              $bookingStatus = $status;
              if ($status == -6) {
                  $bookingStatus = 0;
              }
              $booking = $booking->where(" (created_at BETWEEN '$from_date' AND '$to_date' ) AND (status = '$bookingStatus') ");


              if ( $cancel_by_type && (int)$status === -1) {
                  $booking = $booking->where("(cancel_by_type ='$cancel_by_type') AND ( status = '$bookingStatus') ");
              }else{
                $cancel_by_type = 0;
              }
          }
             //die($from_date);
            return $this->render('trip_view',[
              'booking'=>$booking,
              'from_date'=>$from_date,
              'to_date'=>$to_date,
              'status'=>$status,
              'cancel_by_type'=>$cancel_by_type,
            ]);

         }

}
