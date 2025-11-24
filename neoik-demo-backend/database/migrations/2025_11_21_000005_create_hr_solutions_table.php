<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('hr_solutions', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('badge')->nullable();
            $table->json('subtitle')->nullable();
            $table->json('personnel')->nullable();
            $table->json('financial')->nullable();
            $table->json('leave')->nullable();
            $table->json('document')->nullable();
            $table->json('inventory')->nullable();
            $table->json('performance')->nullable();
            $table->json('cta')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hr_solutions');
    }
};
