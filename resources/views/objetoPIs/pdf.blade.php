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
        Eu, <a href="#">{{$objeto->representante->nome}}</a> , RG: <u>{{$objeto->representante->rg}}</u> ,
        CPF: <u>{{$objeto->representante->cpf}}</u>, do <u>{{$objeto->representante->campus}}</u>,
        (Unidade/Campus) encaminho a esse Núcleo os documentos abaixo relacionados, a fim de dar
        início à avaliação de pertinência do <u>{{$objeto->representante->produto}}</u> (produto, serviço, projeto,etc.)
        intitulado(a) “
        ”.<br/>

    <p>
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
    </p>
    Outros Documentos:<br/></p>
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
            <th colspan="4" class="bg-white text-dark">1.2 DADOS DO INVENTOR</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td class="col-5">Nome Completo:</td>
            @isset($objeto->inventores)
            <td rowspan="3" class="bg-white text-dark">{{$objeto->inventores->nome }}</td>
            @endisset
        </tr>
        <tr>
            <td class="col-5">Sexo:</td>
            @isset($objeto->inventores)
            <td class=" bg-white text-dark">{{$objeto->inventores->sexo}}</td>
            @endisset
            <td class="col-5">Data de Nascimento:</td>
            @isset($objeto->inventores)
            <td class=" bg-white text-dark">{{$objeto->inventores->data_nascimento}}</td>
            @endisset
        </tr>
        <tr>
            <td class="col-5">Identidade::</td>
            <td class=" bg-white text-dark">{{$objeto->titulares->nome}}</td>
        </tr>
        <tr>
            <td class="col-5">Email:</td>
            <td class=" bg-white text-dark">{{$objeto->titulares->nome}}</td>
        </tr>
        <tr>
            <td class="col-5">Telefone:</td>
            <td class=" bg-white text-dark">{{$objeto->titulares->nome}}</td>
        </tr>
        <tr>
            <td class="col-5">Endereço:</td>
            <td class=" bg-white text-dark">{{$objeto->titulares->nome}}</td>
        </tr>
        </tbody>

    </table>
    <span class="small">(Preencha somente se a patente for em co-titularidade com empresa(s), órgão(s) público(s) ou
pessoa(s) física(s) com vínculo com a UEMA)</span>


</page>
</body>
</html>
