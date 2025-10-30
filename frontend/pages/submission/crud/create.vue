<template>
	<form-create>
		<template v-slot:default="{ record }">
			<v-card class="rounded-lg my-8">
				<v-card-title class="overline py-2">Permohonan</v-card-title>

				<v-divider></v-divider>

				<v-card-text>
					<v-row dense>
						<v-col cols="12">
							<v-text-field
								label="name"
								v-model="record.name"
								hide-details
							></v-text-field>
						</v-col>
					</v-row>
				</v-card-text>
			</v-card>
		</template>
	</form-create>
</template>

<script>
	export default {
		name: "studysign-submission-create",
	};
</script>
