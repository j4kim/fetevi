@extends('base')

<h1>{{ config('app.name') }}</h1>

<ul>
    @foreach ($campaigns as $campaign)
        <li>
            <a href="{{ route('campaign', [$campaign->name]) }}">
                {{ $campaign->name }}
            </a>
        </li>
    @endforeach
</ul>
