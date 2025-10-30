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
	],
};

export default route;
