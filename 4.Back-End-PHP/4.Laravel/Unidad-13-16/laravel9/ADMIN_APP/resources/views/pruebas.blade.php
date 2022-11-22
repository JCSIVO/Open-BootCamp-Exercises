<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        @foreach ([1,2,3,4,5,6] as $index)
            @mailer('smtp')
                @include('login')
                <p>Se está usando SMTP</p>
            @else
                <p>No se está usando SMTP</p>
            @endmailer
            <p @if ($index % 2 == 0) class="{{ $index % 2 == 0? "par":"impar" }} par" @else class="impar" @endif> Se esta usando SmTp</p>
        @endforeach
    </body>
</html>

{{-- @rightnow(1668721199); --}}

{{-- @mailer('smtp')
    Se está usando SMTP
@else
    No se está usando SMTP
@endmailer --}}
{{--
@unlessmailer('smtp')
    No se está usando SMTP
@else
    Se está usando SMTP
@endmailer
--}}

{{-- 
@disk('s3')
Se esta utilizando S3
@else
No se esta utlizando S3
@endif    
--}}
@disk('s3') Se esta utilizando S3 @else No se esta utlizando S3 @endif 