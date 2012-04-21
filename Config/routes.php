<?php

Router::connect('/admin/contacts', array(
    'plugin' => 'ContactInfo',
    'controller' => 'Contacts',
    'action' => 'index',
    'prefix' => 'admin'
));

Router::connect('/admin/contact_types', array(
    'plugin' => 'ContactInfo',
    'controller' => 'ContactTypes',
    'action' => 'index',
    'prefix' => 'admin'
));

Router::connect('/admin/contacts/:action', array(
    'plugin' => 'ContactInfo',
    'controller' => 'Contacts',
    'prefix' => 'admin'
));

Router::connect('/admin/contact_types/:action', array(
    'plugin' => 'ContactInfo',
    'controller' => 'ContactTypes',
    'prefix' => 'admin'
));

Router::connect('/admin/contacts/:action/:id', array(
    'plugin' => 'ContactInfo',
    'controller' => 'Contacts',
    'prefix' => 'admin'
), array(
    'pass' => array('id'),
    'id' => '[0-9]+'
));

Router::connect('/admin/contact_types/:action/:id', array(
    'plugin' => 'ContactInfo',
    'controller' => 'ContactTypes',
    'prefix' => 'admin'
), array(
    'pass' => array('id'),
    'id' => '[0-9]+'
));
