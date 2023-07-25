<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:link_of_the_month/Resources/Private/Language/locallang.xlf:link_of_the_month_content_title',
        'link_of_the_month_content',
        'content-idea',
    ],
    'textmedia',
    'after'
);
$tx_cr_repeater_link_of_the_month_items = array (
    'tx_cr_repeater_link_of_the_month_items' =>
        array (
            'config' =>
                array (
                    'type' => 'inline',
                    'foreign_table' => 'tx_cr_repeater_link_of_the_month_items',
                    'foreign_field' => 'parentid',
                    'foreign_table_field' => 'parenttable',
                    'foreign_sortby' => 'sorting',
                    'appearance' =>
                        array (
                            'enabledControls' =>
                                array (
                                    'dragdrop' => '1',
                                ),
                            'collapseAll' => '1',
                            'newRecordLinkTitle' => 'LLL:EXT:link_of_the_month/Resources/Private/Language/locallang.xlf:link_of_the_month_content_item_tile_new_record',
                            'levelLinksPosition' => 'top',
                            'useSortable' => '1',
                            'showSynchronizationLink' => '1',
                            'showAllLocalizationLink' => '1',
                        ),
                    'minitems' => '0',
                    'maxitems' => '20',
                    'behaviour' =>
                        array (
                            'allowLanguageSynchronization' => true,
                        ),
                ),
            'exclude' => '1',
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'Slides',
        ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tx_cr_repeater_link_of_the_month_items);

/*----------------- CE HEADER SLIDER ------------------------*/

$GLOBALS['TCA']['tt_content']['types']['link_of_the_month_content'] = array(
    'showitem'         => '
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            tx_cr_repeater_link_of_the_month_items,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
		        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
		        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
		    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended
    '
);
