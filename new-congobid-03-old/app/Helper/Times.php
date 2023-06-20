<?php


if (!function_exists('myFunction')) {
    function myFunction($time,$four_treve ,$tree_geurre,$tree_treve,$second_geurre,$second_treve,$first_geurre)
    {
        return  ($time  <= $four_treve && $time  >= $tree_geurre) ||
                                ($time  <= $tree_treve &&
                                    $time  >= $second_geurre) ||
                                ($time  <= $second_treve &&
                                    $time  >= $first_geurre);
    }

    function times($munite,$seconde)
    {
        return  (($munite * 60) + $seconde) ;
    }
}
