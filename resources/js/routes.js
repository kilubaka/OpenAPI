import CategoryIndex from './components/Category/Index.vue';
import CategoryCreate from './components/Category/Create.vue';
import CategoryEdit from './components/Category/Edit.vue';

import LeaderIndex from './components/Leader/Index.vue';
import LeaderCreate from './components/Leader/Create.vue';
import LeaderEdit from './components/Leader/Edit.vue';

import ProgramIndex from './components/Program/Index.vue';
import ProgramCreate from './components/Program/Create.vue';
import ProgramEdit from './components/Program/Edit.vue';

import ScheduleIndex from './components/Schedule/Index.vue';
import ScheduleCreate from './components/Schedule/Create.vue';
import ScheduleEdit from './components/Schedule/Edit.vue';

import { createWebHistory, createRouter } from 'vue-router';

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'root',
            path: '/',
            component: CategoryIndex
        },

        {
            name: 'category',
            path: '/category',
            component: CategoryIndex
        }, {
            name: 'categoryIndex',
            path: '/category/index',
            component: CategoryIndex
        }, {
            name: 'categoryCreate',
            path: '/category/create',
            component: CategoryCreate
        }, {
            name: 'categoryEdit',
            path: '/category/edit/:id',
            component: CategoryEdit
        },

        {
            name: 'leader',
            path: '/leader',
            component: LeaderIndex
        }, {
            name: 'leaderIndex',
            path: '/leader/index',
            component: LeaderIndex
        }, {
            name: 'leaderCreate',
            path: '/leader/create',
            component: LeaderCreate
        }, {
            name: 'leaderEdit',
            path: '/leader/edit/:id',
            component: LeaderEdit
        },

        {
            name: 'program',
            path: '/program',
            component: ProgramIndex
        }, {
            name: 'programIndex',
            path: '/program/index',
            component: ProgramIndex
        }, {
            name: 'programCreate',
            path: '/program/create',
            component: ProgramCreate
        }, {
            name: 'programEdit',
            path: '/program/edit/:id',
            component: ProgramEdit
        },

        {
            name: 'schedule',
            path: '/schedule',
            component: ScheduleIndex
        }, {
            name: 'scheduleIndex',
            path: '/schedule/index',
            component: ScheduleIndex
        }, {
            name: 'scheduleCreate',
            path: '/schedule/create',
            component: ScheduleCreate
        }, {
            name: 'scheduleEdit',
            path: '/schedule/edit/:id',
            component: ScheduleEdit
        }
    ]
});
