@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Employee Register') }}</div>
                    <div class="card-body">
                        <form action="{{ route('employee.store') }}" method="POST" rol="form" id="form-register">
                            @csrf
                            <input type="hidden" class="form-control" id="id" name="id"
                                value="{{ old('id', $id) }}">
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ old('last_name') }}">
                                    <div class="pristine-error text-danger">
                                        {{ $errors->first('last_name') }}</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name') }}">
                                    <div class="pristine-error text-danger">
                                        {{ $errors->first('name') }}</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="other_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Other Names') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="other_name" name="other_name"
                                        value="{{ old('other_name') }}">
                                    <div class="pristine-error text-danger">
                                        {{ $errors->first('other_name') }}</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
                                <div class="col-md-6">
                                    <select type="text" class="form-control" id="country" name="country"
                                        value="{{ old('country') }}">
                                        <option value="">{{ __('Select an option') }}</option>
                                        <option value="0">{{ __('Colombia') }}</option>
                                        <option value="1">{{ __('United States of America') }}</option>
                                    </select>
                                    <div class="pristine-error text-danger">
                                        {{ $errors->first('country') }}</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="identification_type"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Type of ID') }}</label>
                                <div class="col-md-6">
                                    <select type="text" class="form-control" id="identification_type"
                                        name="identification_type">
                                        <option value="">{{ __('Select an option') }}</option>
                                        <option value="0">{{ __('Cédula de Ciudadanía') }}</option>
                                        <option value="1">{{ __('Cédula de Extranjería') }}</option>
                                        <option value="2">{{ __('Pasaporte') }}</option>
                                        <option value="3">{{ __('Permiso Especial') }}</option>
                                    </select>
                                    <div class="pristine-error text-danger">
                                        {{ $errors->first('identification_type') }}</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="identification"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="identification" name="identification"
                                        value="{{ old('identification') }}">
                                    <div class="pristine-error text-danger">
                                        {{ $errors->first('identification') }}</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">
                                    <div class="pristine-error text-danger">
                                        {{ $errors->first('email') }}</div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
                                <div class="col-md-6">
                                    <select type="text" class="form-control" id="country" name="country"
                                        value="{{ old('country') }}">
                                        <option value="">{{ __('Select an option') }}</option>
                                        <option value="0">{{ __('Colombia') }}</option>
                                        <option value="1">{{ __('United States of America') }}</option>
                                    </select>
                                    <div class="pristine-error text-danger">
                                        {{ $errors->first('country') }}</div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"
                                        id="save">{{ __('Register') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@section('scripts')
    @vite(['resources/js/forms.js'])
@endsection
@endsection
