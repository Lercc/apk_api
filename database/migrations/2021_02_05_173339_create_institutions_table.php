<?php

use App\Models\Institution;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('state',11)->default(Institution::DEFAULT_STATE); //activado desactivado
            $table->string('tipo',11); //universidad instituto
            $table->string('name',200);
            $table->string('description',200)->nullable();
            $table->timestamps();
        });

        DB::table('institutions')->insert(array('id'=>'1', 'tipo' => 'universidad', 'name'=> 'Escuela De Posgrado-Gerens S.A.C.'));
        DB::table('institutions')->insert(array('id'=>'2', 'tipo' => 'universidad', 'name'=> 'Escuela de Postgrado Neumann Business School S.A.C.'));
        DB::table('institutions')->insert(array('id'=>'3', 'tipo' => 'universidad', 'name'=> 'Facultad de Teología Pontificia y Civil de Lima'));
        DB::table('institutions')->insert(array('id'=>'4', 'tipo' => 'universidad', 'name'=> 'Pontificia Universidad Católica del Perú'));
        DB::table('institutions')->insert(array('id'=>'5', 'tipo' => 'universidad', 'name'=> 'Universidad Andina del Cusco'));
        DB::table('institutions')->insert(array('id'=>'6', 'tipo' => 'universidad', 'name'=> 'Universidad Antonio Ruiz de Montoya'));
        DB::table('institutions')->insert(array('id'=>'7', 'tipo' => 'universidad', 'name'=> 'Universidad Autónoma de Ica'));
        DB::table('institutions')->insert(array('id'=>'8', 'tipo' => 'universidad', 'name'=> 'Universidad Autónoma del Perú'));
        DB::table('institutions')->insert(array('id'=>'9', 'tipo' => 'universidad', 'name'=> 'Universidad Católica de Santa María'));
        DB::table('institutions')->insert(array('id'=>'10', 'tipo' => 'universidad', 'name'=> 'Universidad Católica de Trujillo Benedicto XVI'));
        DB::table('institutions')->insert(array('id'=>'11', 'tipo' => 'universidad', 'name'=> 'Universidad Católica San Pablo'));
        DB::table('institutions')->insert(array('id'=>'12', 'tipo' => 'universidad', 'name'=> 'Universidad Católica Santo Toribio de Mogrovejo'));
        DB::table('institutions')->insert(array('id'=>'13', 'tipo' => 'universidad', 'name'=> 'Universidad Católica Sedes Sapientiae'));
        DB::table('institutions')->insert(array('id'=>'14', 'tipo' => 'universidad', 'name'=> 'Universidad Científica del Sur'));
        DB::table('institutions')->insert(array('id'=>'15', 'tipo' => 'universidad', 'name'=> 'Universidad Continental'));
        DB::table('institutions')->insert(array('id'=>'16', 'tipo' => 'universidad', 'name'=> 'Universidad César Vallejo'));
        DB::table('institutions')->insert(array('id'=>'17', 'tipo' => 'universidad', 'name'=> 'Universidad de Ciencias y Artes de América Latina'));
        DB::table('institutions')->insert(array('id'=>'18', 'tipo' => 'universidad', 'name'=> 'Universidad de Ciencias y Humanidades'));
        DB::table('institutions')->insert(array('id'=>'19', 'tipo' => 'universidad', 'name'=> 'Universidad de Huánuco'));
        DB::table('institutions')->insert(array('id'=>'20', 'tipo' => 'universidad', 'name'=> 'Universidad de Ingeniería y Tecnología'));
        DB::table('institutions')->insert(array('id'=>'21', 'tipo' => 'universidad', 'name'=> 'Universidad de Lima'));
        DB::table('institutions')->insert(array('id'=>'22', 'tipo' => 'universidad', 'name'=> 'Universidad de Piura'));
        DB::table('institutions')->insert(array('id'=>'23', 'tipo' => 'universidad', 'name'=> 'Universidad de San Martín de Porres'));
        DB::table('institutions')->insert(array('id'=>'24', 'tipo' => 'universidad', 'name'=> 'Universidad del Pacífico'));
        DB::table('institutions')->insert(array('id'=>'25', 'tipo' => 'universidad', 'name'=> 'Universidad ESAN'));
        DB::table('institutions')->insert(array('id'=>'26', 'tipo' => 'universidad', 'name'=> 'Universidad Femenina del Sagrado Corazón'));
        DB::table('institutions')->insert(array('id'=>'27', 'tipo' => 'universidad', 'name'=> 'Universidad Jaime Bausate y Meza'));
        DB::table('institutions')->insert(array('id'=>'28', 'tipo' => 'universidad', 'name'=> 'Universidad La Salle'));
        DB::table('institutions')->insert(array('id'=>'29', 'tipo' => 'universidad', 'name'=> 'Universidad Le Cordon Bleu S.A.C.'));
        DB::table('institutions')->insert(array('id'=>'30', 'tipo' => 'universidad', 'name'=> 'Universidad Marcelino Champagnat'));
        DB::table('institutions')->insert(array('id'=>'31', 'tipo' => 'universidad', 'name'=> 'Universidad María Auxiliadora'));
        DB::table('institutions')->insert(array('id'=>'32', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Agraria de la Selva'));
        DB::table('institutions')->insert(array('id'=>'33', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Agraria la Molina'));
        DB::table('institutions')->insert(array('id'=>'34', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Amazónica de Madre de Dios'));
        DB::table('institutions')->insert(array('id'=>'35', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Autónoma Altoandina de Tarma'));
        DB::table('institutions')->insert(array('id'=>'36', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Autónoma de Alto Amazonas'));
        DB::table('institutions')->insert(array('id'=>'37', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Autónoma de Chota'));
        DB::table('institutions')->insert(array('id'=>'38', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Autónoma de Huanta'));
        DB::table('institutions')->insert(array('id'=>'39', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Autónoma de Tayacaja “Daniel Hernández Morillo”'));
        DB::table('institutions')->insert(array('id'=>'40', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Daniel Alcides Carrión'));
        DB::table('institutions')->insert(array('id'=>'41', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Barranca'));
        DB::table('institutions')->insert(array('id'=>'42', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Cajamarca'));
        DB::table('institutions')->insert(array('id'=>'43', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Cañete'));
        DB::table('institutions')->insert(array('id'=>'44', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Educación Enrique Guzmán y Valle'));
        DB::table('institutions')->insert(array('id'=>'45', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Frontera'));
        DB::table('institutions')->insert(array('id'=>'46', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Huancavelica'));
        DB::table('institutions')->insert(array('id'=>'47', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Ingeniería'));
        DB::table('institutions')->insert(array('id'=>'48', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Jaén'));
        DB::table('institutions')->insert(array('id'=>'49', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Juliaca'));
        DB::table('institutions')->insert(array('id'=>'50', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de la Amazonía Peruana'));
        DB::table('institutions')->insert(array('id'=>'51', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Moquegua'));
        DB::table('institutions')->insert(array('id'=>'52', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Piura'));
        DB::table('institutions')->insert(array('id'=>'53', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de San Agustín'));
        DB::table('institutions')->insert(array('id'=>'54', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de San Antonio Abad del Cusco'));
        DB::table('institutions')->insert(array('id'=>'55', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de San Cristóbal de Huamanga'));
        DB::table('institutions')->insert(array('id'=>'56', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de San Martín'));
        DB::table('institutions')->insert(array('id'=>'57', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Trujillo'));
        DB::table('institutions')->insert(array('id'=>'58', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Tumbes'));
        DB::table('institutions')->insert(array('id'=>'59', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional de Ucayali'));
        DB::table('institutions')->insert(array('id'=>'60', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional del Altiplano'));
        DB::table('institutions')->insert(array('id'=>'61', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional del Callao'));
        DB::table('institutions')->insert(array('id'=>'62', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional del Centro del Perú'));
        DB::table('institutions')->insert(array('id'=>'63', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional del Santa'));
        DB::table('institutions')->insert(array('id'=>'64', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Federico Villarreal'));
        DB::table('institutions')->insert(array('id'=>'65', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Hermilio Valdizán'));
        DB::table('institutions')->insert(array('id'=>'66', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Intercultural de la Amazonia'));
        DB::table('institutions')->insert(array('id'=>'67', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Intercultural de la selva central Juan Santos Atahualpa'));
        DB::table('institutions')->insert(array('id'=>'68', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Intercultural de Quillabamba'));
        DB::table('institutions')->insert(array('id'=>'69', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Intercultural Fabiola Salazar Leguía de Bagua'));
        DB::table('institutions')->insert(array('id'=>'70', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Jorge Basadre Grohmann'));
        DB::table('institutions')->insert(array('id'=>'71', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional José Faustino Sánchez Carrión'));
        DB::table('institutions')->insert(array('id'=>'72', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional José María Arguedas'));
        DB::table('institutions')->insert(array('id'=>'73', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Mayor de San Marcos'));
        DB::table('institutions')->insert(array('id'=>'74', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Micaela Bastidas de Apurímac'));
        DB::table('institutions')->insert(array('id'=>'75', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Santiago Antúnez de Mayolo'));
        DB::table('institutions')->insert(array('id'=>'76', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Tecnológica De Lima Sur'));
        DB::table('institutions')->insert(array('id'=>'77', 'tipo' => 'universidad', 'name'=> 'Universidad Nacional Toribio Rodríguez de Mendoza de Amazonas'));
        DB::table('institutions')->insert(array('id'=>'78', 'tipo' => 'universidad', 'name'=> 'Universidad para el Desarrollo Andino'));
        DB::table('institutions')->insert(array('id'=>'79', 'tipo' => 'universidad', 'name'=> 'Universidad Peruana Cayetano Heredia'));
        DB::table('institutions')->insert(array('id'=>'80', 'tipo' => 'universidad', 'name'=> 'Universidad Peruana de Ciencias Aplicadas'));
        DB::table('institutions')->insert(array('id'=>'81', 'tipo' => 'universidad', 'name'=> 'Universidad Peruana Los Andes'));
        DB::table('institutions')->insert(array('id'=>'82', 'tipo' => 'universidad', 'name'=> 'Universidad Peruana Unión'));
        DB::table('institutions')->insert(array('id'=>'83', 'tipo' => 'universidad', 'name'=> 'Universidad Privada Antenor Orrego'));
        DB::table('institutions')->insert(array('id'=>'84', 'tipo' => 'universidad', 'name'=> 'Universidad Privada de Huancayo Franklin Roosevelt'));
        DB::table('institutions')->insert(array('id'=>'85', 'tipo' => 'universidad', 'name'=> 'Universidad Privada de Tacna'));
        DB::table('institutions')->insert(array('id'=>'86', 'tipo' => 'universidad', 'name'=> 'Universidad Privada del Norte'));
        DB::table('institutions')->insert(array('id'=>'87', 'tipo' => 'universidad', 'name'=> 'Universidad Privada Norbert Wiener'));
        DB::table('institutions')->insert(array('id'=>'88', 'tipo' => 'universidad', 'name'=> 'Universidad Privada Peruano Alemana'));
        DB::table('institutions')->insert(array('id'=>'89', 'tipo' => 'universidad', 'name'=> 'Universidad Privada San Juan Bautista'));
        DB::table('institutions')->insert(array('id'=>'90', 'tipo' => 'universidad', 'name'=> 'Universidad Ricardo Palma'));
        DB::table('institutions')->insert(array('id'=>'91', 'tipo' => 'universidad', 'name'=> 'Universidad San Ignacio de Loyola'));
        DB::table('institutions')->insert(array('id'=>'92', 'tipo' => 'universidad', 'name'=> 'Universidad Señor de Sipán'));
        DB::table('institutions')->insert(array('id'=>'93', 'tipo' => 'universidad', 'name'=> 'Universidad Tecnológica de los Andes'));
        DB::table('institutions')->insert(array('id'=>'94', 'tipo' => 'universidad', 'name'=> 'Universidad Tecnológica del Perú'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
