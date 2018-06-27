<?php
/**
 * Skip Log for Missing (Controller/Action) Exceptions
 */
if (!Configure::read('debug')) {
    $skipExceptions = array(
        'MissingControllerException',
        'MissingActionException',
        'PrivateActionException',
    );
    $originalSkipLog = Configure::read('Exception.skipLog');
    if (empty($originalSkipLog)) {
        $originalSkipLog = array();
    }
    $skipLog = array_unique(array_merge($originalSkipLog, $skipExceptions));
    Configure::write('Exception.skipLog', $skipLog);
}
