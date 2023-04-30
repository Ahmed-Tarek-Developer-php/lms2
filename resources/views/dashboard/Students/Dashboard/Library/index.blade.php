@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">@lang('library.library')</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="">#</th>
                                <th class="">@lang('library.book_name')</th>
                                <th class="">@lang('teachers.teachers_name')</th>
                                <th class="">@lang('students.grade')</th>
                                <th class="">@lang('students.classroom')</th>
                                <th class="">@lang('students.section')</th>
                                <th class="">@lang('tables.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($books as $key => $book)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->teacher->name }}</td>
                                    <td>{{ $book->grade->name }}</td>
                                    <td>{{ $book->classroom->class_name }}</td>
                                    <td>{{ $book->section->section_name }}</td>
                                    <td>
                                        <a href="{{route('dashboard.student.library.download', $book->file_name)}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
