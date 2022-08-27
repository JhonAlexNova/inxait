<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\DepartamentoRepository;
use App\Repositories\UsuarioRepository;
use App\Repositories\GanadorSorteoRepository;

class WelcomeController extends Controller
{
   
    protected $departamentosRepositories;
    protected $usuarioRepository;
    private $ganadorSorteoRepository;

    public function __construct(
        DepartamentoRepository $departamentoRepo,
        UsuarioRepository $usuarioRepo,
        GanadorSorteoRepository $ganadorSorteoRepo
    ){
        $this->departamentosRepositories = $departamentoRepo;
        $this->usuarioRepository = $usuarioRepo;
        $this->ganadorSorteoRepository = $ganadorSorteoRepo;
    }

    public function index()
    {
        $departamentos = $this->departamentosRepositories->all();
        $usuarios = $this->usuarioRepository->all();

        $ganadores = $this->ganadorSorteoRepository->withRelations();



        $backpack = [
            'departamentos' => $departamentos,
            'usuarios' => $usuarios,
            'ganadores' => $ganadores
        ];

        return view('welcome',$backpack);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
