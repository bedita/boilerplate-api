<?php
// specific publication routing rules

// DO NOT EDIT OR CHANGE BELOW!!
$apiBaseUrl = Configure::read('api.baseUrl');
if (!empty($apiBaseUrl) && is_string($apiBaseUrl)) {
    $apiBaseUrl .= (substr($apiBaseUrl, -1) === '/') ? '*' : '/*';
    Router::connect($apiBaseUrl, array('controller' => 'api', 'action' => 'route'));
}

Router::connect('/*', array('controller' => 'api', 'action' => 'route'));
