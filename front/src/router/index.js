import Vue from 'vue'
import Router from 'vue-router'
import Projects from '@/components/Projects'
import ProjectList from '@/components/Projects/List'
import ProjectShow from '@/components/Projects/Show'


Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      redirect: '/projects'
    },
    {
      path: '/projects',
      component: Projects,
      children: [
        {
          path: '',
          component: ProjectList
        },
        {
          path: ':id',
          component: ProjectShow
        }
      ]
    }
  ]
})
