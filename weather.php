<?php 
  include ('getWeatherTempEmmen.php');

        $array = explode(" ", getWeatherStringEmmen());
        // $array[0]; stad
        // $array[1]; tempLocation
        // $array[2]; tempCode
        // $array[3]; tempText

        $noodweer = "<style>.page-footer {background-color: red;}</style>";
        $regen = "<style>.page-footer {background-color: lightblue;}</style>";
        $mistig = "<style>.page-footer {background-color: lightgray;}</style>";
        $sneeuw = "<style>.page-footer {background-color: white;}</style>";
        $bewolkt = "<style>.page-footer {background-color: gray;}</style>";
        $zonnig = "<style>.page-footer {background-color: green;}</style>";
        $warm = "<style>.page-footer {background-color: lightyellow;}</style>";
        $hagel = "<style>.page-footer {background-color: yellow;}</style>";
        $zwart = "<style>.page-footer {background-color: black;}</style>";

        if ($array[2] >= 0 && $array[2] <= 9)
        {
            echo $noodweer;
        }
        elseif ($array[2] >= 10 && $array[2] <= 18) 
        {
            echo $sneeuw;
        }
        elseif ($array[2] >= 19 && $array[2] <= 24) 
        {
            echo $mistig;
        }
        elseif ($array[2] >= 25 && $array[2] <= 30) 
        {
            echo $bewolkt;
        }
        elseif ($array[2] >= 31 && $array[2] <= 34) 
        {
            echo $zonnig;
        }
        elseif ($array[2] = 35) 
        {
            echo $hagel;
        }
        elseif ($array[2] = 36) 
        {
            echo $warm;
        }
        elseif ($array[2] >= 37 && $array[2] <= 42) 
        {
            echo $sneeuw;
        }
        else 
        {
          echo $zwart;
        }
  ?>
