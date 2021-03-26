<template>
    <app-layout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Roles
                </h2>
                <inertia-link :href="route('roles.create')"><button class="bg-indigo-400 rounded-full px-5 py-1 text-white font-bold">Agregar</button>
                </inertia-link>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- This example requires Tailwind CSS v2.0+ --> 
                    <div class="flex flex-col">
                      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                <tr>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Rol
                                  </th>
                                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="role in roles">
                                  <td class="px-6 py-4 whitespace-nowrap">
                                    <inertia-link :href="route('roles.show', role)">
                                      <div class="flex items-center">
                                        <div class="ml-4">
                                          <div class="text-sm font-medium text-gray-900">
                                            {{ role.name }}
                                          </div>
                                        </div>
                                      </div>
                                    </inertia-link>
                                  </td>
                                  <td>
                                    <inertia-link :href="route('roles.edit', role)">
                                      <p class="text-sm text-indigo-400">Edit</p>
                                    </inertia-link>
                                  </td>
                                </tr>

                                <!-- More items... -->
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
    	props: ['roles'],
        components: {
            AppLayout,
        },
    }
</script>