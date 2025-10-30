const route = {
	path: "/studysign",
	meta: { requiredAuth: true },
	component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/Base.vue"),
	children: [
		{
			path: "",
			redirect: { name: "studysign-dashboard" },
		},

		{
			path: "dashboard",
			name: "studysign-dashboard",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/dashboard/index.vue"),
		},

		// history
		{
			path: "history",
			name: "studysign-history",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/history/index.vue"),
		},

		{
			path: "history/create",
			name: "studysign-history-create",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/history/crud/create.vue"),
		},

		{
			path: "history/:history/edit",
			name: "studysign-history-edit",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/history/crud/edit.vue"),
		},

		{
			path: "history/:history/show",
			name: "studysign-history-show",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/history/crud/show.vue"),
		},

		// report
		{
			path: "report",
			name: "studysign-report",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/report/index.vue"),
		},

		// submission
		{
			path: "submission",
			name: "studysign-submission",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/submission/index.vue"),
		},

		{
			path: "submission/create",
			name: "studysign-submission-create",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/submission/crud/create.vue"),
		},

		{
			path: "submission/:submission/edit",
			name: "studysign-submission-edit",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/submission/crud/edit.vue"),
		},

		{
			path: "submission/:submission/show",
			name: "studysign-submission-show",
			component: () => import(/* webpackChunkName: "studysign" */ "@modules/module-studyassign/frontend/pages/submission/crud/show.vue"),
		},
	],
};

export default route;
