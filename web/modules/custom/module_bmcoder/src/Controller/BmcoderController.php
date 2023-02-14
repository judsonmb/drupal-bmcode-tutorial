<?php

namespace Drupal\module_bmcoder\Controller;

use Drupal\Core\Controller\ControllerBase;

class BmcoderController extends ControllerBase{

    public function bmcoderList() {

        $developers = [
            ['name' => 'Brijesh'],
            ['name' => 'Ramesh'],
            ['name' => 'Ravin'],
            ['name' => 'Ishan'],
            ['name' => 'Vipul'],
            ['name' => 'Ajay'],
            ['name' => 'Vrajrajsingh'],
        ];

        $drupal_developers = '';

        foreach ($developers as $developer) {
            $drupal_developers .= '<li>'.$developer["name"].'</li>';
        }

        return [
            '#theme' => 'my-list',
            '#title' => 'This is title from Controller',
            '#data' => $developers
        ];
    }
}




?>