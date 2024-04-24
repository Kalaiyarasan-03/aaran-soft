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
            config('clients.AARAN_ASSOCIATES') => in_array($feature, config('aaran_associates.features', [])),

            config('clients.SARA_SCREENS') => in_array($feature, config('sara_screens.features', [])),
            config('clients.COLOURS_PRINTING') => in_array($feature, config('colours_printers.features', [])),
            config('clients.NEW_AMMAN_PRINTERS') => in_array($feature, config('new_amman_printers.features', [])),
            config('clients.KGS_PRINTERS') => in_array($feature, config('kgs_printers.features', [])),
            config('clients.THIRUMURUGAN_PRINTERS') => in_array($feature, config('thirumurugan_printing.features', [])),
//            config('clients.SAIRF_SOURCING') => in_array($feature, config('sairf_sourcing.features', [])),
        };
    }

    /**
     * has todos
     * @return bool
     */
    public static function hasTodoList(): bool
    {
        return static::enabled(static::todoList());
    }

    public static function todoList(): string
    {
        return 'todos';
    }

    /**
     * has attendance
     * @return bool
     */
    public static function hasAttendance(): bool
    {
        return static::enabled(static::attendance());
    }

    public static function attendance(): string
    {
        return 'attendance';
    }

}
