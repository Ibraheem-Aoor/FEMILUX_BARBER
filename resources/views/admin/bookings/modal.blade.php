<div class="modal fade" id="booking-modal" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow border-0">
            <form name="service-form" class="custom-form">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                            class="uil uil-times fs-4 text-dark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="p-3 rounded box-shadow">
                        <div class="row">
                            <table class="table table-center bg-white mb-0 table-bordered">
                                <thead>
                                    <tr>
                                        <th class="border-bottom p-3" style="min-width: 220px;">
                                            {{ __('general.service') }}</th>
                                        <th class="border-bottom p-3" style="min-width: 220px;">
                                            {{ __('general.price') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="services-table-body">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('general.close') }}</button>
                    {{-- <button type="submit" class="btn btn-primary">{{ __('general.save') }}</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>
