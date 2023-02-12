<?php

namespace App\Enums;

enum DocumentStatus: string
{
    case Processing = 'processing';
    case Delivering = 'delivering';
    case Completed = 'completed';
}
