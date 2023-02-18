<?php

namespace App\Admin\Controllers;

class FormEnum
{
    public const STATUS_STATES = [
        'on'  => ['value' => 'publish', 'text' => 'Publish', 'color' => 'success'],
        'off' => ['value' => 'draft', 'text' => 'Draft', 'color' => 'danger'],
    ];

    public const TRANS_LABEL = [
        'feature_image' => 'Feature image'
    ];
}
