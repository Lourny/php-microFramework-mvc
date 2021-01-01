<?php
# front conroller

use App\Utilities\Url;

include "bootsrap/init.php";


$route = Url::current_route();

if($route == '/hasan/blue')
    include BASEPATH . 'views/colors/blue.php';

if($route == '/hasan/red')
    include BASEPATH . 'views/colors/red.php';

if($route == '/hasan/green')
    include BASEPATH . 'views/colors/green.php';

if($route == '/atal/matal/totoole')
    include BASEPATH . 'views/colors/red.php';

