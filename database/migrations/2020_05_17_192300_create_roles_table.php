<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type_business',['Administrator','Coordinator']);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->nullable()->after('parent_id');
            $table->foreign('role_id')->references('id')->on('roles');
        });

        \App\Models\Role::create(
            [
                'name' => 'National Manager',
                'type_business' => 'Administrator',
            ]
        );
        \App\Models\Role::create(
            [
                'name' => 'Regional Manager',
                'type_business' => 'Administrator',
            ]
        );
        \App\Models\Role::create(
            [
                'name' => 'Marketing Assistant',
                'type_business' => 'Coordinator',
            ]
        );
        \App\Models\Role::create(
            [
                'name' => 'Franchisee Coordinator',
                'type_business' => 'Coordinator',
            ]
        );
        \App\Models\Role::create(
            [
                'name' => 'Shop',
                'type_business' => 'Coordinator',
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        });

        Schema::dropIfExists('roles');
    }
}
