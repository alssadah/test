<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Loans_product;

class CreateLoansProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_products', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->integer('author_id');
            $table->string('title')->nullable();
            $table->text('text')->nullable();
           
            $table->text('slug')->nullable();
            $table->text('icon');
            $table->enum('status',Loans_product::$statuses)->default(Loans_product::STATUS_INACTIVE);
            $table->timestamps();
            $table->softDeletes();	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans_products');
    }
}
