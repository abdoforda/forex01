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

@endsection
