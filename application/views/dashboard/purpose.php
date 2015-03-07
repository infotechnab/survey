<?php if(!empty($purpose)){
    $purchaseTotal = 0;
    $ictTotal = 0;
    $agriTotal = 0;
    $entertainTotal = 0;
    $goodservTotal = 0;
    $otherTotal = 0;
     foreach ($purpose as $alldata)
     {
         $purchase = $alldata->purchase;
         $purchaseTotal = $purchaseTotal + $purchase;
         $ict = $alldata->ICT;
         $ictTotal = $ictTotal + $ict;
         $agriculture = $alldata->agriculture;
         $agriTotal = $agriTotal + $agriculture;
         $entertainment = $alldata->entertainment;
         $entertainTotal = $entertainTotal + $entertainment;
         $goods_n_service = $alldata->goods_n_service;
         $goodservTotal = $goodservTotal + $goods_n_service;
         $other = $alldata->other;
         $otherTotal = $otherTotal + $other;
     }
} ?>



<table style="width: 100%;">
              <caption>Purpose wise Data Distribution</caption>
              <tr>
              <th>Date</th>
               <th>Purchase</th>
               <th>ICT</th>
               <th>Agriculture</th>
               <th>Entertainment</th>
               <th>Goods and Services</th>
               <th>Other</th>
              </tr>
              <tr>
                  <td><?php echo $date; ?></td>
                  <td><?php echo $purchaseTotal; ?></td>
                  <td><?php echo $ictTotal; ?></td>
                  <td><?php echo $agriTotal; ?></td>
                  <td><?php echo $entertainTotal; ?></td>
                  <td><?php echo $goodservTotal; ?></td>
                  <td><?php echo $otherTotal; ?></td>
              </tr>
          </table>