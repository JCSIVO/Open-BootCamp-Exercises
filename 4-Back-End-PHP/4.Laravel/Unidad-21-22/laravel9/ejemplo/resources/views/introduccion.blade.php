<!--
    Sentencias mas importantes  
    {{--@if() @else @elseif() acaado em @endif
    @for @endfor
    @foreach @endforeach
    @while @endwhile
    @php @endphp
    @auth @endauth
    @guest @endguest

    @method('put')
    @csrf --}}

    {{-- route('name of the route', ['var' => 1]) --}}
-->

@php
    
@endphp




<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        @while ($i++ < 10)
            {{ $i }}
        @endwhile


        @for ($i = 0; $i < 10; $i++)
            {{ $i }}
        @endfor

        @if($year == date('Y'))
        <h2>Estas viendo la factura a fecha de {{ date('d/m/Y H:i',strtotime($today)) }} {{ strtotime($today) }} </h2>
        {{ time() }}
        <!-- $concetps --> 
        <table border="1" cellpadding="0" celspacing="0">
            <thead>
                <tr>
                    <th>Concepto</th>
                    <th>Precio</th>
                    <th>Imp (%)</th>
                    <th>Imp</th>
                    <th>Desc (%)</th>
                    <th>Desc</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
       
                @php
                $totalPrecio = 0;
                $totalImp = 0;
                $totalDesc = 0;
                $totalFinal = 0;
                @endphp  
                @foreach ($concepts as $c) 
                    @if ($loop->index) <!-- first, last, index-->
                        es el primero {{ $loop->index  }}
                    @endif
                    @php
                        $imp = $c['precio'] * ($c['taxes']/100);
                        $desc = $c['precio'] * ($c['discount']/100);
                        $total = $c['precio'] + $imp - $desc;
        
                        $totalPrecio += $c['precio'];
                        $totalImp += $imp;
                        $totalDesc += $desc;
                        $totalFinal += $total;
                    @endphp
                    <tr>
                        <td>
                            @if (strlen($c['concepto']) < $maxChars)
                                {{ $c['concepto'] }}
                            @else
                                @php $aux = substr($c['concepto'],0,$maxChars); @endphp
                                {{ substr($aux,0, strrpos($aux, " ")) }}
                            @endif
                        </td>
                        <td>
                            @if($c['precio'] > 0)
                                {{ $c['precio'] }} {{ $c['currency'] }}
                            @endif
                        </td>
                        <td>{{ $c['taxes'] }}</td>
                        <td>{{ $imp }}</td>
                        <td>{{ $c['discount'] }}</td>
                        <td>{{ number_format($desc,2) }}</td>
                        <td>{{ $total }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">
                        <td>{{ $totalPrecio }}</td>
                        <td>{{ $totalImp }}</td>
                        <td>{{ $totalDesc }}</td>
                        <td>{{ $totalFinal }}</td>
                    </td>
                </tr>
            </tbody>
        </table>
        @else
        <p>Estas mirando la facturaciónde un año erroneo</p>
        @endif
        <br />
        <br />


       <!-- <table border="1" cellpadding="0" celspacing="0">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>Precio</th>
                        <th>Imp (%)</th>
                        <th>Imp</th>
                        <th>Desc (%)</th>
                        <th>Desc</th>
                        <th>Total</th>
                    </tr>
                </thead>
            <tbody>
       
                @php
                    /*$totalPrecio = 0;
                    $totalImp = 0;
                     $totalDesc = 0;
                    $totalFinal = 0;
                    foreach ($concepts as $c) {
                        $imp = $c['precio'] * ($c['taxes']/100);
                        $desc = $c['precio'] * ($c['discount']/100);
                        $total = $c['precio'] + $imp - $desc;

                        $totalPrecio += $c['precio'];
                        $totalImp += $imp;
                        $totalDesc += $desc;
                        $totalFinal += $total;

                        echo "<tr>";
                            if(strlen($c['concepto']) <= $maxChars)
                                echo "<td>" . $c['concepto'] . "</td>";
                            else{
                                $auxString = substr($c['concepto'],0,$maxChars);
                                $auxSubstring = substr($auxString,0, strrpos( $auxString," "));
                                echo "<td>" . $auxSubstring . "</td>";
                            }
                            echo "<td>"; 
                                if($c['precio'] > 0)
                                    echo $c['precio'] . " " . $c['currency']; 
                            echo "</td>";
                            echo "<td>" . $c['taxes'] ."</td>";
                            echo "<td>" . $imp ."</td>";
                            echo "<td>" . $c['discount'] ."</td>";
                            echo "<td>" . ($desc != 0?$desc:'-') ."</td>";
                            echo "<td>" . $total ."</td>";
                        echo "</tr>";
                        }
                        echo "<tr>";
                            echo "<td colspan=\"3\"></td>";
                            echo "<td>" . $totalPrecio ."</td>";
                            echo "<td>" . $totalImp ."</td>";
                            echo "<td>" . $totalDesc ."</td>";
                            echo "<td>" . $totalFinal ."</td>";
                        echo "</tr>";




            /*$array = [
                1,2,3,4,5
            ];

            $imploded = implode(",",$array);
            echo implode(",", $array). "<br />";
            print_r(explode(",",$imploded));

            foreach ($array as $a) {
                echo $a . "<br />";
            }
            $variable = "Hola";
            if($variable != "Hola")
                echo "No es un saludo";
            else {
                echo "Hola de vuelta";
            }*/
            // echo $variable;
            // $holaMundo = "<b>Hola mundo</b>";
                @endphp
            </tbody>
        </table>

        {{-- $holaMundo --}}<br />
        {{--!! $holaMundo !!--}}
        {{-- Esto es un comentario --}}
    -->
    </body>
    <script>
        var concepts = JSON.parse('{{!! $json_concepts !!}}');
    </script>
</html>