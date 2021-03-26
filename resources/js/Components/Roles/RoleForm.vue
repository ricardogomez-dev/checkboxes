<template>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form @submit.prevent="submit">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label class="block text-sm font-medium text-gray-700">
                  Nombre
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input v-model="form.name" type="text" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Nombre">
                </div>
              </div>
            </div>
          </div>
          <div class="bg-white px-5">
          	<p class="text-gray-800 text-lg">¿Qué puede hacer el usuario asignado a este rol?</p>
          </div>
          <div class="flex flex-wrap bg-white p-10">
	        <div class="w-52" v-for="(permission, index) in permissions">
      			<input v-model="form.permissions" :value="permission.id" type="checkbox">
		  		<label class="text-gray-800 text-md ml-3">{{ permission.name }}</label>
          	</div>
		  </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-400 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400">
              Guardar
            </button>
          </div>
        </div>
      </form>
    </div>
</template>

<script>
	export default {
		props: ['role', 'permissions', 'selected', 'method'],
		data(){
			return {
				form: {
					name: this.role.name,
					permissions: [],
					selected: this.selected
				}
			}
		},
		methods: {
			submit(){
				if(this.method === 'store')
				{
					this.$inertia.post('/roles', this.form);
				} else {
					this.$inertia.patch(`/roles/${this.role.id}`, this.form)

				}
			},
			isChecked(index){
				//  To do.
			}
		}
	}
</script>