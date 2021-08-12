<?php

declare(strict_types=1);

namespace JustSteveKing\Fathom\Support;

class FathomValidation
{
    public static function siteValidation(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'sharing' => ['nullable', 'string', 'in:none,private,public'],
            'share_password' => ['nullable', 'string'],
        ];
    }

    public static function siteUploadValidation(): array
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'sharing' => ['nullable', 'string', 'in:none,private,public'],
            'share_password' => ['nullable', 'string'],
        ];
    }

    public static function aggregateValidation(): array
    {
        return [
            'entity' => ['required', 'string', 'in:pageview,event'],
            'entity_id' => ['required', 'string'],
            'aggregates' => ['required', 'string', 'in:visits,uniques,pageviews,avg_duration,bounce_rate'],
            'date_grouping' => ['nullable', 'string', 'in:hour,day,month,year'],
            'field_grouping' => [
                'nullable',
                'string',
//                'in:hostname,pathname,referrer_hostname,referrer_pathname,browser,country_code,device_type,utm_campaign,utm_content,utm_medium,utm_source,utm_term,keyword,q,ref,s',
            ],
            'sort_by' => ['nullable', 'string'],
            'timezone' => ['nullable', 'string', 'timezone'],
            'date_from' => ['nullable', 'date'],
            'date_to' => ['nullable', 'date'],
            'filters' => ['nullable', 'array'],
        ];
    }
}
