<style scoped>
    .card {
        width: 250px;
        margin-top: 40px;
        border: 1px solid #ccc;
        padding: 10px;
    }
    .card ion-icon {
        font-size: 30px;
    }
    .card-title {
        font-weight: bold;
}
</style>

<div class="card">
    <ion-icon name="chevron-down-outline"></ion-icon>
    <p class="card-title"> {{ $title }}</p>
    <p class="card-desc">{{ $description }}</p>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>