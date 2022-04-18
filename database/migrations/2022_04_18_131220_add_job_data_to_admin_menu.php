<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddJobDataToAdminMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_menu', function (Blueprint $table) {
            $importData = [
                'title' => 'Jobs',
                'uri' => 'jobs/list',
                'icon' => 'fa-bars',
            ];
            DB::table('admin_menu')->insert($importData);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_menu', function (Blueprint $table) {
            $id = DB::table('admin_menu')->where('title','=', 'Jobs' )->pluck('id')->first();
            DB::table('admin_menu')->delete($id);
        });
    }
}
