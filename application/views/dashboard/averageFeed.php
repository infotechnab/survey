<?php if(!empty($all)){
    $sachibalayaTotal = 0;
    $waterTotal = 0;
    $toiletTotal = 0;
    $communicationTotal = 0;
    $securityTotal = 0;
     foreach ($all as $alldata)
     {
         $sachibalaya = $alldata->sachibalaya;
         $sachibalayaTotal = $sachibalayaTotal + $sachibalaya;
         $water = $alldata->water;
         $waterTotal = $waterTotal + $water;
         $toilet = $alldata->toilet;
         $toiletTotal = $toiletTotal + $toilet;
         $communication = $alldata->communication;
         $communicationTotal = $communicationTotal + $communication;
         $security = $alldata->security;
         $securityTotal = $securityTotal + $security;
     }
} ?>



<table style="width: 100%;">
              <caption>Average Evaluation of services (out of five)</caption>
              <tr>
              <th>Date</th>
               <th>Sachibalaya</th>
                <th>Drinking water</th>
                 <th>Toilet</th>
                 <th>Communication</th>
                 <th>Security</th>
              </tr>
              <tr>
                  <td><?php echo $date; ?></td>
                  <td><?php echo $securityTotal/$total; ?></td>
                  <td><?php echo $waterTotal/$total; ?></td>
                  <td><?php echo $toiletTotal/$total; ?></td>
                  <td><?php echo $communicationTotal/$total; ?></td>
                  <td><?php echo $securityTotal/$total; ?></td>
              </tr>
          </table>