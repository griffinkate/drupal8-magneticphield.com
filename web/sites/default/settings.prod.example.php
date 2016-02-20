<?php

$settings['trusted_host_patterns'][] = '^www\.magneticphield8\.com$';
$databases['default']['default']['password'] = 'CHANGE_ME';
$settings['hash_salt'] = file_get_contents('/home/example/salt.txt');
