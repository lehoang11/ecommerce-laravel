<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\User_Profile;
class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->tinyInteger('status')->unsigned()->default(0);
            $table->string('phone',20);
            $table->integer('sex')->unsigned()->nullable();
            $table->timestamp('birth_day')->nullable();
            $table->string('location');
            $table->string('photo');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

            User_Profile::create([
                'user_id' => 1,
                'first_name' => 'super',
                'last_name' => 'admin',
                'status' => 1,
                'phone' => '',
                'sex' => 1,
                'birth_day' => '1510740243',
                'location' => '',
                'photo' =>'',
                'is_active' => 1,
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
