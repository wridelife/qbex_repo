@php 
    $editing = isset($disputeType);
@endphp

<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <x-inputs.text name="name" :label="__('crud.admin.disputes.type.name')" value="{{ old('name', ($editing ? $disputeType->dispute_name : '')) }}"></x-inputs.text>

    <x-inputs.select :label="__('crud.admin.disputes.type.name').' '.__('crud.inputs.for')" name="dispute_type">
        <option {{ old('dispute_type', ($editing ? $disputeType->dispute_type : '')) == "user" ? "selected" : '' }} value="user">User</option>
        <option {{ old('dispute_type', ($editing ? $disputeType->dispute_type : '')) == "agent" ? "selected" : '' }} value="agent">Agent</option>
        <option {{ old('dispute_type', ($editing ? $disputeType->dispute_type : '')) == "provider" ? "selected" : '' }} value="provider">Provider</option>
    </x-inputs.select>

    <x-inputs.select :label="__('crud.inputs.status')" name="status">
        <option {{ old('status', ($editing ?$disputeType->status: '')) == "active" ? "selected" : '' }} value="1">Enabled</option>
        <option {{ old('status', ($editing ?$disputeType->status: '')) == "inactive" ? "selected" : '' }} value="0">Disabled</option>
    </x-inputs.select>
</div>