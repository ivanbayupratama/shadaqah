<template>
    <div
        class="container mx-auto my-6 p-4 bg-white rounded-lg shadow-lg max-w-md"
    >
        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            Buat Kampanye Baru
        </h2>
        <form @submit.prevent="handleSubmit">
            <div class="mb-4">
                <label
                    for="title"
                    class="block text-gray-700 text-sm font-bold mb-2"
                    >Judul Kampanye</label
                >
                <input
                    type="text"
                    id="title"
                    v-model="form.title"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan Judul Kampanye"
                    required
                />
            </div>
            <div class="mb-4">
                <label
                    for="description"
                    class="block text-gray-700 text-sm font-bold mb-2"
                    >Deskripsi Kampanye</label
                >
                <textarea
                    id="description"
                    v-model="form.description"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan Deskripsi Kampanye"
                    required
                ></textarea>
            </div>
            <div class="mb-4">
                <label
                    for="image"
                    class="block text-gray-700 text-sm font-bold mb-2"
                    >URL Gambar Kampanye</label
                >
                <input
                    type="text"
                    id="image"
                    v-model="form.image"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan URL Gambar Kampanye"
                    required
                />
            </div>
            <div class="mb-4">
                <label
                    for="target"
                    class="block text-gray-700 text-sm font-bold mb-2"
                    >Target Donasi (Rp)</label
                >
                <input
                    type="number"
                    id="target"
                    v-model="form.target"
                    class="block w-full border border-gray-300 rounded-lg shadow-sm p-3 focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Contoh: 1000000"
                    required
                />
            </div>
            <button
                type="submit"
                class="w-full bg-blue-400 text-white p-3 rounded-lg shadow-lg hover:bg-blue-500 transition-colors duration-300"
            >
                Buat Kampanye
            </button>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            form: {
                title: "",
                description: "",
                image: "",
                target: "",
            },
        };
    },
    methods: {
        handleSubmit() {
            axios
                .post("/campaigns", this.form)
                .then((response) => {
                    alert("Kampanye berhasil dibuat!");
                    this.$emit("campaign-created");
                })
                .catch((error) => {
                    console.error("Terjadi kesalahan:", error);
                    alert("Terjadi kesalahan saat membuat kampanye.");
                });
        },
    },
};
</script>
