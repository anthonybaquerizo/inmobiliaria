<template lang="pug">
nav.w-100.navbar.navbar-expand-lg.navbar-light.bg-light.p-0.border
    a.btn.btn-sm.btn-transparent.navbar-brand(href="#") Navbar
    button.navbar-toggler(
        type="button",
        data-toggle="collapse",
        data-target="#navbarSupportedContent",
        aria-controls="navbarSupportedContent",
        aria-expanded="false",
        aria-label="Toggle navigation"
    )
        span.navbar-toggler-icon
    div.collapse.navbar-collapse#navbarSupportedContent
        ul.navbar-nav.mr-auto
            li.nav-item.active
                a.btn.btn-sm.btn-transparent.nav-link(href="#") Home
            li.nav-item.dropdown
                a.btn.btn-sm.btn-transparent.nav-link.dropdown-toggle#navbarDropdown(
                    role="button",
                    data-toggle="dropdown",
                    aria-haspopup="true",
                    aria-expanded="false",
                    href="#"
                ) Sub nivel
                div.dropdown-menu(aria-labelledby="navbarDropdown")
                    a.dropdown-item(href="#") Action
                    a.dropdown-item.dropdown#ddd(href="#") eq23
                        div.dropdown-menu(aria-labelledby="ddd")
                            a.dropdown-item(href="#") Action 3
        div.dropdown
            a.btn.btn-transparent.btn-sm.dropdown-toggle.ml-2#navbarDropdownAdmin(
                href="#"
                data-toggle="dropdown",
                aria-haspopup="true",
                aria-expanded="false"
            )
                i.fa.fa-user
                |  Adminsitrador
                div.dropdown-menu.dropdown-menu-right(aria-labelledby="navbarDropdownAdmin")
                    a.dropdown-item(href="#") Configuración
                    router-link.dropdown-item(
                        :to="{ name: 'user_create_path' }"
                    ) Usuario
                    div.dropdown-divider
                    a.dropdown-item(href="#") Salir
</template>

<script>
export default {
    name: 'Menu'
}
</script>
