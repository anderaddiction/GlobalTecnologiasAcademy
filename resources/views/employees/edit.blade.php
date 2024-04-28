@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-4"
                        role="alert">
                        <div class="flex">
                            <div class="py-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </div>
                            <div>
                                <p class="font-bold">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">{{ __('Employee Register') }}</div>
                    <div class="card-body">
                        <form action="{{ route('employee.update', $employee->id) }}" method="POST" rol="form"
                            id="form-register">
                            @csrf
                            @method('PUT')
                            <input type="hidden" class="form-control" id="id" name="id"
                                value="{{ old('id', $employee->id) }}">
                            @include('employees._form', ['btnText' => 'Register'])
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
