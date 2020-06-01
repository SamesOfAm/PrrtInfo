<?php
return array(
    'label' => array('Team Member', 'kurze Vorstellung eines Mitglieds'),
    'types' => array('content'),
    'standardFields' => array('image'),
    'contentCategory' => 'texts',
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'name' => array(
            'label' => array('Name', 'Name des Mitglieds'),
            'inputType' => 'text',
        ),
        'position' => array(
            'label' => array('Position', 'Position des Mitglieds'),
            'inputType' => 'text',
        ),
        'tel1' => array(
            'label' => array('Telefon 1', 'Erste Telefonnummer des Mitglieds'),
            'inputType' => 'text',
        ),
        'tel2' => array(
            'label' => array('Telefon 2', 'Zweite Telefonnummer des Mitglieds'),
            'inputType' => 'text',
        ),
        'fax' => array(
            'label' => array('Fax', 'Faxnummer des Mitglieds'),
            'inputType' => 'text',
        ),
        'email' => array(
            'label' => array('E-Mail', 'E-Mail-Adresse des Mitglieds'),
            'inputType' => 'text',
        ),
        'image' => array(
            'label' => array('Bild', 'Bild des Mitglieds'),
            'inputType' => 'image',
        ),
    ),
);