<?php

namespace Aaran\Aadmin\Src;

class Customise
{
    public static function enabled(string $feature): bool
    {
//        return in_array($feature, config('aadmin.features', []));

        return match (config('aadmin.app_type')) {
            config('clients.VIJAY_GARMENTS') => in_array($feature, config('vijayGarments.features', [])),
            config('clients.NEETHU_INDUSTRIES') => in_array($feature, config('neethuIndustries.features', [])),
            config('clients.SK_PRINTERS') => in_array($feature, config('sk_printers.features', [])),
        };
    }

    public static function hasTodoList(): bool
    {
        return static::enabled(static::todoList());
    }


    /**
     * Enable Todos features.
     * @return string
     */
    public static function todoList(): string
    {
        return 'todos';
    }

}
