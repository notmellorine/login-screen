<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

//Tela de login
Route::get('/', function () {
    return view('welcome');
});

//Login do Usuário
Route::post('/login', function(Request $request){
    $user = User::where('email', $request->email_user)->first();

    if ($user && Hash::check($request->password_user, $user->password)) {
        // Autenticado com sucesso
        Auth::login($user); // Faça o login manualmente, se necessário
        $user_id = Auth::id();// Obter o ID do usuário autenticado e armazenar em uma variável
        return redirect()->intended("/perfil-candidato/{$user_id}");
    } else {
        // Autenticação falhou
        echo 'User not found!';
    }
});

//Erro ao encontrar usuário
Route::get('/error', function(){
    return view('error-user');
});

//Perfil do usuário
Route::get('/perfil-candidato/{id}', function($id_user){
    $user = User::findOrFail($id_user);
    $name = $user->name;
    $email = $user->email;
    return view('perfil-candidato', compact('name', 'email'));
});

Route::get('/cadastro', function(){
    return view('cadastro');
});

Route::post('/cadastrar-usuario', function(Request $info){
    User::create([
        'name' => $info->name_user,
        'password' => Hash::make($info->password_user),
        'email' => $info->email_user
    ]);
    echo "User created!";
});
