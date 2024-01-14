<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $settings = [
            ['id' => 2, 'name_button' => 'Registro Colegio', 'status_button' => '1', 'first_note_max' => '0', 'second_note_max' => '0'],
            ['id' => 3, 'name_button' => 'Registro Profesor', 'status_button' => '1', 'first_note_max' => '0', 'second_note_max' => '0'],
            ['id' => 4, 'name_button' => 'Registro Estudiante', 'status_button' => '1', 'first_note_max' => '0', 'second_note_max' => '0'],
            ['id' => 5, 'name_button' => 'Notas Colegiales', 'status_button' => '1', 'first_note_max' => '50', 'second_note_max' => '50'],
            ['id' => 6, 'name_button' => 'Notas InterColegiales', 'status_button' => '1', 'first_note_max' => '50', 'second_note_max' => '50'],
            ['id' => 7, 'name_button' => 'Download', 'status_button' => '1', 'first_note_max' => '0', 'second_note_max' => '0'],
            ['id' => 8, 'name_button' => 'Respuestas Examen', 'status_button' => '0', 'first_note_max' => '0', 'second_note_max' => '0'],
            ['id' => 9, 'name_button' => 'Respuestas Examen 2', 'status_button' => '0', 'first_note_max' => '0', 'second_note_max' => '0'],
            ['id' => 10, 'name_button' => 'Reset Ingreso', 'status_button' => '0', 'first_note_max' => '0', 'second_note_max' => '0'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
