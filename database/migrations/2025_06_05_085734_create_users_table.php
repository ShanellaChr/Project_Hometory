<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        DB::statement('CREATE TABLE users (
            id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
            username TEXT NOT NULL UNIQUE,
            email TEXT NOT NULL UNIQUE,
            email_verified_at DATETIME,
            password TEXT NOT NULL,
            role TEXT NOT NULL DEFAULT "user" CHECK (role IN ("user", "admin")),
            remember_token TEXT,
            created_at DATETIME,
            updated_at DATETIME
        )');
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}