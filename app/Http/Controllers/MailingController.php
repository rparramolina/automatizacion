<?php

namespace App\Http\Controllers;

use App\Models\MailingList;
use App\Models\Productor;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $productores = Productor::all();
        return view('mailing.productors', compact('productores'));
    }

    public function edit($id)
    {

        $data = MailingList::whereProductorId($id)->first();
        $productor = Productor::find($id);
        $productor_name = ucwords(strtolower($productor->productor_nombre));

        $mailing_list = "";
        if ($data != null) {
            $mailing_list = $data->mailing_list;
        }

        return view('mailing.form', compact('mailing_list', 'productor_name', 'id'));
    }

    public function update($id, Request $request)
    {
        //dd($request->input());

        $exist = [
            'productor_id' => $id
        ];
        $create = [
            'mailing_list' => $request->mailing_list
        ];
        $mailing_list = MailingList::updateOrCreate($exist,$create);


        return redirect(url('/productor/edit/'.$id));

    }
}
