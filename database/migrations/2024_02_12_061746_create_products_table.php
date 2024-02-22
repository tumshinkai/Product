<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->id('product_code'); // รหัสสินค้า
            $table->string('product_name', 100); // ชื่อสินค้า
            $table->text('description')->nullable(); // รายละเอียด
            $table->integer('price'); // ราคา
            $table->integer('quantity')->unsigned()->default(0); // จำนวนคงเหลือ
            $table->timestamps(); // เวลาที่สร้างและเวลาที่อัปเดต
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};