<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsBelongGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('products_belong_groups', function (Blueprint $table) 
         {
            
            $table->string('fk_group');
            $table->string('fk_product');
            $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
        public function down()
        {
            Schema::drop('products_belong_groups');
        }
}