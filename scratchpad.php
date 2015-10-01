<?php

ini_set("display_errors","1");
error_reporting(E_ALL);
$noticechecker .= " ";

//A lot of this will probably eventually be broken out into other places, of course.

class BaltLocTool{

 public function getRoughPairDistance($lat1,$lon1,$lat2,$lon2){
        //Remember: This only works on areas in Baltimore's plane. 
        //Despite what Singing Science Records might tell us, the phrase "the earth is a ball" is not entirely accurate.
        //It's more of a round-ish potato. So lat and lon values can "stretch"
        //Lon: -76.673608 to -76.582241 is exactly five miles along North Avenue, sez Bing.
        //      So abs(76.582241 - 76.673608)/5 = 1 mile worth of radius = lonmile
        $lonmile = abs(76.582241 - 76.673608)/5;
        //Lat (via four miles on Light Street): 
        $latmile = abs(39.327998 - 39.271404)/4;
        //Now remember from 6th grade: a^2 + b^2 = c^2.
        $latdistance = abs($lat1 - $lat2)/$latmile;
        $londistance = abs($lon1 - $lon2)/$lonmile;
        return($distance);
 }

}


//Now some tests ... 

$blt = new BaltLocTool;

/*
//39.309919, -76.642486 to 39.299849, -76.630266 should be almost exactly a mile, according to Google.
//It covers a bit of Pennsylvania Avenue.
//For our test to pass, the output of our function should be between .95 and 1.05.
//Status: PASS
print("\n---\nOutput:\n");
print $blt->getRoughPairDistance(39.309919,-76.642486,39.299849,-76.630266);
print("\n---\n");

//39.295649, -76.576692 to 39.294935, -76.594760 should be almost exactly a mile, according to Google.
//It covers a bit of Orleans Street.
//For our test to pass, the output of our function should be between .95 and 1.05.
//Status: PASS
print("\n---\nOutput:\n");
print $blt->getRoughPairDistance(39.295649, -76.576692, 39.294935, -76.594760);
print("\n---\n");

//39.305250, -76.595028 to 39.291344, -76.594065 should be almost exactly a mile, according to Google. 
//It coers a bit of Broadway
//For our test to pass, the output of our function should be between .95 and 1.05.
//Status: PASS
print("\n---\nOutput:\n");
print $blt->getRoughPairDistance( 39.305250, -76.595028, 39.291344, -76.594065 );
print("\n---\n");
*/


?>
