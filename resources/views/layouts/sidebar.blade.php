<x-side-link href="{{ route('dashboard') }}" icon="fas fa-tachometer-alt" :active="request()->routeIs('dashboard.*')">
    {{ __('Dashboard') }}
</x-side-link>
@if(auth()->user()->type !== 'employee')
<x-side-link href="{{ route('user.index') }}" :active="request()->routeIs('user.*')" icon="fas fa-building">
    {{ __('User Rolleri') }}
</x-side-link>
@endif
<x-side-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard.*')" icon="fas fa-building">
    {{ __('Giren Mallar') }}
</x-side-link>
