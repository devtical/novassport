Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'novassport.authorized_apps',
            path: '/novassport/authorized-apps',
            component: require('./components/AuthorizedApps'),
        },
    ])
})
