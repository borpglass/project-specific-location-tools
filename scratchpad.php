<?php

//These will all probably eventually be broken out into other places, of course.

function getBaltimorePairDistance(lat1,lon1,lat2,lon2){

        //Remember: This only works on areas in Baltimore's plane. 
        //Despite what Singing Science Records might tell us, the phrase "the earth is a ball" is not entirely accurate.
        //It's more of a round-ish potato. So lat and lon values can "stretch"

        //Lon: -76.673608 to -76.582241 is exactly five miles along North Avenue, sez Bing.
        //      So abs(76.582241 - 76.673608)/5 = 1 mile worth of radius = lonmile
        $lonmile = abs(76.582241 - 76.673608)/5;
        //Lat (via four miles on Light Street): 
        $latmile = abs(39.327998 - 39.271404)/4;

        //Now remember from 6th grade: a^2 + b^2 = c^2.
        TIWIS - etc, etc, etc,.,
}


?>
