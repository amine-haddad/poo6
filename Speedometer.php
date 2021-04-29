<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Speedometer 
{
   
    
    public const KM = 0.621 ;
    public const MILLES = 1.621;
    
    public static function  convertKmToMiles(int $km)
    {
        return $km .' km equivaut à '. $km*self::KM .' milles '.'</br>';

    }
   public static function  convertMilesToKm(int $milles){
        
    return $milles.' milles equivaut à '. $milles*self::MILLES.' km'.'</br>';
   }
}

