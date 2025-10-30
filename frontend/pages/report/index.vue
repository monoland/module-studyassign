<template>
	<page-blank
		title="Laporan"
		data-path="studysign/api/report"
		info-title="studysign report"
		width="100%"
		fetch-data
		with-sideinfo
	>
		<template v-slot:sideinfo></template>

		<template v-slot:default>
			<v-card
				flat
				tile
				v-html="render"
			></v-card>
		</template>
	</page-blank>
</template>

<script>
	export default {
		name: "allowance-report",

		data: () => ({
			render: null,
		}),

		methods: {
			getReportView(store) {
				this.render = null;

				store
					.$http(`presence/api/report/${this.report.value}`, {
						method: "GET",
						params: {
							date_current: this.dateCurrent,
							month_current: this.monthCurrent,
							year_current: this.yearCurrent,
							type: this.report.value,
							biodata: this.biodataCurrent ? this.biodataCurrent.value : null,
							workunit: this.workunit ? this.workunit.value : null,
						},
					})
					.then((response) => {
						this.render = response;
					});
			},

			getReportAsXLS(store) {
				store
					.$http(`presence/api/report/${this.report.value}/export-xls`, {
						method: "GET",
						params: {
							date_current: this.dateCurrent,
							month_current: this.monthCurrent,
							year_current: this.yearCurrent,
							type: this.report.value,
							biodata: this.biodataCurrent ? this.biodataCurrent.value : null,
							workunit: this.workunit ? this.workunit.value : null,
						},
						responseType: "blob",
					})
					.then((response) => {
						const blob = new Blob([response], {
							type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
						});
						const link = document.createElement("a");
						link.href = URL.createObjectURL(blob);
						link.download = "report_" + this.report.value + ".xlsx";
						link.click();
						URL.revokeObjectURL(link.href);
						store.loader.state = false;
					});
			},

			getReportAsPDF(store) {
				store
					.$http(`presence/api/report/${this.report.value}/export-pdf`, {
						method: "GET",
						params: {
							date_current: this.dateCurrent,
							month_current: this.monthCurrent,
							year_current: this.yearCurrent,
							type: this.report.value,
							biodata: this.biodataCurrent ? this.biodataCurrent.value : null,
							workunit: this.workunit ? this.workunit.value : null,
						},
						responseType: "blob",
					})
					.then((response) => {
						const blob = new Blob([response], {
							type: "application/pdf",
						});
						const link = document.createElement("a");
						link.href = URL.createObjectURL(blob);
						link.download = "report_" + this.report.value + ".pdf";
						link.click();
						URL.revokeObjectURL(link.href);
						store.loader.state = false;
					});
			},
		},
	};
</script>
