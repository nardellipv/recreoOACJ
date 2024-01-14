<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name_school');
            $table->string('address')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('phone_school')->nullable();
            $table->string('email', 120)->unique();
            $table->enum('type', ['PRIVADA', 'PUBLICA'])->nullable();
            $table->string('director1')->nullable();
            $table->string('director2')->nullable();
            $table->enum('first_time_school', ['SI', 'NO'])->nullable();
            $table->enum('sede', ['SI', 'NO'])->default('NO')->nullable();
            $table->enum('download', ['Y', 'N'])->default('N');
            $table->enum('download_enter', ['0', '1'])->default('0');
            $table->integer('download_level')->default('0');
            $table->enum('download_correction', ['Y', 'N'])->default('N');
            $table->enum('userType', ['Colegio', 'Admin'])->default('Colegio');

            //relaciones

            $table->foreignId('province_id')
                ->nullable()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('region_id')
                ->nullable()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
