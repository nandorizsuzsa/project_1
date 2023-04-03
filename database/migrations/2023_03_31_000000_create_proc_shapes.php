<?php

use Illuminate\Database\Migrations\Migration;

/**
 * Shapes tábla VIEW a lekérdezésekhez
 * 
 */

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("
            CREATE PROCEDURE proc_shapes (
                    IN email VARCHAR(40),
                    IN param VARCHAR(20))
            BEGIN
                    SELECT *
                    FROM view_shapes_query

                    WHERE view_shapes_query.user_email= email AND

                    case 
                        when upper(param)= 'ALL'  then true
                        when param REGEXP '^[0-9]+$' = 1 then shape_id=param
                        else trim(upper(shape_code_name))=trim(upper(param))
                    end;

            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("DROP VIEW `proc_shapes`");
    }

};





