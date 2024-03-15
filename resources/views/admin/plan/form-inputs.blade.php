@php 
    $editing = isset($plan);
    $locales = get_all_language();
if($editing) {
    $name = $plan->translations['name'];
    $description = $plan->translations['description'];

}
@endphp

<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
            <div x-data="avatarComponentData()">
                <x-inputs.partials.label name="avatar" :label="__('crud.inputs.image')"></x-inputs.partials.label>
                <img id="avatar" :src="avatarDataUrl" style="object-fit: cover; width: 150px; height: 150px;"/><br />

                <div class="mt-2">
                    <input
                        class="block dark:text-gray-400 text-gray-800 text-sm font-semibold mb-2"
                        type="file"
                        name="image"
                        id="avatar"
                        @change="fileChanged"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
            @foreach ($locales as $key)
            <x-inputs.text name="name[{{ $key }}]" :label="__('crud.inputs.name').' ('.$key.')'"
                value="{{ old('name['.$key.']', ($editing ? ($name[$key] ?? '') : '')) }}" required></x-inputs.text>
            <x-inputs.textarea space="w-full" :label="__('crud.inputs.description').' ('.$key.')'"
                name="description[{{ $key }}]" required>
                {{ old('description['.$key.']', ($editing ? ($description[$key] ?? '') : '')) }}
            </x-inputs.textarea>
            @endforeach
        </div>
    </div>

    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
        <div class="mb-6">
    
            <input type="checkbox" name="is_active" id="is_active" class="switch-input" value="1" {{ old('is_active',$editing ? $plan->is_active : '' ) ? 'checked' : '' }}/>
            <label for="is_active">{{ __("Is Active")}}</label>
        </div>
    </div>
    <x-inputs.number name="price" step=".01" :label="__('crud.inputs.price')"
    value="{{ old('price', ($editing ? $plan->price : '')) }}"></x-inputs.number>

    
    <x-inputs.number name="invoice_period" step=".01" :label="__('Invoice period')"
    value="{{ old('invoice_period', ($editing ? $plan->invoice_period : '')) }}"></x-inputs.number>

    {{-- <x-inputs.number name="active_subscribers_limit" step=".01" :label="__('Active Subscribers Limit')"
    value="{{ old('active_subscribers_limit', ($editing ? $plan->active_subscribers_limit : '')) }}"></x-inputs.number>
     --}}

    {{-- <x-inputs.date name="expiry_date" :label="__('crud.inputs.expiry_date')" value="{{ old('expiry_date', ($editing ? $plan->expiry_date->format('Y-m-d') : '')) }}"></x-inputs.date>

    <x-inputs.status status="{{ old('status', ($editing ? $plan->status : '')) }}"></x-inputs.status> --}}
</div>

@push('endScripts')
    <script>
        /* Alpine component for avatar uploader viewer */
        function avatarComponentData() {
            return {
                avatarDataUrl: '{{ $editing && $plan->image ? asset("storage/".$plan->image) : asset("img/default.png") }}',

                fileChanged(event) {
                    this.fileToDataUrl(event, src => this.avatarDataUrl = src)
                },

                fileToDataUrl(event, callback) {
                    if (! event.target.files.length) return

                    let file = event.target.files[0],
                        reader = new FileReader()

                    reader.readAsDataURL(file)
                    reader.onload = e => callback(e.target.result)
                }
            }
        }
    </script>
@endpush
