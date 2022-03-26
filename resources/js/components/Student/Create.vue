<template>
    <div class="w-25">
        <div class="mb-3 mt-3">
            <input type="text" v-model="surname" placeholder="Фамилия" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="firstname" placeholder="Имя" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" placeholder="Возраст" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="store" type="submit" value="Добавить" class="btn btn-success">
        </div>
    </div>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            surname: null,
            firstname: null,
            age: null
        }
    },
    methods: {
        store() {
            axios.post('/api/student', { surname: this.surname, firstname: this.firstname, age: this.age})
            .then( res => {
                this.$router.push({name: 'student.index'})
            })
        }
    },
    computed: {
        isDisabled() {
            return this.surname && this.firstname && this.age
        }
    }

}
</script>

<style scoped>

</style>
