@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="">            
                @include('admin.partials.flash')
            </div>
        </div>
        <div class="col-md-3">
            <div class="">
                <div class="form-group">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary pull-right btn_style">Add Category</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-userprofile" data-color="purple">
                    <h4 class="card-title mt-0"> {{ $pageTitle }} </h4>
                    <p class="card-category"> {{ $subTitle }} </p>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="">
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Slug </th>
                                    <th class="text-center"> Parent </th>
                                    <th class="text-center"> Featured </th>
                                    <th class="text-center"> Menu </th>
                                    <th class="text-center"> Order </th>
                                    <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    @if ($category->id != 1)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ $category->parent->name }}</td>
                                            <td class="text-center">
                                                @if ($category->featured == 1)
                                                    <span class="badge badge-success">Yes</span>
                                                @else
                                                    <span class="badge badge-danger">No</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if ($category->menu == 1)
                                                    <span class="badge badge-success">Yes</span>
                                                @else
                                                    <span class="badge badge-danger">No</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                {{ $category->order }}
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Second group">
                                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('admin.categories.delete', $category->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection