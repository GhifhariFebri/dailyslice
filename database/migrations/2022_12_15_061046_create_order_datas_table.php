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
        Schema::create('order_datas', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("nomor_telp");
            $table->string("alamat_pengiriman");
            $table->foreignIdFor(\App\Models\categories::class);
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
        Schema::dropIfExists('order_datas');
    }
};
