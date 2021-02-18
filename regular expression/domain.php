<?php
$markup = <<<STR

<a href="http://picjumbo.com/free-stock-photos/business/" title="Free Business Photos">Business</a>
<a href="https://picjumbo.com/free-stock-photos/abstract/" title="Free Abstract Photos">Abstract</a>
<a href="https://picjumbo.com/free-photos/backgrounds/" title="Free Backgrounds">Backgrounds</a>
<a href="http://picjumbo.com/free-stock-photos/hd-iphone-wallpapers/" title="iPhone HD Wallpapers">iPhone Wallpapers</a>
<a href="http://picjumbo.com/free-stock-photos/people/" title="Free Photos of People">People</a>
<a href="https://picjumbo.com/free-photos/traveling/" title="Perfect Travel Photos">Traveling</a>
<a href="https://picjumbo.com/free-photos/winter/" title="Free Winter Photos">Summer</a>
<a href="http://picjumbo.com/free-stock-photos/food-and-drink/" title="Free Food Photos">Food</a>
<a href="http://picjumbo.com/free-stock-photos/nature/" title="Nature Images">Nature</a>
<a href="https://picjumbo.com/free-stock-photos/animals/" title="Animals Photos">Animals</a>
<a href="https://picjumbo.com/free-photos/flatlay/" title="Free Flat Lay Images">Flatlay</a>
<a href="https://picjumbo.com/free-photos/winter/" title="Free Winter Photos">Winter</a>
<a href="https://picjumbo.com/free-photos/room-for-text/" title="Photos with Room for Text">Space for Text</a>
<a href="https://picjumbo.com/free-photos/vintage/" title="Free Vintage Photos">Vintage</a>
</div>
STR;

//preg_match_all('-<a href="(https?://[^"]+)-', $markup, $matches);
preg_match_all( '-<a href="(https?://[^"]+)" title="([^"]+)-', $markup, $matches );
print_r( $matches );

echo "Another way";
$markup2 = file_get_contents( 'https://picjumbo.com/' );
preg_match_all( '-<a href="(https?://[^"]+)" title="([^"]+)-', $markup2, $matches );
print_r( $matches );