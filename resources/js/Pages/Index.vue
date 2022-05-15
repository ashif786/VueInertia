<template>
     <Head title="Home Page" />
     <AppLayout>        

        <div class='container mx-auto w-1/2 bg-blue-200 p-4 rounded mt-4'>  
        <Link :href="route('posts.create')">
        <button class="bg-gray-800 rounded text-white p-1 mb-4">Add Record</button>
        </Link>     
    <span> {{ myVar }}</span>
    <button v-on:click='hellowrl'>click</button>
        <table class="table w-full">
                    <thead>
                        <tr class='border'>
                            <th class='border'>Id#</th>
                            <th class='border'>Name</th>
                            <th class='border'>Email</th>
                            <th class='border'>Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in posts" :key="user.id">
                            <td class='border'>{{user.id}} </td>
                            <td class='border'>{{user.name}} </td>
                            <td class='border'>{{user.email}} </td>
                            <td class='border'>
                                <button class="bg-red-600 text-white rounded p-1" @click="destroy(user.id)" type="button">Delete</button>
                            </td>
                        
                            
                        </tr>
                    </tbody>
                </table>
        </div>
     </AppLayout>

</template>

<script>

import AppLayout from "../layouts/app";
import { Head, Link } from "@inertiajs/inertia-vue3";
import {Inertia} from "@inertiajs/inertia";

export default {
     components:
    {
        AppLayout, Head, Link
    }, 
  
    props:
    {
        posts:Object
    },
      setup()
    {
        const destroy = (id) => {

            if(confirm('are you sure?'))
            {
                Inertia.delete(route('posts.destroy', id))
            }

        }
            return {destroy}

    },
   data() {
        return {
            myVar: 'ashif',
        }
    },

    methods: {
         hellowrl()
        {
            alert('yes');
        }
    }
}
</script>