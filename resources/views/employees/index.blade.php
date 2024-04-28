@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Employees') }}</div>
                    <div class="card-body">
                        <input type="hidden" id="route" name="route" data-route="{{ route('employee.index') }}">
                        <table id="employee-table" class="stripe hover"
                            style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead>
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Last Name') }}</th>
                                    <th>{{ __('Other Names') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Country') }}</th>
                                    <th>{{ __('type of ID') }}</th>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Admision Day') }}</th>
                                    <th>{{ __('Status') }}</th>
                                    <th>{{ __('Area') }}</th>
                                    <th>{{ __('Register Date') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@section('scripts')
    @vite(['resources/js/datatables.js'])
@endsection
@endsection
