<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
           
            $table->string('anrede');
            $table->string('vorname');
            $table->string('nachname');
            $table->string('email');
            $table->string('telefon');
            $table->string('handy');
        
            $table->timestamps();
            $table
                ->bigInteger('firma')
                ->nullable()
                ->unsigned()
                ->index();

  

            $table

                ->foreign('firma')
                ->references('id')
                ->on('companies')

                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('persons', function (Blueprint $table) {
            $table->dropForeign('photo');
            $table->dropForeign('firma');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('persons');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
