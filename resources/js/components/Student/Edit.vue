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
            <input :disabled="!isDisabled" @click.prevent="updateStudent" type="submit" value="Сохранить" class="btn btn-success">
        </div>
    </div>
</template>

<script>
export default {
    name: "Edit",
    data() {
        return {
            surname: null,
            firstname: null,
            age: null
        }
    },
    mounted() {
        this.getStudent();
    },
    methods: {
        getStudent() {
            axios.get(`/api/student/${this.$route.params.id}`)
            .then( res => {
                this.surname = res.data.data.surname
                this.firstname = res.data.data.firstname
                this.age = res.data.data.age
            })
        },
        updateStudent() {
            axios.patch(`/api/student/${this.$route.params.id}`, { surname: this.surname, firstname: this.firstname, age: this.age})
            .then( res => {
                this.$router.push({ name: 'student.show', params: {id: this.$route.params.id}})
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
