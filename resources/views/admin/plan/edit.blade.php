@extends('admin.layout.app')

@section('title')
    Admin - {{ __('crud.admin.plans.update') }}
@endsection

@section('heading')
    {{ __('crud.admin.plans.update') }}
@endsection

@section('content')
    <div class="w-full mb-5 bg-white rounded-lg shadow-xs dark:text-gray-400 dark:bg-gray-800">
        <div class="w-full px-5 py-5">
            <x-form action="{{ route('admin.plan.update', $plan) }}" method="put" has-file>
                @include('admin.plan.form-inputs')
                
                <div class="flex justify-end">
                    <button type="submit" class="right-0 inline-block px-4 py-1 text-sm font-semibold leading-loose text-white transition duration-200 bg-green-500 rounded-lg hover:bg-green-600" type="submit">{{ __('crud.general.update') }} {{ __('crud.admin.plans.name') }}</button>
                </div>
            </x-form>
        </div>
    </div>

<div class="w-full overflow-hidden rounded-lg shadow-xs my-6 bg-white shadow-xs dark:text-gray-400 dark:bg-gray-800">

    <h2 class="my-6 p-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{ __("Subscribers") }}
    </h2>
    <div class="w-full overflow-x-auto">
        <table id="dataTable" class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="text-center px-4 py-3">{{ __('crud.inputs.SNo') }}</th>
                    <th class="text-center px-4 py-3">{{ __('crud.inputs.name') }}</th>
                    <th class="text-center px-4 py-3">{{ __('crud.inputs.is_active') }}</th>
                    <th class="text-center px-4 py-3">{{ __('crud.general.actions') }}</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                {{-- Approved --}}
                @forelse ($plan->subscriptions as $subscription)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3">{{ $loop->index + 1 }}</td>
                        <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img
                                    class="object-cover w-full h-full rounded-full"
                                    src="{{ $subscription->provider->avatar ? asset('storage/'.$subscription->provider->avatar) : "https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" }}"
                                    alt=""
                                    loading="lazy"
                                    />
                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                    aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p>{{ $subscription->provider->first_name }}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        {{ $subscription->plan->name | $subscription->plan->description }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm capitalize">
                            {{ $subscription->expire_at ?? "-" }}
                        </td>

                        {{-- <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                            <x-show-status :status="$plan->status"></x-show-status>
                        </td> --}}
                        <td>
                            <div class="flex items-center justify-center">
                                {{-- <x-buttons.show :link="route('admin.user.show', $plan)"></x-buttons.show> --}}
                                <x-buttons.delete :link="route('admin.subscription.destroy', $subscription)"></x-buttons.delete>
                            </div>
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
</div>
@endsection