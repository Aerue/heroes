<?php

    namespace App\Classes;


    final class Armes
    {

        public static function getDegats(Heroes $attaquant, Heroes $defenseur) : int
        {
            return $attaquant->lancerAttaque() - $defenseur->_getDefense();
        }

    }