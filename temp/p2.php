<?php
echo "project works"."<br>";
$html=file_get_contents("http://www.amazon.ca/gp/product/B003EKNMAI/ref=br_asw_pdt-5?pf_rd_m=A3DWYIK6Y9EEQB&pf_rd_s=desktop-6&pf_rd_r=145EBCFR6HFMH1RVN6PR&pf_rd_t=36701&pf_rd_p=2068471842&pf_rd_i=desktop");

preg_match_all('/<span id="priceblock_ourprice" class=".*?">(.*?)<\/span>/s',
    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

echo $posts[0][0];
?>
