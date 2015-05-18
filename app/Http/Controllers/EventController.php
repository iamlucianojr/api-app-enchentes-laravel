<?php namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;
use Response;

/**
 * Class EventController
 * @package App\Http\Controllers
 */
class EventController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param EventRepository $repository
     * @param Request $request
     * @return Response
     */
	public function store(EventRepository $repository, Request $request)
	{

//        $this->validate($request, [
//                'title'         => 'required|max:255',
//                'description'   => 'required',
//                'latitude'      => 'required|max:100',
//                'longitude'     => 'required|max:100',
//                'type'          => 'required',
//            ],
//            [
//                'required'  => 'The :attribute field is required',
//                'max'       => 'The :attribute field having a max limit of length :max'
//            ]
//        );
		return $repository->create($request->json()->all());
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
	 * Update the specified resource in storage.
	 *
	 * @param EventRepository $repository
	 * @param Request $request
	 * @param  int $id
	 * @return Response
	 */
	public function update(EventRepository $repository, Request $request, $id)
	{
        $event = $repository->find($id);
        $aRequest = $request->json()->all();
        foreach ($aRequest as $key => $value) {
            $event->setAttribute($key, $value);
        }

        $event->save();
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param EventRepository $repository
     * @param  int $id
     * @return Response
     */
	public function destroy(EventRepository $repository, $id)
	{
        $repository->delete($id);
	}

}
