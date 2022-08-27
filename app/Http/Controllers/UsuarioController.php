<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;

use App\Repositories\UsuarioRepository;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsuarioController extends AppBaseController
{
    /** @var UsuarioRepository $usuarioRepository*/
    private $usuarioRepository;

    public function __construct(UsuarioRepository $usuarioRepo)
    {
        $this->usuarioRepository = $usuarioRepo;
    }

    /**
     * Display a listing of the Usuario.
     *
     * @param Request $request
     *
     * @return Response
     */

   


    public function index(Request $request)
    {
        $usuarios = $this->usuarioRepository->all();

        return view('usuarios.index')
            ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new Usuario.
     *
     * @return Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created Usuario in storage.
     *
     * @param CreateUsuarioRequest $request
     *
     * @return Response
     */
    public function store(CreateUsuarioRequest $request)
    {
        $input = $request->all();

        $usuario = $this->usuarioRepository->create($input);

        Flash::success('Usuario creado correctamente.');

        return redirect()->back();
    }

    /**
     * Display the specified Usuario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified Usuario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified Usuario in storage.
     *
     * @param int $id
     * @param UpdateUsuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsuarioRequest $request)
    {
       
    }

    /**
     * Remove the specified Usuario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
       
    }
}
