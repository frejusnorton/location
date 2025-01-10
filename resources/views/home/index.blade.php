@extends('base.index')
@section('tolbar')

<div class="flex-grow-1 flex-shrink-0 me-5">
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
        data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
        class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <span class="h-20px border-gray-200 border-start mx-3"></span>
        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
            <li class="breadcrumb-item text-muted">
                <a href="../../demo6/dist/index.html" class="text-muted text-hover-primary">Home</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">Crafted</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">Pages</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">Company</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-dark">Pricing</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
</div>

<div class="d-flex align-items-center flex-wrap">
    <!--begin::Wrapper-->
    <div class="flex-shrink-0 me-2">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-bold fs-7 px-4 me-1"
                    data-bs-toggle="tab" href="#">Day</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-bold fs-7 px-4 me-1"
                    data-bs-toggle="tab" href="">Week</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-bold fs-7 px-4"
                    data-bs-toggle="tab" href="#">Year</a>
            </li>
        </ul>
    </div>
    <!--end::Wrapper-->
    <!--begin::Wrapper-->
    <div class="d-flex align-items-center">
        <!--begin::Daterangepicker-->
        <a href="#" class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2"
            id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover"
            title="Select dashboard daterange">
            <span class="fw-bold me-1" id="kt_dashboard_daterangepicker_title">Range:</span>
            <span class="fw-bolder" id="kt_dashboard_daterangepicker_date">September 30</span>
        </a>
        <!--end::Daterangepicker-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center">
            <button type="button"
                class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary">
                <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                <span class="svg-icon svg-icon-2x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3"
                            d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z"
                            fill="black" />
                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Wrapper-->
</div>
@endsection

@section('content')
<div>
    <livewire:counter />
</div>
@endsection