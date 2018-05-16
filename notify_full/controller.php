<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 14/05/2018
 * Time: 17:31
 */

$postData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$postData = array_map('trim', $postData);
$postData = array_map('strip_tags', $postData);

$action = $postData['action'];
unset($postData['action']);

require_once __DIR__ . '/Source/_app/Trigger.php';
$trigger = new Trigger;

switch ($action) {
    case 'notify_status':

        if ($postData['status'] == 'true'){
            $json['notify'][] = $trigger->notify('teste 1', 'green', 'icon-checkmark', 3000);
            $json['notify'][] = $trigger->notify('teste 2', 'blue', 'icon-checkmark', 3000);
            $json['notify'][] = $trigger->notify('teste 3', 'green', 'icon-checkmark', 3000);
            break;
        }

        if ($postData['status'] == 'false'){
            $json['notify'] = $trigger->notify('teste', 'blue', 'icon-info', 3000);
            break;
        }


        break;
}

echo json_encode($json);