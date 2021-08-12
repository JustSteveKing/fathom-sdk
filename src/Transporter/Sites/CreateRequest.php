<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Transporter\Sites;

use JustSteveKing\Fathom\Transporter\FathomRequest;

class CreateRequest extends FathomRequest
{
    protected string $method = 'POST';
    protected string $path = 'sites';
}
