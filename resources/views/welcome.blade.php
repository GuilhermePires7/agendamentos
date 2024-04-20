@extends('layouts.main')
@section('title', 'Agendamento')
@section('content')
<main>
    <div id="main-text-container">
        <h1 class="main-text">Agendamento de jogos semanais</h1>
    </div>
    @if(count($schedules) > 0)
    <table border="2px"  class="table">
        <thead>
          <tr>
            <th scope="col">DOMINGO</th>
            <th scope="col">SEGUNDA</th>
            <th scope="col">TERÇA</th>
            <th scope="col">QUARTA</th>
            <th scope="col">QUINTA</th>
            <th scope="col">SEXTA</th>
            <th scope="col">SÁBADO</th>
          </tr>
        </thead>
        <tbody>
            @foreach (['08:00 - 10:00', '10:00 - 12:00','13:00 - 15:00','15:00 - 17:00','17:00 - 19:00','19:00 - 21:00','21:00 - 23:00'] as $time)
                <tr>
                    @foreach (['domingo', 'segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado'] as $week)
                        @php
                            $found = false;
                            $name = 'meu ovo';
                        @endphp
                        @foreach ($schedules as $schedule)
                            @if ($schedule['week'] == $week && $schedule['time'] == $time)
                                @php
                                    $found = true;
                                    $name = $schedule['name'];
                                @endphp
                                @break
                            @endif
                        @endforeach
                        <td>
                            <p>{{$time}}</p>
                            <p>{{$found ? $name : '((Horário vago))'}}</p>
                        </td>
                    @endforeach
                </tr>
            @endforeach
          </tbody>

        {{-- <tbody>
           <tr>
            <td>
                <p>08:00 - 10:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>08:00 - 10:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>08:00 - 10:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>08:00 - 10:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>08:00 - 10:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>08:00 - 10:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>08:00 - 10:00</p>
                <p>Pires</p>
            </td>
          </tr>
          <tr>
            <td>
                <p>10:00 - 12:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>10:00 - 12:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>10:00 - 12:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>10:00 - 12:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>10:00 - 12:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>10:00 - 12:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>10:00 - 12:00</p>
                <p>Pires</p>
            </td>
          </tr>
          <tr>
            <td>
                <p>13:00 - 15:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>13:00 - 15:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>13:00 - 15:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>13:00 - 15:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>13:00 - 15:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>13:00 - 15:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>13:00 - 15:00</p>
                <p>Pires</p>
            </td>
          </tr>
          <tr>
            <td>
                <p>15:00 - 17:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>15:00 - 17:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>15:00 - 17:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>15:00 - 17:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>15:00 - 17:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>15:00 - 17:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>15:00 - 17:00</p>
                <p>Pires</p>
            </td>
          </tr>
          <tr>
            <td>
                <p>17:00 - 19:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>17:00 - 19:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>17:00 - 19:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>17:00 - 19:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>17:00 - 19:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>17:00 - 19:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>17:00 - 19:00</p>
                <p>Pires</p>
            </td>
          </tr>
          <tr>
            <td>
                <p>19:00 - 21:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>19:00 - 21:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>19:00 - 21:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>19:00 - 21:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>19:00 - 21:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>19:00 - 21:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>19:00 - 21:00</p>
                <p>Pires</p>
            </td>
          </tr>
          <tr>
            <td>
                <p>21:00 - 23:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>21:00 - 23:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>21:00 - 23:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>21:00 - 23:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>21:00 - 23:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>21:00 - 23:00</p>
                <p>Pires</p>
            </td>
            <td>
                <p>21:00 - 23:00</p>
                <p>Pires</p>
            </td>
          </tr>
        </tbody> --}}
      </table>
    @else
    <p>Ainda não há jogos na semana <a href="/schedules/create">Agende o seu agora mesmo</a></p>
    @endif

</main>

@endsection
