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
        $connection = config('audit.drivers.database.connection', config('database.default'));
        $table = config('audit.drivers.database.table', 'audits');

        // Type assertions for static analysis
        if (! is_string($connection) && ! is_null($connection)) {
            throw new Exception('Error: audit.drivers.database.connection must be string or null.');
        }
        if (! is_string($table)) {
            throw new Exception('Error: audit.drivers.database.table must be string.');
        }

        Schema::connection($connection)->create($table, function (Blueprint $table) {
            $morphPrefix = config('audit.user.morph_prefix', 'user');
            if (! is_string($morphPrefix)) {
                throw new Exception('Error: audit.user.morph_prefix must be string.');
            }
            $table->bigIncrements('id');
            $table->string($morphPrefix.'_type')->nullable();
            $table->unsignedBigInteger($morphPrefix.'_id')->nullable();
            $table->string('event');
            $table->morphs('auditable');
            $table->text('old_values')->nullable();
            $table->text('new_values')->nullable();
            $table->text('url')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->string('user_agent', 1023)->nullable();
            $table->string('tags')->nullable();
            $table->timestamps();
            $table->index([$morphPrefix.'_id', $morphPrefix.'_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $connection = config('audit.drivers.database.connection', config('database.default'));
        $table = config('audit.drivers.database.table', 'audits');

        if (! is_string($connection) && ! is_null($connection)) {
            throw new Exception('Error: audit.drivers.database.connection must be string or null.');
        }
        if (! is_string($table)) {
            throw new Exception('Error: audit.drivers.database.table must be string.');
        }

        Schema::connection($connection)->drop($table);
    }
};
