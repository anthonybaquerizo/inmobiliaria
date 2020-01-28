<template lang="pug" >
div.alert.p-2.alert-dismissible.border-alert-success.show(
    role="alert",
    :class="[classAlert, classBorderAlert]"
)
    button.close.p-1(type="button", data-dismiss="alert" aria-label="Close")
        span(aria-hidden="true") &times;
    h6.alert-heading(
        v-show="title !== ''"
    ) {{ title }}
    p.text-form.mb-0(
        v-if="!isArrayMessages"
    ) {{ messages }}
    ul.mb-0(
        v-else
    )
        li(
            v-for="(message, index) in messages",
            :key="index"
        ) {{ message }}

</template>

<script>
export default {
    name: 'BaseAlert',
    props: {
        title: { type: String, required: false, default: '' },
        messages: { type: [String, Array], required: true },
        type: { type: String, required: true }
    },
    computed: {
        /**
         * Devuelve la clase de alerta
         *
         * @return {String}
         */
        classAlert () {
            const alert = (this.type && this.type !== '') ? this.type : 'danger'
            return `alert-${alert}`
        },
        /**
         * Devuelve la clase del border de alerta
         *
         * @return {String}
         */
        classBorderAlert () {
            const alert = (this.type && this.type !== '') ? this.type : 'danger'
            return `border-alert-${alert}`
        },
        /**
         * Devuelve si el mensaje es array o no
         *
         * @return {Boolean}
         */
        isArrayMessages () {
            return this.messages && Array.isArray(this.messages)
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
