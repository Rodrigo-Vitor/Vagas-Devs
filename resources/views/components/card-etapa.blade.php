<style>
    .cardEtapa {
        background-color: #FFF3F3;
        width: 65vw;
        margin: 20px auto;
        padding: 10px;
    }
    .cardEtapa-title span {
        font-weight: bold;
    }
</style>

<div class="cardEtapa">
    <p class="cardEtapa-title"><span>{{ $etapa }}</span> {{ $content }}</p>
    <p class="cardEtapa-desc"> {{ $desc }} </p>
</div>