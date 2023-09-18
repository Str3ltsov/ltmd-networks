<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitContactFormRequest;
use Illuminate\Http\Request;
use Exception;

class ContactController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('contact.index');
    }

    public function submit(SubmitContactFormRequest $request)
    {
        $validInputs = $request->validated();

        try {
            dd($validInputs);
        } catch (Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
