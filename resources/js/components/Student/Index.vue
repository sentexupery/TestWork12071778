<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Изменение</th>
                <th scope="col">Удаление</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="student in students">
                <td>{{ student.id }}</td>
                <td><router-link :to="{ name: 'student.show',params: { id: student.id}}">{{ student.surname }}</router-link></td>
                <td>{{ student.firstname }}</td>
                <td>{{ student.age }}</td>
                <td>
                    <router-link :to="{ name: 'student.edit',params: { id: student.id}}" class="btn btn-success">Редактирование</router-link>
                </td>
                <td>
                    <a @click.prevent="deleteStudent(student.id)" href="#" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",
    data() {
        return {
            students: null
        }
    },
    mounted() {
        this.getStudents();
    },
    methods: {
        getStudents() {
            axios.get('/api/student')
            .then( res => {
                this.students = res.data.data
            })
        },
        deleteStudent(id) {
            axios.delete(`/api/student/${id}`)
            .then( res => {
                this.getStudents()
            })
        }

    }
}
</script>

<style scoped>

</style>
