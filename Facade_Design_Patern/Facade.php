<?php
	class Facade{
		public function findApartments($place, $divID){
			$appFinder = new ApartmentFInder();
			$geolocator = new GeoLocator();
			$gmap = new GoogleMap();

			$appertments = $appFinder->locateApartments($place);

			foreach ($appertments as $appertment) {
				$loctions[] = $geolocator->getLocations($appertment);
			}

			$gmap->initialize();
			$gmap->drawLocation($location);
			$gmap->dispatch($divID);
		}
	}
?>