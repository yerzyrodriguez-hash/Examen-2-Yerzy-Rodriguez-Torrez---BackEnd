<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Empleado::create([
        'nombre' => 'Ana',
        'apellido' => 'García',
        'correo' => 'ana@correo.com',
        'salario' => 3500.00]);
        Empleado::create([
        'nombre' => 'Luis',
        'apellido' => 'Martinez',
        'correo' => 'luis@correo.com',
        'salario' => 4200.00]);
        Empleado::create([
        'nombre' => 'Carla',
        'apellido' => 'Perez',
        'correo' => 'carla@correo.com',
        'salario' => 4100.00]);
    }
}
