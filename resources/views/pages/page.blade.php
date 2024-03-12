@extends('layouts.app')
@section('title', 'About as')
@section('description', $page->getTranslatedAttribute('meta_description', app()->getLocale()))
@section('keywords', $page->getTranslatedAttribute('meta_keywords', app()->getLocale()))

@section('content')
    @include('layouts.components.header_pages', [
        'title' => $page->getTranslatedAttribute('name', app()->getLocale()),
        'desc' => $page->getTranslatedAttribute('desc', app()->getLocale()),
    ])

    @include('pages.'.str_replace("-", "_", $page->slug))
    {!! $page->getTranslatedAttribute('content', app()->getLocale()) !!}

@endsection
