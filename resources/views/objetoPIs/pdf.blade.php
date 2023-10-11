<style>
    body {
        background: rgb(204, 204, 204);
    }

    page {
        background: white;
        display: block;
        margin: 0 auto 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
    }

    page[size="A4"] {
        width: 21cm;
        /*height: 29.7cm;*/
    }

    page[size="A4"][layout="landscape"] {
        width: 29.7cm;
        height: 21cm;
    }

    @media print {
        body, page {
            background: white;
            margin: 0;
            box-shadow: 0 0;
        }
    }

    .break {
        page-break-before: always;
    }
</style>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/bootstrap.js'])
    <title>{{$objeto->titulo}}</title>
</head>
<body>
<page size="A4" class="text-dark p-5">
    <div class="text-center">
        <img class="rounded" height="75" width="145"
             src="{{asset('images/brasao_govfed.png')}}" alt="">

        <h5>ANEXO 1</h5>
        <H5>QUESTIONÁRIO DE PATENTEABILIDADE</H5>
        <div>
            <hr>
        </div>
    </div>

    <p>Prezado Senhor Coordenador do NIT/IFAP,</p>

    <p>
        Eu, <u>{{$objeto->representante->nome}}</u> , RG: <u>{{$objeto->representante->rg}}</u> ,
        CPF: <u>{{$objeto->representante->cpf}}</u>, do <u>{{$objeto->representante->campus}}</u>,
        (Unidade/Campus) encaminho a esse Núcleo os documentos abaixo relacionados, a fim de dar
        início à avaliação de pertinência do <u>{{$objeto->representante->produto}}</u> (produto, serviço, projeto,etc.)
        intitulado(a) “
        ”.<br/>
    </p>

    <div>Relação de documentos anexados:</div>
    <div class="px-4">
        1. Relatório Descritivo<br/>
        2. Reivindicações<br/>
        3. Resumo<br/>
        4. Desenhos<br/>
        5. Publicações relacionadas ao presente invento<br/>
        6. Cópias de material de divulgação e/ou atestado de participação em eventos e/ou cópia de
        anais, onde o invento tenha sido divulgado.
    </div>
    <br/>
    <p>Outros Documentos:<br/></p>
    <br/>
    <br/>
    <br/>
    <p align="right">Macapá-AP, __________ de _____________________________ de _________ &nbsp;&nbsp;&nbsp; </p>

    <p> &nbsp;Atenciosamente,</p>
    <br/>
    <p align="center">_______________________________________________________________
        <br/>
        Assinatura do Solicitante</p>
    <br/>
    <br/>
    <h5 class="break">1 - INFORMAÇÕES DE TITULARIDADE</h5>

    <table class="table table-light border">
        <thead>
        <tr>
            <th colspan="2" class="bg-white text-dark">1.1 DADOS DO TITULAR</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="col-5">Nome da Instituição/Empresa:</td>
            <td class=" bg-white text-dark">{{$objeto->titulares->nome}}</td>
        </tr>
        <tr>
            <td class="col-5">CNPJ:</td>
            <td class=" bg-white text-dark">{{$objeto->titulares->cnpj}}</td>
        </tr>
        <tr>
            <td class="col-5">Site:</td>
            <td class=" bg-white text-dark">{{$objeto->enderecoTitular->site}}</td>
        </tr>
        <tr>
            <td class="col-5">Email:</td>
            <td class=" bg-white text-dark">{{$objeto->enderecoTitular->email}}</td>
        </tr>
        <tr>
            <td class="col-5">Telefone:</td>
            <td class=" bg-white text-dark">{{$objeto->enderecoTitular->telefone}}</td>
        </tr>
        <tr>
            <td class="col-5">Endereço:</td>
            <td class=" bg-white text-dark">
                {{$objeto->enderecoTitular->logradouro .
                ', ' . $objeto->enderecoTitular->numero .
                ', ' . $objeto->enderecoTitular->bairro .
                '. ' . $objeto->enderecoTitular->cep}}
            </td>
        </tr>
        </tbody>
    </table>
    <span class="small">(Preencha somente se a patente for em co-titularidade com empresa(s), órgão(s) público(s) ou
pessoa(s) física(s) com vínculo com a UEMA)</span>

    <br/>
    <br/>
    <br/>

    <table class="table table-light border">
        <thead>
        <tr>
            <th colspan="7" class="bg-white text-dark">1.2 DADOS DO INVENTOR</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td class="col-4">Nome Completo:</td>

            <td colspan="7" class="bg-white text-dark">{{$objeto->inventores->nome ?? '' }}</td>

        </tr>
        <tr>
            <td class="col-4">Sexo:</td>

            <td class=" bg-white text-dark">{{$objeto->inventores->sexo ?? ''}}</td>

            <td class="col-3">Data de Nascimento:</td>

            <td colspan="4" class=" bg-white text-dark">{{$objeto->inventores->data_nascimento ?? ''}}</td>

        </tr>
        <tr>
            <td class="col-4">Identidade:</td>
            <td colspan="7" class=" bg-white text-dark">{{$objeto->inventores->identidade ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">CPF:</td>
            <td colspan="6" class=" bg-white text-dark">{{$objeto->inventores->cpf ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">Qualificação:</td>
            <td colspan="6" class=" bg-white text-dark">{{$objeto->inventores->qualificacao ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">Endereço:</td>
            <td colspan="6" class=" bg-white text-dark">{{$objeto->enderecoInventor->logradouro  ?? ''}}
                {{$objeto->inventores->endereco->numero  ?? ''}}
                {{$objeto->inventores->endereco->bairro  ?? ''}}
                {{$objeto->inventores->endereco->cep  ?? ''}}
            </td>
        </tr>

        <tr>
            <td class="col-5">Instituição:</td>
            <td colspan="6" class=" bg-white text-dark">{{$objeto->inventores->instituicao ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">Tipo de vinculo com o IFAP:</td>
            <td colspan="6" class=" bg-white text-dark">{{$objeto->inventores->vinculo_ifap ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">Matrícula (IFAP):</td>
            <td class=" bg-white text-dark">{{$objeto->inventores->matricula_ifap ?? ''}}</td>

            <td class="col-5">Curso (IFAP):</td>
            <td colspan="2" class=" bg-white text-dark">{{$objeto->inventores->curso_ifap ?? ''}}</td>

            <td class="col-5">Período:</td>
            <td colspan="" class=" bg-white text-dark">{{$objeto->inventores->matricula_ifap ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">Campus (IFAP):</td>
            <td class=" bg-white text-dark">{{$objeto->inventores->campus ?? ''}}</td>

            <td class="col-5">Centro/Laboratório (IFAP):</td>
            <td colspan="4" class=" bg-white text-dark">{{$objeto->inventores->centro_ifap ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">Departamento (IFAP):</td>
            <td colspan="6" class=" bg-white text-dark">{{$objeto->inventores->vinculo_ifap ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">Email:</td>
            <td colspan="6" class=" bg-white text-dark">{{$objeto->enderecoInventor->email ?? ''}}</td>
        </tr>
        <tr>
            <td class="col-5">Telefone:</td>
            <td class=" bg-white text-dark">{{$objeto->enderecoInventor->telefone ?? ''}}</td>

            <td class="col-5">Celular:</td>
            <td colspan="6" class=" bg-white text-dark">{{$objeto->inventores->celular ?? ''}}</td>
        </tr>

        <tr>
            <td class="col-5">Link do Lattes</td>
            <td class=" bg-white text-dark">{{$objeto->inventores->link_lattes ?? ''}}</td>
        </tr>

        </tbody>

    </table>
    <span class="small">% de contribuição no presente invento.</span>

    <br/>
    <br/>
    <br/>

    <h5 class="break">2 - INFORMAÇÕES SOBRE O OBJETO DE PI</h5>

    <span class="small">(Para esta seção, se necessitar de folha adicional, identifique-a como anexo 1)</span>
    <div>2.1 . Título (utilize termos técnicos): {{$objeto->titulo}}</div>

    <div>2.2 . Palavras-chave relacionadas ao presente invento:</div>
    <div class="card">{{$objeto->palavras_chave ?? ''}}</div>


    <div>2 3 . Descreva objetivamente o campo de invenção</div>
    <span class="small">(Exemplo: novo uso do equipamento, processo para tratamento de efluentes, equipamento para..., etc.)</span>
    <div class="card">{{$objeto->campo_invencao}}</div>

    <div>2 4 . Descrição detalhada do invento</div>
    <span class="small">(Apresente seu invento com suficiência descritiva e indique, quando for o caso, a melhor forma de execução. Dependendo da
        área de invenção, descreva a composição, processo de preparação, posologia, forma de administração, efeitos adversos,
            direção do fluxo, descrição detalhada das peças, passo-a-passo do processo, etc.).</span>
    <div class="card">{{$objeto->detalhe_invento}}</div>

    <div>2 5 . Diário de laboratório</div>
    <span class="small">Importante apresentar a descrição do invento em faixas de valores – exemplo: 12ºC a 15ºC. Informe alguns exemplos de
    ensaios realizados até chegar às faixas ideais, inclusive informando os valores trabalhados e identificando a faixa preferencial
        ou ideal.</span>
    <div class="card">{{$objeto->diario_laboratorio}}</div>

    <br/>
    <br/>
    <br/>

    <h5>3. INFORMAÇÕES SOBRE O INVENTO</h5>

    <div>3.1Detalhe a inovação do presente invento</div>
    <span class="small">(Para esta seção, se necessitar de folha adicional, identifique-a como anexo 2)</span>
    <div class="card">{{$objeto->infoInvento->detalhe_invento ?? ''}}</div>

    <div>3.2 problemas que o invento resolve ou vantagens que apresenta</div>
    <span
        class="small">(Exemplo: Eficiência, Produtividade, Custo, Qualidade do produto, Redução de resíduos, etc).</span>
    <div class="card">{{$objeto->infoInvento->resolucao_vantagem ?? ''}}</div>

    <div>3.3 Compare o presente invento com a tecnologia atualmente utilizada</div>
    <span
        class="small">(Há produtos similares no mercado? Em caso positivo, quais as vantagens desta nova tecnologia?)</span>
    <div class="card">{{$objeto->infoInvento->comparacao ?? ''}}</div>

    <div>3.4 Desvantagens e/ou limitações do invento</div>
    <div class="card">{{$objeto->infoInvento->comparacao ?? ''}}</div>

    <div>3.5 Uso presente e futuro do invento</div>
    <div class="card">{{$objeto->infoInvento->comparacao ?? ''}}</div>

    <div>3.6 Na sua opinião, qual o estágio de desenvolvimento de seu invento com relação a comercialização?</div>

    <div class="form-group col-12">
        <div class="card bg-dark">

            <div class="form-check mb-3 pt-3 mx-4">
                <input type="radio" id="estagio_comercializacao1" class="form-check-input " disabled
                       @isset($objeto->infoInvento)
                           @if($objeto->infoInvento->estagio_comercializacao == "Estado embrionário") checked @endif
                    @endisset>
                <label for="estagio_comercializacao1" class="form-check-label">
                    a) Estado embrionário(Precisa muito trabalho para levá-lo ao mercado)
                </label>
            </div>

            <div class="form-check mb-3 pt-1 mx-4">
                <input type="radio" id="estagio_comercializacao2" class="form-check-input" disabled
                       @isset($objeto->infoInvento)
                           @if($objeto->infoInvento->estagio_comercializacao == "Parcialmente desenvolvido") checked @endif
                    @endisset>
                <label for="estagio_comercializacao2" class="form-check-label">
                    b) Parcialmente desenvolvido (Poderá ser levado ao mercado com um investimento razoável)
                </label>
            </div>

            <div class="form-check mb-3 pt-1 mx-4">
                <input type="radio" id="estagio_comercializacao3" class="form-check-input" disabled
                       @isset($objeto->infoInvento)
                           @if($objeto->infoInvento->estagio_comercializacao == "Desenvolvido") checked @endif
                    @endisset>
                <label for="estagio_comercializacao3" class="form-check-label">
                    c) Desenvolvido(Pode ser levado ao mercado com um mínimo investimento)
                </label>
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>

    <h5 class="break">4. ANTECEDENTES DA INVENÇÃO</h5>

    <span class="small">(Para esta seção, se necessitar de folha adicional, identifique-a como anexo 3)</span>
    <div>4.1 Como a presente invenção difere do atualmente conhecido no estado da técnica?</div>
    <span class="small">(Faça um comparativo com o presente pedido de patente de invenção)</span>
    <div class="card">{{$objeto->antecedentes->diferencial ?? ''}}</div>

    <div>4.2 Foi feita alguma busca de patentes? Em caso positivo, informe as patentes e o diferencial em relação à nova
        tecnologia ora proposta.
    </div>
    <div class="card">{{$objeto->antecedentes->diferencial_patentes ?? ''}}</div>

    <br/>
    <br/>
    <br/>

    <h5> 5.DATAS DE EVENTOS NO DESENVOLVIMENTO DO INVENTO:</h5>

    <!-- Campos do formulário -->
    <div class="row pt-sm-3 mx-3">
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="concepcao"> 1. Concepção&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </span>
                <input disabled type="date" class="form-control" id="concepcao" name="concepcao"
                       value="{{$objeto->datas->concepcao ?? ''}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="croquis_desenhos">2. Croquis e Desenhos &emsp;&emsp;&emsp;&emsp;&emsp;</span>
                <input disabled type="date" class="form-control" id="croquis_desenhos" name="croquis_desenhos"
                       value="{{$objeto->datas->croquis_desenhos ?? ''}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="primeira_descricao">3. Primeira Descrição (relato) &emsp;&emsp;</span>
                <input disabled type="date" class="form-control" id="primeira_descricao" name="primeira_descricao"
                       value="{{$objeto->datas->primeira_descricao ?? ''}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="modelo_operacao">4. Modelo (protótipo) em operação </span>
                <input disabled type="date" class="form-control" id="modelo_operacao" name="modelo_operacao"
                       value="{{$objeto->datas->modelo_operacao ?? ''}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="primeira_publicacao">5. Primeira Publicação&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                <input disabled type="date" class="form-control" id="primeira_publicacao" name="primeira_publicacao"
                       value="{{$objeto->datas->primeira_publicacao ?? ''}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="primeira_apresentacao">6. Primeira Apresentação Oral&emsp;&emsp;</span>
                <input disabled type="date" class="form-control" id="primeira_apresentacao" name="primeira_apresentacao"
                       value="{{$objeto->datas->primeira_apresentacao ?? ''}}">
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>

    <h5>6.ANTERIORIDADE E REFERÊNCIAS:</h5>

    <div class="">6.1 Anterioridade</div>
    <span class="row pt-sm-3"></span>
        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="outro_invento">1. Conhece um outro invento com característica similar?</span>
            <input disabled type="radio" class="btn-check col-lg-auto" name="outro_invento" id="outro_invento1"
                   autocomplete="off" value="Sim"
                   @isset($objeto->anterioridades)
                       @if($objeto->anterioridades->outro_invento == "Sim") checked @endif
                @endisset>
            <label class="btn btn-outline-success rounded-1" for="outro_invento1">Sim</label>

            <input disabled type="radio" class="btn-check col-lg-auto" name="outro_invento" id="outro_invento2"
                   autocomplete="off" value="Não"
                   @isset($objeto->anterioridades)
                       @if($objeto->anterioridades->outro_invento == "Não") checked @endif
                @endisset>
            <label class="btn btn-outline-danger" for="outro_invento2">Não</label>
        </div>

        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="patente_similar">2. Houve alguma patente depositada/requerida de um invento similar</span>
            <input disabled type="radio" class="btn-check col-lg-auto" name="patente_similar" id="patente_similar1"
                   autocomplete="off" value="Sim"
                   @isset($objeto->anterioridades)
                       @if($objeto->anterioridades->patente_similar == "Sim") checked @endif
                @endisset>
            <label class="btn btn-outline-success rounded-1" for="patente_similar1">Sim</label>

            <input disabled type="radio" class="btn-check col-lg-auto" name="patente_similar" id="patente_similar2"
                   autocomplete="off" value="Não"
                   @isset($objeto->anterioridades)
                       @if($objeto->anterioridades->patente_similar == "Não") checked @endif
                @endisset>
            <label class="btn btn-outline-danger" for="patente_similar2">Não</label>
        </div>

        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="relacao_bibliografica">3. Há pesquisa bibliográfica relacionada com o invento</span>
            <input disabled type="radio" class="btn-check col-lg-auto" name="relacao_bibliografica"
                   id="relacao_bibliografica1"
                   autocomplete="off" value="Sim"
                   @isset($objeto->anterioridades)
                       @if($objeto->anterioridades->relacao_bibliografica == "Sim") checked @endif
                @endisset>
            <label class="btn btn-outline-success rounded-1" for="relacao_bibliografica1">Sim</label>

            <input disabled type="radio" class="btn-check col-lg-auto" name="relacao_bibliografica"
                   id="relacao_bibliografica2"
                   autocomplete="off" value="Não"
                   @isset($objeto->anterioridades)
                       @if($objeto->anterioridades->relacao_bibliografica == "Não") checked @endif
                @endisset>
            <label class="btn btn-outline-danger" for="relacao_bibliografica2">Não</label>
        </div>

        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3"
                  id="protecao_propriedade_intelectual">4. Há alguma proteção de propriedade intelectual aplicada a esta invenção?</span>
            <input disabled type="radio" class="btn-check col-lg-auto" name="protecao_propriedade_intelectual"
                   id="protecao_propriedade_intelectual1" value="Sim" autocomplete="off"
                   @isset($objeto->anterioridades)
                       @if($objeto->anterioridades->protecao_propriedade_intelectual == "Sim") checked @endif
                @endisset>
            <label class="btn btn-outline-success rounded-1" for="protecao_propriedade_intelectual1">Sim</label>

            <input disabled type="radio" class="btn-check col-lg-auto" name="protecao_propriedade_intelectual"
                   id="protecao_propriedade_intelectual2" autocomplete="off" value="Não"
                   @isset($objeto->anterioridades)
                       @if($objeto->anterioridades->protecao_propriedade_intelectual == "Não") checked @endif
                @endisset>
            <label class="btn btn-outline-danger" for="protecao_propriedade_intelectual2">Não</label>
        </div>

        <div>
            6.2 Se 1 for afirmativo, indique as principais referências bibliográficas relacionadas ao presente invento,
            anexando, se possível, cópia:
        </div>
        <div class="card">{{$objeto->antecedentes->diferencial ?? ''}}</div>


        <div>6.3 Período de graça</div>
    <span class="row pt-sm-3"></span>
            <div class="input-group mb-3">
                <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="revelada">1. A presente invenção já foi revelada fora do IFAP?</span>
                <input disabled type="radio" class="btn-check col-lg-auto" name="revelada" id="revelada1"
                       autocomplete="off" value="Sim"
                       @isset($objeto->anterioridades)
                           @if($objeto->anterioridades->revelada == "Sim") checked @endif
                    @endisset>
                <label class="btn btn-outline-success rounded-1" for="revelada1">Sim</label>

                <input disabled type="radio" class="btn-check col-lg-auto" name="revelada" id="revelada2"
                       autocomplete="off" value="Não"
                       @isset($objeto->anterioridades)
                           @if($objeto->anterioridades->revelada == "Não") checked @endif
                    @endisset>
                <label class="btn btn-outline-danger" for="revelada2">Não</label>
            </div>

            <div class="input-group mb-3">
                <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="outra_patente">2. Esteve
                    pessoalmente envolvido em outro processo de patente?</span>
                <input disabled type="radio" class="btn-check col-lg-auto" name="outra_patente" id="outra_patente1"
                       autocomplete="off" value="Sim"
                       @isset($objeto->anterioridades)
                           @if($objeto->anterioridades->outra_patente == "Sim") checked @endif
                    @endisset>
                <label class="btn btn-outline-success rounded-1" for="outra_patente1">Sim</label>

                <input disabled type="radio" class="btn-check col-lg-auto" name="outra_patente" id="outra_patente2"
                       autocomplete="off" value="Não"
                       @isset($objeto->anterioridades)
                           @if($objeto->anterioridades->outra_patente == "Não") checked @endif
                    @endisset>
                <label class="btn btn-outline-danger" for="outra_patente2">Não</label>
            </div>

            <div class="input-group mb-3">
                <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="revelado_industria">3. O presente invento já foi revelado à indústria?</span>
                <input disabled type="radio" class="btn-check col-lg-auto" name="revelado_industria"
                       id="revelado_industria1" value="Sim" autocomplete="off"
                       @isset($objeto->anterioridades)
                           @if($objeto->anterioridades->revelado_industria == "Sim") checked @endif
                    @endisset>
                <label class="btn btn-outline-success rounded-1" for="revelado_industria1">Sim</label>

                <input disabled type="radio" class="btn-check col-lg-auto" name="revelado_industria"
                       id="revelado_industria2" autocomplete="off" value="Não"
                       @isset($objeto->anterioridades)
                           @if($objeto->anterioridades->revelado_industria == "Não") checked @endif
                    @endisset>
                <label class="btn btn-outline-danger" for="revelado_industria2">Não</label>
            </div>

            <div class="input-group mb-3">
                <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3"
                      id="interesse_comercial">4. Foi demonstrado interesse comercial?</span>
                <input disabled type="radio" class="btn-check col-lg-auto" name="interesse_comercial"
                       id="interesse_comercial1"
                       autocomplete="off" value="Sim"
                       @isset($objeto->anterioridades)
                           @if($objeto->anterioridades->interesse_comercial == "Sim") checked @endif
                    @endisset>
                <label class="btn btn-outline-success rounded-1" for="interesse_comercial1">Sim</label>

                <input disabled type="radio" class="btn-check col-lg-auto" name="interesse_comercial"
                       id="interesse_comercial2" autocomplete="off" value="Não"
                       @isset($objeto->anterioridades)
                           @if($objeto->anterioridades->interesse_comercial == "Não") checked @endif
                    @endisset>
                <label class="btn btn-outline-danger" for="interesse_comercial2">Não</label>
            </div>

            <div>6.4 Se 1 for afirmativo, informe detalhadamente, as circunstâncias e anexe cópia do trabalho.</div>
            <span class="small">(Exemplo: apresentação em conferências, publicações científicas em revistas,
                comunicações informais, patentes, normas):</span>
            <div class="card">{{$objeto->anterioridades->detalhe_revelada ?? ''}}</div>
            <span class="small">Alertamos que a divulgação de aspectos da invenção que por ventura não tenham sido
                comunicados a esta Divisão podem prejudicar a expedição da carta-patente no Brasil, assim como
                eventuais solicitações de patenteamento no Exterior.</span>

        <div>6.5 Se 2 for afirmativo, informe quando, onde, e que tipo de invento:</div>
        <div class="card">{{$objeto->anterioridades->detalhe_outra_patente ?? ''}}</div>

         <div>6.6 Se 4 for afirmativo, informe nome, contato e telefone da empresa:</div>
        <div class="card">{{$objeto->anterioridades->detalhes_interesse_comercial ?? ''}}</div>


        <br/>
        <br/>
        <br/>

        <h5 class="break">7.INVESTIMENTOS NA PESQUISA</h5>
        <div>7.1 Órgãos de Fomento Envolvidos (CNPq, CAPES, FAPEMA, etc).</div>
            <div class="card">{{$objeto->investimentos->orgaos ?? ''}}</div>

        <div>7.2 Foi feito contrato com órgão financiador ou gerido de acordo com um Termo de Confidencialidade?</div>
        <div class="row pt-sm-3">
            <div class="input-group mb-3">

                <input disabled type="radio" class="btn-check col-lg-auto" name="orgaos" id="orgaos1"
                       autocomplete="off"
                       @isset($objeto->investimentos)
                           @if($objeto->investimentos->contrato_termo == "Sim") checked @endif
                    @endisset>
                <label class="btn btn-outline-success rounded-1" for="orgaos1">Sim</label>

                <input disabled type="radio" class="btn-check col-lg-auto" name="orgaos" id="orgaos2"
                       autocomplete="off"
                       @isset($objeto->investimentos)
                           @if($objeto->investimentos->contrato_termo == "Não") checked @endif
                    @endisset>
                <label class="btn btn-outline-danger" for="orgaos2">Não</label>
            </div>
        </div>

        <div>7.3 O órgão financiador foi informado do invento?</div>
        <div class="row pt-sm-3">
            <div class="input-group mb-3">
                <input disabled type="radio" class="btn-check col-lg-auto" name="contrato_termo" id="contrato_termo1"
                       autocomplete="off"
                       @isset($objeto->investimentos)
                           @if($objeto->investimentos->foi_informado == "Sim") checked @endif
                    @endisset>
                <label class="btn btn-outline-success rounded-1" for="contrato_termo1">Sim</label>

                <input disabled type="radio" class="btn-check col-lg-auto" name="contrato_termo" id="contrato_termo2"
                       autocomplete="off"
                       @isset($objeto->investimentos)
                           @if($objeto->investimentos->foi_informado == "Não") checked @endif
                    @endisset>
                <label class="btn btn-outline-danger" for="contrato_termo2">Não</label>
        </div>
    </div>

        <div>7.4 Suporte Interno (Recurso de Pesquisa do IFAP, Unidade ou do Departamento):</div>

        <div class="row pt-sm-3">
            <div class="input-group mb-3">
                <input type="radio" class="btn-check col-lg-auto" name="foi_informado" id="foi_informado1"
                       autocomplete="off"
                       @isset($objeto->investimentos)
                           @if($objeto->investimentos->suporte_interno == "Sim") checked @endif
                    @endisset>
                <label class="btn btn-outline-success rounded-1" for="foi_informado1">Sim</label>

                <input type="radio" class="btn-check col-lg-auto" name="foi_informado" id="foi_informado2"
                       autocomplete="off"
                       @isset($objeto->investimentos)
                           @if($objeto->investimentos->suporte_interno == "Não") checked @endif
                    @endisset>
                <label class="btn btn-outline-danger" for="foi_informado2">Não</label>
            </div>
        </div>

        <br/>
        <br/>
        <br/>

        <h5> 8.TRANSFERÊNCIA DE TECNOLOGIA </h5>

        <div>8.1 Comente a potencialidade de comercialização da presente invenção.</div>
        <span class="small">(Especifique áreas de aplicação e/ou produtos que imaginas que possam utilizar esta nova tecnologia)</span>
        <div class="card">{{$objeto->transferencias->potencial_comercializacao ?? ''}}</div>

        <div> 8.2 Cite mercados ou empresas que poderiam ter interesse em conhecer esta nova tecnologia.</div>
        <div class="card"> {{$objeto->transferencias->interesses ?? ''}} </div>
</page>

</body>
</html>
