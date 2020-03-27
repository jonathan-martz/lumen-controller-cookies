<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/**
 * Class CookiesController
 * @package App\Http\Controllers
 * @todo create provider
 * @todo add route.php
 */
class CookiesController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function select(Request $request)
    {
        $validation = $this->validate($request, []);

        $cookies = DB::table('cookies')->get();

        $this->addData('cookies', $cookies);
        $this->addMessage('success', 'Cookies loaded.');

        return $this->getResponse();
    }
}
