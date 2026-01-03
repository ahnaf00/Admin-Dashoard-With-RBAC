<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use HasinHayder\Tyro\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Default Roles from config
        $roles = [
            'super-admin' => config('tyro_custom.super_admin_role', 'super-admin'),
            'admin' => config('tyro_custom.admin_role', 'admin'),
            'editor' => config('tyro_custom.editor_role', 'editor'),
            'user' => config('tyro_custom.user_role', 'user'),
        ];

        foreach ($roles as $name => $slug) {
            Role::firstOrCreate(
                ['slug' => $slug],
                ['name' => Str::title(str_replace('-', ' ', $name))]
            );
        }

        // 2. Create Initial Super Admin if none exists
        $superAdminSlug = $roles['super-admin'];
        $superAdminRole = Role::where('slug', $superAdminSlug)->first();

        $adminEmail = env('ADMIN_EMAIL', 'admin@example.com');

        $user = User::firstOrCreate(
            ['email' => $adminEmail],
            [
                'name' => 'Super Admin',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
            ]
        );

        // Assign super admin role if not already assigned
        if (!$user->hasRole($superAdminSlug)) {
            $user->roles()->sync([$superAdminRole->id]);
        }
    }
}
