<template>
     <div class="flex gap-x-1">
          <Link :href="route('posts')" :class="{ 'font-bold': $page.url === '/' }">Link</Link>     
          <Link :href="route('contact')" :class="{ 'font-bold': $page.url === '/contact' }">Contact</Link>           
         <slot />
          </div>

</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
export default {
    components:
    {
        Link
    }, 
}
</script>