<?php

namespace App\Http\Controllers;

use App\Models\comment;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->post();
        $data['accountid'] = 2;
        comment::Create($data);
        $account = $request->session('');
        return redirect('/details/index/' . $data['otoid'])->with($data);
    }
}
