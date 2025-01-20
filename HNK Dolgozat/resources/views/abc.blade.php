    @php
        if($result->currentPage() == 1){
            $sv = 1;
        } 
        else{
            $sv = ($result->currentPage()-$sv)*100+1;
        }
    @endphp
    @extends('layout')
    @section('content')
        <main class="container py-3 px-5">
            <section>
                <h1>Települések betűrendben</h1>
                <div class="d-flex justify-content-center">
                    <ul class="pagination pagination-sm d-flex flex-wrap justify-content-center">
                        @foreach ($abc as $row)
                            <li class="page-item @if ($row->Betu == $default) active @endif">
                                <a class="page-link" href="/abc/{{$row->Betu}}">{{$row->Betu}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <th>#</th>
                                <th>Helység</th>
                                <th>Jogállás</th>
                                <th>Vármegye</th>
                                <th>Járás</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $row)
                                <tr>
                                    <td class="text-center">{{$sv++}}</td>
                                    <td><a href="/telepules/{{$row->id}}">{{$row->helyseg}}</a></td>
                                    <td>{{$row->jogallas}}</td>
                                    @if ($row->jogallas == 'főváros' || $row->jogallas == 'fővárosi kerület')
                                        <td>{{$row->megye}}</td>
                                        <td>{{$row->jaras}}</td>
                                    @else
                                        <td>{{$row->megye}} vármegye</td>
                                        <td>{{$row->jaras}} járás</td>
                                    @endif              
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$result->links('pagination::bootstrap-4')}}
            </section>
        </main>
    @endsection