<?php namespace App\Database\Seeds;

class Usuarios extends \CodeIgniter\Database\Seeder
{
        public function run()
        {

            $data = [
                'user' => 'admin',
                'senha'    => md5('316153'),     
                ];

            $this->db->table('usuarios')->insert($data);
        }
}