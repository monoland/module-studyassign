const route = {
    path: "/studyassign",
    meta: { requiredAuth: true },
    component: () =>
        import(
            /* webpackChunkName: "studyassign" */ "@modules/module-studyassign/frontend/pages/Base.vue"
        ),
    children: [
        {
            path: "",
            redirect: { name: "studyassign-dashboard" },
        },

        {
            path: "dashboard",
            name: "studyassign-dashboard",
            component: () =>
                import(
                    /* webpackChunkName: "studyassign" */ "@modules/module-studyassign/frontend/pages/dashboard/index.vue"
                ),
        },
    ],
};

export default route;
