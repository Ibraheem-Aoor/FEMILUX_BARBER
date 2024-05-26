@extends('layouts.admin.master')
@section('page-title', __('general.bookings'))

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">
    <style>
        div.dt-container .dt-paging .dt-paging-button.current,
        div.dt-container .dt-paging .dt-paging-button.current {
            color: #fff !important;
            background: #2f55d4 !important;
            border-color: #2f55d4 !important;
            cursor: not-allowed !important;
        }

        div.dt-container .dt-paging .dt-paging-button {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        div.dt-container .dt-paging .dt-paging-button:hover {
            color: #fff;
            background: rgba(47, 85, 212, .9);
            border-color: rgba(47, 85, 212, .9);
        }

        .avatar-picture {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 33px;
        }

        .avatar-picture .image-input {
            position: relative;
            display: inline-block;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .avatar-picture .image-input .image-input-wrapper {
            border: 3px solid #fff;
            background-image: url("");
            width: 200px;
            height: 300px;
            background-repeat: no-repeat;
            background-size: contain !important;
        }

        .avatar-picture .image-input .btn {
            height: 24px;
            width: 24px;
            border-radius: 50%;
            cursor: pointer;
            position: absolute;
            left: 3px;
            bottom: -7px;
            background-color: #FFFFFF;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.16));
        }

        .avatar-picture .image-input .btn img {
            position: relative;
            top: -2px;
        }

        .avatar-picture .image-input .btn:hover {
            background-color: var(--main-color);
        }

        .avatar-picture .image-input .btn:hover img {
            filter: invert(1) brightness(10);
        }

        .avatar-picture .image-input .btn input {
            width: 0 !important;
            height: 0 !important;
            overflow: hidden;
            opacity: 0;
            display: none;
        }
    </style>
@endpush

@section('content')
    @include('admin.partials.page_header', [
        'current_page_name' => __('general.bookings'),
        'sub_pages' => [
            __('general.bookings') => route('admin.contacts.index'),
        ],
    ])

    <div class="d-md-flex justify-content-between align-items-center mt-2">
        <h5 class="mb-0">&nbsp;</h5>
        <nav aria-label="breadcrumb" class="d-inline-block">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                {{-- <li class="breadcrumb-item text-capitalize">
                    <a class="btn btn-md btn-primary text-white m-1" data-bs-toggle="modal" data-bs-target="#barber-modal"
                        data-action="{{ route($route . '.store') }}" data-method="POST" data-is-create="1"
                        data-header-title="{{ __('general.create_new_service') }}"
                        href="{{ route('admin.dashboard') }}">{{ __('general.new') }}</a>
                </li> --}}
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card rounded shadow">
                <div class="p-4 border-bottom">
                    <h5 class="title mb-0">{{ __('general.bookings') }}</h5>
                </div>
                <div class="p-4">
                    <div class="table-responsive shadow rounded p-4">
                        <table class="table table-center bg-white mb-0 table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th class="border-bottom p-3" style="min-width: 220px;">{{ __('general.barber') }}</th>
                                    <th class="border-bottom p-3" style="min-width: 220px;">{{ __('general.client_name') }}</th>
                                    <th class="border-bottom p-3" style="min-width: 220px;">{{ __('general.client_phone') }}</th>
                                    <th class="border-bottom p-3" style="min-width: 220px;">{{ __('general.date') }}</th>
                                    <th class="border-bottom p-3" style="min-width: 220px;">{{ __('general.time') }}</th>
                                    <th class="text-center border-bottom p-3">{{ __('general.booked_at') }}</th>
                                    <th class="text-end border-bottom p-3" style="min-width: 200px;">{{ __('general.actions') }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    @include('admin.bookings.modal')
    @include('partials.confirm-delete-modal')
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        const table_data_url = "{{ $table_data_url }}";
    </script>
    @if (getCurrentLocale() == 'ar')
        <script src="{{ asset('assets/user/js/datatable-ar.js') }}"></script>
    @else
        <script src="{{ asset('assets/user/js/datatable-en.js') }}"></script>
    @endif
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script src="{{ asset('assets/user/js/admin/booking.js') }}"></script>
@endpush
