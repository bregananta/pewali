<?php

use App\Models\Menu;
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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('group');
            $table->string('title');
            $table->integer('order')->default(0)->index();
            $table->integer('parent_id')->default(-1);
            $table->string('url')->nullable();
            $table->foreignId('page_id')->nullable()->constrained()->cascadeOnDelete();
            $table->boolean('is_blank')->default(false);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
