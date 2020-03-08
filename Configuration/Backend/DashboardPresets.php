<?php
return [
    'custom' => [
        'title' => 'LLL:EXT:lux/Resources/Private/Language/locallang_db.xlf:module.dashboard.preset.lux.title',
        'description' =>
            'LLL:EXT:lux/Resources/Private/Language/locallang_db.xlf:module.dashboard.preset.lux.description',
        'iconIdentifier' => 'extension-lux-turquoise',
        'defaultWidgets' => [
            'luxPageVisits',
            'luxDownloads',
            'luxRecurring',
            'luxIdentified',
            'luxReferrer',
            'luxIdentifiedPerMonth',
            'luxHottestLeads',
            'luxBrowser',
            'luxPageVisitsWeek',
            'luxDownloadsWeek'
        ],
        'showInWizard' => true
    ]
];
