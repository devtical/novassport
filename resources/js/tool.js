Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'novassport',
            path: '/novassport',
            component: require('./components/Tool'),
        },
    ])
})
