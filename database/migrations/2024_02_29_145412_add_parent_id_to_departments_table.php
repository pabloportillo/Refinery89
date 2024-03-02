<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParentIdToDepartmentsTable extends Migration
{
    public function up()
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->foreignId('parent_id')->nullable()->constrained('departments');
        });
    }

    public function down()
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->dropColumn('parent_id');
        });
    }
}
