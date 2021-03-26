<template>
	<app-layout>
		<template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar rol
            </h2>
        </template>
		<div class="p-10">
		  <div class="md:grid md:grid-cols-3 md:gap-6">
		    <div class="md:col-span-1">
		      <div class="px-4 sm:px-0">
		        <h3 class="text-lg font-medium leading-6 text-gray-900">Editar rol</h3>
		        <p class="mt-1 text-sm text-gray-600">
		          Edita el rol y cualquier característica que desees.
		        </p>
		      </div>
		    </div>
	        <role-form :role="role" :method="method" :permissions="permissions" :selected="selected"/>
		  </div>
		</div>
	</app-layout>
</template>

<script>
	import AppLayout from '@/Layouts/AppLayout'
	import RoleForm from '@/Components/Roles/RoleForm'
	
	export default {
		props: ['role', 'permissions', 'selected', 'method'],
		components: {
			AppLayout,
			RoleForm
		}
	}
</script>
