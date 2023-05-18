import { createRouter, createWebHistory } from 'vue-router'
const routes = [
  { path: '/', component: () => import('../views/frontend/HomePage.vue') },
  { path: '/registration', component: () => import('../views/Registration.vue') },
  { path: '/login', component: () => import('../views/Login.vue') },


];

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes,
})

export default router
