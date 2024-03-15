@extends('admin.layout.app')

@section('title')
    Admin - {{ __('crud.admin.statements.agent') }}
@endsection

@section('heading')
    {{ __('crud.admin.statements.agent') }}
@endsection

@section('content')
<div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
    <div class="w-full overflow-x-auto">
        <table id="dataTable" class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="text-center px-4 py-3">{{ __('crud.inputs.SNo') }}</th>
                    <th class="text-center px-4 py-3">{{ __('crud.admin.agents.name') }} {{ __('crud.inputs.name') }}
                    </th>
                    <th class="text-center px-4 py-3">{{ __('crud.admin.agents.name') }}
                        {{ __('crud.inputs.phone') }}</th>
                    <th class="text-center px-4 py-3">{{ __('crud.inputs.commission') }}</th>
                    <th class="text-center px-4 py-3">{{ __('crud.general.total') }} {{ __('crud.general.jobs') }}</th>
                    <th class="text-center px-4 py-3">{{ __('crud.general.member_since') }}</th>
                    </th>
                    <th class="text-center px-4 py-3">{{ __('crud.general.actions') }}</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                {{-- Approved --}}
                @forelse ($agents as $agent)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3">{{ $loop->index + 1 }}</td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <div class="flex items-center text-sm">
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full"
                                    src="{{ $agent->avatar ? asset('storage/'.$agent->avatar) : asset('img/avatar.png') }}"
                                    alt="" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-700 dark:text-gray-400">{{ $agent->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        {{ $agent->mobile }}
                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <p class="font-semibold text-gray-700 dark:text-gray-400">
                            {{ currency($agent->payment->overall) ?? '-' }}</p>
                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        <p class="font-semibold text-gray-700 dark:text-gray-400">{{ $agent->payment->jobs_count ?? '0' }}</p>
                    </td>
                    <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm text-center">
                        {{ $agent->created_at->diffForHumans() }}
                    </td>
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                        <x-buttons.show :link="route('admin.statement.overall', ['agent', $agent->id])">
                        </x-buttons.show>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center dark:text-gray-400 dark:bg-gray-800 py-3 text-sm" colspan="10">
                        @lang('crud.general.not_found')
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- Pagination --}}
    <div class="">
        {!! $agents->links() !!}
    </div>
</div>
@endsection