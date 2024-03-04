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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nisn');
            $table->string('password');
            $table->enum('jenis_kelamin',['perempuan','laki-laki']);
            $table->string('asal_sekolah');
            $table->string('no_hp');
            $table->string('no_hp_ayah');
            $table->string('no_hp_ibu');
            $table->string('referensi');
            $table->enum('role', ['user', 'admin']);
            $table->foreignId('payment_id')->unsigned()->nullable();
            $table->boolean('status')->nullable();
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
