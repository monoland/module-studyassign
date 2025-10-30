<template>
	<form-show
		ref="form"
		width="650"
		fetch-data
		hide-delete
		hide-edit
		with-sideinfo
	>
		<template v-slot:sideinfo>
			<v-card-text>
				<v-row dense>
					<v-col cols="12">
						<v-dialog
							v-model="dialog"
							persistent
							max-width="560"
						>
							<template v-slot:activator="{ on, attrs }">
								<v-btn
									v-bind="attrs"
									v-on="on"
									block
									depressed
									large
								>
									e-sign izin atasan
								</v-btn>
							</template>

							<v-card>
								<div class="text-overline px-4 pt-2">informasi atasan</div>

								<v-card-text class="pt-0">
									<v-row dense>
										<v-col cols="12">
											<v-text-field
												label="NIP"
												hide-details
											></v-text-field>
										</v-col>

										<v-col cols="12">
											<v-text-field
												label="Nama"
												hide-details
											></v-text-field>
										</v-col>

										<v-col cols="12">
											<v-text-field
												label="Pangkat"
												hide-details
											></v-text-field>
										</v-col>

										<v-col cols="12">
											<v-text-field
												label="Jabatan"
												hide-details
											></v-text-field>
										</v-col>
									</v-row>
								</v-card-text>

								<v-card-actions>
									<v-spacer></v-spacer>
									<v-btn
										color="grey"
										text
										@click="dialog = false"
										>Batal</v-btn
									>
									<v-btn text>Kirim</v-btn>
								</v-card-actions>
							</v-card>
						</v-dialog>
					</v-col>

					<v-col cols="6">
						<v-btn
							color="green"
							class="white--text"
							block
							depressed
							large
						>
							validasi
						</v-btn>
					</v-col>

					<v-col cols="6">
						<v-btn
							color="deep-orange"
							class="white--text"
							block
							depressed
							large
						>
							tolak
						</v-btn>
					</v-col>

					<v-col cols="12">
						<v-btn
							block
							depressed
							large
						>
							e-sign rekom pendidikan
						</v-btn>
					</v-col>

					<v-col cols="12">
						<v-btn
							color="green"
							class="white--text"
							block
							depressed
							large
						>
							verifikasi dan teruskan
						</v-btn>
					</v-col>

					<v-col cols="12">
						<v-btn
							block
							depressed
							large
						>
							e-sign izin belajar
						</v-btn>
					</v-col>
				</v-row>
			</v-card-text>
		</template>

		<template v-slot:default="{ combos: { edulevels }, record }">
			<v-card class="rounded-lg my-8">
				<div class="text-overline px-4">biodata</div>
				<v-divider></v-divider>

				<v-card-text>
					<v-row dense>
						<v-col cols="6">
							<v-text-field
								label="NIP"
								v-model="record.biodata_id"
								hide-details
							></v-text-field>
						</v-col>

						<v-col cols="6">
							<v-text-field
								label="Nama Lengkap"
								v-model="record.name"
								hide-details
							></v-text-field>
						</v-col>

						<v-col cols="6">
							<v-text-field
								label="Gol/Pangkat"
								v-model="record.section_name"
								hide-details
							></v-text-field>
						</v-col>

						<v-col cols="6">
							<v-text-field
								label="Jabatan"
								v-model="record.position_name"
								hide-details
							></v-text-field>
						</v-col>

						<v-col cols="12">
							<v-text-field
								label="Unit Kerja"
								v-model="record.workunit_name"
								hide-details
							></v-text-field>
						</v-col>
					</v-row>
				</v-card-text>

				<div class="text-overline px-4 mt-4">pendidikan</div>
				<v-divider></v-divider>

				<v-card-text>
					<v-row dense>
						<v-col cols="6">
							<v-text-field
								label="Pendidikan saat ini"
								v-model="record.education_level_name"
								hide-details
							></v-text-field>
						</v-col>

						<v-col cols="6">
							<v-select
								:items="edulevels"
								label="Pendidikan tujuan"
								v-model="record.target_edulevel_id"
								hide-details
							></v-select>
						</v-col>

						<v-col cols="12">
							<v-text-field
								label="Nama Perguruan Tinggi"
								v-model="record.college_name"
								hide-details
							></v-text-field>
						</v-col>

						<v-col cols="12">
							<v-text-field
								label="Nama Program Studi"
								v-model="record.study_program"
								hide-details
							></v-text-field>
						</v-col>
					</v-row>
				</v-card-text>

				<div class="text-overline px-4 mt-4">dokumen</div>
				<v-divider></v-divider>

				<v-card-text>
					<v-row dense>
						<v-col cols="6">
							<document-input
								label="SK CPNS"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="SK PNS"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="SK Pangkat"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="SK Jabatan"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="Ijazah Terakhir"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="Transkrip"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="SKP Tahun Terakhir"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="Akreditasi Perguruan Tinggi"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="SK Pencantuman Gelar (Opsional)"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>

						<v-col cols="6">
							<document-input
								label="Brosur Perguruan Tinggi"
								document-mode="simasten"
								document-uri="https://backend.simasten.test/document/api/filesrc"
								v-model="record.remote_uri"
								hide-details
							></document-input>
						</v-col>
					</v-row>
				</v-card-text>
			</v-card>
		</template>
	</form-show>
</template>

<script>
	export default {
		name: "studysign-submission-show",
	};
</script>
