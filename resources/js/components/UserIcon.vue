<template>
    <div class="relative">
        <img
            v-if="user.provider === 'google'"
            :src="user.avatar"
            alt="User Avatar"
            class="rounded-full w-10 h-10"
        />
        <img
            v-else
            src="/path/to/default/avatar.png"
            alt="User Avatar"
            class="rounded-full w-10 h-10"
        />
    </div>
</template>

<script>
export default {
    props: ["user"],
};
</script>
