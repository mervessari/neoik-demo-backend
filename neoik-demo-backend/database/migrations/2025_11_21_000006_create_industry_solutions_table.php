<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('industry_solutions', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('badge')->nullable();
            $table->json('subtitle')->nullable();
            $table->json('manufacturing')->nullable();
            $table->json('healthcare')->nullable();
            $table->json('retail')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('industry_solutions');
    }
};
