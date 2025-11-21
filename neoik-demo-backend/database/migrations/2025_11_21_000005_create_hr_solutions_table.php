<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('hr_solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('badge')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('personnel')->nullable();
            $table->string('financial')->nullable();
            $table->string('leave')->nullable();
            $table->string('document')->nullable();
            $table->string('inventory')->nullable();
            $table->string('performance')->nullable();
            $table->string('cta')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hr_solutions');
    }
};
