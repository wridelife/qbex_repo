<div>
    <?php
    $timezones = array(
        'America/Adak' ,'America/Atka' ,'America/Anchorage' ,'America/Juneau' ,'America/Nome' ,'America/Yakutat' ,'America/Dawson' ,'America/Ensenada' ,'America/Los_Angeles' ,'America/Tijuana' ,'America/Vancouver' ,'America/Whitehorse' ,'Canada/Pacific' ,'Canada/Yukon' ,'Mexico/BajaNorte' ,'America/Boise' ,'America/Cambridge_Bay' ,'America/Chihuahua' ,'America/Dawson_Creek' ,'America/Denver' ,'America/Edmonton' ,'America/Hermosillo' ,'America/Inuvik' ,'America/Mazatlan' ,'America/Phoenix' ,'America/Shiprock' ,'America/Yellowknife' ,'Canada/Mountain' ,'Mexico/BajaSur' ,'America/Belize' ,'America/Cancun' ,'America/Chicago' ,'America/Costa_Rica' ,'America/El_Salvador' ,'America/Guatemala' ,'America/Knox_IN' ,'America/Managua' ,'America/Menominee' ,'America/Merida' ,'America/Mexico_City' ,'America/Monterrey' ,'America/Rainy_River' ,'America/Rankin_Inlet' ,'America/Regina' ,'America/Swift_Current' ,'America/Tegucigalpa' ,'America/Winnipeg' ,'Canada/Central' ,'Canada/East-Saskatchewan' ,'Canada/Saskatchewan' ,'Chile/EasterIsland' ,'Mexico/General' ,'America/Atikokan' ,'America/Bogota' ,'America/Cayman' ,'America/Coral_Harbour' ,'America/Detroit' ,'America/Fort_Wayne' ,'America/Grand_Turk' ,'America/Guayaquil' ,'America/Havana' ,'America/Indianapolis' ,'America/Iqaluit' ,'America/Jamaica' ,'America/Lima' ,'America/Louisville' ,'America/Montreal' ,'America/Nassau' ,'America/New_York' ,'America/Nipigon' ,'America/Panama' ,'America/Pangnirtung' ,'America/Port-au-Prince' ,'America/Resolute' ,'America/Thunder_Bay' ,'America/Toronto' ,'Canada/Eastern' ,'America/Caracas' ,'America/Anguilla' ,'America/Antigua' ,'America/Aruba' ,'America/Asuncion' ,'America/Barbados' ,'America/Blanc-Sablon' ,'America/Boa_Vista' ,'America/Campo_Grande' ,'America/Cuiaba' ,'America/Curacao' ,'America/Dominica' ,'America/Eirunepe' ,'America/Glace_Bay' ,'America/Goose_Bay' ,'America/Grenada' ,'America/Guadeloupe' ,'America/Guyana' ,'America/Halifax' ,'America/La_Paz' ,'America/Manaus' ,'America/Marigot' ,'America/Martinique' ,'America/Moncton' ,'America/Montserrat' ,'America/Port_of_Spain' ,'America/Porto_Acre' ,'America/Porto_Velho' ,'America/Puerto_Rico' ,'America/Rio_Branco' ,'America/Santiago' ,'America/Santo_Domingo' ,'America/St_Barthelemy' ,'America/St_Kitts' ,'America/St_Lucia' ,'America/St_Thomas' ,'America/St_Vincent' ,'America/Thule' ,'America/Tortola' ,'America/Virgin' ,'Antarctica/Palmer' ,'Atlantic/Bermuda' ,'Atlantic/Stanley' ,'Brazil/Acre' ,'Brazil/West' ,'Canada/Atlantic' ,'Chile/Continental' ,'America/St_Johns' ,'Canada/Newfoundland' ,'America/Araguaina' ,'America/Bahia' ,'America/Belem' ,'America/Buenos_Aires' ,'America/Catamarca' ,'America/Cayenne' ,'America/Cordoba' ,'America/Fortaleza' ,'America/Godthab' ,'America/Jujuy' ,'America/Maceio' ,'America/Mendoza' ,'America/Miquelon' ,'America/Montevideo' ,'America/Paramaribo' ,'America/Recife' ,'America/Rosario' ,'America/Santarem' ,'America/Sao_Paulo' ,'Antarctica/Rothera' ,'Brazil/East' ,'America/Noronha' ,'Atlantic/South_Georgia' ,'Brazil/DeNoronha' ,'America/Scoresbysund' ,'Atlantic/Azores' ,'Atlantic/Cape_Verde' ,'Africa/Abidjan' ,'Africa/Accra' ,'Africa/Bamako' ,'Africa/Banjul' ,'Africa/Bissau' ,'Africa/Casablanca' ,'Africa/Conakry' ,'Africa/Dakar' ,'Africa/El_Aaiun' ,'Africa/Freetown' ,'Africa/Lome' ,'Africa/Monrovia' ,'Africa/Nouakchott' ,'Africa/Ouagadougou' ,'Africa/Sao_Tome' ,
        'Africa/Timbuktu' ,	'Africa/Addis_Ababa',	'Africa/Algiers',
        'Africa/Asmara',	'Africa/Bangui',	'Africa/Blantyre',	'Africa/Brazzaville',	'Africa/Bujumbura',
        'Africa/Cairo',	'Africa/Ceuta',	'Africa/Dar_es_Salaam',	'Africa/Djibouti',	'Africa/Douala',	'Africa/Gaborone',	'Africa/Harare',
        'Africa/Johannesburg'	,'Africa/Juba',	'Africa/Kampala',	'Africa/Khartoum',
        'Africa/Kigali',	'Africa/Kinshasa',	'Africa/Lagos',	'Africa/Libreville',
        'Africa/Lome',	'Africa/Luanda',	'Africa/Lubumbashi',	'Africa/Lusaka',
        'Africa/Malabo',	'Africa/Maputo',	'Africa/Maseru',	'Africa/Mbabane',
        'Africa/Mogadishu',	'Africa/Monrovia',	'Africa/Nairobi',	'Africa/Ndjamena',
        'Africa/Niamey',	'Africa/Porto-Novo',	'Africa/Tripoli',	'Africa/Tunis',	'Africa/Windhoek','America/Danmarkshavn' ,'Atlantic/Canary' ,'Atlantic/Faeroe' ,'Atlantic/Faroe' ,'Atlantic/Madeira' ,'Atlantic/Reykjavik' ,'Atlantic/St_Helena' ,'Europe/Belfast' ,'Europe/Dublin' ,'Europe/Guernsey' ,'Europe/Isle_of_Man' ,'Europe/Jersey' ,'Europe/Lisbon' ,'Europe/London' ,'Africa/Algiers' ,'Africa/Bangui' ,'Africa/Brazzaville' ,'Africa/Ceuta' ,'Africa/Douala' ,'Africa/Kinshasa' ,'Africa/Lagos' ,'Africa/Libreville' ,'Africa/Luanda' ,'Africa/Malabo' ,'Africa/Ndjamena' ,'Africa/Niamey' ,'Africa/Porto-Novo' ,'Africa/Tunis' ,'Africa/Windhoek' ,'Arctic/Longyearbyen' ,'Atlantic/Jan_Mayen' ,'Europe/Amsterdam' ,'Europe/Andorra' ,'Europe/Belgrade' ,'Europe/Berlin' ,'Europe/Bratislava' ,'Europe/Brussels' ,'Europe/Budapest' ,'Europe/Copenhagen' ,'Europe/Gibraltar' ,'Europe/Ljubljana' ,'Europe/Luxembourg' ,'Europe/Madrid' ,'Europe/Malta' ,'Europe/Monaco' ,'Europe/Oslo' ,'Europe/Paris' ,'Europe/Podgorica' ,'Europe/Prague' ,'Europe/Rome' ,'Europe/San_Marino' ,'Europe/Sarajevo' ,'Europe/Skopje' ,'Europe/Stockholm' ,'Europe/Tirane' ,'Europe/Vaduz' ,'Europe/Vatican' ,'Europe/Vienna' ,'Europe/Warsaw' ,'Europe/Zagreb' ,'Europe/Zurich' ,'Africa/Blantyre' ,'Africa/Bujumbura' ,'Africa/Cairo' ,'Africa/Gaborone' ,'Africa/Harare' ,'Africa/Johannesburg' ,'Africa/Kigali' ,'Africa/Lubumbashi' ,'Africa/Lusaka' ,'Africa/Maputo' ,'Africa/Maseru' ,'Africa/Mbabane' ,'Africa/Tripoli' ,'Asia/Amman' ,'Asia/Beirut' ,'Asia/Damascus' ,'Asia/Gaza' ,'Asia/Istanbul' ,'Asia/Jerusalem' ,'Asia/Nicosia' ,'Asia/Tel_Aviv' ,'Europe/Athens' ,'Europe/Bucharest' ,'Europe/Chisinau' ,'Europe/Helsinki' ,'Europe/Istanbul' ,'Europe/Kaliningrad' ,'Europe/Kiev' ,'Europe/Mariehamn' ,'Europe/Minsk' ,'Europe/Nicosia' ,'Europe/Riga' ,'Europe/Simferopol' ,'Europe/Sofia' ,'Europe/Tallinn' ,'Europe/Tiraspol' ,'Europe/Uzhgorod' ,'Europe/Vilnius' ,'Europe/Zaporozhye' ,'Africa/Addis_Ababa' ,'Africa/Asmara' ,'Africa/Asmera' ,'Africa/Dar_es_Salaam' ,'Africa/Djibouti' ,'Africa/Kampala' ,'Africa/Khartoum' ,'Africa/Mogadishu' ,'Africa/Nairobi' ,'Antarctica/Syowa' ,'Asia/Aden' ,'Asia/Baghdad' ,'Asia/Bahrain' ,'Asia/Kuwait' ,'Asia/Qatar' ,'Europe/Moscow' ,'Europe/Volgograd' ,'Indian/Antananarivo' ,'Indian/Comoro' ,'Indian/Mayotte' ,'Asia/Tehran' ,'Asia/Baku' ,'Asia/Dubai' ,'Asia/Muscat' ,'Asia/Tbilisi' ,'Asia/Yerevan' ,'Europe/Samara' ,'Indian/Mahe' ,'Indian/Mauritius' ,'Indian/Reunion' ,'Asia/Kabul' ,'Asia/Aqtau' ,'Asia/Aqtobe' ,'Asia/Ashgabat' ,'Asia/Ashkhabad' ,'Asia/Dushanbe' ,'Asia/Karachi' ,'Asia/Oral' ,'Asia/Samarkand' ,'Asia/Tashkent' ,'Asia/Yekaterinburg' ,'Indian/Kerguelen' ,'Indian/Maldives' ,'Asia/Calcutta' ,'Asia/Colombo' ,'Asia/Kolkata' ,'Asia/Katmandu' ,'Antarctica/Mawson' ,'Antarctica/Vostok' ,'Asia/Almaty' ,'Asia/Bishkek' ,'Asia/Dacca' ,'Asia/Dhaka' ,'Asia/Novosibirsk' ,'Asia/Omsk' ,'Asia/Qyzylorda' ,'Asia/Thimbu' ,'Asia/Thimphu' ,'Indian/Chagos' ,'Asia/Rangoon' ,'Indian/Cocos' ,'Antarctica/Davis' ,'Asia/Bangkok' ,'Asia/Ho_Chi_Minh' ,'Asia/Hovd' ,'Asia/Jakarta' ,'Asia/Krasnoyarsk' ,'Asia/Phnom_Penh' ,'Asia/Pontianak' ,'Asia/Saigon' ,'Asia/Vientiane' ,'Indian/Christmas' ,'Antarctica/Casey' ,'Asia/Brunei' ,'Asia/Choibalsan' ,'Asia/Chongqing' ,'Asia/Chungking' ,'Asia/Harbin' ,'Asia/Hong_Kong' ,'Asia/Irkutsk' ,'Asia/Kashgar' ,'Asia/Kuala_Lumpur' ,'Asia/Kuching' ,'Asia/Macao' ,'Asia/Macau' ,'Asia/Makassar' ,'Asia/Manila' ,'Asia/Shanghai' ,'Asia/Singapore' ,'Asia/Taipei' ,'Asia/Ujung_Pandang' ,'Asia/Ulaanbaatar' ,'Asia/Ulan_Bator' ,'Asia/Urumqi' ,'Australia/Perth' ,'Australia/West' ,'Australia/Eucla' ,'Asia/Dili' ,'Asia/Jayapura' ,'Asia/Pyongyang' ,'Asia/Seoul' ,'Asia/Tokyo' ,'Asia/Yakutsk' ,'Australia/Adelaide' ,'Australia/Broken_Hill' ,'Australia/Darwin' ,'Australia/North' ,'Australia/South' ,'Australia/Yancowinna' ,'Antarctica/DumontDUrville' ,'Asia/Sakhalin' ,'Asia/Vladivostok' ,'Australia/ACT' ,'Australia/Brisbane' ,'Australia/Canberra' ,'Australia/Currie' ,'Australia/Hobart' ,'Australia/Lindeman' ,'Australia/Melbourne' ,'Australia/NSW' ,'Australia/Queensland' ,'Australia/Sydney' ,'Australia/Tasmania' ,'Australia/Victoria' ,'Australia/LHI' ,'Australia/Lord_Howe' ,'Asia/Magadan' ,'Antarctica/McMurdo' ,'Antarctica/South_Pole' ,'Asia/Anadyr' ,'Asia/Kamchatka'
    );
