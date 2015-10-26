<?php
echo "projrctdxx works"."<br>";
//echo $data;
//$data='<span id="priceblock_ourprice" class="a-size-medium a-color-price">CDN$ 26.92</span>';
/*$data='<tr id="priceblock_ourprice_row">
    <td id="priceblock_ourprice_lbl" class="a-color-secondary a-size-base a-text-right a-nowrap">Price:</td>
    <td class="a-span12">
        <span id="priceblock_ourprice" class="a-size-medium a-color-price">CDN$ 26.92</span>';
echo $data;*/
$data="jhgfdsPrice:jsdfsh";
preg_match('/Price:V/',$data,$desired);
//preg_match('/priceblock_ourprice"[\s*]class="(.*)">CDNV</',$data,$desired);
print_r($desired);
echo $desired[1];
echo "<br>data:";
echo $data;

?>
