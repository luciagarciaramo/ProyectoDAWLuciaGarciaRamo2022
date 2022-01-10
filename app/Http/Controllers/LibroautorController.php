<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Autor;
use App\Models\Libroautor;
use Illuminate\Http\Request;

/**
 * Class LibroautorController
 * @package App\Http\Controllers
 */
class LibroautorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libroautors = Libroautor::paginate();

        return view('libroautor.index', compact('libroautors'))
            ->with('i', (request()->input('page', 1) - 1) * $libroautors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libroautor = new Libroautor();
        $libro=Libro::pluck('nombre', 'isbn');
        $autor=Autor::pluck('nombre', 'id');
        return view('libroautor.create', compact('libroautor','libro','autor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Libroautor::$rules);

        $libroautor = Libroautor::create($request->all());

        return redirect()->route('libroautors.index')
            ->with('success', 'Libroautor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libroautor = Libroautor::find($id);

        return view('libroautor.show', compact('libroautor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libroautor = Libroautor::find($id);
        $libro=Libro::pluck('nombre', 'isbn');
        $autor=Autor::pluck('nombre', 'id');
        return view('libroautor.edit', compact('libroautor', 'libro', 'autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Libroautor $libroautor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libroautor $libroautor)
    {
        request()->validate(Libroautor::$rules);

        $libroautor->update($request->all());

        return redirect()->route('libroautors.index')
            ->with('success', 'Libroautor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $libroautor = Libroautor::find($id)->delete();

        return redirect()->route('libroautors.index')
            ->with('success', 'Libroautor deleted successfully');
    }
}
