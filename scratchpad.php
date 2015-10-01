<?php

ini_set("display_errors","1");
error_reporting(E_ALL);
$noticechecker .= " ";

//This class is being whacked together for the purpose of building and iterating through a local grid.
//The goal is to establish the grid point that has the highest density of an item within a defined radius.
//A lot of this will probably eventually be broken out into other places, of course.

class BaltGeoTools{
 public function __construct(){
        //Remember: This only works on areas in Baltimore's plane. 
        //Despite what Singing Science Records might tell us, the phrase "the earth is a ball" is not entirely accurate.
        //It's more of a round-ish potato. So lat and lon values can "stretch"
        //Lon: -76.673608 to -76.582241 is exactly five miles along North Avenue, sez Bing.
        //      So abs(76.582241 - 76.673608)/5 = 1 mile worth of radius = this->lonmile
        $this->lonmile = abs(76.582241 - 76.673608)/5;
        //Lat (via four miles on Light Street): 
        $this->latmile = abs(39.327998 - 39.271404)/4;
 }
 public function getRoughPairDistance($lat1,$lon1,$lat2,$lon2){
        //This function uses basic pythagorean scoodleedoop.
        //It spits out a back-of-napkin distance between two points.
        //Precision is somewhat limited, but ok for our purpose. See disclaimer above. 
        $latdistance = abs($lat1 - $lat2)/$this->latmile;
        $londistance = abs($lon1 - $lon2)/$this->lonmile;
        return($distance);
 }
 public function createGrid($feetperblock = 250, $startlat = 39.377417, $startlon = -76.715646, $endlat = '39.183335', $endlon = '-76.504953'){
        print("\n This is a stub of a method that will create and return a two-dimensional array of roughly-block-sized points from across a region. \n");
        $latinc = ($this->latmile/5280) * $feetperblock;
        $loninc = ($this->lonmile/5280) * $feetperblock;
        $this->coords = array();
        for($lat = $startlat; $lat > $endlat; $lat -= $latinc){
                for($lon = $startlon; $lon < $endlon; $lon += $loninc){
                        $coords[] = array('lat'=>$lat,'lon'=>$lon);
                }
        }
 }
 public function getItems(){
        print("\n This is a stub of a method that will read a csv of items into an array. \n");
 }
 public function getCounts(){
        print("\n This is a stub of a method that will iterate through each grid point, calculating the number of items within a block. \n");
        $testdata = array(
                                array('lat'=>'39.37741','lon'=>'-76.60412'),
                                array('lat'=>'39.37742','lon'=>'-76.60413'),
                                array('lat'=>'39.37743','lon'=>'-76.60412'),
                                array('lat'=>'39.37741','lon'=>'-76.60413'),
                                array('lat'=>'39.257417','lon'=>'-76.50412')
                        );
        TIWIS
 }
}


//Now some tests ... 

$blt = new BaltGeoTools;

$blt->createGrid();

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
