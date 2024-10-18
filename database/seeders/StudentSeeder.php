<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data siswa
        $students = [
            [
                'name' => 'Andi Setiawan',
                'nis' => '123456',
                'gender' => 'Laki-laki',
                'date_of_birth' => '2005-05-15',
                'status' => 'Aktif',
                'class' => 'X A',
            ],
            [
                'name' => 'Siti Aminah',
                'nis' => '123457',
                'gender' => 'Perempuan',
                'date_of_birth' => '2005-07-22',
                'status' => 'Aktif',
                'class' => 'X A',
            ],
            [
                'name' => 'Budi Santoso',
                'nis' => '123458',
                'gender' => 'Laki-laki',
                'date_of_birth' => '2005-09-30',
                'status' => 'Aktif',
                'class' => 'X A',
            ],
            [
                'name' => 'Dewi Lestari',
                'nis' => '123459',
                'gender' => 'Perempuan',
                'date_of_birth' => '2005-12-10',
                'status' => 'Aktif',
                'class' => 'X A',
            ],
            [
                'name' => 'Rudi Hartono',
                'nis' => '123460',
                'gender' => 'Laki-laki',
                'date_of_birth' => '2005-11-05',
                'status' => 'Tidak Aktif',
                'class' => 'X A',
            ],
        ];

        // Menambahkan data siswa ke dalam database
        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
