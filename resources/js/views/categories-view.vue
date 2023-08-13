<template>
	<div class="categories">
	<h2>Категории</h2>
		<label v-for="category in categories" :key="category.id">
	<input type="checkbox" :value="category.id" v-model="selectedCategories" />{{ category.name }}
	</label>
	</div>
</template>

<script>
export default {
props: {
modelValue: {
type: Array,
required: true, 
},
categories: {
type: Array,
required: true,
},
},
emits: [
'update:modelValue',
],
computed: {
selectedCategories: {
get() {
return this.modelValue.slice();
}, /*endget*/
set(value) {
this.$emit('update:modelValue', value);
} /*endset*/
},
},
}
</script>