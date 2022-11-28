@section('content')
    <main class="container-fluid">
        <section class="item">
            <div class="card bg-dark ">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item list-header">Básico</li>
                        <li class="list-group-item">Aluguel <span>R$ 530,00</span></li>
                        <li class="list-group-item">Plano Telefone <span>R$ 35,00</span></li>
                        <li class="list-group-item list-header">Saúde</li>
                        <li class="list-group-item">Dentista <span>R$ 100,00</span></li>
                        <li class="list-group-item">Remédios <span>R$ 500,00</span></li>
                        <li class="list-group-item">Psicólogo <span>R$ 120,00</span></li>
                        <li class="list-group-item">Psiquiatra <span>R$ 100,00</span></li>
                        <li class="list-group-item list-header">Casa & Banho</li>
                        <li class="list-group-item">Higiene <span>R$ 70,00</span></li>
                        <li class="list-group-item list-header">Alimentação</li>
                        <li class="list-group-item">Almoco <span>R$ 66,00</span></li>
                        <li class="list-group-item list-header">Estética</li>
                        <li class="list-group-item">Cabeleireiro <span>R$ 90,00</span></li>
                        <li class="list-group-item list-header">Lazer</li>
                        <li class="list-group-item">Happy Hour <span>R$ 120,00</span></li>
                        <li class="list-group-item list-header">Streamings</li>
                        <li class="list-group-item">Spotify <span>R$ 35,00</span></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('css')
    <style>
        .item{
            width:60vh
        }
        .list-group li {
            background:#808080;
            color:aliceblue;
            display:flex;
            justify-content: space-between
        }
        .list-header{
            background-color: #FBAB7E !important;
            background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%) !important;
        }
    </style>
@endpush
@push('jquery')
    <script type="text/javascript">
        
    </script>
@endpush