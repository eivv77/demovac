<?php /** @noinspection PhpInconsistentReturnPointsInspection */

namespace App\Http\Controllers;

use App\Models\VacancyApply;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class VacancyApplyController extends Controller
{
    use ApiResponder;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $vacanciesApply = VacancyApply::all();

        return $this->success('List', $vacanciesApply);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $vacancyApply = VacancyApply::create([
            'vacancy_id' => $request->get('vacancy_id'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'message' => $request->get('message'),

        ]);

        return $this->success('list', $vacancyApply);
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
