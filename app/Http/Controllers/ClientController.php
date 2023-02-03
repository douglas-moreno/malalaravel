<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $clients = Client::where(function ($query) use ($search) {
            if ($search) {
                #$query->where('zip', "$search");
                #$query->orWhere('name', 'LIKE', "%{$search}%");
                $query->Where('name', 'LIKE', "%{$search}%");
            }
        })->paginate();

        return view('clients.index', compact('clients'));
    }

    public function show($id)
    {
        if (!$client = Client::find($id))
            return redirect()->route('client.index');

        return view('clients.show', compact('client'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if (array_key_exists("child", $data))
            $data["child"] = 1;
        else
            $data += ["child" => 0];

        Client::create($data);

        return redirect()->route('client.index')->with('msg', 'Eleitor Criado com Sucesso!');
    }

    public function destroy($id)
    {
        if (!$client = Client::find($id))
            return redirect()->route('client.index');

        $client->delete();

        return redirect()->route('client.index')->with('msg', 'Eleitor Removido com Sucesso!');
    }
}
