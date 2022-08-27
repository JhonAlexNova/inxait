<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGanadorSorteoRequest;
use App\Http\Requests\UpdateGanadorSorteoRequest;
use App\Repositories\GanadorSorteoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;


use App\Repositories\UsuarioRepository;

class GanadorSorteoController extends AppBaseController
{
    /** @var GanadorSorteoRepository $ganadorSorteoRepository*/
    private $ganadorSorteoRepository;
    private $usuarioRepository;

    public function __construct(
        GanadorSorteoRepository $ganadorSorteoRepo,
        UsuarioRepository $usuarioRepo
    )
    {
        $this->ganadorSorteoRepository = $ganadorSorteoRepo;
        $this->usuarioRepository = $usuarioRepo;
    }

    /**
     * Display a listing of the GanadorSorteo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        
    }

    public function seleccionar_ganador(){
        $nuevo_ganador = $this->usuarioRepository->withNuevoGanador(); 
        $attributesGanador = [
            'usuario_id' => $nuevo_ganador->id
        ];
        $this->ganadorSorteoRepository->create($attributesGanador);
        return redirect()->back();
    }


    

    /**
     * Show the form for creating a new GanadorSorteo.
     *
     * @return Response
     */
    public function create()
    {
        return view('ganador_sorteos.create');
    }

    /**
     * Store a newly created GanadorSorteo in storage.
     *
     * @param CreateGanadorSorteoRequest $request
     *
     * @return Response
     */
    public function store(CreateGanadorSorteoRequest $request)
    {
       
    }

    /**
     * Display the specified GanadorSorteo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified GanadorSorteo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified GanadorSorteo in storage.
     *
     * @param int $id
     * @param UpdateGanadorSorteoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGanadorSorteoRequest $request)
    {
        
    }

    /**
     * Remove the specified GanadorSorteo from storage.
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
