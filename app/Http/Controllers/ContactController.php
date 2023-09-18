<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitContactFormRequest;
use App\Mail\SendMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submit(SubmitContactFormRequest $request)
    {
        $emails = ['joana@getweb.lt'];
        $validInputs = $request->validated();

        try {
            $this->sendMessageForEachEmail($emails, $validInputs);

            return redirect(route('contact'))
                ->with('success', __('Kontaktinė forma sėkmingai pateikta.'));
        } catch (Exception $exception) {
            return back()
                ->with('error', $exception->getMessage());
        }
    }

    private function sendMessageForEachEmail(array $emails, array $validInputs): void
    {
        foreach ($emails as $email) {
            Mail::to($email)->send(new SendMessageMail($validInputs));
        }
    }
}
