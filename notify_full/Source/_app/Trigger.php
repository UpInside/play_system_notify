<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 14/05/2018
 * Time: 17:50
 */

class Trigger {

    public function notify($title, $color, $icon, $timer){

        return [
            'title' => $title,
            'color' => $color,
            'icon' => $icon,
            'timer' => $timer
        ];

    }
}