?>
    <div class="flex flex-wrap mb-6" id="tabs">
        <div class="w-full">
            <ul wire:ignore class="tab-head flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                <li class="mr-2 mb-2 last:mr-0 flex-auto text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-white bg-blue-500"
                        onclick="changeActiveTab(event,'tab-general')" href="#general" id="#general">
                        <i class="fa fa-space-shuttle text-base mr-1"></i> General
                    </a>
                </li>
                <li class="mr-2 mb-2 last:mr-0 flex-auto text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-blue-500 bg-white dark:text-gray-300 dark:bg-gray-800"
                        onclick="changeActiveTab(event,'tab-socialLinks')" href="#socialLinks" id="#socialLinks">
                        <i class="fa fa-cog text-base mr-1"></i> Socail & Apps Links
                    </a>
                </li>
                
                <li class="mr-2 mb-2 last:mr-0 flex-auto text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-blue-500 bg-white dark:text-gray-300 dark:bg-gray-800"
                        onclick="changeActiveTab(event,'tab-search')" href="#search" id="#search">
                        <i class="fa fa-cog text-base mr-1"></i> Search Method
                    </a>
                </li>
                <li class="mr-2 mb-2 last:mr-0 flex-auto text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-blue-500 bg-white dark:text-gray-300 dark:bg-gray-800"
                        onclick="changeActiveTab(event,'tab-api')" href="#api" id="#api">
                        <i class="fa fa-cog text-base mr-1"></i> Api Keys
                    </a>
                </li>
                <li class="mr-2 mb-2 last:mr-0 flex-auto text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-blue-500 bg-white dark:text-gray-300 dark:bg-gray-800"
                        onclick="changeActiveTab(event,'tab-email')" href="#email" id="#email">
                        <i class="fa fa-cog text-base mr-1"></i> E-Mail
                    </a>
                </li>
                <li class="mr-2 mb-2 last:mr-0 flex-auto text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-blue-500 bg-white dark:text-gray-300 dark:bg-gray-800"
                        onclick="changeActiveTab(event,'tab-pushNotification')" href="#pushNotification"
                        id="#pushNotification">
                        <i class="fa fa-cog text-base mr-1"></i> Push Notification
                    </a>
                </li>
                <li class="mr-2 mb-2 last:mr-0 flex-auto text-center">
                    <a class="text-xs font-bold uppercase cursor-pointer px-5 py-3 shadow-lg rounded block leading-normal text-blue-500 bg-white dark:text-gray-300 dark:bg-gray-800"
                        onclick="changeActiveTab(event,'tab-other')" href="#other" id="#other">
                        <i class="fa fa-cog text-base mr-1"></i> Others
                    </a>
                </li>
            </ul>
            <div wire:poll
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded dark:text-gray-400 dark:bg-gray-800">
                <div class="px-4 py-5 flex-auto dark:text-gray-400 dark:bg-gray-800">
                    <div class="tab-content tab-space dark:text-gray-400 dark:bg-gray-800">
                        <div wire:ignore.self class="block" id="tab-general">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.settings.generalConfig'),'hasFile' => true]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.settings.generalConfig')),'has-file' => true]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.Site_Name'),'name' => 'site_title','value' => ''.e(config('constants.site_title') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.Site_Name')),'name' => 'site_title','value' => ''.e(config('constants.site_title') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                    <div class="w-full px-4 mb-4 md:mb-0 md:w-1/2">
                                        <div class="mb-6">
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'timezone','label' => __('crud.admin.settings.timezone')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'timezone','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.timezone'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            <div class="relative" wire:ignore>
                                                <select class="appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none dark:bg-gray-700 dark:text-gray-300" id="timezone" onclick="openDropList()" name="timezone">
                                                    
                                                    <?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option <?php if(Config::get('constants.timezone')==$item): ?> selected <?php endif; ?> value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        /* Search Input Field Background */
                                        /* .select2-search { background-color: #00f; } */
                                        /* Search Input Field */
                                        /* .select2-search input { background-color: #00f; } */
                                        /* Select List Background */
                                        /* .select2-results { background-color: #00f; } */
                                        /* .select2-container--default .select2-selection--single{
                                            background-color: #000;
                                        } */
                                    </style>

                                    

                                    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                                        <div class="mb-6">
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'site_logo','label' => __('crud.inputs.site_logo')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'site_logo','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.site_logo'))]); ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            <img class="h-20" src="<?php echo e(url('storage/'.config('constants.site_logo'))); ?>"
                                                alt="" width="">
                                            <input
                                                class="appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none dark:bg-gray-700 dark:text-gray-300"
                                                type="file" name="site_logo" value="" id="site_logo" />
                                        </div>
                                    </div>

                                    <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                                        <div class="mb-6">
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'site_icon','label' => __('crud.inputs.site_icon')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'site_icon','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.site_icon'))]); ?>
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            <img class="h-20" src="<?php echo e(url('storage/'.config('constants.site_icon'))); ?>"
                                                alt="" width="">
                                            <input
                                                class="appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none dark:bg-gray-700 dark:text-gray-300"
                                                type="file" name="site_icon" value="" id="site_icon" />
                                        </div>
                                    </div>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['space' => 'md:w-1/2','label' => __('crud.inputs.contact_number'),'name' => 'contact_number','value' => ''.e(config('constants.contact_number') ?? '').'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'md:w-1/2','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.contact_number')),'name' => 'contact_number','value' => ''.e(config('constants.contact_number') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['space' => 'md:w-1/2','label' => __('crud.inputs.sos_number'),'name' => 'sos_number','value' => ''.e(config('constants.sos_number') ?? '').'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'md:w-1/2','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.sos_number')),'name' => 'sos_number','value' => ''.e(config('constants.sos_number') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.email','data' => ['space' => 'md:w-1/2','label' => __('crud.inputs.email'),'name' => 'site_email','value' => ''.e(config('constants.site_email') ?? '').'']]); ?>
<?php $component->withName('inputs.email'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'md:w-1/2','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.email')),'name' => 'site_email','value' => ''.e(config('constants.site_email') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['space' => 'md:w-1/2','label' => __('crud.inputs.site_copyright'),'name' => 'site_copyright','value' => ''.e(config('constants.site_copyright') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'md:w-1/2','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.site_copyright')),'name' => 'site_copyright','value' => ''.e(config('constants.site_copyright') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if(config('constants.demo_mode') == "0"): ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.admin.settings.demo_mode'),'name' => 'demo_mode']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.demo_mode')),'name' => 'demo_mode']); ?>
                                        <option <?php echo e(config('constants.demo_mode') == "1" ? "selected" : ""); ?> value="1">
                                            Enabled</option>
                                        <option <?php echo e(config('constants.demo_mode') == "0" ? "selected" : ""); ?> value="0">
                                            Disabled</option>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php endif; ?>

                                    <div class="px-4 flex text-red-500 text-sm mb-3 font-semibold">
                                        * Note: Use Transparent PNG image format to get best of the site icons.
                                    </div>
                                    <div class="w-full px-4 mb-4 md:mb-0">
                                        <div class="mb-6">
                                            <button type="submit"
                                                class="right-0 float-right inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                                                type="submit"><?php echo e(__('crud.general.update')); ?></button>
                                        </div>
                                    </div>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <div wire:ignore.self class="hidden dark:text-gray-400 dark:bg-gray-800" id="tab-socialLinks">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.settings.storeSocialLinks')]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.settings.storeSocialLinks'))]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.users.name').' '.__('crud.admin.settings.store_link_android_user'),'name' => 'store_link_android_user','value' => ''.e(config('constants.store_link_android_user') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.users.name').' '.__('crud.admin.settings.store_link_android_user')),'name' => 'store_link_android_user','value' => ''.e(config('constants.store_link_android_user') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.users.name').' '.__('crud.admin.settings.version_android_user'),'name' => 'version_android_user','value' => ''.e(config('constants.version_android_user') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.users.name').' '.__('crud.admin.settings.version_android_user')),'name' => 'version_android_user','value' => ''.e(config('constants.version_android_user') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.users.name').' '.__('crud.admin.settings.store_link_ios_user'),'name' => 'store_link_ios_user','value' => ''.e(config('constants.store_link_ios_user') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.users.name').' '.__('crud.admin.settings.store_link_ios_user')),'name' => 'store_link_ios_user','value' => ''.e(config('constants.store_link_ios_user') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.users.name').' '.__('crud.admin.settings.version_ios_user'),'name' => 'version_ios_user','value' => ''.e(config('constants.version_ios_user') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.users.name').' '.__('crud.admin.settings.version_ios_user')),'name' => 'version_ios_user','value' => ''.e(config('constants.version_ios_user') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.providers.name').' '.__('crud.admin.settings.store_link_android_user'),'name' => 'store_link_android_provider','value' => ''.e(config('constants.store_link_android_provider') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.providers.name').' '.__('crud.admin.settings.store_link_android_user')),'name' => 'store_link_android_provider','value' => ''.e(config('constants.store_link_android_provider') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.providers.name').' '.__('crud.admin.settings.version_android_user'),'name' => 'version_android_provider','value' => ''.e(config('constants.version_android_provider') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.providers.name').' '.__('crud.admin.settings.version_android_user')),'name' => 'version_android_provider','value' => ''.e(config('constants.version_android_provider') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.providers.name').' '.__('crud.admin.settings.store_link_ios_user'),'name' => 'store_link_ios_provider','value' => ''.e(config('constants.store_link_ios_provider') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.providers.name').' '.__('crud.admin.settings.store_link_ios_user')),'name' => 'store_link_ios_provider','value' => ''.e(config('constants.store_link_ios_provider') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.providers.name').' '.__('crud.admin.settings.version_ios_user'),'name' => 'version_ios_provider','value' => ''.e(config('constants.version_ios_provider') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.providers.name').' '.__('crud.admin.settings.version_ios_user')),'name' => 'version_ios_provider','value' => ''.e(config('constants.version_ios_provider') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.facebook_link'),'name' => 'facebook_link','value' => ''.e(config('constants.facebook_link') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.facebook_link')),'name' => 'facebook_link','value' => ''.e(config('constants.facebook_link') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.instagram_link'),'name' => 'instagram_link','value' => ''.e(config('constants.instagram_link') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.instagram_link')),'name' => 'instagram_link','value' => ''.e(config('constants.instagram_link') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.twitter_link'),'name' => 'twitter_link','value' => ''.e(config('constants.twitter_link') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.twitter_link')),'name' => 'twitter_link','value' => ''.e(config('constants.twitter_link') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                </div>

                                
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                                        type="submit"><?php echo e(__('crud.general.update')); ?></button>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <!-- <div class="hidden dark:text-gray-400 dark:bg-gray-800" id="tab-socialConfigs">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.settings.storeSocialConfig')]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.settings.storeSocialConfig'))]); ?>
                                    <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                        
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.social_login'),'name' => 'social_login','status' => config('constants.social_login')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.social_login')),'name' => 'social_login','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.social_login'))]); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.fb_public_key'),'name' => 'fb_public_key','value' => ''.e(config('constants.fb_public_key') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.fb_public_key')),'name' => 'fb_public_key','value' => ''.e(config('constants.fb_public_key') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.password','data' => ['label' => __('crud.admin.settings.fb_secret_key'),'name' => 'fb_secret_key','value' => ''.e(config('constants.fb_secret_key') ?? '').'']]); ?>
<?php $component->withName('inputs.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.fb_secret_key')),'name' => 'fb_secret_key','value' => ''.e(config('constants.fb_secret_key') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.fb_redirect_url'),'name' => 'fb_redirect_url','value' => ''.e(config('constants.fb_redirect_url') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.fb_redirect_url')),'name' => 'fb_redirect_url','value' => ''.e(config('constants.fb_redirect_url') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.google_public_key'),'name' => 'google_public_key','value' => ''.e(config('constants.google_public_key') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.google_public_key')),'name' => 'google_public_key','value' => ''.e(config('constants.google_public_key') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.password','data' => ['label' => __('crud.admin.settings.google_secret_key'),'name' => 'google_secret_key','value' => ''.e(config('constants.google_secret_key') ?? '').'']]); ?>
<?php $component->withName('inputs.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.google_secret_key')),'name' => 'google_secret_key','value' => ''.e(config('constants.google_secret_key') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.google_redirect_url'),'name' => 'google_redirect_url','value' => ''.e(config('constants.google_redirect_url') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.google_redirect_url')),'name' => 'google_redirect_url','value' => ''.e(config('constants.google_redirect_url') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm" type="submit"><?php echo e(__('crud.general.update')); ?></button>
                                    </div>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                            -->
                        <div wire:ignore.self class="hidden dark:text-gray-400 dark:bg-gray-800" id="tab-search">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.settings.storeSearch')]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.settings.storeSearch'))]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.provider_accept_timeout'),'name' => 'provider_accept_timeout','value' => ''.e(config('constants.provider_accept_timeout') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.provider_accept_timeout')),'name' => 'provider_accept_timeout','value' => ''.e(config('constants.provider_accept_timeout') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.provider_search_radius'),'name' => 'provider_search_radius','value' => ''.e(config('constants.provider_search_radius') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.provider_search_radius')),'name' => 'provider_search_radius','value' => ''.e(config('constants.provider_search_radius') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.admin.settings.distance_map'),'name' => 'distance_map']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.distance_map')),'name' => 'distance_map']); ?>
                                        <option <?php echo e(config('constants.distance_map') == "kms" ? "selected" : ""); ?>

                                            value="kms">Kms</option>
                                        <option <?php echo e(config('constants.distance_map') == "miles" ? "selected" : ""); ?>

                                            value="miles">Miles</option>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                                        type="submit"><?php echo e(__('crud.general.update')); ?></button>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <div wire:ignore.self class="hidden dark:text-gray-400 dark:bg-gray-800" id="tab-api">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.settings.storeApi')]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.settings.storeApi'))]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.google_map_key'),'name' => 'map_key','value' => ''.e(config('constants.map_key') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.google_map_key')),'name' => 'map_key','value' => ''.e(config('constants.map_key') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.google_server_map_key'),'name' => 'server_map_key','value' => ''.e(config('constants.server_map_key') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.google_server_map_key')),'name' => 'server_map_key','value' => ''.e(config('constants.server_map_key') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                                        type="submit"><?php echo e(__('crud.general.update')); ?></button>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <div wire:ignore.self class="hidden dark:text-gray-400 dark:bg-gray-800" id="tab-email">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.settings.storeEmail')]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.settings.storeEmail'))]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.send_mail'),'name' => 'send_mail','status' => config('constants.send_mail')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.send_mail')),'name' => 'send_mail','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.send_mail'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.select','data' => ['label' => __('crud.admin.settings.mail_driver'),'name' => 'mail_driver']]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.mail_driver')),'name' => 'mail_driver']); ?>
                                        <option <?php echo e(config('constants.mail_driver') == "smtp" ? "selected" : ""); ?> value="smtp">SMTP
                                        </option>
                                        <option <?php echo e(config('constants.mail_driver') == "mailgun" ? "selected" : ""); ?> value="mailgun">
                                            Mailgun</option>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.mail_host'),'name' => 'mail_host','value' => config('constants.mail_host', '')]]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.mail_host')),'name' => 'mail_host','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.mail_host', ''))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['label' => __('crud.admin.settings.mail_port'),'name' => 'mail_port','value' => config('constants.mail_port', '')]]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.mail_port')),'name' => 'mail_port','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.mail_port', ''))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.mail_username'),'name' => 'mail_username','value' => config('constants.mail_username', '')]]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.mail_username')),'name' => 'mail_username','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.mail_username', ''))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.password','data' => ['label' => __('crud.admin.settings.mail_password'),'name' => 'mail_password','value' => config('constants.mail_password', '')]]); ?>
