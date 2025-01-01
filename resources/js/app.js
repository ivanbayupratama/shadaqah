import { createApp } from "vue";
import Home from "./components/Home.vue";
import CampaignPage from "./components/CampaignPage.vue";
import DonationForm from "./components/DonationForm.vue"; // Import komponen DonationForm

const app = createApp({
    components: {
        Home,
        CampaignPage,
        DonationForm,
    },
});

app.component("Home", Home);
app.component("CampaignPage", CampaignPage);
app.component("DonationForm", DonationForm); // Daftarkan komponen DonationForm
app.mount("#app");
