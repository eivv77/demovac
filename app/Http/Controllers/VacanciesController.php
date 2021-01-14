<?php /** @noinspection PhpInconsistentReturnPointsInspection */

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Vacancy;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    use ApiResponder;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $vacancies = Vacancy::all();

        return $this->success('List', $vacancies);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
//        $vacancy->fill([
//            'job_description' => $request->get('job_description'),
//            'skills_required' => $request->get('skills_required'),
//            'offered_salary' => $request->get('offered_salary'),
//            'experience' => $request->get('experience'),
//            'gender' => $request->get('gender'),
//        ])->save();
            $vacancy = Vacancy::create([
                'category_id' => $request->get('category_id'),
                'level_id' => $request->get('level_id'),
                'industry_id' => $request->get('industry_id'),
                'qualification_id' => $request->get('qualification_id'),
                'job_description' => $request->get('job_description'),
                'skills_required' => $request->get('skills_required'),
                'offered_salary' => $request->get('offered_salary'),
                'experience' => $request->get('experience'),
                'gender' => $request->get('gender'),
             ]);

           return $this->success('list', $vacancy);
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
