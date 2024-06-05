<?php
    namespace App\Database\Seeds;
    class Noticias extends \CodeIgniter\Database\Seeder {
        public function run() {
            $data = [
                'titulo' => 'Venezuela diz que porta-aviões dos EUA no Caribe é “ameaça à paz 
                regional”',
                'descricao' => 'Em um novo episódio de tensão entre Estados Unidos, 
                Guiana e Venezuela, o ministro da Defesa venezuelano, Vladimir 
                Padrino López, considerou a presença do porta-aviões americano USS 
                George Washington no Caribe uma ameaça à paz regional. Ele criticou o anúncio do envio de aeronaves F-18 para sobrevoar a capital da Guiana, Georgetown, e seus arredores.

                Na opinião de Padrino López, trata-se de “provocações” do Comando Sul dos EUA patrocinadas
                 pelo governo da Guiana, que, segundo ele, assumiu o papel de “nova colônia 
                 americana”.',
                'autor' => 'Pablo Oliveira'
            ];
            #$this->db->query('INSERT INTO noticias (titulo, descricao, autor) VALUES(:titulo:, :descricao:, :autor:)', $data);
            $this->db->table('noticias')->insert($data);
        }
    }