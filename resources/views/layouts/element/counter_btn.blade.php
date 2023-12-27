<style>
    #counterBtn {
        position: absolute;
        right: 0px;
        top: 2px;
    }
</style>
<div aria-label="First group" class="btn-group btn-group-sm me-2" id="counterBtn" role="group">
    <button class="btn btn-primary" onclick="minus()" type="button"><i class="fa-solid fa-minus"></i></button>
    <button class="btn" id="orderValue" type="button">0</button>
    <button class="btn btn-primary" onclick="add()" type="button"><i class="fa-solid fa-plus"></i></button>
</div>

<script src="{{ asset('js/counter_btn.js') }}"></script>
