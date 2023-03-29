<?php

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
    Schema::create('departamento', function (Blueprint $table) {
        $table->increments('id_departamento');
        $table->string('nombre');
        $table->integer('numero_maquinas');
        $table->integer('maquinas_disponibles');
        $table->integer('numero_empleados');
        $table->string('extra')->nullable();
        $table->timestamps();
    });

    Schema::create('puesto', function (Blueprint $table) {
        $table->increments('id_puesto');
        $table->string('nombre');
        $table->timestamps();
    });

    Schema::create('empleado', function (Blueprint $table) {
        $table->increments('id_empleado');
        $table->string('nombre');
        $table->string('apellido_paterno');
        $table->string('apellido_materno');
        $table->string('email');
        $table->unsignedInteger('puesto_id');
        $table->foreign('puesto_id')->references('id_puesto')->on('puesto')->onDelete('cascade');
        $table->unsignedInteger('departamento_id');
        $table->foreign('departamento_id')->references('id_departamento')->on('departamento')->onDelete('cascade');
        $table->timestamps();
    });

    Schema::create('estatus', function (Blueprint $table) {
        $table->increments('id_estatus');
        $table->string('nombre_estatus');
        $table->timestamps();
    });

    Schema::create('tickets', function (Blueprint $table) {
        $table->increments('id_ticket');
        $table->string('detalles');
        $table->string('comentarios');
        $table->unsignedInteger('estatus_id');
        $table->foreign('estatus_id')->references('id_estatus')->on('estatus')->onDelete('cascade');
        $table->unsignedInteger('empleado_id');
        $table->foreign('empleado_id')->references('id_empleado')->on('empleado')->onDelete('cascade');
        $table->unsignedInteger('departamento_id');
        $table->foreign('departamento_id')->references('id_departamento')->on('departamento')->onDelete('cascade');
        $table->timestamps();
    });

    Schema::create('tarea', function (Blueprint $table) {
        $table->increments('id_tarea');
        $table->string('comentarios');
        $table->unsignedInteger('ticket_id');
        $table->foreign('ticket_id')->references('id_ticket')->on('tickets')->onDelete('cascade');
        $table->unsignedInteger('departamento_id');
        $table->foreign('departamento_id')->references('id_departamento')->on('departamento')->onDelete('cascade');
        $table->unsignedInteger('empleado_id');
        $table->foreign('empleado_id')->references('id_empleado')->on('empleado')->onDelete('cascade');
        $table->timestamps();
    });
}

    /**
      
    *public function up(): void
    *{
    
 

    *Schema::create('departamento', function (Blueprint $table) {
       * $table->increments('id_departamento');
       * $table->string('nombre');
        *$table->integer('numero_maquinas');
       * $table->integer('maquinas_disponibles');
       * $table->integer('numero_empleados');
       * $table->string('extra')->nullable();
      *  $table->timestamps();
   * });
    
    *Schema::create('puesto', function (Blueprint $table) {
      *  $table->increments('id_puesto');
       * $table->string('nombre');
       * $table->timestamps();
    *});
    
    *Schema::create('empleado', function (Blueprint $table) {
    *    $table->increments('id_empleado');
    *    $table->string('nombre');
    *    $table->string('apellido_paterno');
    *    $table->string('apellido_materno');
    *    $table->string('email');
    *    $table->unsignedInteger('puesto_id');
     *   $table->foreign('puesto_id')->references('id_puesto')->on('puesto')->onDelete('cascade');
     *   $table->unsignedInteger('departamento_id');
      *  $table->foreign('departamento_id')->references('id_departamento')->on('departamento')->onDelete('cascade');
      *  $table->timestamps();
    *});
*}
*/

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
