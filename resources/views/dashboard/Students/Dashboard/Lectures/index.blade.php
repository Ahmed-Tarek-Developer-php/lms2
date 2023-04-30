@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">@lang('lectures.lectures')</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    @lang('lectures.lectures_list')</span>
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
                <div class="card-header pb-0">
                    <a href="{{ route('lectures.create') }}"
                       class="btn btn-primary">@lang('lectures.lectures_create')</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="">#</th>
                                <th class="">@lang('students.grade')</th>
                                <th class="">@lang('students.classroom')</th>
                                <th class="">@lang('students.section')</th>
                                <th class="">@lang('teachers.teachers_name')</th>
                                <th class="">@lang('lectures.lecture')</th>
                                <th class="">@lang('lectures.start_date')</th>
                                <th class="">@lang('lectures.lecture_date')</th>
                                <th class="">@lang('lectures.link')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($lectures as $key => $lecture)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $lecture->grade->name }}</td>
                                    <td>{{ $lecture->classroom->class_name }}</td>
                                    <td>{{ $lecture->section->section_name }}</td>
                                    <td>
                                        @if(\App\Models\Teacher::where('email', $lecture->created_by)->first()->name != null)
                                        {{\App\Models\Teacher::where('email', $lecture->created_by)->first()->name}}
                                        @endif
                                    </td>
                                    <td>{{ $lecture->topic }}</td>
                                    <td>{{ $lecture->start_at }}</td>
                                    <td>{{ $lecture->duration }}</td>
                                    <td>
                                        <a href="{{ $lecture->join_url }}" target="_blank">@lang('lectures.click')</a>
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
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
@endsection
