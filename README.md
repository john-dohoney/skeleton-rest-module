skeleton-rest-module
====================

###This is a working Restful Zend Framework V2 Module with 2 sample controllers.

This module can be used as is by:

1. Add 'Rest' to you application.module.config
<pre>
return array(
    'modules' => array(
        'Application',
        'ZfcBase',
        'ZfcUser',
        <b>'Rest',</b>
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
</pre>
Make sure you copy this to your project 'module' folder, by creating a sub-directory named: 'Rest'

See your work, go to you 'public' directory and run your server:  php -S localhost:8080

Then user your favorite curl client (Postman, etc..) and test your new rest server:

<pre>
$ curl -X PUT  http://localhost:8080/zombie/1
<OUTPUT>
{"response":"Put Not Implemented"}

$ curl -X GET http://localhost:8080/zombie
<OUTPUT>
{"WholeMushPookah":"Everything","More Everything":["test",1,2,3,4,5,6]}
</pre>
