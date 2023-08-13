<template>
	<div class="attributes">
	<h2>Атрибуты</h2>
	<div class="attribute" v-for="attribute in attributes" :key="attribute.id">
	<h3>{{ attribute.name }}</h3>
	<div class="attribute-value" v-if="attribute.attribute_values">
	<label class="value" v-for="value in attribute.attribute_values" :key="value.id">
	<input type="checkbox" v-model="selectedAttributes" :value="{ attribute: attribute.id, value: value.id }" />
	{{ value.name }}</label>
	</div>
	</div>
	</div>
</template>

<script>

export default {
props: {
modelValue: {
type: Array,
required: true
},
attributes: {
type: Array,
required: true
}
}, /*endprops*/
emits: [
'update:modelValue',
],
computed: {
selectedAttributes: {
get() {
return this.modelValue.slice();
}, /*endget*/
set(value) {
this.$emit('update:modelValue', value);
} /*endset*/
}
} /*endcomputed*/
}
</script>