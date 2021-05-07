<?php
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->any() as $error)
                <p> {{ $error }}</p>
            @endforeach
        </div>
    @endif
