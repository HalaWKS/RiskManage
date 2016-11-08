<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risk', function (Blueprint $table) {
            $table->increments('id');       //����ID
            $table->string('p_id');         //��ĿID
            $table->string('creator_id');   //������ID
            $table->string('tracker_id');   //������ID
            $table->string('content');      //��������
            $table->string('possibility');  //���տ�����
            $table->string('effect');       //����Ӱ��̶�
            $table->string('trigger');      //������
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
        //
    }
}
