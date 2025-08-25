<div>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<!-- Total DSPs Card -->
				<div class="bg-white rounded-lg shadow-md p-6">
						<div class="flex items-center">
								<div class="p-3 rounded-full bg-blue-100">
										<svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
														d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
												</path>
										</svg>
								</div>
								<div class="ml-4">
										<h3 class="text-lg font-medium text-gray-900">Total DSPs</h3>
										<p class="text-3xl font-bold text-gray-900">{{ $totalDSPs }}</p>
								</div>
						</div>
				</div>

				<div class="bg-white rounded-lg shadow-md p-6">
						<div class="flex items-center">
								<div class="p-3 rounded-full bg-blue-100">
										<svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
														d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
												</path>
										</svg>
								</div>
								<div class="ml-4">
										<h3 class="text-lg font-medium text-gray-900">Total DTCs</h3>
										<p class="text-3xl font-bold text-gray-900">{{ $totalDTCs }}</p>
								</div>
						</div>
				</div>

				<div class="bg-white rounded-lg shadow-md p-6">
						<div class="flex items-center">
								<div class="p-3 rounded-full bg-blue-100">
										<svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
														d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
												</path>
										</svg>
								</div>
								<div class="ml-4">
										<h3 class="text-lg font-medium text-gray-900">Total Users</h3>
										<p class="text-3xl font-bold text-gray-900">{{ $totalUsers }}</p>
								</div>
						</div>
				</div>

				<!-- Total Questionnaires Card -->
				<div class="bg-white rounded-lg shadow-md p-6">
						<div class="flex items-center">
								<div class="p-3 rounded-full bg-green-100">
										<svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
												xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
														d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
												</path>
										</svg>
								</div>
								<div class="ml-4">
										<h3 class="text-lg font-medium text-gray-900">Questionnaires Answered</h3>
										<p class="text-3xl font-bold text-gray-900">{{ $totalQuestionnaires }}</p>
								</div>
						</div>
				</div>

		</div>
		<!-- Line Chart Card (full-width) -->
		<div class="mt-6 bg-white rounded-lg shadow-md p-6">
				<h3 class="text-lg font-medium text-gray-900 mb-4">Assessments Per Month</h3>
				<canvas id="assessmentsChart" height="120"></canvas>
		</div>
</div>
<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
		const ctx = document.getElementById('assessmentsChart').getContext('2d');
		new Chart(ctx, {
				type: 'line',
				data: {
						labels: @json($assessmentMonths), // ["2025-08-20", "2025-08-21", ...]
						datasets: [{
								label: 'Assessments',
								data: @json($assessmentCounts), // [5, 12, 9, ...]
								borderColor: 'rgb(37, 99, 235)',
								backgroundColor: 'rgba(37, 99, 235, 0.2)',
								tension: 0,
								fill: true,
								pointRadius: 5,
								pointHoverRadius: 7
						}]
				},
				options: {
						responsive: true,
						plugins: {
								legend: {
										display: false
								}
						},
						scales: {
								x: {
										title: {
												display: true,
												text: 'Months of the Year'
										}
								},
								y: {
										beginAtZero: true,
										title: {
												display: true,
												text: 'Assessment Responses'
										}
								}
						}
				}
		});
</script>
