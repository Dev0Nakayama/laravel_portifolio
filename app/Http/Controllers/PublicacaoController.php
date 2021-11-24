<?php

namespace App\Http\Controllers;

use App\Models\Publicacao;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    public function index()
    {
        $publicacao = Publicacao::all();
        return view('Publicacao',['publicacao'=>$publicacao]);
    }

    public function create()
    {
        return(view('publicacaoAdd'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'descricao' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
        }
        
        Publicacao::create($input);
     
        return redirect()->route('Home')->with('success','Product create successfully');
    }

    public function destroy($id)
    {
        Publicacao::destroy($id);
        return redirect()->route('Home');
    }
}
