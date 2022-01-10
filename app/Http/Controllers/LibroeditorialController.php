<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Editorial;
use App\Models\Libroeditorial;
use Illuminate\Http\Request;

/**
 * Class LibroeditorialController
 * @package App\Http\Controllers
 */
class LibroeditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libroeditorials = Libroeditorial::paginate();

        return view('libroeditorial.index', compact('libroeditorials'))
            ->with('i', (request()->input('page', 1) - 1) * $libroeditorials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libroeditorial = new Libroeditorial();
        $libro=Libro::pluck('nombre', 'isbn');
        $editorial=Editorial::pluck('nombre', 'id');
        return view('libroeditorial.create', compact('libroeditorial','libro','editorial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Libroeditorial::$rules);

        $libroeditorial = Libroeditorial::create($request->all());

        return redirect()->route('libroeditorials.index')
            ->with('success', 'Libroeditorial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libroeditorial = Libroeditorial::find($id);

        return view('libroeditorial.show', compact('libroeditorial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libroeditorial = Libroeditorial::find($id);
        $libro=Libro::pluck('nombre', 'isbn');
        $editorial=Editorial::pluck('nombre', 'id');
        return view('libroeditorial.edit', compact('libroeditorial','libro','editorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Libroeditorial $libroeditorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libroeditorial $libroeditorial)
    {
        request()->validate(Libroeditorial::$rules);

        $libroeditorial->update($request->all());

        return redirect()->route('libroeditorials.index')
            ->with('success', 'Libroeditorial updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $libroeditorial = Libroeditorial::find($id)->delete();

        return redirect()->route('libroeditorials.index')
            ->with('success', 'Libroeditorial deleted successfully');
    }
}
