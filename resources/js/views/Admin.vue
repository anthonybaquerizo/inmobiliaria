<template lang="pug">
div.w-100.h-100.d-flex.flex-column.align-items-start
    admin-menu
    main.w-100.h-100.d-flex.p-2
        router-view
</template>

<script>
import AdminMenu from '@components/AdminMenu.vue'
import AdminFooter from '@components/AdminFooter.vue'

export default {
    name: 'Admin',
    components: {
        AdminMenu,
        AdminFooter
    }
}
</script>

<style lang="scss" scoped>

</style>
