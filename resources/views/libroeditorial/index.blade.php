@extends('layouts.app')

@section('template_title')
    Libroeditorial
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libroeditorial') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('libroeditorials.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Libro</th>
										<th>Editorial</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libroeditorials as $libroeditorial)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $libroeditorial->libro->nombre }}</td>
											<td>{{ $libroeditorial->editorial->nombre }}</td>

                                            <td>
                                                <form action="{{ route('libroeditorials.destroy',$libroeditorial->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('libroeditorials.show',$libroeditorial->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('libroeditorials.edit',$libroeditorial->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $libroeditorials->links() !!}
            </div>
        </div>
    </div>
@endsection
