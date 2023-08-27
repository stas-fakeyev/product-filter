<template>
<div class="pagination" v-if="links.length > 3">
<ul class="page-numbers">
       <li v-for="link in links.slice(1, -1)" :key="link.label">
	   <span v-if="link.active || !link.url">{{ link.label }}</span>
          <button v-else @click="$emit('goToPage', link.url)">{{ link.label }}</button>
        </li>
</ul>
</div>
</template>

<script>
export default {
props: {
links: {
type: Array,
required: true,
}
},
emits: [
'goToPage',
],

}
</script>