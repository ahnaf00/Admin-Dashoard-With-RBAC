<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Super Admin Role Slug
    |--------------------------------------------------------------------------
    |
    | This is the slug of the role that has full access to the system management
    | like roles, privileges, and user management.
    |
    */
    'super_admin_role'  => env('SUPER_ADMIN_ROLE', 'super-admin'),
    'admin_role'        => env('ADMIN_ROLE', 'admin'),
    'editor_role'       => env('EDITOR_ROLE', 'editor'),
    'user_role'         => env('USER_ROLE', 'user'),
];
