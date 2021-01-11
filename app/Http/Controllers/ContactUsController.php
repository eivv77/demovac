<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUs\ContactUsCreateRequest;
use App\Models\ContactUs;
use App\Traits\ApiResponder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactUsController extends Controller
{
    use ApiResponder;

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function index(Request $request): JsonResponse
    {
        $this->validate($request, [
            'per_page' => 'nullable|integer'
        ]);

        $contacts = ContactUs::orderBy('id', 'desc')
            ->paginate($request->get('per_page'));

        return $this->success('List', $contacts);
    }

    /**
     * @param ContactUsCreateRequest $request
     * @return JsonResponse
     * @throws \Anik\Form\ValidationException
     */
    public function store(ContactUsCreateRequest $request): JsonResponse
    {
        //$validated = $request->validate();


        //dd($request->all());
        //return $this->success($request->get('name'));
        //dd($request->all());
        //dd($request);

        $contact = new ContactUs();
        $contact->fill([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ])->save();

        return $this->success(trans('messages.saved'), [], 201);
    }
}
