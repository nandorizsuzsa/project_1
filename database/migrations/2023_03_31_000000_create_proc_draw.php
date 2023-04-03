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
            CREATE PROCEDURE proc_draw (
                    IN email VARCHAR(60),
                       param VARCHAR(20))
            BEGIN
                if (param REGEXP '^[0-9]+$' = 1) THEN
                    SELECT
				drawings.id as drawing_id,
				drawings.drawing_name,
				drawings.created_at,
				d_s.shape_id as shape_id,
				d_s.x_coordinate,
				d_s.y_coordinate,
				shapes.shape_type_id,
                                shapes.color_id,
				colors.color,
				colors.hex,
				shapes.parameters,
				drawings.user_id,
				user.name as user_name

                    FROM drawing_shapes as d_S

                    LEFT JOIN shapes ON shapes.id=d_s.shape_id
                    LEFT JOIN colors ON colors.id=shapes.color_id
                    LEFT JOIN shape_types AS s_t ON s_t.id=shapes.shape_type_id
                    LEFT JOIN drawings ON drawings.id=d_s.drawing_id
                    LEFT JOIN user ON user.id=drawings.user_id
			
                    WHERE user.email=email and drawings.id=param;

                else

                    SELECT
                            drawings.id as drawing_id,
                            drawings.drawing_name,
                            drawings.created_at,
                            count(d_s.id) as count_shapes,

                            drawings.user_id,
                            user.name as user_name

                    FROM drawings

                    LEFT JOIN user ON user.id=drawings.user_id
                    LEFT JOIN drawing_shapes AS d_s ON d_s.drawing_id=drawings.id

                    WHERE user.email=email
                    GROUP BY drawings.id;

		end if;
            END
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("DROP VIEW `proc_draw`");
    }

};
