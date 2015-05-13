<?php namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;

/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{
    protected $model;
	/**
	 * Display a listing of the resource.
	 *
	 * @param EventRepository $repository
	 * @return Response
	 */
	public function index(EventRepository $repository)
	{
		return $repository->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

    /**
     * Store a newly created resource in storage.
     *
     * @param EventRepository $repository
     * @param Request $request
     * @return Response
     */
	public function store(EventRepository $repository, Request $request)
	{
        $parameters = $request->json()->all();

        return $repository->create($parameters);
	}

    /**
     * Display the specified resource.
     *
     * @param EventRepository $repository
     * @param  int $id
     * @return Response
     */
	public function show(EventRepository $repository, $id)
	{
		return $repository->find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
