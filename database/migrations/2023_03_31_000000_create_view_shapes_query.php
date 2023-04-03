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
        DB::statement(
            "CREATE VIEW `view_shapes_query` AS
                    SELECT
                            shapes.id as shape_id,
                            st.name as shape_name,
                            st.code_name as shape_code_name,
                            shapes.color_id,
                            colors.color,
                            colors.hex,
                            shapes.parameters,
                            st.width,
                            st.heigth,
                            st.radius,
                            shapes.user_id as user_id,
                            user.name as user_name,
                            user.email as user_email,
                            shapes.created_at,
                            shapes.updated_at

                    FROM shapes

                    LEFT JOIN user ON user.id=shapes.user_id
                    LEFT JOIN shape_types AS st ON st.id=shapes.shape_type_id
                    LEFT JOIN colors ON colors.id=shapes.color_id"
        );         
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("DROP VIEW `view_shapes_query`");
    }

};





