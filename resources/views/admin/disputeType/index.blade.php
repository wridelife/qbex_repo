@extends('admin.layout.app')

@section('title')
    Admin - {{ __('crud.admin.disputes.type.index') }}
@endsection

@section('heading')
    {{ __('crud.admin.disputes.type.index') }}
@endsection

@section('content')
    <x-indexPageSearch :addBtnRoute="route('admin.disputeType.create')" :addBtnText="__('crud.admin.disputes.type.create')"></x-indexPageSearch>
    <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
        <div class="w-full overflow-x-auto">
            <table id="dataTable" class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="text-center px-4 py-3">{{ __('crud.inputs.SNo') }}</th>
                        <th class="text-center px-4 py-3">{{ __('crud.inputs.name') }}</th>
                        <th class="text-center px-4 py-3">{{ __('crud.inputs.for') }}</th>
                        <th class="text-center px-4 py-3">{{ __('crud.inputs.status') }}</th>
                        <th class="text-center px-4 py-3">{{ __('crud.general.actions') }}</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    {{-- Approved --}}
                    @forelse ($disputeTypes as $disputeType)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3">{{ $loop->index + 1 }}</td>
                            <td class="px-4 dark:text-gray-400 dark:bg-gray-800 py-3 text-sm">
                                {{ $disputeType->dispute_name ?? ""}}
                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm capitalize">
                                {{ $disputeType->dispute_type ?? "User" }}
                            </td>
                            <td class="text-center dark:text-gray-400 dark:bg-gray-800 px-4 py-3 text-sm">
                                <x-show-status :status="$disputeType->status"></x-show-status>
                            </td>
                            <td>
                                <div class="flex items-center justify-center">
                                    {{-- <x-buttons.show :link="route('admin.user.show', $disputeType)"></x-buttons.show> --}}
                                    <x-buttons.edit :link="route('admin.disputeType.edit', $disputeType)"></x-buttons.edit>
                                    <x-buttons.delete :link="route('admin.disputeType.destroy', $disputeType)"></x-buttons.delete>
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
        <div class="">
            {!! $disputeTypes->links() !!}
        </div>
    </div>
@endsection