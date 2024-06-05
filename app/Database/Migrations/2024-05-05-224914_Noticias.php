<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Noticias extends Migration
{
    public function up()
    {
        $this->forge->addField([ # Comando para iniciar a criação de campos
            'id' => [ #Cria o campo id
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'titulo' => [ # Cria o campo titulo
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'descricao' => [ # Cria o campo descrição
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'autor' => [ # Cria o campo descrição
            'type' => 'VARCHAR',
            'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', TRUE); # Define id como chave primaria
        $this->forge->createTable('noticias'); # Cria a tabela noticias
    }

    public function down() # Campo para excluir itens da tabela ou a tabela
    {
        $this->forge->dropTable('noticias');
    }
}
