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
        Schema::create('software_details', function (Blueprint $table) {
            $table->id();
            $table->string('sub_domain')->unique();
            $table->string('database')->nullable();
            $table->string('git')->nullable();
            $table->string('copy_build_folder')->nullable();
            $table->string('copy_env')->nullable();
            $table->string('db_migrate')->nullable();
            $table->string('storage_link')->nullable();
            $table->string('user_created')->nullable();
            $table->string('user_tenant_id')->nullable();
            $table->date('installed_on')->nullable();
            $table->string('soft_version')->nullable();
            $table->string('db_version')->nullable();
            $table->smallInteger('active_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_details');
    }
};

