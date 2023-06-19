<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;

class Post extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'tugas';

    protected $guarded = ['user_id'];
}
