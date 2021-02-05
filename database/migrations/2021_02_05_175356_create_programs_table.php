<?php

use App\Models\Program;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name',80);
            $table->string('state',11)->default(Program::DEFAULT_STATE); //activado desactivado
            $table->string('description',200)->nullable();
            $table->timestamps();
        });

        DB::table('programs')->insert(array('id'=>'1','name'=>'work and travel', 'description'=>'Programa dirigido a estudiantes univesitarios'));
        DB::table('programs')->insert(array('id'=>'2','name'=>'internship', 'description'=>'Programa dirigido a estudiantes univesitarios'));
        DB::table('programs')->insert(array('id'=>'3','name'=>'trainee', 'description'=>'Programa dirigido a estudiantes univesitarios'));
        DB::table('programs')->insert(array('id'=>'4','name'=>'au pair', 'description'=>'Programa dirigido a estudiantes univesitarios'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
