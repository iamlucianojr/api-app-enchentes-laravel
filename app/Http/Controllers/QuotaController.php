<?php

namespace app\Http\Controllers;

use App\Repositories\QuotaRepository;
use Illuminate\Http\Request;
use Response;

/**
 * Class QuotaController.
 */
class QuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param QuotaRepository $repository
     *
     * @return Response
     */
    public function index(QuotaRepository $repository)
    {
        return $repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param QuotaRepository $repository
     * @param Request         $request
     *
     * @return Response
     */
    public function store(QuotaRepository $repository, Request $request)
    {
        return $repository->create($request->json()->all());
    }

    /**
     * Display the specified resource.
     *
     * @param QuotaRepository $repository
     * @param int             $id
     *
     * @return Response
     */
    public function show(QuotaRepository $repository, $id)
    {
        return $repository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param QuotaRepository $repository
     * @param Request         $request
     * @param int             $id
     *
     * @return Response
     */
    public function update(QuotaRepository $repository, Request $request, $id)
    {
        $quota = $repository->find($id);
        $aRequest = $request->json()->all();
        foreach ($aRequest as $key => $value) {
            $quota->setAttribute($key, $value);
        }

        $quota->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param QuotaRepository $repository
     * @param int             $id
     *
     * @return Response
     */
    public function destroy(QuotaRepository $repository, $id)
    {
        $repository->delete($id);
    }
}
