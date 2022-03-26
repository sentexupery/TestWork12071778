<template>
  <div v-if="student">
      <div>
          Фамилия: {{ this.student.surname }}
      </div>
      <div>
          Имя: {{ this.student.firstname }}
      </div>
      <div>
          Возраст: {{ this.student.age }}
      </div>
      <div>
          <router-link :to="{ name: 'student.edit',params: { id: student.id}}">Редактирование</router-link>
      </div>
  </div>
</template>

<script>
export default {
    name: "Show",
    data() {
        return {
            student: null
        }
    },
    mounted() {
        this.getStudent()
    },
    methods: {
        getStudent() {
            axios.get(`/api/student/${this.$route.params.id}`)
                .then( res => {
                    this.student = res.data.data
                })
        }
    }
}
</script>

<style scoped>

</style>
