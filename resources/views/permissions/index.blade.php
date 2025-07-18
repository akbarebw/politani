@extends('layouts.app')
@section('content')
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                @include('flash::message')
                <div class="clearfix"></div>
                <div class="card">
                    <div class="border-left-pink border-left-6 box-shadow-1 rounded">
                        <div class="card-content ">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-10 media-body mb-2">
                                        <div class="content-header-left breadcrumb-new">
                                            <span class="content-header-title mb-0 d-inline-block font-medium-4"><b>Permissions</b></span>
                                            <div class="breadcrumbs-top d-inline-block">
                                                <div class="breadcrumb-wrapper">
                                                    @include('layouts.breadcrumb')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 text-right">
                                        @can('permissions.index')
                                        <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-green">Tambah Data
                                        </a>
                                        @endcan
                                    </div>
                                </div>
                                @include('permissions.table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

