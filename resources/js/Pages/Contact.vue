<template>
     <Head title="Contact Page" />

     <AppLayout>
     <div class='container mx-auto w-1/2 bg-blue-200 p-4 rounded mt-4'>  

        Contact Me

     </div>
                    
     </AppLayout>

</template>

<script>
import AppLayout from "../layouts/app";
import { Head } from "@inertiajs/inertia-vue3";

export default {
    components:
    {
        AppLayout, Head
    }, 
}
</script>