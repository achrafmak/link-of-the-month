<?php
return array (
    'ctrl' =>
        array (
            'title' => 'Slide',
            'label' => 'tx_cr_repeater_text',
            'tstamp' => 'tstamp',
            'crdate' => 'crdate',
            'cruser_id' => 'cruser_id',
            'dividers2tabs' => true,
            'versioningWS' => 2,
            'versioning_followPages' => true,
            'languageField' => 'sys_language_uid',
            'transOrigPointerField' => 'l10n_parent',
            'transOrigDiffSourceField' => 'l10n_diffsource',
            'delete' => 'deleted',
            'enablecolumns' =>
                array (
                    'disabled' => 'hidden',
                    'starttime' => 'starttime',
                    'endtime' => 'endtime',
                ),
            'searchFields' => 'tx_cr_repeater_text,tx_cr_repeater_date,tx_cr_repeater_link',
            'dynamicConfigFile' => '',
            'typeicon_classes' => [
                'default' => 'actions-link', // Replace with the correct icon class name
            ],
            'hideTable' => true,
        ),
    'interface' =>
        array (
            'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden,tx_cr_repeater_link,tx_cr_repeater_text,tx_cr_repeater_date',
        ),
    'types' =>
        array (
            1 =>
                array (
                    'showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource,tx_cr_repeater_link,tx_cr_repeater_text,tx_cr_repeater_date, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime',
                ),
        ),
    'palettes' =>
        array (
            1 =>
                array (
                    'showitem' => '',
                ),
        ),
    'columns' =>
        array (
            'sys_language_uid' => [
                'exclude' => true,
                'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'special' => 'languages',
                    'items' => [
                        [
                            'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                            -1,
                            'flags-multiple'
                        ],
                    ],
                    'default' => 0,
                ]
            ],
            'l10n_parent' =>
                array (
                    'displayCond' => 'FIELD:sys_language_uid:>:0',
                    'exclude' => 1,
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
                    'config' =>
                        array (
                            'type' => 'select',
                            'renderType' => 'selectSingle',
                            'items' =>
                                array (
                                    0 =>
                                        array (
                                            0 => '',
                                            1 => 0,
                                        ),
                                ),
                            'foreign_table' => 'tx_cr_repeater_link_of_the_month_items',
                            'foreign_table_where' => 'AND tx_cr_repeater_link_of_the_month_items.pid=###CURRENT_PID### AND tx_cr_repeater_link_of_the_month_items.sys_language_uid IN (-1,0)',
                        ),
                ),
            'l10n_diffsource' =>
                array (
                    'config' =>
                        array (
                            'type' => 'passthrough',
                        ),
                ),
            't3ver_label' =>
                array (
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
                    'config' =>
                        array (
                            'type' => 'input',
                            'size' => 30,
                            'max' => 255,
                        ),
                ),
            'hidden' =>
                array (
                    'exclude' => 1,
                    'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
                    'config' =>
                        array (
                            'type' => 'check',
                        ),
                ),
            'starttime' =>
                array (
                    'exclude' => 1,
                    'l10n_mode' => 'mergeIfNotBlank',
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
                    'config' =>
                        array (
                            'type' => 'input',
                            'size' => 13,
                            'max' => 20,
                            'eval' => 'datetime',
                            'checkbox' => 0,
                            'default' => 0,
                            'range' =>
                                array (
                                    'lower' => 1483398000,
                                ),
                        ),
                ),
            'endtime' =>
                array (
                    'exclude' => 1,
                    'l10n_mode' => 'mergeIfNotBlank',
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
                    'config' =>
                        array (
                            'type' => 'input',
                            'size' => 13,
                            'max' => 20,
                            'eval' => 'datetime',
                            'checkbox' => 0,
                            'default' => 0,
                            'range' =>
                                array (
                                    'lower' => 1483398000,
                                ),
                        ),
                ),
            'parentid' =>
                array (
                    'config' =>
                        array (
                            'type' => 'select',
                            'renderType' => 'selectSingle',
                            'items' =>
                                array (
                                    0 =>
                                        array (
                                            0 => '',
                                            1 => 0,
                                        ),
                                ),
                            'foreign_table' => 'tt_content',
                            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
                        ),
                ),
            'parenttable' =>
                array (
                    'config' =>
                        array (
                            'type' => 'passthrough',
                        ),
                ),
            'sorting' =>
                array (
                    'config' =>
                        array (
                            'type' => 'passthrough',
                        ),
                ),


            'tx_cr_repeater_text' => [
                'config' => [
                    'type' => 'input',
                    'size' => '50',
                ],
                'exclude' => '1',
                'l10n_mode' => 'mergeIfNotBlank',
                'label' => 'LLL:EXT:link_of_the_month/Resources/Private/Language/locallang.xlf:link_of_the_month_content_item_text',
            ],

            'tx_cr_repeater_link' => [
                'exclude' => true,
                'l10n_mode' => 'mergeIfNotBlank',
                'label' => 'LLL:EXT:link_of_the_month/Resources/Private/Language/locallang.xlf:link_of_the_month_content_item_link',
                'config' => [
                    'type' => 'input',
                    'renderType' => 'inputLink',
                    'size' => 50,
                    'max' => 1024,
                    'eval' => 'trim',
                    'fieldControl' => [
                        'linkPopup' => [
                            'options' => [
                                'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                            ],
                        ],
                    ],
                    'softref' => 'typolink'
                ]
            ],
            'tx_cr_repeater_date' => [
                'exclude' => 1,
                'label' => 'LLL:EXT:link_of_the_month/Resources/Private/Language/locallang.xlf:link_of_the_month_content_item_month',
                'config' => [
                    'type' => 'input',
                    'renderType' => 'selectSingle',
                    'size' => 1,
                    'maxitems' => 1,
                    'items' => [
                        ['January', 1],
                        ['February', 2],
                        ['March', 3],
                        ['April', 4],
                        ['May', 5],
                        ['June', 6],
                        ['July', 7],
                        ['August', 8],
                        ['September', 9],
                        ['October', 10],
                        ['November', 11],
                        ['December', 12],
                    ],
                ],
            ],
        ),
);