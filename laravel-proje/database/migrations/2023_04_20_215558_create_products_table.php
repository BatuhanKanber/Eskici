<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id("product_id");
            $table->foreignIdFor(Category::class, "category_id");
            $table->string("name");
            $table->decimal("price");
            $table->decimal("old_price");
            $table->text("lead");
            $table->text("description");
            $table->string("slug");
            $table->boolean("is_active");
            $table->boolean("is_favorite");
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
};
