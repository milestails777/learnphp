<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function view()
    {
        $user = $this->findUser();
        if (!$user) {
            return;
        }

        view('users/view', compact('user'));
    }

    public function edit()
    {
        $user = $this->findUser();
        if (!$user) {
            return;
        }

        view('users/edit', compact('user'));
    }

    public function update()
    {
        $user = $this->findUser();
        if (!$user) {
            return;
        }

        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        if ($name === '' || $email === '') {
            return redirect('/admin/users/edit?id=' . $user->id);
        }

        $user->name = $name;
        $user->email = $email;
        $password = $_POST['password'] ?? '';
        if ($password !== '') {
            $user->password = password_hash($password, PASSWORD_BCRYPT);
        }
        $user->save();

        redirect('/admin/users');
    }

    public function delete()
    {
        $user = $this->findUser();
        if (!$user) {
            return;
        }

        $user->delete();
        redirect('/admin/users');
    }

    private function findUser(): ?User
    {
        $id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1],
        ]);
        $user = $id ? User::find($id) : null;

        if (!$user) {
            http_response_code(404);
            echo '404';
            return null;
        }

        return $user;
    }
}
