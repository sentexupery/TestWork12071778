import Vue from 'vue'
import VueRouter from "vue-router";


Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/students',
            component: () => import('./components/Student/Index'),
            name: 'student.index'
        },
        {
            path: '/student/create',
            component: () => import('./components/Student/Create'),
            name: 'student.create'
        },
        {
            path: '/student/:id/edit',
            component: () => import('./components/Student/Edit'),
            name: 'student.edit'
        },
        {
            path: '/student/:id',
            component: () => import('./components/Student/Show'),
            name: 'student.show'
        }
    ]
})
