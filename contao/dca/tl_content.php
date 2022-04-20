<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['supporter_feed'] = '{type_legend},type;{include_legend},supporter;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['supporter'] = [
    'inputType' => 'radio',
    'options' => [
        'supporter' => 'Supporter',
        'sponsor' => 'Sponsor',
        'gold_sponsor' => 'Gold Sponsor',
        'diamond_sponsor' => 'Diamond Sponsor',
    ],
    'eval' => ['required' => true],
    'sql' => ['type' => 'blob', 'length' => 65535, 'notnull' => false],
];
