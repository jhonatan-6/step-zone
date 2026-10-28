
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
        Schema::create('provedors', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 150);
            $table->string('nit', 30)->nullable()->unique();
            $table->string('telefono', 20);
            $table->string('email', 100)->nullable()->unique();
            $table->string('direccion')->nullable();
            $table->string('persona_contacto', 100)->nullable();

            $table->text('descripcion')->nullable();
            $table->boolean('activo')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provedors');
    }
};
