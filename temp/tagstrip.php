<?php
$html=file_get_contents("http://www.amazon.ca/gp/product/B00SGS7ZH4/ref=s9_acss_bw_hsb_LaptopsS_s2_n?pf_rd_m=A3DWYIK6Y9EEQB&pf_rd_s=merchandised-search-2&pf_rd_r=1S72BA42K5E9DADAAC62&pf_rd_t=101&pf_rd_p=2253690442&pf_rd_i=677252011");

//$var1=preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $html);
//$var1=preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', "", $var1);
//$var1=preg_replace('/<meta\b[^>]*>(.?)<\/meta>/is', "", $var1);

function strip_html_tags( $text )
{
    $text = preg_replace(
        array(
          // Remove invisible content
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
          // Add line breaks before and after blocks
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
        ),
        $text );
    return strip_tags( $text );
}

echo strip_html_tags( $var1 );
?>
