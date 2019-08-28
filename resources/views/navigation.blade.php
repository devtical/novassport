<h3 class="flex items-center font-normal text-white mb-6 text-base no-underline">
	<svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill="var(--sidebar-icon)" d="M12.26 11.74L10 14H8v2H6v2l-2 2H0v-4l8.26-8.26a6 6 0 1 1 4 4zm4.86-4.62A3 3 0 0 0 15 2a3 3 0 0 0-2.12.88l4.24 4.24z"/>
    </svg>
	<span class="sidebar-label">
		@lang('novassport::navigation.sidebar-label')
	</span>
</h3>

<ul class="list-reset mb-8">
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'novassport.authorized_apps'
        }" class="text-white ml-8 no-underline dim">
            @lang('novassport::resources.authorized_apps')
        </router-link>
    </li>

    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'oauth-my-apps'
            }
        }" class="text-white ml-8 no-underline dim">
            @lang('novassport::resources.my_apps')
        </router-link>
    </li>
</ul>