<?php $component->withName('inputs.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.mail_password')),'name' => 'mail_password','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.mail_password', ''))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.mail_encryption'),'name' => 'mail_encryption','value' => config('constants.mail_encryption', '')]]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.mail_encryption')),'name' => 'mail_encryption','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.mail_encryption', ''))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.mail_from_address'),'name' => 'mail_from_address','value' => config('constants.mail_from_address', '')]]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.mail_from_address')),'name' => 'mail_from_address','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.mail_from_address', ''))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                                        type="submit"><?php echo e(__('crud.general.update')); ?></button>
                                </div>
                                <div class="px-4 flex text-red-500 text-sm mb-3 font-semibold">
                                    * Change These Settings Very Carefully. These Settings Can Break Cache Your Application.
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <div wire:ignore.self class="hidden dark:text-gray-400 dark:bg-gray-800"
                            id="tab-pushNotification">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.settings.storePushNotification')]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.settings.storePushNotification'))]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.password','data' => ['label' => __('crud.admin.settings.android_push_key'),'name' => 'android_push_key','value' => config('constants.android_push_key', '')]]); ?>
<?php $component->withName('inputs.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.android_push_key')),'name' => 'android_push_key','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.android_push_key', ''))]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.password','data' => ['label' => __('crud.admin.settings.android_sender_key'),'name' => 'android_sender_key','value' => ''.e(config('constants.android_sender_key') ?? '').'']]); ?>
<?php $component->withName('inputs.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.android_sender_key')),'name' => 'android_sender_key','value' => ''.e(config('constants.android_sender_key') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                                </div>

                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                                        type="submit"><?php echo e(__('crud.general.update')); ?></button>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <div class="hidden dark:text-gray-400 dark:bg-gray-800" id="tab-other" wire:ignore.self>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'post','action' => route('admin.settings.storeOthers')]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'post','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.settings.storeOthers'))]); ?>
                                <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.rental'),'name' => 'rental','status' => config('constants.rental')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.rental')),'name' => 'rental','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.rental'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.referral'),'name' => 'referral','status' => config('constants.referral')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.referral')),'name' => 'referral','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.referral'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.outstation'),'name' => 'outstation','status' => config('constants.outstation')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.outstation')),'name' => 'outstation','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.outstation'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['label' => __('crud.admin.settings.referral_count'),'name' => 'referral_count','value' => ''.e(config('constants.referral_count') ?? '').'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.referral_count')),'name' => 'referral_count','value' => ''.e(config('constants.referral_count') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['label' => __('crud.admin.settings.referral_amount'),'name' => 'referral_amount','value' => ''.e(config('constants.referral_amount') ?? '').'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.referral_amount')),'name' => 'referral_amount','value' => ''.e(config('constants.referral_amount') ?? '').'']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.otp_verification'),'name' => 'ride_otp','status' => config('constants.ride_otp')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.otp_verification')),'name' => 'ride_otp','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.ride_otp'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.broadcast_request'),'name' => 'broadcast_request','status' => config('constants.broadcast_request')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.broadcast_request')),'name' => 'broadcast_request','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.broadcast_request'))]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.manual_request'),'name' => 'manual_request','status' => config('constants.manual_request')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.manual_request')),'name' => 'manual_request','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.manual_request'))]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.track_distance'),'name' => 'track_distance','status' => config('constants.track_distance')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.track_distance')),'name' => 'track_distance','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.track_distance'))]); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.status','data' => ['label' => __('crud.admin.settings.ride_toll'),'name' => 'ride_toll','status' => config('constants.ride_toll')]]); ?>
