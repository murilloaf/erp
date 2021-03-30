<?php

namespace Modules\Nfe\Http\Controllers;

use App\Abstracts\Http\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Main extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $invoices = 
        [
            [
                'order' => '12345',
                'invoice' => '4325 ... 5432 6347',
                'client' => 'Davidson Bruno',
                'resume' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada.'
            ],
            [
                'order' => '23456',
                'invoice' => '3437 ... 4837 0274',
                'client' => 'Ricardo Balthazar',
                'resume' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada.'
            ],
            [
                'order' => '34567',
                'invoice' => '3435 ... 1037 2048',
                'client' => 'Murillo Souza',
                'resume' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada.'
            ],
        ];
        //return $this->response('nfe::index');
        return view('nfe::index', ['invoices' => $invoices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('nfe::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('nfe::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('nfe::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
