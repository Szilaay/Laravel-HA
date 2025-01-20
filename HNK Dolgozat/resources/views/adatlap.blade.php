    @extends('layout')
    @section('content')
        <main class="container py-3 px-5">
            <section>
                <h1>{{$result->helyseg}}</h1>
                <table class="table table-striped table-bordered" style="width: 25rem;">
                    <tr>
                        <th>Jogállás</th>
                        <td>{{$result->jogallas}}</td>
                    </tr>
                    @if ($result->jogallas == 'főváros' || $result->jogallas == 'fővárosi kerület')
                    <tr>
                        <th>Vármegye</th>
                        <td>{{$result->megye}} vármegye</td>
                    </tr>
                    <tr>
                        <th>Járás</th>
                        <td>{{$result->jaras}} járás</td>
                    </tr>
                    @else
                    <tr>
                        <th>Vármegye</th>
                        <td>{{$result->megye}} vármegye</td>
                    </tr>
                    <tr>
                        <th>Járás</th>
                        <td>{{$result->jaras}} járás</td>
                    </tr>
                    @endif 
                    <tr>
                        <th>Terület</th>
                        <td>{{number_format($result->terulet,0,',',' ')}} ha</td>
                    </tr>
                    <tr>
                        <th>Népesség</th>
                        <td>{{number_format($result->nepesseg,0,',',' ')}} fő</td>
                    </tr>
                    <tr>
                        <th>Lakások száma</th>
                        <td>{{number_format($result->lakas,0,',',' ')}} darab</td>
                    </tr>  
                </table>
                <div>
                    <ul class="pagination">
                      <li class="page-item @if ($result->id == $first->id) disabled @endif">
                        <a class="page-link" href="@if (isset($prev))/telepules/{{$prev->id}}@endif">Előző</a>
                      </li>
                      <li class="page-item @if ($result->id == $last->id) disabled @endif">
                        <a class="page-link" href="@if (isset($next))/telepules/{{$next->id}}@endif">Következő</a>
                      </li>
                    </ul>
                </div>
            </section> 
        </main> 
    @endsection