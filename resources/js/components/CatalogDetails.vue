<script setup>
import { ref, onMounted, computed, watch } from "vue";
import { keyBy } from "@utils/array";

const props = defineProps({
    product: {
        type: Object,
    },
});

let selectedVariation = ref(null);

onMounted(() => {
    selectedVariation.value = props.product.variations[0];
});

const selectedAttributeOptions = computed(() => {
    let options = {};
    for (let option of selectVariation.attribute_options) {
        options[option.attribute_id] = option;
    }
    return options;
});

const selectVariation = (option) => {
    const selectedOptions = Object.assign({}, selectedAttributeOptions);
    selectedOptions[option.attribute_id] = option.id;

    selectedVariation = product.variations.find(
        (variation) => variation.attribute_options.every(
            (option) => selectedOptions[option.attribute_id] === option.id
        )
    );
}


</script>

<template>
    <div class="mt-20 px-20 flex flex-row flex-wrap justify-center">
        <template v-if="selectedVariation">
            <div class="w-56">
                <img :src="selectedVariation.images[0].public_path" />
            </div>
            <div class="w-56">
                <div>
                    <h1>{{ props.product.name }}</h1>
                    <h2>{{ selectedVariation.sku }}</h2>
                </div>
            </div>
            <template v-for="attribute in product.attributes">
                <div>{{ attribute.name }}</div>
                <template v-for="option in attribute.options">
                    <div class="box" @click="selectVariation(option)">{{ option.name }}</div>
                </template>
            </template>
        </template>
    </div>
</template>
