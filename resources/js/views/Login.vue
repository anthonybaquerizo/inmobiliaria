<template lang="pug" >
div.w-100.vh-100.d-flex.justify-content-center.align-items-center
    div.card.shadow.flex-grow-1
        div.card-header.bg-white.border-bottom-0
            div.text-center.border-bottom.h4.pb-3 Inicio de Sesión
        div.card-body.pb-0.pt-0
            base-alert(
                title="",
                messages="Usuario no valido",
                type="danger"
            )
            div.form-group
                label.font-weight-bold(for="username") Usuario
                div.input-group.input-group-sm
                    div.input-group-prepend
                        span.input-group-text
                            i.fa.fa-user
                    input.form-control(
                        autofocus="autofocus"
                        type="text",
                        v-model="username"
                    )
            div.form-group
                label.font-weight-bold(for="username") Contraseña
                div.input-group.input-group-sm
                    div.input-group-prepend
                        span.input-group-text
                            i.fa.fa-key
                    input.form-control(
                        autofocus="autofocus"
                        :type="typePassword",
                        v-model="password"
                    )
                    transition(
                        enter-active-class="animated fadeIn"
                        leave-active-class="animated fadeOut"
                    )
                        div.input-group-prepend.animated(
                            v-show="togglePassword"
                        )
                            button.btn.btn-light.btn-sm.border.font-italic(
                                @click="changeTypePassword()"
                            ) {{ strTypePassword }}
            div.custom-control.custom-checkbox
                input.custom-control-input#rememberMe(
                    type="checkbox"
                )
                label.custom-control-label(for="rememberMe") Recuérdame
            div.clearfix.text-center.pt-3
                button.btn.btn-primary.btn-block.rounded-pill(
                    @click="validateUser()",
                    :disabled="loading"
                )
                    span.spinner-border.spinner-border-sm(
                        role="status",
                        v-if="loading"
                    )
                        span.sr-only Loading...
                    i.fa.fa-sign-in(
                        v-else
                    )
                    |  Aceptar
            div.clearfix.text-center.mt-5
                a.btn.btn-link(href="https://www.google.com/", target="_blank") https://www.interfaza.com
</template>

<script>
import BaseAlert from '@components/BaseAlert.vue'

export default {
    name: 'Login',
    data () {
        return {
            username: '',
            password: '',
            togglePassword: false,
            typePassword: 'password',
            loading: false
        }
    },
    components: {
        BaseAlert
    },
    computed: {
        /**
         * Devuel el texto de la acción de cambiar el tipo de dato del input password
         * @return {String}
         */
        strTypePassword () {
            return (this.typePassword === 'password') ? 'Mostrar' : 'Ocultar'
        }
    },
    watch: {
        /**
         * Solo cuando el password no esta vacío se activa el "togglePassword"
         * @param {String} value
         */
        password (value) {
            this.togglePassword = (value !== '')
        }
    },
    methods: {
        /**
         * Cambia el tipo de dato del input password
         */
        changeTypePassword () {
            this.typePassword = (this.typePassword === 'password') ? 'text' : 'password'
        },
        validateUser () {
            this.loading = true
            setTimeout(() => {
                this.loading = false
                this.$router.push({ name: 'panel_path' })
            }, 5000)
        }
    }
}
</script>

<style lang="scss" scoped>
.card {
    max-width: 350px;
}
</style>
