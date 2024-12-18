<?php

require_once '../models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function registerUser($data) {
        if (isset($data['name'], $data['email'], $data['password'], $data['confirm_password'], $data['role_id'])) {
            if ($data['password'] === $data['confirm_password']) {
                return $this->userModel->register($data['name'], $data['email'], $data['password'], $data['role_id']);
            } else {
                return ['status' => 'error', 'message' => 'Contraseña incorrecta.'];
            }
        } else {
            return ['status' => 'error', 'message' => 'Rellene todos los espacios.'];
        }
    }

    public function loginUser($data) {
        if (isset($data['email'], $data['password'])) {
            $user = $this->userModel->login($data['email'], $data['password']);
            if ($user) {
                return ['status' => 'success', 'user' => $user];
            } else {
                return ['status' => 'error', 'message' => 'Contraseña incorrecta.'];
            }
        } else {
            return ['status' => 'error', 'message' => 'Rellene todos los espacios.'];
        }
    }
}
?>