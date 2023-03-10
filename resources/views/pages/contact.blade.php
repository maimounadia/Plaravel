@inject('nomObjet', 'App\Utilities\GetWeekend')

@extends("base", [
    'titre' => 'Page Contact',
    'page_contact' => '',
    ])

@section('vitrine')
    <h3>Page Contact b  bigua woooo</h3>
   
    {{ $nomObjet->getWeek()}}

    @push('message_js')
        <script src="js/index.js"></script>
    @endpush
@endsection