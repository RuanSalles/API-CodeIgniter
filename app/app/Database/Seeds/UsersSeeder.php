<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Ana Lima', 'email' => 'ana.lima@example.com'],
            ['name' => 'Bruno Costa', 'email' => 'bruno.costa@example.com'],
            ['name' => 'Camila Souza', 'email' => 'camila.souza@example.com'],
            ['name' => 'Diego Santos', 'email' => 'diego.santos@example.com'],
            ['name' => 'Eduarda Nunes', 'email' => 'eduarda.nunes@example.com'],
            ['name' => 'Felipe Alves', 'email' => 'felipe.alves@example.com'],
            ['name' => 'Gabriela Rocha', 'email' => 'gabriela.rocha@example.com'],
            ['name' => 'Henrique Melo', 'email' => 'henrique.melo@example.com'],
            ['name' => 'Isabela Dias', 'email' => 'isabela.dias@example.com'],
            ['name' => 'João Pedro', 'email' => 'joao.pedro@example.com'],
            ['name' => 'Karen Ribeiro', 'email' => 'karen.ribeiro@example.com'],
            ['name' => 'Lucas Martins', 'email' => 'lucas.martins@example.com'],
            ['name' => 'Mariana Gomes', 'email' => 'mariana.gomes@example.com'],
            ['name' => 'Nathan Oliveira', 'email' => 'nathan.oliveira@example.com'],
            ['name' => 'Olívia Carvalho', 'email' => 'olivia.carvalho@example.com'],
            ['name' => 'Pedro Henrique', 'email' => 'pedro.henrique@example.com'],
            ['name' => 'Quésia Silva', 'email' => 'quesia.silva@example.com'],
            ['name' => 'Rafael Teixeira', 'email' => 'rafael.teixeira@example.com'],
            ['name' => 'Sara Monteiro', 'email' => 'sara.monteiro@example.com'],
            ['name' => 'Tiago Ferreira', 'email' => 'tiago.ferreira@example.com'],
        ];
        foreach ($users as $user) {
            $data = [
                'name'       => $user['name'],
                'email'      => $user['email'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            $this->db->table('users')->insert($data);
        }

    }
}
