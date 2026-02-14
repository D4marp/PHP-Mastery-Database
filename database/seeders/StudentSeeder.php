<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'nim' => '2024001',
            'name' => 'Ade Maulana',
            'email' => 'ade.maulana@student.edu',
            'phone' => '081234567890',
            'address' => 'Jl. Merdeka No. 10, Jakarta',
            'major' => 'Computer Science'
        ]);

        Student::create([
            'nim' => '2024002',
            'name' => 'Siti Nurhaliza',
            'email' => 'siti.nurhaliza@student.edu',
            'phone' => '082345678901',
            'address' => 'Jl. Gatot Subroto, Bandung',
            'major' => 'Information Technology'
        ]);

        Student::create([
            'nim' => '2024003',
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@student.edu',
            'phone' => '083456789012',
            'address' => 'Jl. Ahmad Yani, Surabaya',
            'major' => 'Software Engineering'
        ]);

        Student::create([
            'nim' => '2024004',
            'name' => 'Ratna Wijaya',
            'email' => 'ratna.wijaya@student.edu',
            'phone' => '084567890123',
            'address' => 'Jl. Diponegoro, Yogyakarta',
            'major' => 'Database Management'
        ]);

        Student::create([
            'nim' => '2024005',
            'name' => 'Hendra Kurniawan',
            'email' => 'hendra.kurniawan@student.edu',
            'phone' => '085678901234',
            'address' => 'Jl. Sudirman, Medan',
            'major' => 'Web Development'
        ]);
    }
}

