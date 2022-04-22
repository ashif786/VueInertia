<template>

         <div class="flex gap-x-1">
          <Link href="/">Link</Link>         
          <Link href="/contact">Contact</Link>
          </div>

<div class='container mx-auto w-1/2 bg-blue-200 p-4 rounded mt-4'>  
 <table class="table w-full">
            <thead>
                <tr class='border'>
                    <th class='border'>Id#</th>
                    <th class='border'>Name</th>
                    <th class='border'>Email</th>
                     
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in posts" :key="user.id">
                    <td class='border'>{{user.id}} </td>
                    <td class='border'>{{user.name}} </td>
                    <td class='border'>{{user.email}} </td>
                   
                     
                </tr>
            </tbody>
        </table>
</div>
</template>

<script>


import {Link} from "@inertiajs/inertia-vue3";
export default {
    components:
    {
        Link
    },
    props:
    {
        posts:Object
    }
}
</script>