@php
$company = \App\Models\CompanyProfile::first();
$logoPath = ($company && $company->logo)
? asset('storage/' . $company->logo)
: asset('storage/company/logo-default.png');
@endphp

<img src="{{ $logoPath }}"
    alt="Logo AJ Smash Burgers"
    {{ $attributes->merge(['class' => 'object-contain']) }}>