<?php $component->withName('inputs.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.ride_toll')),'name' => 'ride_toll','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('constants.ride_toll'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.booking_id_prefix'),'name' => 'booking_id_prefix','value' => ''.e(config('constants.booking_id_prefix') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.booking_id_prefix')),'name' => 'booking_id_prefix','value' => ''.e(config('constants.booking_id_prefix') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.number','data' => ['label' => __('crud.admin.settings.outstation_base_km'),'name' => 'outstation_base_km','value' => ''.e(config('constants.outstation_base_km') ?? '').'']]); ?>
<?php $component->withName('inputs.number'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.outstation_base_km')),'name' => 'outstation_base_km','value' => ''.e(config('constants.outstation_base_km') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['label' => __('crud.admin.settings.limit_message'),'name' => 'limit_message','value' => ''.e(config('constants.limit_message') ?? '').'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.settings.limit_message')),'name' => 'limit_message','value' => ''.e(config('constants.limit_message') ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    
                                    
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm"
                                        type="submit"><?php echo e(__('crud.general.update')); ?></button>
                                </div>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('endScripts'); ?>
        <script>
            $(document).ready(function() {
                $('#timezone').select2();
                var a = document.querySelector('#select2-timezone-container');
                a.className += ' appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none dark:bg-gray-700 dark:text-gray-300';
                $('#select2-timezone-container').click(function() {
                    var b = document.querySelector('.select2-dropdown.select2-dropdown--below');
                    b.style.top = "15px";
                    b.className += ' appearance-none w-full p-4 text-xs font-semibold leading-none bg-gray-50 rounded outline-none dark:bg-gray-700 dark:text-gray-300';
                    var c = document.querySelector('.select2-search__field');
                    c.className += ' appearance-none text-xs font-semibold leading-none bg-gray-50 rounded dark:bg-gray-700 dark:text-gray-300';
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
</div><?php /**PATH /var/www/cab/resources/views/livewire/admin/setting.blade.php ENDPATH**/ ?>