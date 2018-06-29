<?php

return [
    'app'   =>  [
        'title' =>  'Slots',
        'desc'  =>  'Manage your slots',
        'icon'  =>  'glyphicon glyphicon-sunglasses',
        'elements'  =>  [
            [
                'type'  =>  'number',
                'data'  =>  'string',
                'name'  =>  'slot_count',
                'label' =>  'Number of Slots',
                'rules' =>  'required',
                'class' =>  '',
                'value' =>  '3'
            ],
            [
                'type'  =>  'checkbox',
                'data'  =>  'boolean',
                'name'  =>  'require_quote',
                'label' =>  'Require a Quote',
                'rules' =>  '',
                'class' =>  '',
                'value' =>  1
            ]
        ]
    ],
];
