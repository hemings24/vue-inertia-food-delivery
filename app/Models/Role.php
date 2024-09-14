<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
   use HasFactory;

   public function permissions(): BelongsToMany
   {
      return $this->belongsToMany(Permission::class);
   }

   public function users(): BelongsToMany
   {
      return $this->belongsToMany(User::class);
   }
}