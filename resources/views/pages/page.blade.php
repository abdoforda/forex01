@extends('layouts.app')
@section('title', 'About as')
@section('description', $page->getTranslatedAttribute('meta_description', app()->getLocale()))
@section('keywords', $page->getTranslatedAttribute('meta_keywords', app()->getLocale()))

@section('content')
    @include('layouts.components.header_pages', [
        'title' => $page->getTranslatedAttribute('name', app()->getLocale()),
        'desc' => $page->getTranslatedAttribute('desc', app()->getLocale()),
    ])

    <div class="content pt-5 pb-4">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4 g-6">
                <div class="col-md-12">
                    {!! $page->getTranslatedAttribute('content', app()->getLocale()) !!}
                </div>
            </div>
        </div>
    </div>

    @if ($page->getTranslatedAttribute('name', 'en') == 'Accounts Overview')
    <div class="bg_color_1">
        @include('layouts.components.plans')
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>
                        @lang('User-Friendly Process')
                    </h3>
                    <p class="lead">
                        Open an account with Mercato Brokers effortlessly. Our user-friendly interface
                        and step-by-step guides streamline the onboarding process for both new and
                        experienced investors
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection
