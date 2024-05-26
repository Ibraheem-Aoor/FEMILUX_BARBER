@extends('layouts.admin.master')

@section('page-title', __('general.working_hours'))

@push('css')
@endpush

@section('content')
    @include('admin.partials.page_header', [
        'current_page_name' => __('general.working_hours'),
        'sub_pages' => [
            // __('general.working_hours') => route('admin.work_hours.index'),
        ],
    ])

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card rounded shadow">
                <div class="p-4 border-bottom">
                    <h5 class="title mb-0">{{ __('general.working_hours') }}</h5>
                </div>
                <div class="p-4">
                    <form action="{{ route($route.'.store') }}" method="POST" class="custom-form">
                        @csrf
                        <div class="table-responsive shadow rounded p-4">
                            <table class="table table-center bg-white mb-0 table-bordered">
                                <thead>
                                    <tr>
                                        <th class="border-bottom p-3">{{ __('general.day') }}</th>
                                        <th class="border-bottom p-3">{{ __('general.status') }}</th>
                                        <th class="border-bottom p-3">{{ __('general.hours_from') }}</th>
                                        <th class="border-bottom p-3">{{ __('general.hours_to') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
                                    @endphp
                                    @foreach($days as $day)
                                        @php
                                            $is_checked = isset($work_hours->{$day.'_hours_from'}) && isset($work_hours->{$day.'_hours_to'}) ? 'checked' : '';
                                        @endphp
                                        <tr>
                                            <td class="border-bottom p-3 text-capitalize">{{ __($day) }}</td>
                                            <td class="border-bottom p-3">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheck{{ ucfirst($day) }}" name="{{ $day }}_status" {{ $is_checked }} onclick="toggleDay('{{ $day }}', this)">
                                                </div>
                                            </td>
                                            <td class="border-bottom p-3">
                                                <input type="time" name="{{ $day }}_hours_from" class="form-control" value="{{ old($day.'_hours_from', $work_hours->{$day.'_hours_from'} ?? '') }}" {{ $is_checked ? '' : 'disabled' }}>
                                            </td>
                                            <td class="border-bottom p-3">
                                                <input type="time" name="{{ $day }}_hours_to" class="form-control" value="{{ old($day.'_hours_to', $work_hours->{$day.'_hours_to'} ?? '') }}" {{ $is_checked ? '' : 'disabled' }}>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-primary">{{ __('general.save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    @include('partials.confirm-delete-modal')
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        function toggleDay(day, checkbox) {
            const isChecked = checkbox.checked;
            $(`input[name="${day}_hours_from"]`).prop('disabled', !isChecked).val(isChecked ? '' : null);
            $(`input[name="${day}_hours_to"]`).prop('disabled', !isChecked).val(isChecked ? '' : null);
        }
    </script>
@endpush
