<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataProviderYTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_provider_y', function (Blueprint $table) {

            $table->uuid('id');

            $table->decimal('balance',9,3);;
            $table->string('currency', 3);
            $table->string('email')->unique();
            $table->Integer('status');
            $table->date('created_at')->format('d/m/Y');
            $table->date('updated_at')->format('d/m/Y');


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
        Schema::dropIfExists('_data_provider_y');
    }
}
