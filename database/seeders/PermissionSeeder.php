<?php

namespace Database\Seeders;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
   public function run(): void
   {
      $actions = [
         'viewAny',
         'view',
         'create',
         'update',
         'delete',
         'restore',
         'forceDelete',
      ];

      $roles = [
         'user',
         'restaurant',
         'category',
         'product',
         'order',
      ];

      collect($roles)
         ->crossJoin($actions)
         ->map(function($set){
            return implode('.',$set);
         })->each(function($permission){
            Permission::create(['name' => $permission]);
         });

      Permission::create(['name' => 'cart.add']);
   }
}