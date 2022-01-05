<?php namespace Galdan\Bikes\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTypesTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_bikes_types', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('vendor')->nullable();
            
            $table->string('engine_type')->nullable();
            $table->string('displacement')->nullable();
            $table->string('bore_stroke')->nullable();
            $table->string('compression_ratio')->nullable();
            $table->string('maximum_power')->nullable();
            $table->string('maximum_torque')->nullable();
            $table->string('ignition_system')->nullable();
            $table->string('clutch')->nullable();
            $table->string('gearbox')->nullable();
            $table->string('lubrication')->nullable();
            $table->string('engine_oil')->nullable();
            $table->string('fuel_supply')->nullable();
            $table->string('air_cleaner')->nullable();
            $table->string('engine_start')->nullable();

            $table->string('body_type')->nullable();
            $table->string('front_suspension')->nullable();
            $table->string('rear_suspension')->nullable();

            $table->string('wheelbase')->nullable();
            $table->string('ground_clearance')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('seat_height')->nullable();
            $table->string('kerb_weight')->nullable();
            $table->string('fuel_capacity')->nullable();

            $table->string('tyres_front')->nullable();
            $table->string('tyres_rear')->nullable();
            $table->string('brakes_front')->nullable();
            $table->string('brakes_rear')->nullable();

            $table->string('electrical_system')->nullable();
            $table->string('battery')->nullable();
            $table->string('head_lamp')->nullable();
            $table->string('tail_lamp')->nullable();
            $table->string('turn_signal_lamp')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_bikes_types');
    }
}
