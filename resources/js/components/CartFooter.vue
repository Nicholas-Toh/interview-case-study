<script setup>
import { ref, onMounted, computed, watch } from "vue";
import { postData } from "@utils/api";

const props = defineProps({
    variationId: {
        type: Number,
    },
    quantity: {
        type: Number,
    }
});

const addToCart = async () => {
    const response = await postData({
        variation_id: props.variationId,
        quantity: props.quantity,
    });

    alert(response.message);
};


</script>

<template>
    <div class="mt-20 px-20 flex flex-row flex-wrap justify-center">
        <div @click="addToCart">
            <button>Add to Cart</button>
        </div>
    </div>
</template>
