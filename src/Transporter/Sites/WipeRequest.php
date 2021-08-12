<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Transporter\Sites;

use JustSteveKing\Fathom\Transporter\FathomRequest;

class WipeRequest extends FathomRequest
{
    protected string $method = 'DELETE';
}
