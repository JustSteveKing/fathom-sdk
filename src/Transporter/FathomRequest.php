<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Transporter;

use JustSteveKing\Transporter\Request;

abstract class FathomRequest extends Request
{
    protected string $method = 'GET';

    protected string $baseUrl = 'https://api.usefathom.com/api/v1/';

    public function authenticate(): self
    {
        $this->request->withToken(
            token: config('fathom-sdk.token'),
        )->withHeaders(
            headers: [
                'Accept' => 'application/json',
            ]
        )->withUserAgent(
            userAgent: "Fathom SDK v0.0.1",
        );

        return $this;
    }
}
