<section class="container">
    <form class="d-flex bg-dark w-100" action="{{ url('/cadastro/debito') }}" method="GET">
        @csrf
        <div class="mb-2">
            <span>Título?</span> <input class="form-control bg-danger border-0" type="text" name="titulo" value=""/>
        </div>

        <div class="mb-2">
            <span>Valor</span> <input class="form-control bg-danger border-0" type="number" name="valor" value="2"/> 
        </div>

        <div class="mb-2">
            <span>Categoria</span>
            <select class="form-select bg-danger border-0" name="categoria" id="">
                <option value="1">Básico</option>
                <option value="2">Saúde</option>
                <option value="3">Alimentação</option>
                <option value="4">Higiene</option>
            </select>
        </div>

        <div class="mb-2">
            <span>Prioridade</span>
            <select class="form-select bg-danger border-0" name="prioridade" id="">
                <option value="1">Baixa</option>
                <option value="2">Média</option>
                <option value="3">Urgente</option>
            </select>
        </div>
        
        <div class="mb-2">
            <span>Vencimento</span>
            <input type="date" name="vencimento" class="form-control bg-danger border-0">
        </div>
        
        <div class="form-check mb-2">
            <label for="recorrente" class="form-check-label">Recorrente</label>
            <input type="checkbox" id="recorrente" class="form-check-input bg-danger border-0" name="recorrente" value="">
        </div>

        <div class="mb-2">
            <span>Observação</span>
            <textarea name="obs" id="" cols="30" rows="2" class="form-control bg-danger border-0"></textarea>
        </div>
        
        <div class="mb-2">
            <span>Instituição</span>
            <input type="text" name="instituicao" class="form-control bg-danger border-0"> 
        </div>
        
        <button type="submit" class="btn btn-danger">Enviar</button>
    </form>
</section>
