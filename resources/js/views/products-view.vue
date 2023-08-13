<template>
<div class="products" v-if="products.data.length > 0">
<h2>Товары</h2>
<div class="product" v-for="product in products.data" :key="product.id">
<p>{{ product.name }}</p>
</div>
<div class="pagination" v-if="products.meta.links.length > 3">
<ul class="page-numbers">
       <li v-for="link in products.meta.links.slice(1, -1)" :key="link.label">
	   <span v-if="link.active || !link.url">{{ link.label }}</span>
          <button v-else @click="$emit('goToPage', link.url)">{{ link.label }}</button>
        </li>
</ul>
</div>
</div>
<div v-else>
Товаров не найдено
</div>
</template>

<script>
export default {
props: {
products: {
type: Object,
required: true,
}
},

emits: [
'goToPage',
],

}
</script>