
<!DOCTYPE html>
<html>

<head>
    <title>
        Mundial 2022
    </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
    <script>
    </script>
</head>

<body>
    {include file="cabezal.tpl"}
    <div class="container" >
        <ul class="nav nav-tabs" style="display: flex; flex-direction: row; justify-content: space-around; list-style-type: none;">
        {foreach from=$grupos item=grupo}
            <li class="active nav-item"><a class="nav-link" data-toggle="tab" href="#B" onclick="mostrar('{$grupo->getNombre_grupo()|upper}')">{$grupo->getNombre_grupo()|upper}</a></li>
            {* {foreach from=$grupo->getPaises() item=pais}
                <h4>{$pais->getNombre()}</h4>
            {/foreach} *}
        {/foreach} 
        </ul>
    </div>
    {foreach from=$grupos item=grupo}
    <div class="container" id="{$grupo->getNombre_grupo()|upper}">
        <h1 style="color: rgb(32, 160, 0); text-align: center;">
            GRUPO {$grupo->getNombre_grupo()|upper}
        </h1>
        <table id="tableA" class="table table-hover">
            <thead>
                <tr>
                    <th>Equipo:</th>
                    <th>Puntos</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$grupo->getPaises() item=pais}
                    <tr>
                        <td>{$pais->getNombre()}</td>     
                    </tr>
                {/foreach}
            </tbody>
        </table>

    </div>
    {/foreach} 
</body>

</html>