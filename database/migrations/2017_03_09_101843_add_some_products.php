<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('products')->insert(
            [
                'ean' => 'abc123',
                'name' => 'velo',
                'description' => 'un vélo avec des roues (parce que c\'est mieux',
                'price' => '899.99',
                'image' => 'velo.jpg',
                'type' => 0,
                'parent' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'ean' => 'qsd123',
                'name' => 'kebab',
                'description' => 'Un délicieux kebab',
                'price' => '6.50',
                'image' => 'kebab.jpg',
                'type' => 0,
                'parent' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'ean' => 'aze1',
                'name' => 'chaussure',
                'description' => 'Basket sisi',
                'price' => '49.99',
                'image' => 'chaussure.jpg',
                'type' => 2,
                'parent' => 0,
            ]
        );

        DB::table('products')->insert(
            [
                'ean' => 'aze2',
                'name' => 'chaussure taille 40',
                'description' => 'Basket sisi taille 40',
                'price' => '49.99',
                'image' => 'chaussure.jpg',
                'type' => 1,
                'parent' => 3,
            ]
        );

        DB::table('products')->insert(
            [
                'ean' => 'aze3',
                'name' => 'chaussure taille 42',
                'description' => 'Basket sisi taille 42',
                'price' => '49.99',
                'image' => 'chaussure.jpg',
                'type' => 1,
                'parent' => 3,
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
