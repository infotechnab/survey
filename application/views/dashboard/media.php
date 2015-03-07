<?php if(!empty($media)){
    $newspaperTotal = 0;
    $televisionTotal = 0;
    $fmradioTotal = 0;
    $socialmediaTotal = 0;
    $roadmikingTotal = 0;
    $friendTotal = 0;
    $ccicMemberTotal = 0;
    $bannerTotal = 0;
    $otherTotal = 0;
     foreach ($media as $alldata)
     {
         $newspaper = $alldata->newspaper;
         $newspaperTotal = $newspaperTotal + $newspaper;
         $television = $alldata->television;
         $televisionTotal = $televisionTotal + $television;
         $fm_radio = $alldata->fm_radio;
         $fmradioTotal = $fmradioTotal + $fm_radio;
         $social_media = $alldata->social_media;
         $socialmediaTotal = $socialmediaTotal + $social_media;
         $road_miking = $alldata->road_miking;
         $roadmikingTotal = $roadmikingTotal + $road_miking;
         $friends = $alldata->friends;
         $friendTotal = $friendTotal + $friends;
         $ccicMember = $alldata->ccic_member;
         $ccicMemberTotal = $ccicMemberTotal + $ccicMember;
         $banner = $alldata->banner_pamphlet;
         $bannerTotal = $bannerTotal + $banner;
         $other = $alldata->other;
         $otherTotal = $otherTotal + $other;
         
     }
} ?>



<table style="width: 100%;">
              <caption>Media wise Data Distribution</caption>
              <tr>
              <th>Date</th>
               <th>Newspaper</th>
               <th>television</th>
               <th>FM Radio</th>
               <th>Social Media</th>
               <th>Road Miking</th>
               <th>Friends</th>
               <th>CCIC Members</th>
               <th>Banner Pamphlet</th>
               <th>Other</th>
              </tr>
              <tr>
                  <td><?php echo $date; ?></td>
                  <td><?php echo $newspaperTotal; ?></td>
                  <td><?php echo $televisionTotal; ?></td>
                  <td><?php echo $fmradioTotal ?></td>
                  <td><?php echo $socialmediaTotal; ?></td>
                  <td><?php echo $roadmikingTotal; ?></td>
                  <td><?php echo $friendTotal; ?></td>
                  <td><?php echo $ccicMemberTotal; ?></td>
                  <td><?php echo $bannerTotal; ?></td>
                  <td><?php echo $otherTotal; ?></td>
              </tr>
          </table>