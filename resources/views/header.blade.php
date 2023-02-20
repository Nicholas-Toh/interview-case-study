<div class="bg-amber-400 h-24 flex items-center">
    <div class="w-36 flex justify-center">
        <div class="w-16">
            <img src="{{ asset('/images/supplycart-logo.png') }}">
        </div>
    </div>
    <div class="grow">
        <input>
        <div class="w-48 flex justify-center float-right flex-col">
            <p>
                Welcome back, {{ auth()->user()->name }}!
            </p>
        </div>
    </div>
</div>
