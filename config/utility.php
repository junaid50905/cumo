<?php

use App\Utility\ProjectConstants;

if (!function_exists('prepareInputLabel')) {
    function prepareInputLabel($str): string
    {
        return ucwords(rtrim(str_replace('_', ' ', $str), '_id'));
    }
}

if (!function_exists('loggedInUserPermissions')) {
    function loggedInUserPermissions($permissionName = '')
    {
        $permissions = app('aclService')->pluck('name');

        return $permissionName ? $permissions->contains($permissionName) : $permissions;
    }
}

if (!function_exists('checkPermissions')) {
    function checkPermissions($permissionName): bool
    {
        if (!is_array($permissionName))
            return loggedInUserPermissions($permissionName);

        $permissions = loggedInUserPermissions();
        foreach ($permissionName as $name) {
            if (!$permissions->contains($name))
                continue;

            return true;
        }

        return false;
    }
}

if (!function_exists('menuOpen')) {
    function menuOpen($routeName): string
    {
        return isActive($routeName) ? 'menu-open' : '';
    }
}

if (!function_exists('isActive')) {
    function isActive($routeName): string
    {
        return preg_match("/$routeName\..*/", request()->route()->getName());
    }
}

if (!function_exists('findActive')) {
    function findActive($routeName): string
    {
        $routeName = str_replace('.*', '\..*', $routeName);

        return is_array($routeName)
            ? (in_array(request()->route()->getName(), $routeName) ? 'active' : '')
            : (preg_match("/$routeName/", request()->route()->getName()) ? 'active' : '');
    }
}

if (!function_exists('dataPerPage')) {
    function dataPerPage()
    {
        return request()->per_page ?? ProjectConstants::DATA_PER_PAGE;
    }
}

if (!function_exists('convertLevelIntoName')) {
    function convertLevelIntoName($label): string
    {
        return preg_replace(['/\//', '/&|\s+|-/', '/\?|\.|,|\'|’|“|:/', '/_{2}/'], ['_or_', '_', '', '_'], strtolower(trim($label)));
    }
}

if (!function_exists('extractNecessaryFieldsFromData')) {
    function extractNecessaryFieldsFromData(array $data, array $fields): array
    {
        $fields = implode('|', $fields);

        $custom = [];
        foreach ($data as $key => $value) {
            if (preg_match(("/\b($fields)\b/"), $key)) {
                $custom[$key] = $value;
                unset($data[$key]);
            }
        }

        return [$custom, $data];
    }
}
