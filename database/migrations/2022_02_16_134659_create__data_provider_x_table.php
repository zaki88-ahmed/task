<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataProviderXTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_provider_x', function (Blueprint $table) {
            $table->string('parentIdentification');

            $table->decimal('parentAmount',9,3);;
            $table->string('currency', 3);
            $table->string('parentEmail')->unique();
            $table->enum("statusCode", [1, 2, 3]);
            $table->timestamp('registerationDate')->nullable();

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
        Schema::dropIfExists('_data_provider_x');
    }
}
