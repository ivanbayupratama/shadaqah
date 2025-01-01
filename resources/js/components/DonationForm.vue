<template>
    <div class="container mx-auto my-6 p-4 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            Donasi untuk Kampanye: {{ campaign.title }}
        </h2>
        <form @submit.prevent="handleSubmit">
            <div class="mb-4">
                <label
                    for="amount"
                    class="block text-gray-700 text-sm font-bold mb-2"
                    >Jumlah Donasi (Rp)</label
                >
                <input
                    type="number"
                    id="amount"
                    v-model="amount"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan Jumlah Donasi"
                    required
                />
            </div>
            <button
                type="submit"
                class="w-full bg-blue-400 text-white p-3 rounded-lg shadow-lg hover:bg-blue-500 transition-colors duration-300"
            >
                Donasi
            </button>
        </form>
        <button
            @click="navigateToHomePage"
            class="w-full bg-gray-400 text-white p-3 rounded-lg shadow-lg hover:bg-gray-500 transition-colors duration-300 mt-4"
        >
            Kembali ke Halaman Utama
        </button>
    </div>
</template>

<script>
import axios from "axios";

export default {
    props: ["campaign"],
    data() {
        return {
            amount: "",
        };
    },
    methods: {
        handleSubmit() {
            axios
                .post(`/campaigns/${this.campaign.id}/donate`, {
                    amount: this.amount,
                })
                .then((response) => {
                    alert("Donasi berhasil dilakukan!");
                    this.navigateToHomePage();
                })
                .catch((error) => {
                    console.error("Terjadi kesalahan:", error);
                    alert("Terjadi kesalahan saat melakukan donasi.");
                });
        },
        navigateToHomePage() {
            window.location.href = "/";
        },
    },
};
</script>
