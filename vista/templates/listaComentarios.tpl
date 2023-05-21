<ul class="list-group list-group-flush">
    {foreach from=$comentarios item=$item }
        <li class="list-group-item">{$item['comentario']}</li>
    {/foreach}
  
</ul>