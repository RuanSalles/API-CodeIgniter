<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class UserController extends ResourceController
{
    protected $modelName = UserModel::class;
    protected $format = 'json';

    // Listar todos os usuários
    public function index()
    {
        $users = $this->model->findAll();
        return $this->respond($users);
    }

    // Buscar usuário por ID
    public function show($id = null)
    {
        $user = $this->model->find($id);
        if (!$user) {
            return $this->failNotFound('Usuário não encontrado');
        }
        return $this->respond($user);
    }

    // Criar usuário
    public function create()
    {
        $data = $this->request->getJSON(true);

        if (!$this->model->insert($data)) {
            return $this->response->setStatusCode(400)->setJSON([
                'error' => $this->model->errors(),
            ]);
        }

        $id = $this->model->getInsertID();
        $user = $this->model->find($id);

        return $this->respondCreated(['message' => 'Usuário criado com sucesso', 'user' => $user]);
    }

    // Atualizar usuário
    public function update($id = null)
    {
        $data = $this->request->getJSON(true); // ou getRawInput()
        if (empty($data)) {
            return $this->response->setStatusCode(400)->setJSON([
                'message' => 'Nenhum dado enviado para atualização.'
            ]);
        }

        $this->model->update($id, $data);

        return $this->respond(['message' => 'Usuário atualizado com sucesso', 'user' => $data]);
    }

    // Deletar usuário
    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->failNotFound('Usuário não encontrado');
        }

        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Usuário deletado com sucesso']);
    }
}
