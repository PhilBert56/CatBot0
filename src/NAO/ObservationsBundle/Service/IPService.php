<?php

namespace NAO\ObservationsBundle\Service;

use NAO\ObservationsBundle\Geolocalization\php1_11\geoipcity;

class IPService

{
  public function get_ip() {
	// IP si internet partagé
	   if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		   return $_SERVER['HTTP_CLIENT_IP'];
	   }
	     // IP derrière un proxy
	   elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		     return $_SERVER['HTTP_X_FORWARDED_FOR'];
	      }
	       // Sinon : IP normale
	   else {
		     return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	    }
    }



    public function get_loc_from_ip($ip) {

      // Initialisation
        //require 'geoipcity.inc.php';

        $geo = new geoipcity();
        $database = $geo->geoip_open('GeoLiteCity.dat',GEOIP_STANDARD);

      // Géolocalisation de l'adresse IP

        $record = geoip_record_by_addr($database, $ip);
        dump($record); // affiche les informations récupérées dans la base

        return $record;
    }
}
