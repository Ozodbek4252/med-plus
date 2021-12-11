<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{url('/')}}">
                    {{ __('Back Home') }}
                </a>
            </h2>
            <div>
                <a href="" class="bg-blue-500 hover:bg-blue-500 
                text-blue-700 font-semibold hover:text-white py-2 
                px-4 border border-blue-500 hover:border-transparent rounded">View Clinics</a>
                <a href="{{url('/completeaccount')}}" class="bg-transparent hover:bg-blue-500 
                text-blue-700 font-semibold hover:text-white py-2 
                px-4 border border-blue-500 hover:border-transparent rounded">Complete Account</a>
            </div>
        </div>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')
                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
