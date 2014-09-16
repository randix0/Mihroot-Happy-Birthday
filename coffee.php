<?php
/**
 * Created by PhpStorm.
 * User: ydenyshchenk
 * Date: 16.09.14
 * Time: 00:00
 */


$people = new People;
$mihroot = $people->getHuman(
    array(
        'country' => 'UA',
        'city' => 'KBP',
        'is_dev' => true,
        'is_musician' => true,
        'is_genius' => true,
        'is_the_best_team_lead_in_the_world' => true
    ), array(
        'sort_by' => array('IQ' => 'DESC'),
        'limit' => 1
    )
);

$mihroot->find('кофейные девочки');