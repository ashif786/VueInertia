<template>
     <Head title="Contact Page" />

     <AppLayout>
     <div class='container mx-auto w-1/2 bg-blue-200 p-4 rounded mt-4'>  

        Contact Me
          <Link href="test">
        <button class="bg-red-400 rounded text-white p-1">clickMe</button>
          </Link> 

          <!-- <Link :href="route('test')">
        <button class="bg-red-400 rounded text-white p-1">clickMe</button>
          </Link>      -->



     </div>
                    
     </AppLayout>

</template>

<script>
import AppLayout from "../layouts/app";
import { Head } from "@inertiajs/inertia-vue3";
import {Link} from "@inertiajs/inertia-vue3";


export default {
    components:
    {
        AppLayout, Head, Link
    }, 
}
</script>