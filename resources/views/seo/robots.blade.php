@php
    $robots = getValue('robots') ?? [];
@endphp
@if($robots['isAdvancedSettingEnabled'] ?? false)
User-agent: *
Disallow: /panel

{{$robots['advancedSetting']}}

@else
User-agent: *
Disallow: /panel
@if(!array_key_exists('*', $robots['selectedRobots']))

@endif
@if(count($robots['selectedRobots']) > 0)
@foreach($robots['selectedRobots'] as $robot)
@if($robot <> '*')
User-agent: {{$robot}}
@endif
@foreach(collect(explode(' ', $robots['disallowedRoutes'] ?? ''))->filter(fn($item) => $item != '/panel') as $disallowedRoute)
@if($disallowedRoute <> '')
Disallow: {{$disallowedRoute}}
@endif
@endforeach
@foreach(explode(' ', $robots['allowedRoutes'] ?? '') as $allowedRoute)
@if($allowedRoute <> '')
Allow: {{$allowedRoute}}
@endif
@endforeach

@endforeach
@else
@endif
@endif
@if(\Illuminate\Support\Facades\Route::has('sitemap.index'))
Sitemap: {{route('sitemap.index')}}
@endif