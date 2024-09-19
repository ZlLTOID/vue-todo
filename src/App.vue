<script setup>
import EmployeesTable from './components/EmployeesTable.vue';
import EditEmployeeFormModal from './components/forms/EditEmployeeFormModal.vue';
import DeleteEmployeeFormModal from './components/forms/DeleteEmployeeFormModal.vue';
</script>

<template>
    <EmployeesTable>
      <h2>Manage <b>Employees</b></h2>
    </EmployeesTable>
	<EditEmployeeFormModal />
	<DeleteEmployeeFormModal />
</template>

<style scoped>
</style>
