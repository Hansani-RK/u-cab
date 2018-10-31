<?php

/* @var $this yii\web\View */

$this->title = 'Cab home';
?>
<div class="site-index">

  <html><head>
  <link rel="stylesheet" type="text/css" href="css/ch.css">
  </head>
  <body>

      <h1>Cab Service</h1>



                  <table align = "center">

                    <tr>
                      <td>
                          <h2>Vehicles</h2><br>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="http://localhost:8080/index.php?r=vehicles%2Fcreate" class="bouton-contact" > Register a Vehicle</a>
                      </td>
                      <td>
                        <a href="http://localhost:8080/index.php?r=vehicles%2Findex" class="bouton-contact" >View All Vehicles</a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                          <h2>Bookings</h2><br>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="http://localhost:8080/index.php?r=trips%2Fcreate" class="bouton-contact" >Create a Booking&nbsp;</a>
                      </td>
                      <td>
                        <a href="http://localhost:8080/index.php?r=trips%2Findex" class="bouton-contact" >View All Bookings</a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                          <h2>Drivers</h2><br>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="http://localhost:8080/index.php?r=drivers%2Fcreate" class="bouton-contact" >Register a Driver &nbsp;</a>
                      </td>
                      <td>
                        <a href="http://localhost:8080/index.php?r=drivers%2Findex" class="bouton-contact" >View All Drivers&nbsp;&nbsp;</a>
                      </td>
                    </tr>
                  </table>
                </div>


  </body>
  </html>
</div>
