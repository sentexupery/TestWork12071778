<template>
    <div class="p-5">
        <router-link :to="{ name: 'student.index' }">Студенты</router-link>
        <router-link :to="{ name: 'student.create' }">Добавить</router-link>
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
