@extends('master')

@section('homeActive', 'class=active')

@section('content')
<!-- TODO - Fix background image -->

    <div class="backgroundText">
        <h1>Embrace your inner chef</h1>
        <div class="reviewButtonContainer">
            <a class="reviewButton" href="reviews">Check reviews!</a>
        </div>
    </div>

<script src="https://unpkg.com/popmotion/dist/popmotion.global.min.js"></script>
<script>
    const container = popmotion.styler(document.querySelector('.reviewButtonContainer'));
    popmotion.tween({
        from: {
            scale: .7,
            opacity: 0
        },
        to: {
            scale: 1,
            opacity: 1
        },
        duration: 750
    })
        .start(container.set);
</script>

@endsection
