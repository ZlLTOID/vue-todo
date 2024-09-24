<script setup>
import Button from './UI/Button.vue';
import { ref } from 'vue';
import { getEmployees } from '../services/apiService';
import { onMounted } from 'vue';

const employees = ref({});

onMounted(async () => {
	const response = await getEmployees();
	employees.value = response.data;
});

</script>

<template>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
                        <slot></slot>
					</div>
					<div class="col-sm-6">
                        <Button href="#editEmployeeModal" class="btn btn-success" text="Add New Employee" icon="&#xE147;" />
                        <Button href="#deleteEmployeeModal" class="btn btn-danger" text="Delete" icon="&#xE15C;" />
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="Employee in employees">
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>{{ Employee.name }}</td>
						<td>{{ Employee.email }}</td>
						<td>{{ Employee.address }}</td>
						<td>{{ Employee.phone }}</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
				</tbody>
			</table>
			<!-- <div class="clearfix"> -->
				<!-- <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div> -->
				<!-- <ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul> -->
			<!-- </div> -->
		</div>
	</div>        
</div>
</template>