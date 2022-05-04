<template>
     <nav class="flex gap-x-1">
          <Link :href="route('posts')" :class="{ 'font-bold': $page.url === '/' }">List</Link>     
          <Link :href="route('contact')" :class="{ 'font-bold': $page.url === '/contact' }">Contact</Link>             
      </nav>

          <main>
              <div v-if="$page.props.flash.message" class="bg-blue-200 mt-4 text-white rounded text-center m-auto w-2/5">
              {{ $page.props.flash.message }}
              </div>    
                  
         <slot />
        </main>

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