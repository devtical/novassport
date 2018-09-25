<template>
    <div>
        <heading class="mb-3">Authorized Apps</heading>

        <card>
            <table class="table table-borderless mb-0" width="100%">
                <thead>
                    <tr>
                        <th class="text-left">Name</th>
                        <th class="text-left">Scopes</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="token in tokens">
                        <td style="vertical-align: middle;">
                            <strong>{{ token.client.name }}</strong>
                        </td>
                        <td style="vertical-align: middle;">
                            <span v-if="token.scopes.length > 0">
                                {{ token.scopes.join(', ') }}
                            </span>
                        </td>
                        <td style="vertical-align: middle;">
                            <a class="action-link text-danger" @click="revoke(token)">
                                Revoke
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </card>
    </div>
</template>

<script>
    export default {
        /*
         * The component's data.
         */
        data() {
            return {
                tokens: []
            };
        },

        /**
         * Prepare the component (Vue 1.x).
         */
        ready() {
            this.prepareComponent();
        },

        /**
         * Prepare the component (Vue 2.x).
         */
        mounted() {
            this.prepareComponent();
        },

        methods: {
            /**
             * Prepare the component (Vue 2.x).
             */
            prepareComponent() {
                this.getTokens();
            },

            /**
             * Get all of the authorized tokens for the user.
             */
            getTokens() {
                axios.get('/oauth/tokens')
                    .then(response => {
                        this.tokens = response.data;
                    });
            },

            /**
             * Revoke the given token.
             */
            revoke(token) {
                axios.delete('/oauth/tokens/' + token.id)
                    .then(response => {
                        this.getTokens();
                    });
            }
        }
    }
</script>

<style scoped>
    .action-link {
        cursor: pointer;
    }
</style>
