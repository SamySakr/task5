<?php
      $data =  file_get_contents('http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz.json');
     $dataArray = json_decode($data,true);
     foreach ($dataArray['data'] as $key => $val){
       echo '<br><br>'.'product name : '.$dataArray['data'][$key]['products_name'].'<br>'.'product id :  '.$dataArray['data'][$key]['products_id'].'<br>'.'product description : '.$dataArray['data'][$key]['products_description'].'<br>'.'products quantity : '.$dataArray['data'][$key]['products_quantity'].'<br>'.'products model : '.$dataArray['data'][$key]['products_model'].'<br>'.'products_image : '.$dataArray['data'][$key]['products_image'].'<br>'.'products date added : '.$dataArray['data'][$key]['products_date_added'].'<br>'.'products liked : '.$dataArray['data'][$key]['products_liked'].'<br>';;
     }
?>