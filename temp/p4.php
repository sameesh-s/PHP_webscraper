<?php
 
$html = file_get_contents("http://www.programminghelp.com/");
 
$data1='<h2><a href="first" rel="bookmark" title="second">Insert Eleme</a></h2>';

preg_match_all(
    '/<h2><a href="(.*?)" rel="bookmark" title="(.*?)">(.*?)<\/a><\/h2>/s',
    $data1,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

print_r($posts);
 
/*foreach ($posts as $post) {
	$first = $post[0];
	echo "<br>".$first.":fdgdg<br>";
    $link = $post[1];
    $title = $post[2];
 
    echo "<a href='" . $link . "'>" . $title . "</a></br>";
}*/
 
echo "<p>" . count($posts) . " posts found</p>";
?>
