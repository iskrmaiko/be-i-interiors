{include file='header.tpl'}

<div class="container">
<main class="grid2">
      {foreach from=$livingrooms item=image}
        <a href="/livingroom.php?key={$image.key}"> <img src="{$image.img}" alt="Sample photo"></a>
      {/foreach}      
</main>
</div>


{include file='footer.tpl'}