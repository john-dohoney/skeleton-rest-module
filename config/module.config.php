<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'rest-controller-skeleton' => 'Rest\Controller\SkeletonController',
            'rest-controller-zombie'   => 'Rest\Controller\ZombieController',
        ),
    ),
    'router' => array(
        'routes' => array(
           
            'skeleton' => array(
                'type'            => 'Segment',
                'options'         => array(
                    'route'       => '/skeleton[/:id]',
                    'constraints' => array(
                        'id'      => '[0-9]+',
                    ),
                    'defaults'          => array(
                        'controller'    => 'rest-controller-skeleton',
                    ),
                ),
            ),
           
            'zombie' => array(
                    'type'           => 'Segment',
                    'options'        => array(
                       'route'       => '/zombie[/:id]',
                       'constraints' => array(
                       'id'          => '[0-9]+',
                       ),
                         'defaults'        => array(
                           'controller'    => 'rest-controller-zombie',
                     ),
                 ),
             ),
         ),
    ),
   'view_manager' => array( 
        'strategies' => array(
                'ViewJsonStrategy',
        ),
    ),
);

