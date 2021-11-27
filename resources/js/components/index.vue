<template>
    <div>
        <router-link :to="{name: 'book.index'}">Список</router-link>
        <router-link :to="{name: 'user.login'}">Вход</router-link>
        <router-link :to="{name: 'user.registration'}">Регистрация</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
      export default {
        name: "Index"
      }
</script>

<style scoped>

</style>
