<?php

use App\Models\Career;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('state',11)->default(Career::DEFAULT_STATE); //activado desactivado 
            $table->string('description',200)->nullable();
            $table->timestamps();
        });

        DB::table('careers')->insert(array('id'=>'1', 'name'=>'Enfermeria', 'description'=>'Ciencias de la Salud'));
        DB::table('careers')->insert(array('id'=>'2', 'name'=>'Medicina Humana', 'description'=>'Ciencias de la Salud'));

        DB::table('careers')->insert(array('id'=>'3', 'name'=>'Arquitectura', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'4', 'name'=>'Ingeniería Civil', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'5', 'name'=>'Ingeniería de Minas', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'6', 'name'=>'Ingeniería de Sistemas', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'7', 'name'=>'Ingeniería Eléctrica y Electrónica', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'8', 'name'=>'Ingeniería Mecánica', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'9', 'name'=>'Ingeniería Metalúrgica y de Minerales', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'10', 'name'=>'Ingeniería Química', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'11', 'name'=>'Ingeniería Química Industrial', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'12', 'name'=>'Ingeniería Química Ambiental', 'description'=>'Arquitectura e Ingenierías'));

        DB::table('careers')->insert(array('id'=>'13', 'name'=>'Ciencias de la Administración', 'description'=>'Ciencias Administrativas Contables y Económicas'));
        DB::table('careers')->insert(array('id'=>'14', 'name'=>'Contabilidad', 'description'=>'Ciencias Administrativas Contables y Económicas'));
        DB::table('careers')->insert(array('id'=>'15', 'name'=>'Economía', 'description'=>'Ciencias Administrativas Contables y Económicas'));
        
        DB::table('careers')->insert(array('id'=>'16', 'name'=>'Antropología', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'17', 'name'=>'Ciencias de la Computación', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'18', 'name'=>'Educación Inicial', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'19', 'name'=>'Educación Primaria', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'20', 'name'=>'Educación Filosofía, Ciencias Sociales y Relaciones Humanas', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'21', 'name'=>'Educación Lengua, Literatura y Comunicación', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'22', 'name'=>'Educación Ciencias Naturales y Ambientales', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'23', 'name'=>'Educación Ciencias Matemáticas e Informática', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'24', 'name'=>'Educación Física y Psicomotricidad', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'25', 'name'=>'Sociología', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'26', 'name'=>'Trabajo Social', 'description'=>'Ciencias sociales y educación'));

        DB::table('careers')->insert(array('id'=>'27', 'name'=>'Agronomía', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'28', 'name'=>'Ciencias Forestales y del Ambiente', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'29', 'name'=>'Zootecnia', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'30', 'name'=>'Ingeniería en Industrias Alimentarias', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'31', 'name'=>'Ingeniería Agroindutrial - Tarma', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'32', 'name'=>'Adm de Negocios - Tarma', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'33', 'name'=>'Hoteleria y turismo - Tarma', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'34', 'name'=>'Agronomía Tropical - Satipo', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'35', 'name'=>'Ingeniería Forestal Tropical - Satipo', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'36', 'name'=>'Industrias Alimentarias Tropical - Satipo', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'37', 'name'=>'Zootecnia Tropical  - Satipo', 'description'=>'Ciencias Agrarias y sedes'));
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
