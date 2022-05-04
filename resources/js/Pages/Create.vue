<template>
     <Head title="create Posts" />
     <AppLayout>     
            <div class='mx-auto w-3/4 container p-4 bg-blue-200 rounded mt-12'>
                <form @submit.prevent="form.post(route('posts.store'))">
                    <div class="grid grid-cols-4 gap-2">
                        <div class="">
                            <label for="">Name</label>
                            <input type="text" v-model="form.name">
                            <span v-if="errors.name" class="text-red-500">{{errors.name}}</span>
                        </div>
                         <div class="">
                            <label for="">Email</label>
                            <input type="text" v-model="form.email">
                            <span v-if="errors.email" class="text-red-500">{{errors.email}}</span>

                        </div>
                        
                    </div>
                    <div class="flex gap-2 mt-4">

                    <button type="submit" :disabled="form.processing" class="bg-green-500 text-white rounded p-1">Save</button>
                      <Link :href="route('posts')">

                    <button class="bg-gray-500 text-white rounded p-1">Cancel</button>
                      </Link>     

                    </div>
                    
                </form>
            </div>
     </AppLayout>
     

</template>

<script>

import AppLayout from "../layouts/app";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";

export default {
     components:
    {
        AppLayout, Head, Link
    },

    props:
    {
        errors:Object
    },
    setup()
    {
        const form = useForm({
            'name':'',
            'email':'',
        })
        return {form}
    }
}
</script>