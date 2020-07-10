<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->timestamps();
        });
		
		if(Schema::hasTable('test'))
		{
			echo 'has table';
		}
		if(Schema::hasColumn('test','name'))
		{
			echo 'has column';
		}
		
		//Schema::rename('test','newTest');
		
		Schema::table('test', function (Blueprint $table) {
					//	Эквивалент VARCHAR
					  $table->string('email');
					  //Инкрементный ID (первичный ключ), использующий эквивалент "UNSIGNED BIG INTEGER"
					  //$table->bigIncrements('new_id');
					  //Эквивалент BIGINT для базы данных
					  $table->bigInteger('votes');
					  //Эквивалент BLOB для базы данных
					  $table->binary('data');
					  //Эквивалент BOOLEAN для базы данных
					  $table->boolean('confirmed');
					  //Эквивалент CHAR для базы данных
					  $table->char('name', 4);
					  //Эквивалент DATE для базы данных
					  $table->date('date');
					  //Эквивалент DATETIME для базы данных
					  $table->dateTime('dt');
					  //Эквивалент DATETIME (с часовым поясом) для базы данных (для версии 5.2 и выше)
					  $table->dateTimeTz('dt_zone');
					  //Эквивалент DECIMAL с точностью и масштабом
					  $table->decimal('amount', 5, 2);
					  //Эквивалент DOUBLE с точностью, всего 15 цифр, после запятой 8 цифр
					  $table->double('column', 15, 8);
					  //Эквивалент ENUM для базы данных
					  //$table->enum('choices', ['foo', 'bar']);
					  //Эквивалент FLOAT для базы данных, всего 8 знаков, из них 2 после запятой (для версии 5.3 и выше)
					  $table->float('float', 8, 2);
					  //Эквивалент FLOAT для базы данных (для версии 5.2 и ранее)
					  $table->float('amount2');
					  //Инкрементный ID (первичный ключ), использующий эквивалент "UNSIGNED INTEGER"
					  //$table->increments('id');
					  //Эквивалент INTEGER для базы данных
					  $table->integer('votes2');
					  //Эквивалент IP-адреса для базы данных (для версии 5.2 и выше)
					  $table->ipAddress('visitor');
					  //Эквивалент JSON для базы данных
					  $table->json('options');
					  //Эквивалент JSONB для базы данных
					  $table->jsonb('options2');
					  //Эквивалент LONGTEXT для базы данных
					  $table->longText('description');
					  //Эквивалент MAC-адреса для базы данных (для версии 5.2 и выше)
					  $table->macAddress('device');
					  //Инкрементный ID (первичный ключ), использующий эквивалент "UNSIGNED MEDIUM INTEGER" (для версии 5.3 и выше)
					  //$table->mediumIncrements('id');
					  //Эквивалент MEDIUMINT для базы данных
					  $table->mediumInteger('numbers');
					  //Эквивалент MEDIUMTEXT для базы данных
					  $table->mediumText('description2');
					  //Добавление столбца taggable_id INTEGER (для версии 5.3 
					  //и выше Unsigned INTEGER) и taggable_type STRING
					  $table->morphs('taggable');
					  //Аналогично morphs(), но разрешено значение NULL (для версии 5.3 и выше)
					  $table->nullableMorphs('taggable2');
					  //Аналогично timestamps(), но разрешено значение NULL
					  //$table->nullableTimestamps();
					  //Добавление столбца remember_token VARCHAR(100) NULL
					  $table->rememberToken();
					  //Инкрементный ID (первичный ключ), использующий эквивалент "UNSIGNED SMALL INTEGER" (для версии 5.3 и выше)
					  //$table->smallIncrements('id');
					  //Эквивалент SMALLINT для базы данных
					  //$table->smallInteger('votes3');
					  //Добавление столбца deleted_at для мягкого удаления (для версии 5.3 и выше разрешено значение NULL)
					  $table->softDeletes();
					  //Эквивалент VARCHAR с длинной
					  $table->string('name2', 100);
					  //Эквивалент TEXT для базы данных
					  $table->text('description3');
					  //Эквивалент TIME для базы данных
					  $table->time('sunrise');
					  //Эквивалент TIME (с часовым поясом) для базы данных (для версии 5.2 и выше)
					  $table->timeTz('sunrise2');
					  //Эквивалент TINYINT для базы данных
					  $table->tinyInteger('numbers11');
					  //Эквивалент TIMESTAMP для базы данных
					  $table->timestamp('added_on');
					  //Эквивалент TIMESTAMP (с часовым поясом) для базы данных (для версии 5.2 и выше)
					  $table->timestampTz('added_on2');
					  //Добавление столбцов created_at и updated_at (для версии 5.3 и выше разрешено значение NULL)
					  //$table->timestamps();
					  //Добавление столбцов created_at и updated_at (с часовым поясом), 
					  //для которых разрешено значение NULL (для версии 5.3 и выше)
					  //$table->timestampsTz();
					  //Эквивалент Unsigned BIGINT для базы данных (для версии 5.3 и выше)
					  $table->unsignedBigInteger('votes5');
					  //Эквивалент Unsigned INT для базы данных (для версии 5.3 и выше)
					  $table->unsignedInteger('votes6');
					  //Эквивалент Unsigned MEDIUMINT для базы данных (для версии 5.3 и выше)
					  $table->unsignedMediumInteger('votes7');
					  //Эквивалент Unsigned SMALLINT для базы данных (для версии 5.3 и выше)
					  $table->unsignedSmallInteger('votes8');
					  //Эквивалент Unsigned TINYINT для базы данных (для версии 5.3 и выше)
					  $table->unsignedTinyInteger('votes9');
					  //Эквивалент UUID для базы данных
					  $table->uuid('id2');
					  
					  
					  //Модификаторы столбцов
					  //Помещает столбец "после" указанного столбца (только MySQL)
					  //$table->string('column1')->after('email');
					  //Добавляет комментарий в столбец (для версии 5.2 и выше)
					   $table->string('column1')->comment('Комментарий');
					   //Указывает значение "по умолчанию" для столбца
					   $table->string('column2')->default('default');
					   //Помещает столбец "первым" в таблице (только MySQL)
					   $table->string('first')->first();
					   //Разрешает вставлять значения NULL в столбец
					   $table->string('nullable')->nullable();
					  //Делает столбцы integer беззнаковыми UNSIGNED
					  $table->smallInteger('votes3')->unsigned();
					});
					
					//Измнение атрибутов столбцов
					Schema::table('test', function (Blueprint $table) {
								  $table->string('name', 50)->nullable()->change();
								});
					//Переименование столбцов			
					Schema::table('test', function (Blueprint $table) {
								  $table->renameColumn('name', 'newName');
								});
								
					//Удаление столбцов
					Schema::table('test', function (Blueprint $table) {
								  $table->dropColumn('votes');
								});
								
					//Вы можете удалить несколько столбцов таблицы, передав массив их имён в метод dropColumn():
					Schema::table('test', function (Blueprint $table) {
								  $table->dropColumn(['votes2', 'visitor']);
								});
								
					//Создание индексов
					
					//Для создания индекса мы можем просто сцепить метод unique() с определением столбца:
					//Schema::table('test', function (Blueprint $table) {
					//			  $table->string('email')->unique();
					//			});
								
					//Другой вариант — создать индекс после определения столбца. Например:
					Schema::table('test', function (Blueprint $table) {
								  $table->unique('email');
								});
					//Вы можете даже передать массив столбцов в метод index() для создания сложного индекса:
					Schema::table('test', function (Blueprint $table) {
							//	  $table->index(['account_id', 'created_at']);
								});
					
					Schema::table('test', function (Blueprint $table) {
								//Добавление первичного ключа
								  $table->string('id');
								  $table->primary('id');
								  //Добавление составных ключей
								  $table->string('last');
								  //$table->primary(['first', 'last']);
								  //Добавление своего имени индекса (для версии 5.2 и выше)
								   $table->string('state');
								  //$table->unique('state', 'my_index_name');
								  //Добавление составного уникального индекса (для версии 5.3 и выше)
								  $table->unique(['first', 'last']);
								  //Добавление базового индекса
								  $table->index('state');
								});	

					//Удаление индексов	
					Schema::table('test', function (Blueprint $table) {
								//Удаление первичного ключа из таблицы "test"
								$table->dropPrimary('test_id_primary');
								//Удаление уникального индекса из таблицы "test"
								$table->dropUnique('test_email_unique');
								//Удаление базового индекса из таблицы "test"
								$table->dropIndex('test_state_index');
								});	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
		Schema::dropIfExists('newTest');
    }
}
