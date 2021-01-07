<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmailRequest;
use App\Http\Repositories\EmailRepositoryInterface;

class EmailController extends Controller
{
    public function getForm()
    {
        return \view('email');
    }

    public function postForm(EmailRequest $request, EmailRepositoryInterface $emailRepository)
    {
        $emailRepository->save($request->input('email'));

        return \view('email_ok');
    }
}
