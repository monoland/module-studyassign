<template>
	<page-home slug="dashboard">
		<template v-slot:default="{ theme }">
			{{ theme }}
		</template>
	</page-home>
</template>

<script>
	export default {
		name: "studyassign-dashboard",

		methods: {},
	};
</script>
