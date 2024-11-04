<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'username'); // Rename 'name' to 'username'
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('username', 'name'); // Reverse the change
        });
    }
};
