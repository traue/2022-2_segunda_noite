<?php
    class Clima {
        private $temp;
        private $temp_min;
        private $temp_max;
        private $feels_like;
        private $description;
        private $icon;
        private $humidity;
        private $pressure;
        private $wind_speed;
        private $wind_deg;

        public function __get($atr) {
            return $this->$atr;
        }

        public function __set($atr, $value){
            $this->$atr = $value;
        }
    }
?>