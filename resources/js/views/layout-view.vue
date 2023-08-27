<template>
<div class="root">
<h2>Фильтр товаров</h2>
</div>
<div class="container" v-if="ready">
<categories-view v-model="selected.categories" :categories="categories" />
<attributes-view v-model="selected.attributes" :attributes="attributes" />
<products-view :products="products.data">
<template #paginator>
<paginate-view :links="products.meta.links" @goToPage="getProducts" />
</template>
</products-view>
</div>
<div v-else>Загрузка!</div>
</template>

<script>
import axios from 'axios';

import categoriesView from './categories-view.vue';
import attributesView from './attributes-view.vue';
import productsView from './products-view.vue';
import paginateView from './paginate-view.vue';

export default {
components: {
categoriesView,
attributesView,
productsView,
paginateView,
},
data() {
return {
categories: [],
selected: {
categories: [],
attributes: [],
},
attributes: [],
products: [],
ready: false,
abortController: null,
};
},

methods: {
getProducts(url = null) {
if (this.abortController){
this.abortController.abort();
}
this.abortController = new AbortController();

const config = {
params: {},
signal: this.abortController.signal,
};

 if (!url) {
 url = '/api/products';
  if (this.selected.categories.length > 0){
  config.params.categories = this.selected.categories;
  
  }
  if (this.selected.attributes.length > 0){
  config.params.attributes = this.selected.attributes.reduce((attributes, item) => {
    const { attribute, value } = item;

    if (attribute in attributes) {
        attributes[attribute].push(value);
    } else {
        attributes[attribute] = [value];
    }

    return attributes;
}, {});
  }
 }
 axios.get(url, config)
 .then(({data}) => {
 this.products = data;
 })
 .catch((e) => {
 alert(e.response ? e.response.data.message : e.message);
 document.body.appendChild(document.createElement('pre')).textContent = e.response.data.message;
 })
 .finally(() => {
 this.abortController = null;
 });
}
},

watch: {
selected: {
handler() {
this.getProducts();
},
deep: true,
}
},

created() {
Promise.all([
axios.get('api/categories'),
axios.get('api/attributes'),
axios.get('api/products'),
])
.then(([categoriesResponse, attributesResponse, productsResponse]) => {
this.categories = categoriesResponse.data.data;
this.attributes = attributesResponse.data.data;
this.products = productsResponse.data;
this.ready = true;
})
.catch((e) => {
alert(e.response ? e.response.data.message : e.message);
});
},
}
</script>