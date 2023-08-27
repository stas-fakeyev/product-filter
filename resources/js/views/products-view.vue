<template>
<div class="products" v-if="products.length > 0">
<h2>Товары</h2>
<div class="product" v-for="product in products" :key="product.id">
<p>{{ product.name }}</p>
</div>
<slot name="paginator" />
</div>
<div v-else>
Товаров не найдено
</div>
</template>

<script>
export default {
props: {
products: {
type: Array,
required: true,
}
},

}
</script>