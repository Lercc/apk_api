<?php

use App\Models\Voucher;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_program_id')->unsigned();
            $table->string('name',80);
            $table->string('code')->unique();
            $table->string('image')->nullable();
            $table->string('state',10)->default(Voucher::DEFAULT_STATE); //pendiente verificado
            $table->string('description',200)->nullable();
            $table->timestamps();

            $table->foreign('client_program_id')->references('id')->on('client_programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
