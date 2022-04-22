<template>

     <AppLayout>
         

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
     </AppLayout>

</template>

<script>

import AppLayout from "../layouts/app";

export default {
     components:
    {
        AppLayout
    }, 
    props:
    {
        posts:Object
    }
}
</script>