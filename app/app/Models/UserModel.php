<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email'];

    protected $returnType = 'array';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'name'  => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email|is_unique[users.email,id,{id}]'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'O nome é obrigatório.',
            'min_length' => 'O nome deve ter no mínimo 3 caracteres.',
            'max_length' => 'O nome deve ter no máximo 100 caracteres.',
        ],
        'email' => [
            'required' => 'O email é obrigatório.',
            'valid_email' => 'O email fornecido não é válido.',
            'is_unique' => 'Este email já está cadastrado.',
        ],
    ];

    protected $skipValidation = false;
}
