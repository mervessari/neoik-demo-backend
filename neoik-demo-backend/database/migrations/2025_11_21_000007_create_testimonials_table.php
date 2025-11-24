<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('badge')->nullable();
            $table->json('subtitle')->nullable();
            $table->json('cta')->nullable();
            $table->json('mehmet')->nullable();
            $table->json('semih')->nullable();
            $table->json('abdurrahman')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
};
