@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
                


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabla de datos
                    </div>
                <div class="card-body">
                    
                    <table class="table table-bordered table-responsive" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th class="text-center">titulo</th>
                                <th class="text-center">Localización</th>
                                <th class="text-center">descripción</th>
                                <th class="text-center">URL</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                               @forelse ($posts as $post)
                                  <tr> 
                                   <td scope="row" class="text-center">{{ $post->title }}</td>
                                   <td scope="row" class="text-center">{{ $post->location }}</td>
                                   <td scope="row" class="text-justify">{{ $post->description }}</td>
                                   <td scope="row" class="text-center"><a href="{{$post->url}}" target="_blank">{{ $post->title }}</a></td>
                                   <td scope="row" class="text-center">
                                    @if ($post->is_published == false)
                                        <span class="badge badge-danger">No publicado</span>
                                    @else
                                    <span class="badge badge-success">Publicado</span> 
                                    @endif
                                </td>
                                   <td colspan="3">
                                    <a href="{{route('publish')}}" class="btn btn-success"><i class="fas fa-paste 2x"></i></a>
                                    <a href="" class="btn btn-primary"><i class="fas fa-edit 2x"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash-alt 2x"></i></a>
                                   </td>
                                </tr>
                               @empty
                               <td colspan="6">
                                <p>No hay registros</p>
                               </td>
                            
                               @endforelse

                            
                        </tbody>

                    </table>

                </div>

                </div>
            </div>
        </div>
    
</div>
@endsection
