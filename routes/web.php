<?php

// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Venda;
use App\Models\Fornecedores;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $cliente = Cliente::all();
    $vendas = Venda::all();
    $fornecedores = Fornecedores::all();
    return view('welcome', ['cliente' => $cliente, 'venda' => $vendas, 'fornecedores' => $fornecedores]);
});
Route::get('/detalhes', function () {
    $cliente = Cliente::all();
    $vendas = Venda::all();
    $fornecedores = Fornecedores::all();
    return view('detalhes', ['cliente' => $cliente, 'venda' => $vendas, 'fornecedor' => $fornecedores]);
});


Route::post('/cadastro-cliente', function (Request $request) {
    Cliente::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'email' => $request->email,
    ]);
    return view('clientes', ['cliente' => Cliente::all()]);
    // dd($request->nome);
});
Route::get('/mostrar-cliente/{cliente_id}', function ($cliente_id) {
    $cliente = Cliente::findOrFail($cliente_id);
    echo $cliente->nome . '<br>';
    echo $cliente->cpf . '<br>';
    echo $cliente->email . '<br>';
    // dd(Cliente::findOrFail($cliente_id));
});
//mostrar todos os clientes
Route::get('/mostrar-clientes', function () {
    $cliente = Cliente::all();

    return view('clientes', ['cliente' => $cliente]);

    // dd(Cliente::findOrFail($cliente_id));
});
Route::get('/editar-cliente/{cliente_id}', function ($cliente_id) {
    $cliente = Cliente::findOrFail($cliente_id);
    return view('editar_cliente', ['cliente' => $cliente]);
});
Route::put('atualizar-cliente/{cliente_id}', function (Request $request, $cliente_id) {
    $cliente = Cliente::findOrFail($cliente_id);
    $cliente->update([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'email' => $request->email
    ]);
    return view('clientes', ['cliente' => Cliente::all()]);

});
//Deletar cliente
Route::get('/deletar-cliente/{cliente_id}', function ($cliente_id) {
    $cliente = Cliente::findOrFail($cliente_id);
    $cliente->delete();
    return view('clientes', ['cliente' => Cliente::all()]);
});

// ROTA DE VENDAS ------------------
Route::post('/realizar-venda', function (Request $request) {
    Venda::create([
        'codigo_produto' => $request->codigo_produto,
        'nome_produto' => $request->nome_produto,
        'descricao_produto' => $request->descricao_produto,
        'preco_produto' => $request->preco_produto,
        'quantidade_produto' => $request->quantidade_produto
    ]);
    return view('vendas', ['venda' => Venda::all()]);
    // echo 'Venda realizada com sucesso!';
    // dd($request->nome);
});
// MOSTRAR VENDA
Route::get('/mostrar-vendas', function () {
    $vendas = Venda::all();
    return view('vendas', ['venda' => $vendas]);
    // dd(Cliente::findOrFail($cliente_id));
});
// EDITAR VENDA
Route::get('/editar-venda/{venda_id}', function ($venda_id) {
    $venda = Venda::findOrFail($venda_id);
    return view('editar_venda', ['venda' => $venda]);
});
Route::put('atualizar-venda/{venda_id}', function (Request $request, $venda_id) {
    $venda = Venda::findOrFail($venda_id);
    $venda->update([
        'codigo_produto' => $request->codigo_produto,
        'nome_produto' => $request->nome_produto,
        'descricao_produto' => $request->descricao_produto,
        'preco_produto' => $request->preco_produto,
        'quantidade_produto' => $request->quantidade_produto
    ]);
    return view('vendas', ['venda' => Venda::all()]);
});
// DELETAR VENDA
Route::get('/deletar-venda/{venda_id}', function ($venda_id) {
    $venda = Venda::findOrFail($venda_id);
    $venda->delete();
    return view('vendas', ['venda' => Venda::all()]);
});



// ROTA DE Fornecedores ------------------
Route::post('/cadastrar-fornecedor', function (Request $request) {
    Fornecedores::create([
        'nome_fornecedor' => $request->nome_fornecedor,
        'cnpj_fornecedor' => $request->cnpj_fornecedor,
        'tipo_fornecedor' => $request->tipo_fornecedor,
        'email_fornecedor' => $request->email_fornecedor,
        'numero_fornecedor' => $request->numero_fornecedor
    ]);
    return view('fornecedores', ['fornecedor' => Fornecedores::all()]);
    // echo 'Venda realizada com sucesso!';
    // dd($request->nome);
});
Route::get('/mostrar-fornecedores', function () {
    $fornecedores = Fornecedores::all();
    return view('fornecedores', ['fornecedor' => $fornecedores]);
    // dd(Cliente::findOrFail($cliente_id));
});
Route::get('/editar-fornecedor/{fornecedor_id}', function ($fornecedor_id) {
    $fornecedor = Fornecedores::findOrFail($fornecedor_id);
    return view('editar_fornecedor', ['fornecedor' => $fornecedor]);
});
Route::put('atualizar-fornecedor/{fornecedor_id}', function (Request $request, $fornecedor_id) {
    $fornecedor = Fornecedores::findOrFail($fornecedor_id);
    $fornecedor->update([
        'nome_fornecedor' => $request->nome_fornecedor,
        'cnpj_fornecedor' => $request->cnpj_fornecedor,
        'tipo_fornecedor' => $request->tipo_fornecedor,
        'email_fornecedor' => $request->email_fornecedor,
        'numero_fornecedor' => $request->numero_fornecedor
    ]);
    return view('fornecedores', ['fornecedor' => Fornecedores::all()]);
});
Route::get('/deletar-fornecedor/{fornecedor_id}', function ($fornecedor_id) {
    $fornecedor = Fornecedores::findOrFail($fornecedor_id);
    $fornecedor->delete();
    return view('fornecedores', ['fornecedor' => Fornecedores::all()]);
});
