<?php namespace App\Database\Seeds;

class Usuarios extends \CodeIgniter\Database\Seeder
{
        public function run()
        {

            $data = [
                'user' => 'Pablo',
                'senha'    => md5('141284'),     
                ];

            $this->db->table('usuarios')->insert($data);
        }
}