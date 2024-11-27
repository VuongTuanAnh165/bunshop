<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class Common
{
    /**
     * Get the current route name.
     *
     * @return string
     */
    public static function getCurrentRouteName()
    {
        return Route::currentRouteName();
    }

    /**
     * Check if the current route is active.
     *
     * @param array $arr_route
     * @return bool
     */
    public static function checkRouteActive(array $arr_route): bool
    {
        return in_array(self::getCurrentRouteName(), $arr_route);
    }

    /**
     * Check if any of the parent routes are active.
     *
     * @param array $arr_route
     * @return bool
     */
    public static function checkRouteActiveParent(array $arr_route): bool
    {
        foreach ($arr_route as $item) {
            if (self::checkRouteActive($item)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Get the active class for the aside menu.
     *
     * @param array $arr_route
     * @return string
     */
    public static function asideActive(array $arr_route = null): string
    {
        $arr_route = $arr_route ?? [];
        return self::checkRouteActive($arr_route) ? 'active' : '';
    }

    /**
     * Get the active class for the parent aside menu.
     *
     * @param array $arr_route
     * @return string
     */
    public static function asideActiveParent(array $arr_route = []): string
    {
        return self::checkRouteActiveParent($arr_route) ? 'active' : '';
    }
}