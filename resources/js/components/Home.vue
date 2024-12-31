<template>
    <div>
        <header class="text-center my-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Halaman Utama - Daftar Kampanye</h1>
            <div v-if="user">
                <button
                    @click="navigateToCampaignPage"
                    class="bg-green-500 text-white py-2 px-4 rounded-lg shadow-md hover:bg-green-600 transition-colors duration-300"
                >
                    Buat Kampanye Baru
                </button>
            </div>
        </header>
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
                    @click="navigateToDonationForm(campaign.id)"
                    class="w-full bg-blue-400 text-white p-3 rounded-lg shadow-lg hover:bg-blue-500 transition-colors duration-300"
                >
                    Donasi
                </button>
            </div>
        </div>
        <footer class="text-center my-8">
            <p>© 2025 Shadaqah</p>
        </footer>
    </div>
</template>

<script>
export default {
    props: ["campaigns", "user"],
    methods: {
        navigateToCampaignPage() {
            if (!this.user) {
                window.location.href = "/login";
            } else {
                window.location.href = "/campaign/new";
            }
        },
        navigateToDonationForm(campaignId) {
            window.location.href = `/campaigns/${campaignId}/donate`;
        },
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
