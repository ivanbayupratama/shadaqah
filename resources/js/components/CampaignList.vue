<template>
    <div class="container mx-auto my-6 p-4 bg-white rounded-lg shadow-lg">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div
                v-for="campaign in campaigns"
                :key="campaign.id"
                class="bg-white rounded-lg shadow-lg p-4"
            >
                <img
                    :src="campaign.image"
                    alt="Campaign Image"
                    class="rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300"
                    style="max-height: 200px; width: 100%; object-fit: cover"
                />
                <h2 class="text-xl font-bold text-gray-800 mt-4">
                    {{ campaign.title }}
                </h2>
                <p class="text-gray-600">
                    Terkumpul: Rp{{
                        formatCurrency(campaign.collected_amount)
                    }}
                    dari Rp{{ formatCurrency(campaign.target_amount) }}
                </p>
                <p class="text-gray-600">Pembuat: {{ campaign.creator }}</p>
                <p class="text-gray-600">
                    {{
                        calculatePercentage(
                            campaign.collected_amount,
                            campaign.target_amount
                        )
                    }}% Terkumpul
                </p>
                <button
                    class="w-full bg-blue-400 text-white p-3 rounded-lg shadow-lg hover:bg-blue-500 transition-colors duration-300"
                >
                    Donasi
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["campaigns"],
    methods: {
        formatCurrency(amount) {
            if (!amount) {
                return "0";
            }
            return new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR",
            }).format(amount);
        },
        calculatePercentage(collected, target) {
            if (!collected || !target || target == 0) {
                return "0";
            }
            return ((collected / target) * 100).toFixed(2);
        },
    },
};
</script>
