<?php

namespace App\Http\Controllers;

use App\ClientRequest;
use Illuminate\Http\Request;

class CLController extends Controller
{
    public function SendRequest(Request $request){

        $validator = $this->validate($request, [
            'name' => 'required',
            'phone_number' => 'required',
        ],[
            'name.required' => 'Введите Ваше имя',
            'phone_number.required' => 'Введите телефон',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator->errors());
        }
        $name = $request['name'];
        $phone_number = $request['phone_number'];

        $newRequest = new ClientRequest();
        $newRequest['name'] = $name;
        $newRequest['phone_number'] = $phone_number;
        $newRequest->save();
        return redirect()->back()->with('message', 'Ваша заявка успешно отправлена');
    }
}
