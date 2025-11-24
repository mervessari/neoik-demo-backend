<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('navs', function (Blueprint $table) {
            $table->id();
                $table->json('hr_solutions')->nullable();
                $table->json('industry_solutions')->nullable();
                $table->json('clients')->nullable();
                $table->json('contact')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('navs');
    }
};
